<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 */
class M_trx_program extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  function insert($data)
  {
    return $this->db->insert("trx_program", $data);
  }

  function update($data, $id)
  {
    return $this->db->update("trx_program", $data, array('id' => $id));
  }

  function delete($id)
  {
	return $this->db->delete("trx_program", array('id' => $id));
  }

  public function getAll()
  {
    $this->db->select("id, b.nama as program, c.nama as ind_program, a.ksatu, a.kdua, a.ktiga");
    $this->db->from('trx_program a');
    $this->db->join('program b', 'b.id=a.program_id');
    $this->db->join('indikator_sasaran c', 'c.id=a.indikator_id');
    $query = $this->db->get();
    if ($query->num_rows() > 0){
	    return $query->result();
    } else {
      return false;
    }
  }

  public function getAllById($id)
  {
    $this->db->select("distinct(b.id), b.nama as nama_indikator");
    $this->db->from("trx_program a");
    $this->db->join('indikator_sasaran b', 'b.id=a.indikator_id');
    $this->db->where('a.user_id', $id);
    $query = $this->db->get();
    if ($query->num_rows() > 0){
	    return $query->result();
    } else {
      return false;
    }
  }

}

?>

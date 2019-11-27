<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 */
class M_output extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  function insert($data)
  {
    return $this->db->insert("output", $data);
  }

  function update($data, $id)
  {
    return $this->db->update("output", $data, array('id' => $id));
  }

  function delete($id)
  {
	return $this->db->delete("output", array('id' => $id));
  }

  function getByKegId($id)
  {
    $this->db->select("id, tolak_ukur as nama_output");
    $this->db->from("indikator_kegiatan"); 
    $this->db->where("kegiatan_id", $id);
    $query = $this->db->get();
    if ($query->num_rows() > 0){
	    return $query->result();
    } else {
      return false;
    }
  }

  public function edit()
  {

  }

}

?>

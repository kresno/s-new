<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 */
class M_indikatorsasaran extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  function insert($data)
  {
    return $this->db->insert("indikator_sasaran", $data);
  }

  function update($data, $id)
  {
    return $this->db->update("indikator_sasaran", $data, array('id' => $id));
  }

  function delete($id)
  {
	return $this->db->delete("indikator_sasaran", array('id' => $id));
  }

  public function getAll()
  {
    $this->db->select("id, nama");
    $this->db->from("indikator_sasaran");
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

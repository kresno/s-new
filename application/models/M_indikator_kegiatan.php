<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 */
class M_indikator_kegiatan extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  function insert($data)
  {
    return $this->db->insert("indikator_kegiatan", $data);
  }

  function update($data, $id)
  {
    return $this->db->update("indikator_kegiatan", $data, array('id' => $id));
  }

  function delete($id)
  {
	return $this->db->delete("indikator_kegiatan", array('id' => $id));
  }

  public function getAll()
  {
    $this->db->select("id, nama");
    $this->db->from("indikator_kegiatan");
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

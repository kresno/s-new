<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 */
class M_kegiatan extends CI_Model
{

  function __construct()
  {
    parent::__construct();

  }

  function insert($data)
  {
    return $this->db->insert("kegiatan", $data);
  }

  function update($data, $id)
  {
    return $this->db->update("kegiatan", $data, array('id' => $id));
  }

  function delete($id)
  {
	return $this->db->delete("kegiatan", array('id' => $id));
  }

  public function getAllById($id)
  {
    $this->db->select("a.id, a.nama as nama_kegiatan, b.nama as nama_indikator");
    $this->db->from("kegiatan a");
    $this->db->join("indikator_sasaran b", "a.indikator_id=b.id");
    $this->db->where('a.user_id', $id);
    $query = $this->db->get();
    if ($query->num_rows() > 0){
	    return $query->result();
    } else {
      return false;
    }
  }

  public function getById($id)
  { 
    $this->db->select("id, nama");
    $this->db->from("kegiatan");
    $this->db->where("id", $id);
    $query = $this->db->get();
    if ($query->num_rows() > 0){
	    return $query->result();
    } else {
      return false;
    }
  }

  public function getOutputById($id)
  {
    $this->db->select("id, tolak_ukur, satuan, ksatu, rsatu, kdua, rdua, ktiga, rtiga, kempat, rempat, klima, rlima, kenam, renam, ktujuh, rtujuh, ket");
    $this->db->from("indikator_kegiatan");
    $this->db->where("kegiatan_id", $id);
    $query = $this->db->get();
    if ($query->num_rows() > 0){
	    return $query->result();
    } else {
      return false;
    }
  }

  public function createOutput($data)
  {
    return $this->db->insert("indikator_kegiatan", $data);
  }

  public function edit()
  {

  }

}

?>

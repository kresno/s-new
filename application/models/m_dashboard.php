<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 */
class M_dashboard extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  public function getCountProgram($id)
  {
    $this->db->select("count(a.program_id) as count");
    $this->db->from("trx_program a");
    $this->db->where('a.user_id', $id);
    $this->db->group_by("a.program_id");
    $query = $this->db->get();
    if ($query->num_rows() > 0){
	    return $query->result();
    } else {
      return false;
    }
  }

  public function getCountIndikator($id)
  {
    $this->db->select("count(a.indikator_id) as count");
    $this->db->from("trx_program a");
    $this->db->where('a.user_id', $id);
    $this->db->group_by("a.indikator_id");
    $query = $this->db->get();
    if ($query->num_rows() > 0){
	    return $query->result();
    } else {
      return false;
    } 
  }

  public function getCountKegiatan($id)
  {
    $this->db->select("count(a.id) as count");
    $this->db->from("kegiatan a");
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

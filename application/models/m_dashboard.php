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
    $this->db->select("count(distinct(program_id)) as count");
    $this->db->from("trx_program");
    $this->db->where('user_id', $id);
    $query = $this->db->get();
    if ($query->num_rows() > 0){
	    return $query->result();
    } else {
      return false;
    }
  }

  public function getCountIndikator($id)
  {
    $this->db->select("count(distinct(indikator_id)) as count");
    $this->db->from("trx_program a");
    $this->db->where('user_id', $id);
    $query = $this->db->get();
    if ($query->num_rows() > 0){
	    return $query->result();
    } else {
      return false;
    } 
  }

  public function getCountKegiatan($id)
  {
    $this->db->select("count(distinct(id)) as count");
    $this->db->from("kegiatan");
    $this->db->where('user_id', $id);
    $query = $this->db->get();
    if ($query->num_rows() > 0){
	    return $query->result();
    } else {
      return false;
    } 
  }


}

?>

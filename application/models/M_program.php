<?php
/**
 *
 */
class M_program extends CI_Model
{

  function __construct()
  {
  }

  function insert($data)
  {
    return $this->db->insert("program", $data);
  }

  function update($data, $id)
  {
    return $this->db->update("program", $data, array('id' => $id));
  }

  function delete($id)
  {
	return $this->db->delete("program", array('id' => $id));
  }

  public function getAllById($id)
  {
    $this->db->select("a.id, c.nama as is_nama, b.nama as nama, a.ksatu as ksatu, a.kdua as kdua, a.ktiga as ktiga");
    $this->db->from("trx_program a");
    $this->db->join("program b", "a.program_id=b.id");
    $this->db->join("indikator_sasaran c", "c.id=a.indikator_id");
    $this->db->where("a.user_id", $id);
    $query = $this->db->get();
    if ($query->num_rows() > 0){
	    return $query->result();
    } else {
      return false;
    }
  }
}

?>
<?php
/**
 *
 */
class M_kegiatan extends CI_Model
{

  function __construct()
  {
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
    $this->db->select("a.id, a.nama as nama_kegiatan, b.nama as nama_program");
    $this->db->from("kegiatan a");
    $this->db->join("program b", "a.trxprogram_id=b.id");
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

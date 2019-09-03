<?php
/**
 *
 */
class M_laporan extends CI_Model
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

}

?>

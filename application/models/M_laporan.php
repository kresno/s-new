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

}

?>

<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 */
class M_laporan extends CI_Model
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


  function get_all_laporan($id)
  {
    $sql = "SELECT a.`id` AS id_keg, e.nama as nama_user,
                        c.`tolak_ukur` AS tolak_ukur, c.`satuan` AS satuan, c.`ksatu` AS ksatu, c.`rsatu` AS rsatu, c.`kdua` AS kdua, c.`rdua` AS rdua,
                        c.`ktiga` AS ktiga, c.`rtiga` AS rtiga, c.`klima` AS klima, c.`rlima` AS rlima, c.`kempat` AS kempat, c.`rempat` AS rempat,
                        c.`kenam` AS kenam, c.`renam` AS renam, c.`ktujuh` AS ktujuh, c.`rtujuh` AS rtujuh, c.`id` AS ind_id
                        FROM kegiatan a
                        JOIN trx_program b ON a.`trxprogram_id`=b.`id`
                        JOIN indikator_kegiatan c ON c.`kegiatan_id`=a.`id`
                        JOIN program d ON d.`id`=b.`program_id`
                        join users e on e.id=b.user_id
                        WHERE b.`user_id`=$id
                        order by a.id";

    $sql_two = "SELECT a.id as id_keg, a.nama as nama_keg, c.id as id_prog
                        from kegiatan a
                        join trx_program b ON a.`trxprogram_id`=b.`id`
                        JOIN program c ON c.`id`=b.`program_id`
                        where b.user_id=$id";
    
    $sql_three = "SELECT b.id AS id_prog, b.nama AS nama_prog, b.kode as kode
                        FROM trx_program a
                        JOIN program b ON b.`id`=a.`program_id`
                        WHERE a.user_id=$id";

    $sql_four = "SELECT d.`id` AS id_prog, AVG(b.ksatu) AS avg_ksatu, SUM(b.`rsatu`) AS sum_rsatu, AVG(b.kdua) AS avg_kdua, SUM(b.`rdua`) AS sum_rdua, AVG(b.ktiga) AS avg_ktiga, SUM(b.`rtiga`) AS sum_rtiga,
                AVG(b.kempat) AS avg_kempat, SUM(b.`rempat`) AS sum_rempat, AVG(b.klima) AS avg_klima, SUM(b.`rlima`) AS sum_rlima,
                AVG(b.kenam) AS avg_kenam, SUM(b.`renam`) AS sum_renam, AVG(b.ktujuh) AS avg_ktujuh, SUM(b.`rtujuh`) AS sum_rtujuh
                FROM kegiatan a
                JOIN indikator_kegiatan b ON b.`kegiatan_id`=a.`id`
                JOIN trx_program c ON c.`id`=a.`trxprogram_id`
                JOIN program d ON d.`id`=c.`program_id`
                WHERE c.`user_id`=$id
                GROUP BY c.`id`";
  }

  public function edit()
  {

  }
}

?>

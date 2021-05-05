<?php
header('Content-Type: application/json');
include dirname(dirname(__FILE__)) . '/db/Db.class.php';
$db = new Db();
$limit = isset($_GET['limit']) ? (int) $_GET['limit'] : 0;
$nis = isset($_GET['nis']) ? $_GET['nis'] : '';
$nama = isset($_GET['nama']) ? $_GET['nama'] : '';
$jk = isset($_GET['jk']) ? $_GET['jk'] : '';
$alamat = isset($_GET['alamat']) ? $_GET['alamat'] : '';
$lahir = isset($_GET['lahir']) ? $_GET['lahir'] : '';

$sql_limit = '';
if (!empty($limit)) {

    $sql_limit = ' LIMIT 0,' . $limit;
}
$sql_nis = '';
if (!empty($nis)) {
    $sql_nis = ' WHERE nis = \'' . $nis . '\' ';
}

$sql_nama = '';
if (!empty($nama)) {
    $sql_nama = ' WHERE nama LIKE \'%' . $nama . '%\' ';
}

$sql_jk = '';
if (!empty($jk)) {
    $sql_jk = ' WHERE jeniskelamin = \'' . $jk . '\'';
}

$sql_alamat = '';
if (!empty($alamat)) {
    $sql_alamat = ' WHERE alamat LIKE \'%' . $alamat . '%\' ';
}

$sql_lahir = '';
if (!empty($lahir)) {
    $sql_lahir = ' WHERE tempat_lahir LIKE \'%' . $lahir . '%\' ';
}

$cat_list = $db->query('SELECT nis,nama,jeniskelamin,tempat_lahir,tanggal_lahir,alamat,telepon,foto,date_time FROM siswa' . $sql_nis . '' . $sql_nama . ' ' . $sql_jk . ' ' . $sql_alamat . ' ' . $sql_lahir . ' ' . $sql_limit);
$arr = array();
$arr['info'] = 'success';
$arr['num'] = count($cat_list);
$arr['result'] = $cat_list;
echo json_encode($arr);

<?php
header('Content-Type: application/json');
include dirname(dirname(__FILE__)) . '/db/Db.class.php';
$db = new Db();
$limit = isset($_GET['limit']) ? (int) $_GET['limit'] : 0;
$sql_limit = '';
if (!empty($limit)) {
    $sql_limit = ' LIMIT 0,' . $limit;
}

$cat_list = $db->query('SELECT nis,nama,jeniskelamin,tempat_lahir,tanggal_lahir,alamat,telepon,foto,date_time FROM siswa' . $sql_limit);
$arr = array();
$arr['info'] = 'success';
$arr['num'] = count($cat_list);
$arr['result'] = $cat_list;
echo json_encode($arr);

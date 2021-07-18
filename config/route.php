<?php
$modul = (@$_GET['m'] ?: '');
switch ($modul) {
    case 'home':
        include CONTROL. 'index.php';
        break;
    default:
        include CONTROL . 'index.php';
        break;
}

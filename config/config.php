<?php

$server = 'db';
$user = 'root';
$password = '';
$nama_database = 'db_bljr';

const AUTHOR = 'Khofifah Amanda';
const NIM = '2041720119';

$sambung = mysqli_connect($server, $user, $password, $nama_database);
if (!$sambung) {
    die('Ada masalah koneksi ke database: ' . mysqli_connect_error());
}

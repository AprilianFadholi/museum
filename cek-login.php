<?php 
session_start();

//jika session username belum dibuat, atau session username kosong
if (!isset($_SESSION['no_anggota']) || empty($_SESSION['no_anggota'])) {
	//redirect ke halaman login
	header('location:index.php');
}
?>
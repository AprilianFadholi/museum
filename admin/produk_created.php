<?php
session_start();
if(isset($_SESSION['name']))
{
if(!$_SESSION['name']=='admin')
{
header("Location:login.php?id=You are not authorised to access this page unless you are administrator of this website");
}
}
else
{
header("Location:login.php?id=You are not authorised to access this page unless you are administrator of this website");
}
?>
<?php


$nampro=$_POST['nampro'];
$ida=$_POST['ida'];
$hrg=$_POST['harga'];
$stk=$_POST['stk'];



?>
<?php
include 'config.php';
?>

<?php
$qry=mysql_query("INSERT INTO produk(produk,id_anggota,harga,stok)VALUES('$nampro','$ida','$hrg','$stk')", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
?><script language="javascript">
			alert("produk Sukses Di Buat!!");
			document.location="create_produk.php?id=viewall";
			</script><?
}
?>

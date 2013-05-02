

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
$name=$_FILES['image']['name'];
$tmp=$_FILES['image']['tmp_name'];
$err=$_FILES['image']['error'];
if($err==0)
{
move_uploaded_file($tmp, $name);
}
$cat=$_POST['category'];
$tit=$_POST['title'];
$img=$_FILES["image"]["name"];
$cont=$_POST['contents'];
?>
<?php
include 'config.php';
?>

<?php
$qry=mysql_query("INSERT INTO articles(title,image,contents,category)VALUES('$tit','$img','$cont','$cat')", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
?><script language="javascript">
			alert("Artikel Sukses Di Buat!!");
			document.location="index.php";
			</script><?
}
?>

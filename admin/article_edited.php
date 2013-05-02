

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
include 'config.php';
?>
<?php
$id=$_POST['id'];
$cat=$_POST['category'];
$tit=$_POST['title'];
$img=$_FILES["image"]["name"];
$cont=$_POST['contents'];
?>

<?php
if($img)
{

$name=$_FILES['image']['name'];
$tmp=$_FILES['image']['tmp_name'];
$err=$_FILES['image']['error'];
if($err==0)
{
move_uploaded_file($tmp, $name);
}

$qry=mysql_query("UPDATE articles SET image='$img' WHERE id='$id'", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
}
?>

<?php

$qry=mysql_query("UPDATE articles SET category='$cat',title='$tit',contents='$cont' WHERE id='$id'", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
?><script language="javascript">
			alert("Artikel Sukses Di Update!!");
			document.location="index.php";
			</script><?
}

?>

<a href=index.php>Go back to Admin Panel</a>
</div>
</div>
</body>
</html>
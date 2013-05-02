<?


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


include 'config.php';

include'header.php';
include'main.php';



?>
<html><head><title>index</title></head>
<body>


<table border="1"  align="center">
<tr>
<td><li><a href="new_category.php"  ><img src="images/kategori.png" align="center" />Buat Kategori Posting</a></li></td>
<td><li><a href=remove_category.php align="center" ><img src="images/remove.png"/>Hapus Kategori Posting</a></li></td>

</tr>
<tr>
<td><li><a href=all_articles.php?id=viewall align="center" ><img src="images/post.png" />Lihat Semua posting</a></li></td>
<td><li><a href=create_new.php align="center" ><img src="images/newpost.png" />Buat post Baru</a></li></td>

</tr>



</table> 
</body>
</html>

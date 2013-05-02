
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
include 'header.php';
include"main.php";
?>
<div class="right_content">            
        
               
     <h2>Artikel</h2>
<div id="left">

<b>Articles by Category</b>
<ul>
<?php
$qry=mysql_query("SELECT * FROM category ", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
/* Fetching data from the field "title" */
while($row=mysql_fetch_array($qry))
{
echo "<li><a href=all_articles.php?cat=".$row['category'].">".$row['category']."</a></li>";
}
?>
</ul>
</div>
<div id="right">

    <?php
if(isset($_GET['id'])=="viewall")
{
$qry=mysql_query("SELECT * FROM articles order by articles.id DESC ", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
echo "<table>";
/* mengambil data dr field "title" */
while($row=mysql_fetch_array($qry))
{
echo "<tr>";
echo "<td><a href=articles.php?id=".$row['id'].">".$row['title']."</a></td>";
echo "<td><a href=edit_article.php?id=".$row['id'].">edit</a></td>";
echo "<td><a href=deleting_article.php?id=".$row['id'].">delete</a></td>";
echo "</tr>";
}
echo "</table>";
}
?>
  <?php
if(isset($_GET['cat']))
{
$cat=$_GET['cat'];


$qry=mysql_query("SELECT * FROM articles WHERE category='$cat' order by articles.id DESC", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
echo "<table>";
while($row=mysql_fetch_array($qry))
{
//menampilkan data field;
echo "<tr>";
echo "<td><a href=articles.php?id=".$row['id'].">".$row['title']."</a></td>";
echo "<td><a href=edit_article.php?id=".$row['id'].">edit</a></td>";
echo "<td><a href=deleting_article.php?id=".$row['id'].">delete</a></td>";
echo "</tr>";
}
echo "</table>";
}
?>
</div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
	 </div>

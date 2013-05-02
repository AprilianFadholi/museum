

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
include 'main.php';
?>
<body>
<?php
$qry=mysql_query("SELECT * FROM category", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
?>
<div class="right_content">            
        
               
     <h2>edit Post</h2>

 <div class="form">
<form action="article_created.php" method="post" enctype="multipart/form-data" name="form1" id="form1" class="niceform">
   <fieldset>

<dt><label for="title">Kategori</label></dt>
                    
                <dd> <select size="1" name="category" id="category" size="50">
                               
                           
                     

<?php
while($row=mysql_fetch_array($qry))
{
echo "<option value='".$row['category']."'>".$row['category']."</option>";
}
?>
  
</select>
</dd>
<dl>
<dt><label for="title">Judul</label></dt>
<dd><input type="text" name="title" id="title" value="" size="50" /></dd>
</dl>
<dl>
<dt><label for="title">Gambar</label></dt> 

<dd><input type="file" name="image" id="image" /></dd>
</dl>

<label for="contents"></label>
<textarea name="contents" id="contents" cols="125" rows="35" ></textarea>
<dl>
<dt><p align="center"></dt>
<dd><input type="submit" name="Submit" id="Submit" value="Submit" /><dd>
</dl>
</form>
       
		 </div>

      
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
	 </div>

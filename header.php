<?php
include 'config.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Museum Vredeburg</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.slidepanel.setup.js"></script>
<script type="text/javascript" src="scripts/jquery.cycle.min.js"></script>
<script type="text/javascript" src="scripts/jquery.cycle.setup.js"></script>
</head>
<body>

<!-- ####################################################################################################### -->
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <h1>Museum Vredeburg</h1>
      <p>Yogyakarta</p>
    </div>
    <div id="topnav">
      <ul>
        <li><? 
                if (isset($_SESSION)) $status = "<a href=show.php>Home</a>"; 
                else $status = "<a href=index.php>Home</a>"; 
                echo $status;  
                ?></li>
        
        
        <li><a href="articles.php">Artikel</a></li>
        <li class="last"><a href="#">Galery</a></li>
		
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>

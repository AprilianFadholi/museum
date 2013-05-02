<?php 

// Connect to the database
require('config.php'); 

// Set username and password variables for this script
$no = mysql_real_escape_string($_POST["no"]);
$pass = mysql_real_escape_string($_POST["pass"]); 

// Make sure the username and password match, selecting all the client's
// data from the database if it does. Store the data into $clientdata
$clientdata = mysql_query("SELECT * FROM anggota WHERE no_anggota='$no' and password='$pass'")
 or die (mysql_error());

// Put the $clientdata query into an array we can work with
$data = mysql_fetch_array($clientdata, MYSQL_ASSOC);

// If the username and password matched, we should have one entry in our
// $clientdata array. If not, we should have 0. So, we can use a simple
// if/else statement
if(mysql_num_rows($clientdata) == 1){
	// Start a new blank session. This will assign the user's server
	// with a session with an idividual ID
	session_start();

	// With our session started, we can assign variables for a logged
	// in user to use until they log out.
	$_SESSION['no_anggota'] = $no;
	$_SESSION['nama'] = $data['nama'];
	$_SESSION['no_anggota'] = $data['no_anggota'];
	$_SESSION['alamat'] = $data['alamat'];
	$_SESSION['tanggal_bergabung'] = $data['tanggal_bergabung'];
	$_SESSION['tgl_lahir'] = $data['tgl_lahir'];
	$_SESSION['tempat_lahir'] = $data['tempat_lahir'];
	$_SESSION['Kontak'] = $data['Kontak'];
	$_SESSION['produk'] = $data['produk'];
	

	// Redirect ke halaman muka
	header('Location: acc.php');
}else{
?><script language="javascript">
			alert("username dan password tidak cocok!!");
			document.location="index.php";
			</script><?
}
?>

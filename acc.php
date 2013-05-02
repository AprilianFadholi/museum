<?php


include "userheader.php";
include "main.php";
// Let's also make sure the user is logged in at all
// If the PHP $_SESSION[] array is not (!) set
if(!isset($_SESSION['no_anggota'])){
    //Then redirect them to the login page
    header( 'Location: index.php' );
}


	

	 


		  

echo "<td><h2> " . $_SESSION['nama'] .  "</h2></td><br />" ;
echo "<table border='1'>";
echo " <tr>";
echo "<td>No anggota </td>";
echo" <td>" . $_SESSION['no_anggota'] .  "</td><br />" ;
echo " </tr>";
echo " <tr>";
echo "<td>Alamat </td>";
echo" <td>" . $_SESSION['alamat'] .  "</td><br />" ;
echo " </tr>";
echo " <tr>";
echo "<td>Bergabung</td>";
echo" <td>" . $_SESSION['tanggal_bergabung'] .  "</td><br />" ;
echo " </tr>";
echo " <tr>";
echo " <tr>";
echo "<td>Tempat Lahir </td>";
echo" <td>" . $_SESSION['tempat_lahir'] .  "</td><br />" ;
echo " </tr>";
echo "<td>Tanggal Lahir </td>";
echo" <td>" . $_SESSION['tgl_lahir'] .  "</td><br />" ;
echo " </tr>";
echo " <tr>";
echo "<td>Kontak</td>";
echo" <td>" . $_SESSION['Kontak'] .  "</td><br />" ;
echo " </tr>";
echo " <tr>";
echo "<td>Produk </td>";
echo" <td>" . $_SESSION['produk'] .  "</td><br />" ;
echo " </tr>";
echo "</table>";
include "side.php";
?>

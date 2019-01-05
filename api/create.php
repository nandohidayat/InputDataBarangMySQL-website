<?php 
 
$conn = mysqli_connect("localhost","nandohidayat", "", "input_data"); 
 
$kdbrg = $_GET['kdbrg']; 
$nmbrg = $_GET['nmbrg']; 
$satuan = $_GET['satuan']; 
$hrgjual = $_GET['hrgjual']; 
$hrgbeli = $_GET['hrgbeli']; 
$stok = $_GET['stok']; 
$stokmin = $_GET['stokmin']; 
 
$query = "insert into barang (kdbrg, nmbrg, satuan, hrgjual, hrgbeli, stok, stokmin) values ('".$kdbrg."','".$nmbrg."','".$satuan."',".$hrgjual.",".$hrgbeli.",".$stok.",".$stokmin.")"; 
 
if(mysqli_query($conn, $query)) {      echo "success"; } else {      echo "failed"; } 
 
mysqli_close($conn); 
 
?> 
<?php 
 
$conn = mysqli_connect("localhost","nandohidayat", "", "input_data"); 
 
$kdbrg=$_GET['kdbrg'];

$query = "delete from barang where kdbrg='".$kdbrg."'"; 
 
if(mysqli_query($conn, $query)) {      echo "success"; } else {      echo "failed"; } 
 
mysqli_close($conn); 
 
?> 
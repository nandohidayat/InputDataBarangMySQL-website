<?php 
 
$conn = mysqli_connect("localhost","nandohidayat", "", "input_data"); 
 
$kdbrg=$_GET['kdbrg'];

$records = mysqli_query($conn,"select * from barang where kdbrg='".$kdbrg."'"); 
 
$data = array(); 
 
while($row = mysqli_fetch_assoc($records)) { $data[] = $row; } 

echo json_encode($data); 
 
mysqli_close($conn); 
 
?> 
<?php
	$conn = mysqli_connect("localhost","nandohidayat", "", "input_data"); 
	$query = "SELECT * FROM barang order by kdbrg";
    $sql = mysqli_query ($conn,$query);
    while ($hasil = mysqli_fetch_assoc ($sql))
        $output[] = $hasil;
    print(json_encode($output));
    print("\n");
    mysqli_close($conn);
    
?>


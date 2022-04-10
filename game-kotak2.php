<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		.genap{
			background: pink;
			color: white;
		}
	</style>
</head>
<body>
<form action="hello.php" method="post">
	bil 1 <input type="text" name="bil1">
	bil 2 <input type="text" name="bil2">
	<input type="submit" value="jumlahkan" name="submit">
</form>
<?php
echo "today is" .date("l")."<br>";
function buatkotak ($baris, $kolom){

	$awal = microtime(true);
	$num = 1;
	echo "<table border='1'>";
	for ($i=1; $i<=$baris; $i++){
	    echo "<tr>";
	    for ($j=1; $j<=$kolom; $j++){


	        if ($num%2==0){
	            echo "<td class='genap'>";
	            echo $num;
	            echo "</td>"; 
	        } else {
	                echo "<td>";
	                echo $num;
	                echo "</td>";
	        }
	        $num++;
	    }
	    echo "</tr>";
	}
	echo "</table>";


	$akhir = microtime(true);
	$lama = $akhir - $awal;
	echo "<p>Lama eksekusi script adalah: ".$lama." detik</p>";
}

buatkotak($_POST['bil1'], $_POST['bil2'])
?>

</body>
</html>
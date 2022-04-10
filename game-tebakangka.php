<?php 
	// session start
	session_start();
	if(empty($_SESSION['bil'])){
		$_SESSION['bil'] = rand(1, 100);
	}

 ?>
<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1> tebak angka </h1>

<?php 
	if (isset($_POST['submit'])){
		if ($_POST['angka'] < $_SESSION['bil']){
			echo "tebakannya kerendahan bosssssssss";
		} elseif ($_POST['angka'] > $_SESSION['bil']) {
			echo "tebakannya ketinggian bosssssssss";
		} else {
			echo "bener tebakannya bosssssssss";
			session_destroy();
			echo "<a href= 'tebakangka.php'>(Main Lagi?)</a>";
			exit();
		}
	}
?>

<form action="tebakangka.php" method="post">
	tebak Angka(1,100) : <input type="text" name="angka">
	<button type="sumbit" name="submit">submit</button>
</form>
</body>
</html>

<head>
	<title>Contoh Program PHP Menggunakan If Else</title>
</head>
 
<body>
 
	<form method="POST" action="IF.else.php">
		Nilai: <input type="text" name="nilai"><br><br>
		<input type="submit" name="submit" value="Kirim">
	</form>
	
</body>
 
</html>
 
<?php
 
$nilai = "";
$grade = "";
 
if( isset($_POST['submit']) ){
	
	$nilai = $_POST['nilai'];
	
	if( ($nilai >= 90) ){
		$grade = "A";
	}else if( $nilai >= 80 ){
		$grade = "B";
	}else if( $nilai >= 60 ){
		$grade = "C";
	}else if( $nilai < 60 ){
		$grade = "D";
	}else{
		$grade = "Nila yang anda masukkan salah, silakan coba lagi";
	}
	
	echo "Nilai: $nilai Mendapatkan Grade: $grade";
}
?>
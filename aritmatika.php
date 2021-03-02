<html>
<head>
<title>Pemakaian Operator Aritmatika dalam PHP</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
<?php
	// Pendeklarasian variabel aritmatika yang digunakan untuk operasi perhitungan 
if(isset($_POST['hasil'])){
	$operand1 = $_POST['operand1'];
	$operand2 = $_POST['operand2'];
	$operator = $_POST['operator'];
	switch ($operator) {
		case '+':
			$jumlah = $operand1 + $operand2;
			break;
		case '-':
			$jumlah = $operand1 - $operand2;
			break;
		case '/':
			$jumlah = $operand1 / $operand2;
			break;
		case '*':
			$jumlah = $operand1 * $operand2;
			break;
	}
} ?>
<div class="kalkulator">
<h2 class="judul">KALKULATOR</h2>
<form name="kalkulator" method="post" action="aritmatika.php">
	<h2 class="brand">Operator Aritmatika</h2>
	<table width="50%" border="1">
		<tr>
			
			<input type="text" name="operand1" class="bil" autocomplete="off" placeholder="">
			<input type="text" name="operand2" class="bil" autocomplete="off" placeholder="">
	</tr>
	<select class="opt" name="operator">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">x</option>
				<option value="/">/</option>
			</select>
			<input type="submit" name="hasil" value="Hitung" class="tombol">											
		</form>

	<?php if(isset($_POST['hasil'])){ ?>
	<input type="text"  value="<?php echo $jumlah;?>" class="bil">
	<?php }else{ ?>
	<input type="text" value="0" class="bil">
	<?php }?>

</div>
</body>
</table>
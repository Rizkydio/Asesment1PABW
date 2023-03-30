no 6<?php
if(isset($_POST['angka1']) && isset($_POST['angka2']) && isset($_POST['operasi'])){
	$angka1 = $_POST['angka1'];
	$angka2 = $_POST['angka2'];
	$operasi = $_POST['operasi'];

	if($operasi == "+"){
		$hasil = $angka1 + $angka2;
	}else if($operasi == "-"){
		$hasil = $angka1 - $angka2;
	}else if($operasi == "*"){
		$hasil = $angka1 * $angka2;
	}else if($operasi == "/"){
		$hasil = $angka1 / $angka2;
	}

	echo "Hasil operasi ".$angka1.$operasi.$angka2." adalah ".$hasil;
}
?>
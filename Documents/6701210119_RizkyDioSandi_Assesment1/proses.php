no 7
<?php
if(isset($_POST['angka1']) && isset($_POST['angka2']) && isset($_POST['operasi'])) {
	$angka1 = $_POST['angka1'];
	$angka2 = $_POST['angka2'];
	$operasi = $_POST['operasi'];
	switch($operasi) {
		case '+':
			$hasil = $angka1 + $angka2;
			break;
		case '-':
			$hasil = $angka1 - $angka2;
			break;
		case '*':
			$hasil = $angka1 * $angka2;
			break;
		case '/':
			if($angka2 != 0) {
				$hasil = $angka1 / $angka2;
			} else {
				$hasil = "Tidak bisa dibagi dengan 0";
			}
			break;
		default:
			$hasil = "Operasi tidak valid";
			break;
	}
	echo "Hasil perhitungan: " . $hasil;
} else {
	echo "Silakan isi formulir terlebih dahulu";
}
?>
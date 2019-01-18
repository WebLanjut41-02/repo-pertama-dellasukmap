<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
	<form method="post" action="">
    <h3>Kalkulator Beral Badan Ideal</h3>
   <table>
<tr>
    <td>Berat Badan</td>
	<td>:</td>
    <td><input type="text" name="bb"  ></td>
</tr>

<tr>
	<td>Tinggi Badan</td>
	<td>:</td>
    <td><input type="text" name="tinggi"></td>
</tr>

<tr>
    <td>Jenis Kelamin</td>
	<td>:</td>

	<!-- <td><select name="jk">
     <option>Laki-laki</option>
     <option>Perempuan</option></select></td> -->
    <td><input type="radio" name="jk" value="Laki-laki">Laki-laki
		<input type="radio" name="jk" value="Perempuan">Perempuan</td>
</tr>
    <td><input type="submit" name="submit" value="Hitung"></td>
      
    </tr>
</table>
</form>
</body>
</html>


<?php 
	class beratbadan{
		var $bbip;
		var $bbiw;

		function bbip($bb,$tinggi,$jk){
			echo $this->bbip= $bb/(($tinggi/100)*($tinggi/100));
			echo "<br>";

			if ($this->bbip<17) {
				echo "Kategori : Under Weight/Kurus";
			} elseif ($this->bbip>=17 && $this->bbip<=23) {
				echo "Kategori : Normal Weight/Normal";
			} elseif ($this->bbip>=23 && $this->bbip<=27) {
				echo "Kategori : Over Weight/Kegemukan";
			} elseif ($this->bbip>27) {
				echo "Kategori : Obesitas";
			}
		}

		 function bbiw($bb,$tinggi,$jk){
			echo $this->bbiw= $bb/(($tinggi/100)*($tinggi/100));
			echo "<br>";

			if ($this->bbiw<18) {
				echo "Kategori : Under Weight/Kurus";
			} elseif ($this->bbiw>=18 && $this->bbiw<=25) {
				echo "Kategori : Normal Weight/Normal";
			} elseif ($this->bbiw>=25 && $this->bbiw<=27) {
				echo "Kategori : Over Weight/Kegemukan";
			} elseif ($this->bbiw>27) {
				echo "Kategori : Obesitas";
			}

		}

	}


	$hasil = new beratbadan();
	if (isset($_POST['submit'])){
	$bb = $_POST['bb'];
	$tinggi = $_POST['tinggi'];
	$jk = $_POST['jk'];
    
	

	if($jk == 'Laki-laki'){
    echo "Berat badan ideal anda adalah "; 
    $hasil->bbip($bb,$tinggi,$jk);
   }
   else if($jk == 'Perempuan'){
   echo "Berat badan ideal anda adalah ";
    $hasil->bbiw($bb,$tinggi,$jk);
   }
}

 ?>
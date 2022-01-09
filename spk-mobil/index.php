<html>
    <head>
        <title> </title>

        <!-- CSS -->
        <link rel="stylesheet" href="assets/bootstrap-3.3.7/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/style.css">
<script>
function tambah() {
	var getTotal = document.querySelector("input[name=total]");
	getTotal.stepUp();
	var total = getTotal.value;
	var str=`<!--Alternatif ${total}-->
		<tr>
		<td>
		<input name=\"alt${total}\" class=\"form-control\" placeholder=\"Alternatif ${total}\" type=\"text\"> 
		</td>
		<td>
		<input name=\"harga${total}\" class=\"form-control\" placeholder=\"Harga\" type=\"text\"> 
		</td>
		<td>
		<input name=\"bahan bakar${total}\" class=\"form-control\" placeholder=\"Bahan bakar\" type=\"text\"> 
		</td>
		<td>
		<input name=\"tahun${total}\" class=\"form-control\" placeholder=\"Tahun\" type=\"text\"> 
		</td>
		<td>
		<input name=\"transmisi${total}\" class=\"form-control\" placeholder=\"Transmisi\" type=\"text\"> 
		</td>
		<td>
		<input name=\"warna${total}\" class=\"form-control\" placeholder=\"Warna\" type=\"text\"> 
		</td>
		</tr>`;
	document.querySelector("tbody").insertAdjacentHTML('beforeend', str);
}
function kurangi() {
	var element = document.querySelector("tbody");
	var tr = element.querySelectorAll("tr");
	tr[tr.length - 1].remove();
	var getTotal = document.querySelector("input[name=total]");
	getTotal.stepDown();
}
</script>
    </head>

    <body>
        <section id="nav">
        <nav class="navbar navigasi">
            <h2 class="text-center">Sistem Pendukung Keputusan</h2>
            <h2 class="text-center">Pemilihan Mobil</h2>
        </nav>    
        </section>

	<section id="mainInput">
	    <div class="container">
		<button name="tambah" onclick="tambah()">Tambah</button>
		<button name="kurang" onclick="kurangi()">Kurangi</button>
		<br>

		<form action="" method="post">
		    <table class="table">
			<thead>
			    <tr>
				<th>Opsi Alternatif</th>
				<th>Harga</th>
				<th>Bahan Bakar</th>
				<th>Tahun</th>
				<th>Transmisi</th>
				<th>Warna</th>
			    </tr>
			</thead>
			<tbody>
			    <!-- Alternatif 1 -->
			    <tr>
				<td>
				    <input type="text" name="alt1" class="form-control" placeholder="Alternatif 1"> </td>
				<td>
				    <input type="text" name="harga1" class="form-control" placeholder="Harga"> </td>
				<td>
				    <input type="text" name="bahan bakar1" class="form-control" placeholder="Bahan bakar"> </td>
				<td>
				    <input type="text" name="tahun1" class="form-control" placeholder="Tahun"> </td>
				<td>
				    <input type="text" name="transmisi1" class="form-control" placeholder="Transmisi"> </td>
				<td>
				    <input type="text" name="warna1" class="form-control" placeholder="Warna"> </td>
			    </tr>

			    <!-- Alternatif 2 -->
			    <tr>
				<td>
				    <input type="text" name="alt2" class="form-control" placeholder="Alternatif 2"> </td>
				<td>
				    <input type="text" name="harga2" class="form-control" placeholder="Harga"> </td>
				<td>
				    <input type="text" name="bahan bakar2" class="form-control" placeholder="Bahan bakar"> </td>
				<td>
				    <input type="text" name="tahun2" class="form-control" placeholder="Tahun"> </td>
				<td>
				    <input type="text" name="transmisi2" class="form-control" placeholder="Transmisi"> </td>
				<td>
				    <input type="text" name="warna2" class="form-control" placeholder="Warna"> </td>
			    </tr>

			    <!-- Alternatif 3 -->
			    <tr>
				<td>
				    <input type="text" name="alt3" class="form-control" placeholder="Alternatif 3"> </td>
				<td>
				    <input type="text" name="harga3" class="form-control" placeholder="Harga"> </td>
				<td>
				    <input type="text" name="bahan bakar3" class="form-control" placeholder="Bahan bakar"> </td>
				<td>
				    <input type="text" name="tahun3" class="form-control" placeholder="Tahun"> </td>
				<td>
				    <input type="text" name="transmisi3" class="form-control" placeholder="Transmisi"> </td>
				<td>
				    <input type="text" name="warna3" class="form-control" placeholder="Warna"> </td>
			    </tr>

			    <!-- Alternatif 4 -->
			    <tr>
				<td>
				    <input type="text" name="alt4" class="form-control" placeholder="Alternatif 4"> </td>
				<td>
				    <input type="text" name="harga4" class="form-control" placeholder="Harga"> </td>
				<td>
				    <input type="text" name="bahan bakar4" class="form-control" placeholder="Bahan bakar"> </td>
				<td>
				    <input type="text" name="tahun4" class="form-control" placeholder="Tahun"> </td>
				<td>
				    <input type="text" name="transmisi4" class="form-control" placeholder="Transmisi"> </td>
				<td>
				    <input type="text" name="warna4" class="form-control" placeholder="Warna"> </td>
			    </tr>

			    <!-- Alternatif 5 -->
			    <tr>
				<td>
				    <input type="text" name="alt5" class="form-control" placeholder="Alternatif 5"> </td>
				<td>
				    <input type="text" name="harga5" class="form-control" placeholder="Harga"> </td>
				<td>
				    <input type="text" name="bahan bakar5" class="form-control" placeholder="Bahan bakar"> </td>
				<td>
				    <input type="text" name="tahun5" class="form-control" placeholder="Tahun"> </td>
				<td>
				    <input type="text" name="transmisi5" class="form-control" placeholder="Transmisi"> </td>
				<td>
				    <input type="text" name="warna5" class="form-control" placeholder="Warna"> </td>
			    </tr>


			</tbody>
		    </table><input type="number" style="display:none" name="total" value="5">

		    <input type="submit" class="btn btn-main">
		</form>

		<p>Keterangan:</p>
		<p>
		    Range nilai kriteria bahan bakar, tahun, transmisi, warna adalah 1 - 10 <br>
		    Dengan bobot masing masing sebesar 0.2
		</p>
	    </div>
	</section>

	<section id="result">
	    <div class="container" style="margin: 20px auto;">
		<h1 class="text-center"> HASIL PERHITUNGAN DENGAN METODE SAW</h1>
		<hr class="border-result">
	    </div>
	</section>
<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	echo '<script>console.log("Hello World");</script>';
	echo '<script>console.log("'.$_POST['total'].'");</script>';

	$total=$_POST['total'];
			/*$test = [];
			for ($i=1; $i<=5; $i++){
				echo $test[$i-1];
			}*/

	//form handling

	$attr_val = array('harga', 'bahan bakar', 'tahun', 'transmisi', 'warna');
	$attr = array();
	foreach ($attr_val as &$val){
		$attr[$val] = [];
		for ($i=1; $i<=$total; $i++){
			$attr[$val][] = (int)$_POST[$val.$i];
		}
	}
	$attr['alt'] = [];
	for ($i=1; $i<=$total; $i++){
		$attr['alt'][] = htmlspecialchars($_POST['alt'.$i]);
	}

			/*for ($i=0; $i<$total; $i++){
				echo $attr['harga'][$i].'<br>';
			}*/


	//sifat attr

	$f = array();
	$f['harga']=-1;
	$f['bahan bakar']=1;
	$f['tahun']=1;
	$f['transmisi']=1;
	$f['warna']=1;

	//bobot

	$b = array();
	$b['harga']=0.2;
	$b['bahan bakar']=0.2;
	$b['tahun']=0.2;
	$b['transmisi']=0.2;
	$b['warna']=0.2;

	//metode SAW
	//cari r
	
	$dv = array(); //pembagi atau yg membagi
	foreach ($attr_val as &$val){
		if ($f[$val] == 1){
			$dv[$val] = max($attr[$val]);
		} else if ($f[$val] == -1){
			$dv[$val] = min($attr[$val]);
		}
	}

	$r = array();
	foreach ($attr_val as &$val){
		$r[$val] = [];
		if ($f[$val] == 1){
			for ($i=0; $i<$total; $i++){
				$r[$val][] = $attr[$val][$i]/$dv[$val];  
			}
		} else if ($f[$val] == -1){
			for ($i=0; $i<$total; $i++){
				$r[$val][] = $dv[$val]/$attr[$val][$i];
			}
		}
	}

	//menghitung v
	$v = [];
	for ($i=0; $i<$total; $i++){
		$tot = 0;
		foreach ($attr_val as &$val){
			$tot = $tot + $b[$val] * $r[$val][$i];
		}
		$v[] = $tot;
	}

	/*
	//metode WP -- tidak jadi
	//normalisasi bobot

	$n_b = array();//bobot dinormalisasi
	$b_tot=0;//bobot total

	foreach ($attr_val as &$val){
		$b_tot=$b_tot+$b[$val];
	}

	foreach ($attr_val as &$val){
		$n_b[$val]=$b[$val]/$b_tot;
	}

	//cari s

	$s = [];
	for ($i=0; $i<$total; $i++){
		$x_pro=1; //perkalian dari semua x pada suatu alt
		foreach ($attr_val as &$val){
			$x_pro=$x_pro*($attr[$val][$i]**($b[$val]*$f[$val]));
			echo "<script>console.log(\"x$i $val = {$attr[$val][$i]}, x_pro=$x_pro\");</script>";
		}
		$s[] = $x_pro;
	}
	for ($i=0; $i<$total; $i++){
		echo "<script>console.log(\"s$i = $s[$i]\");</script>";
	}
	$s_tot=0; //total semua s

	for ($i=0; $i<$total; $i++){
		$s_tot=$s_tot+$s[$i];
	}

	//cari v

	$v = [];
	for ($i=0; $i<$total; $i++){
		$v[] = $s[$i]/$s_tot;
	}

	for ($i=0; $i<$total; $i++){
		echo "<script>console.log(\"V$i = $v[$i]\");</script>";
	}
	*/
	arsort($v);

			/*foreach ($attr as &$val) {
				eval('$'.$val. ' = []; for($i=1; $i<=$total; $i++){ $'.$val.'[] = (int)$_POST[\''.$val.'\'.$i]; }');
			}
			for ($i=0; $i<$total; $i++){
				echo $harga[$i].'<br>';
			}*/
			/*
			//form harga
			$harga = [];
			for ($i=1; $i<=$total; $i++){
				$harga[] = (int)$_POST['harga'.$i];
			}
			//for ($i=0; $i<$total; $i++){
			//	echo $harga[$i].'<br>';
			//}

			//form bahan bakar
			$bahan bakar = [];
			for ($i=1; $i<=$total; $i++){
				$bahan bakar[] = (int)$_POST['bahan bakar'.$i];
			}
			//for ($i=0; $i<$total; $i++){
			//	echo $bahan bakar[$i].'<br>';
			//}

			//form tahun
			$tahun = [];
			for ($i=1; $i<=$total; $i++){
				$tahun[] = (int)$_POST['tahun'.$i];
			}
			//for ($i=0; $i<$total; $i++){
			//	echo $tahun[$i].'<br>';
			//}

			//form transmisi
			$transmisi = [];
			for ($i=1; $i<=$total; $i++){
				$transmisi[] = (int)$_POST['transmisi'.$i];
			}
			//for ($i=0; $i<$total; $i++){
			//	echo $transmisi[$i].'<br>';
			//}

			//form warna
			$warna = [];
			for ($i=1; $i<=$total; $i++){
				$warna[] = (int)$_POST['warna'.$i];
			}
			//for ($i=0; $i<$total; $i++){
			//	echo $warna[$i].'<br>';
			//}




			//bobot
			$b_harga=0.2;
			$b_bahan bakar=0.2;
			$b_tahun=0.2;
			$b_transmisi=0.2;
			$b_warna=0.2;
			$b_total=$b_harga+$b_bahan bakar+$b_tahun+$b_te>kstur+$b_warna;

			//normalisasi bobot
			$n_b_harga=$b_harga/$b_total;
			$n_b_bahan bakar=$b_bahan bakar/$b_total;
			$n_b_tahun=$b_tahun/$b_total;
			$n_b_transmisi=$b_transmisi/$b_total;
			$n_b_warna=$b_warna/$b_total;






				$s = [];

				for ($i = 0; $i < $total; $i++){
 
				}
			 */
	?>
	<div class="container">
	<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Alternatif</th>
			<th>Nilai</th>
		</tr>
	</thead>
	<tbody>
	<?php $no=1; $v_max=0; foreach ($v as $key => $val){ ?>
		<tr>
		<?php if ($no == 1){$v_max=$key;} ?>
		<td><?php echo $no++; ?></td>
		<td><?php echo $attr['alt'][$key]; ?></td>
		<td><?php echo $v[$key]; ?></td>
		</tr>	
	<?php } ?>
		
	</tbody>
	</table>

	<h2><?php echo "Terpilih alternatif {$attr['alt'][$v_max]}<br>"; ?>
</h2>
	</div>
	

<?php
}
?>

	<section id="footer">
	    <div class="foot">
		<p class="text-center" style="color:white;">&copy; copyright by TeamSPK 2017 | Distributed by <a href="https://blogbugabagi.blogspot.com" target="_blank" rel="noopener noreferrer">BlogBugaBagi</a></p>
	    </div>
	</section>
    </body>
</html>

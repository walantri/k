<?php
include "header.php";
	if(isset($_POST['panjang']) && $_POST['panjang']!=""){
    $panjang=$_POST['panjang'];
	}else{
	$panjang="";
	}
	if($_POST['dari']=="m"){
		if($_POST['ke']=="inc"){
			$hasil=$panjang*39.37;
		}elseif($_POST['ke']=="cm"){
			$hasil=$panjang*100;
		}elseif($_POST['ke']=="foot"){
			$hasil=$panjang*3.28;
		}elseif($_POST['ke']=="m"){
			$hasil=$panjang;
		}elseif($_POST['ke']=="mil"){
			$hasil=$panjang*3.28/5280;
		}elseif($_POST['ke']=="km"){
			$hasil=$panjang/1000;
		}elseif($_POST['ke']=="mila"){
			$hasil=$panjang*3.28/6076;
		}elseif($_POST['ke']=="frm"){
			$hasil=$panjang*10;
		}elseif($_POST['ke']=="fm"){
			$hasil=$panjang*10;
		}elseif($_POST['ke']=="ang"){
			$hasil=$panjang*10;
		}elseif($_POST['ke']=="tc"){
			$tc=946*10;
			$hasil=$panjang/$tc;
		}elseif($_POST['ke']=="pc"){
			$pc=3.09*10;
			$hasil=$panjang/$pc;
		}else{
			$hasil=$panjang;
		}
	}
?>
</br><div align='center'><font color ='#000000' size='5'>wahyu walantri</font></div>
</br><div align='center'><font color ='#000000' size='5'>TI 01/0755201130094/</font></div></br>
<div align='center'>
</br><font color ='#0000ff' size='6'>Konversi Panjang</font></br></br></br>
<form method="post" action="">
	<input type="text" placeholder="Tulis angka disini....." name="panjang" value="<?php echo $panjang; ?>"><br/><br/>
		<select name="dari">
			<option value="m">meter (m)</option>
		</select>
    <select name="ke">
		<option value="inc">inchi (inc)</option>
		<option value="cm">cm</option>
		<option value="foot">foot</option>
		<option value="m">m</option>
		<option value="mil">mil</option>
		<option value="km">km</option>
		<option value="mila">mil laut (US)</option>
		<option value="frm">fermi</option>
		<option value="fm">femtometer (fm)</option>
		<option value="ang">angstrom</option>
		<option value="tc">tahun cahaya</option>
		<option value="pc">persec</option>
    </select>
    <input type="submit" value="Konversi"/>
<br/>
<br/>
<br/>

<font color='#0000ff' size='5'>Hasil :</font><br/>
		<?php
			echo "<font color='#000000' size='5'>";
			if($_POST['ke']=='frm'){
				echo $panjang." ".$_POST['dari']." = "." ".$hasil." <sup>15</sup> ".$_POST['ke']."";
			}
			elseif($_POST['ke']=='fm'){
				echo $panjang." ".$_POST['dari']." = "." ".$hasil." <sup>15</sup> ".$_POST['ke']."";
			}
			elseif($_POST['ke']=='ang'){
				echo $panjang." ".$_POST['dari']." = "." ".$hasil." <sup>10</sup> ".$_POST['ke']."";
			}
			elseif($_POST['ke']=='tc'){
				echo $panjang." ".$_POST['dari']." = "." ".$hasil." <sup>-15</sup> ".$_POST['ke']."";
			}
			elseif($_POST['ke']=='pc'){
				echo $panjang." ".$_POST['dari']." = "." ".$hasil." <sup>-16</sup> ".$_POST['ke']."";
			}
			else{
				echo $panjang." ".$_POST['dari']." = "." ".$hasil." ".$_POST['ke'].""; 
			}
		?>
</div>
	 <br/>
</form>
<?php include "footer.php" ?>

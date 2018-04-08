<?php
$con = mysqli_connect("localhost","root"," ","spentulas);

if(isset($_GET['satu']));
{

	$vote_satu = "update voters set satu=satu+1";
	$run_satu = mysqli_query($con, $vote_satu);

	if($run_satu)
	{

	echo "<h2 align='center'>Anda memilih No 1 (DIAN DAN DIAN)!</h2>";
	echo "<hr>";
	echo "<h4 align='center'><a href=pilkaos.html>Kembali ke Pemilihan</a>|<a href='slide.html'>Kembali ke Home</a></h2>";
	}

}

if(isset($_POST['dua']))
{

	$vote_dua = "update voters set dua=dua+1";
	$run_dua = mysqli_query($con, $vote_dua);

	if($run_dua)
	{

	echo "<h2 align='center'>Anda memilih No 2 (DIAN DAN DIAN)!</h2>";
	echo "<hr>";
	echo "<h4 align='center'><a href=pilkaos.html>Kembali ke Pemilihan</a>   |   <a href='slide.html'>Kembali ke Home</a></h2>";

	}

}

if(isset($_POST['tiga']))
{

	$vote_tiga = "update voters set tiga=tiga+1";
	$run_tiga = mysqli_query($con, $vote_tiga);

	if($run_tiga)
	{

	echo "<h2 align='center'>Anda memilih No 3 (DIAN DAN DIAN)</h2>";
	echo "<hr>";
	echo "<h4 align='center'><a href=pilkaos.html>Kembali ke Pemilihan</a>|<a href='slide.html'>Kembali ke Home</a></h2>";

	}

}

if(isset($_GET['results']))
{

	$get_votes = "select * from voters";

	$run_votes = mysqli_query($con, $get_votes);

	$row_votes = mysqli_fetch_array($run_votes);

	$satu = $row_votes['satu'];
	$dua = $row_votes['dua'];
	$tiga = $row_votes['tiga'];

	$count = $satu+$dua+$tiga;

	$per_satu = round($satu*100/$count) . "%";
	$per_dua = round($dua*100/$count) . "%";
	$per_tiga = round($tiga*100/$count) . "%";

	echo "


		<div style='background:#6495ed; padding:70px;'>
		<center><h2> Hasil Perolehan Suara:</h2>
		<hr>
		<table>
		<tr><td align=center bgcolor=orangered><b>1</b><td align=center bgcolor=aqua><b>2</b><td align=center bgcolor=orange><b>3</b>
		<tr><td bgcolor=orangered><img src=1.png width=275 height=250><td bgcolor=aqua><img src=2.png width=275 height=250></img><td bgcolor=orange><img src=3.png width=275 height=250></img>
		<tr><td align=center bgcolor=orangered><b>AGUN DAN RINA</b><td align=center bgcolor=aqua><b>ALDI DAN ARIEF</b><td align=center bgcolor=orange><b>AFNI DAN YAYU</b>
		<tr><td align=center bgcolor=orangered rowspan=2>Jumlah Suara : $satu<br>Persentase: ($per_satu)
			<td align=center bgcolor=aqua rowspan=2>Jumlah Suara : $dua<br>Persentase: ($per_dua)
			<td align=center bgcolor=orange rowspan=2>Jumlah Suara : $tiga<br>Persentase: ($per_tiga)</td>
		<tr>
		<tr><td colspan=3 align=center bgcolor=white color:white><b>Total Suara Masuk : $count</b>
		</table>
		<hr>
		<br><br>

		<a href=pilkaos.html>Pemilihan</a> | <a href=slide.html>Home</a>
		</center>
		</div>

	";
}
?>

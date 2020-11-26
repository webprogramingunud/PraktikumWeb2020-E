<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PBW2020-Pertemuan7-E</title>

		<style>
			.margin{
				margin : 1rem 30rem 5rem;
			}
			.tengah{
				text-align : center;
			}
		</style>
	</head>
	<body>
		<fieldset class="margin">
		<legend class="tengah">NILAI AKHIR</legend>
			<?php

				$nama = $_REQUEST["nama"];
				$nim = $_REQUEST["nim"];
				$tugas = $_REQUEST["tugas"];
				$uts = $_REQUEST["uts"];
				$uas = $_REQUEST["uas"];

				$hasil = ($tugas + $uts + $uas)/3;


				echo "Nama = $nama <br>";
				echo "NIM = $nim <br><br>";

				echo "Nilai Tugas Anda = $tugas <br>";
				echo "Nilai UTS Anda = $uts <br>";
				echo "Nilai UAS Anda = $uas <br><br>";

				echo "Nilai akhir anda adalah : $hasil<br>";

				if($hasil>=80){
						echo "Anda Lulus Dengan Predikat A";
				}
				elseif($hasil>=70){
						echo "Anda Lulus Dengan Predikat B";
				}
				elseif($hasil>=60){
						echo "Anda Lulus Dengan Predikat C";
				}
				else{
						echo "Anda Tidak Lulus";
				}    


			?>			
		</fieldset>
		
	</body>
</html>
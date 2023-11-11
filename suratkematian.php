<?php
include_once './navbar.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-KTP</title>
    <style>
         body {
            background-color: grey;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h1{
            color: black;
        }

        .title {
            text-align: center;
        }

        table {
            width: 700px;
            border: 1px solid black;
            margin-top: 20px; /* Atur margin atas sesuai kebutuhan */
        }

        th {
            background-color: #ffc451;
            color: white;
            padding: 10px;
        }

        td {
            padding: 10px;
        }

        /* Atur warna latar belakang kolom sesuai kebutuhan */
        td:nth-child(odd) {
            background-color: green;
        }

        td:nth-child(even) {
            background-color: red;
        }

        td:last-child {
            background-color: cyan;
        }
    </style>
</head>
<body>
    
    <div class="title">
    <table width="500" border="1">
        <h1>Persyaratan</h1>
		<tr><th colspan="100%" scope="col" bgcolor="blue">Rekomendasi Surat Keterangan kematian</th>
			<tr>
				<td bgcolor="green">Surat Keterangan Kematian dari Wali Nagari</td>
			</tr>
		
			<tr>
				<td bgcolor="green">Foto copy Kartu Keluarga (KK)</td>
			</tr>
		
			<tr>
				<td bgcolor="green">Surat Keterangan Kematian dari Dokter / 
                RS/Puskesmas Setempat</td>
			</tr>
	</table>
    </div>
    
</body>
</html>

<?
include_once './footer.php'
?>

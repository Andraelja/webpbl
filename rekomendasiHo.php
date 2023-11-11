<?php
include_once './navbar.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekomendasi HO</title>
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
		<tr><th colspan="100%" scope="col" bgcolor="blue">Rekomendasi HO</th>
			<tr>
				<td bgcolor="green">Permohonan diketahui oleh Wali Nagari</td>
			</tr>
		
			<tr>
				<td bgcolor="green">Foto copy e-KTP</td>
			</tr>
		
			<tr>
				<td bgcolor="green">Foto copy Sertifikat Tanah/Surat 
                Keterangan Status Tanah</td>
			</tr>

            <tr>
				<td bgcolor="green">Surat Keterangan Persetujuan Jihad/Sepadan</td>
			</tr>

            <tr>
				<td bgcolor="green">Foto copy IMB</td>
			</tr>

            <tr>
				<td bgcolor="green">Rekomendasi dari Dinas Terkait</td>
			</tr>

            <tr>
				<td bgcolor="green">Rekomendasi dari Kantor Lingkungan Hidup</td>
			</tr>

            <tr>
				<td bgcolor="green">Foto copy Akta Pendirian Usaha</td>
			</tr>

            <tr>
				<td bgcolor="green">Foto copy Akta Cabang yang telah disahkan</td>
			</tr>
	</table>
    </div>
    
</body>
</html>

<?
include_once './footer.php'
?>
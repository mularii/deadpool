<html> 
 
<head>
    <title>Tampil Data Matakuliah</title>
    <!--Link CSS-->
    <link rel="stylesheet" href="http://localhost/studentmvc/assets/css/fdata.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!--Link font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head> 
 
<body> 
    <center> 
        <div class="container">
            <table> 
                <tr> 
                    <th colspan="3"> 
                        Tampil Data Siswa
                    </th> 
                </tr> 
                <tr> 
                    <td colspan="3"> 
                        <hr> 
                    </td> 
                </tr> 
                <tr> 
                    <th>Nama Siswa</th> 
                    <th>:</th> 
                    <th> 
                        <?= $nama; ?> 
                    </th> 
                </tr> 
                <tr> 
                    <th>Nis</th> 
                    <th>:</th> 
                    <th> 
                        <?= $nis; ?> 
                    </th> 
                </tr> 
                <tr> 
                    <th>Tempat & Tanggal Lahir</th> 
                    <th>:</th> 
                    <th> 
                        <?= $ttl; ?> 
                    </th> 
                </tr> 
                <tr> 
                    <th>Jenis Kelamin</th> 
                    <th>:</th> 
                    <th> 
                        <?= $jenis_kelamin; ?> 
                    </th> 
                </tr> 
                <tr> 
                    <th>Agama</th> 
                    <th>:</th> 
                    <th> 
                        <?= $agama; ?> 
                    </th> 
                </tr> 
                <tr> 
                    <th>Tempat ibadah</th> 
                    <th>:</th> 
                    <th> 
                        <?= $tempat_agama; ?> 
                    </th> 
                </tr> 
                <tr> 
                    <td colspan="3" align="center"> 
                        <a href="<?= base_url('web'); 
                        ?>" class="backhome">Kembali</a> 
                    </td>
                </tr> 
            </table>
        </div> 
    </center> 
</body> 
</html>
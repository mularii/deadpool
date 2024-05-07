<section>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Di-Lemas</title>
        <!--Link CSS-->
        <link rel="stylesheet" href="http://localhost/studentmvc/assets/css/finput.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

        <!--Link font-->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    </head> 
    <center>
        <div class="container">
            <form 
                action="<?= 
                base_url('web/cetak'); 
                ?>" 
                method="post"> 
                <table> 
                    <tr> 
                        <th colspan="3" class="title"> 
                            Form Input Data Siswa
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
                        <td> 
                            <input type="text" name="nama" id="nama" class="text"> 
                        </td> 
                    </tr> 
                    <tr> 
                        <th>Nis</th> 
                        <th>:</th> 
                        <td> 
                            <input type="text" name="nis" id="nis" class="text"> 
                        </td> 
                    </tr> 
                    <tr> 
                        <th>Tempat & Tanggal Lahir</th> 
                        <th>:</th> 
                        <td> 
                            <input type="text" name="ttl" id="ttl" class="text"> 
                        </td> 
                    </tr> 
                    <tr> 
                        <th>Jenis Kelamin</th> 
                        <th>:</th> 
                        <td> 
                            <input type="radio" id="pria" name="jenis_kelamin" value="PRIA" class="checkmark" ><label for="html" class="containerradio">Pria</label>  <input type="radio" id="wanita" name="jenis_kelamin" value="WANITA" class="checkmark"><label for="wanita" class="containerradio">Wanita</label>
                        </td> 
                    </tr>
                    <tr> 
                        <th>Agama</th> 
                        <th>:</th> 
                        <td> 
                            <select name="agama" id="agama"> 
                                <option value="">- Pilih Agama -</option> 
                                <option value="Islam">Islam</option> 
                                <option value="Kristen">Kristen</option> 
                                <option value="Katolik">Katolik</option>
                                <option value="Budha">Budha</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Khonghucu">Khonghucu</option> 
                            </select> 
                        </td> 
                    </tr> 
                    <tr> 
                        <td colspan="3" align="center"> 
                            <input type="submit" value="Submit" class="btn"> <input type="submit" value="Cancel" href="<?php echo base_url().'/web' ?>" class="btn">
                        </td> 
                    </tr> 
                </table> 
            </form>
        </div> 
    </center> 
</section>
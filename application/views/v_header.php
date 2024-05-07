<!DOCTYPE html> 
<html> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D-Bangors</title>
    <!--Link CSS-->
    <link rel="stylesheet" type="text/css" 
    href="http://localhost/studentmvc/assets/css/style.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!--Link font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

</head>


<body>
    <header>
        <!--Bagian Navigasi untuk keseluruhan dikasih class "navb"-->
        <div class="navb">
            <!--Lalu ada class untuk masukin logo-->
            <div class="logo">
                <img src="http://localhost/studentmvc/assets/img/" alt="">
                <!--disini ada bagian hero yaitu display utama-->
                <a href="<?= base_url('web');?>">
                    <!--Disini ada span diguanin untuk ngasih style seperti contohnya kita kasih class highlight yang nantinya bagian itu akan ke highlight "contoh nya kayak fontnya jadi warna merah/sesuai yang kita mau"-->
                    <span>D-</span>
                    <span class="highlight">Bangors</span>
                </a>
            </div>
            
            <!--Disini ada class button grup yaitu untuk bagian tombol tombol navigasi-->
            <div class="buttonGroup">
                <!--nav itu adalah navigasi link-->
                <nav>
                    <!--ul ini adalah unorder list yang itemnya tidak terurut-->
                    <ul>
                        <!--Disini ada li untuk menampilkan item dari ul-->
                        <li class="current">
                            <a href="#home">
                                <span class="highlight2">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="#about">
                                <span class="highlight2">About</span>
                            </a>
                        </li>
                        <li>
                            <a href="#student">
                                <span class="highlight2">Student</span>
                            </a>
                        </li>
                        <li>
                            <a href="#studentarchive">
                                <span class="highlight2">Student Archive</span>
                            </a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
    </header>











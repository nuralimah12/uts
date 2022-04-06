<html>
<head>
    <title>Website UTS</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
    <header>
        <div class="container">
        <h1>MAK E RESTAURANT</h1>
        <ul>
            <li><a href="home.html">Home</a></li>
            <li class="active"><a href="#">Transaksi</a></li>
            <li><a href="formUpload.html">Tambah Foto</a></li>
        </ul>
        </div>
    </header>
    <br><br><br><br><br><br><br><br><br><br><br><br>
<?php
if(isset($_POST['nama_lengkap']) AND isset($_POST['sp']) AND isset($_POST['menu']) AND isset($_POST['jumlah'])){
        $nama=$_POST['nama_lengkap'];
        $status=$_POST['sp'];
        $menu=$_POST['menu'];
        $jumlah=$_POST['jumlah']; 
        $totalHarga="";
        $jumlahDiskon="";
        $bayar="";
  }

                if($status == "m") {
                    if($menu == "p1") {
                        if($jumlah == 1) {
                            $diskon = 0.05 * 20000;
                            $hargadiskon = 20000 - $diskon; 
                            $totalHarga = 20000 * $jumlah;
                            $jumlahDiskon = $diskon * $jumlah; 
                            $bayar = $totalHarga - $jumlahDiskon; 
                        }else if($jumlah <= 3) {
                            $diskon = 0.07 * 20000;
                            $harga = 20000 - $diskon; 
                            $totalHarga = 20000 * $jumlah;
                            $jumlahDiskon = $diskon * $jumlah; 
                            $bayar = $totalHarga - $jumlahDiskon;
                        }else if($jumlah > 3) {
                            $diskon = 0.1 * 20000;
                            $harga = 20000 - $diskon; 
                            $totalHarga = 20000 * $jumlah;
                            $jumlahDiskon = $diskon * $jumlah; 
                            $bayar = $totalHarga - $jumlahDiskon;
                        }
                    }else if($menu == "p2") {
                        if($jumlah == 1) {
                            $diskon = 0.05 * 30000;
                            $harga = 30000 - $diskon; 
                            $totalHarga= 30000 * $jumlah;
                            $jumlahDiskon = $diskon * $jumlah; 
                            $bayar = $totalHarga - $jumlahDiskon; 
                        }else if($jumlah <=3 ) {
                            $diskon = 0.07 * 30000;
                            $harga = 30000 - $diskon; 
                            $totalHarga = 30000 * $jumlah;
                            $jumlahDiskon = $diskon * $jumlah; 
                            $bayar = $totalHarga - $jumlahDiskon;
                        }else if($jumlah > 3) {
                            $diskon = 0.1 * 30000;
                            $harga = 30000 - $diskon; 
                            $totalHarga = 30000 * $jumlah;
                            $jumlahDiskon = $diskon * $jumlah; 
                            $bayar = $totalHarga - $jumlahDiskon;
                        }
                    }else if($menu == "p3") {
                        if($jumlah == 1) {
                            $diskon = 0.05 * 50000;
                            $harga = 50000 - $diskon; 
                            $totalHarga = 50000 * $jumlah;
                            $jumlahDiskon = $diskon * $jumlah; 
                            $bayar = $totalHarga - $jumlahDiskon; 
                        }else if($jumlah <= 3) {
                            $diskon = 0.07 * 50000;
                            $harga = 50000 - $diskon; 
                            $totalHarga = 50000 * $jumlah;
                            $jumlahDiskon = $diskon * $jumlah; 
                            $bayar = $totalHarga - $jumlahDiskon;
                        }else if($jumlah > 3) {
                            $diskon = 0.1 * 50000;
                            $harga = 50000 - $diskon; 
                            $totalHarga = 50000 * $jumlah;
                            $jumlahDiskon = $diskon * $jumlah; 
                            $bayar= $totalHarga - $jumlahDiskon;
                        }
                    }
                }else {
                    if($menu == "p1") {
                        if($jumlah > 6 && $jumlah < 10) {
                            $totalHarga = 20000 * $jumlah; 
                            $jumlahDiskon = $jumlahTransaksi * 0.05;
                            $bayar = $totalHarga - $jumlahDiskon; 
                        }else if($jumlah > 10) {
                            $totalHarga = 20000 * $jumlah; 
                            $jumlahDiskon = $jumlahTransaksi * 0.07;
                            $bayar = $totalHarga - $jumlahDiskon; 
                        }else {
                            $totalHarga = 20000 * $jumlah; 
                            $jumlahDiskon = $jumlahTransaksi * 0;
                            $bayar = $totalHarga - $jumlahDiskon;
                        }
                    }else if($menu == "p2") {
                        if($jumlah > 6 && $jumlah < 10) {
                            $totalHarga = 30000 * $jumlah; 
                            $jumlahDiskon = $totalHarga * 0.05;
                            $bayar = $totalHarga - $jumlahDiskon; 
                        }else if($jumlah > 10) {
                            $totalHarga = 30000 * $jumlah; 
                            $jumlahDiskon = $totalHarga * 0.07;
                            $bayar = $totalHarga - $jumlahDiskon; 
                        }else {
                             $totalHarga = 30000 * $jumlah; 
                            $jumlahDiskon = $totalHarga * 0;
                            $bayar = $totalHarga - $jumlahDiskon;
                        }
                    }else if($menu == "p3") {
                        if($jumlah > 6 && $jumlah < 10) {
                            $totalHarga = 50000 * $jumlah; 
                            $jumlahDiskon = $totalHarga * 0.05;
                            $bayar = $totalHarga - $jumlahDiskon; 
                        }else if($jumlah > 10) {
                            $totalHarga = 50000 * $jumlah; 
                            $jumlahDiskon = $totalHarga * 0.07;
                            $bayar = $totalHarga - $jumlahDiskon; 
                        }else {
                            $totalHarga = 50000 * $jumlah; 
                            $jumlahDiskon = $totalHargai * 0;
                            $bayar = $totalHarga - $jumlahDiskon;
                        }
                    }
                }

               
                echo "TOTAL PESANAN<br><br>";
                echo "Nama Pembeli        : " .$nama;
                echo "<br><br>";
                echo "Status Pembeli      : " .$status;
                echo "<br><br>";
                echo "Total Harga         Rp: " .$totalHarga;
                echo "<br><br>";
                echo "Total Diskon        Rp: " .$jumlahDiskon;
                echo "<br><br><br><br>";
                echo "Yang Harus Dibayarkan Rp " .$bayar;
?>


<br><br><br><br><br><br><br>
    <!--footer-->
    <footer>
        <div class="container">
            <small>THANK YOU</small>
        </div>
    </footer>
   

</body>
</html>
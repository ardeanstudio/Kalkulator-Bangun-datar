<html>
<head>
    <title>Program Menghitung</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="text/css" href="Ikon.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>
<h1 class="atas" style="font-size: 32px; color: dimgrey; ">Program Menghitung Luas</h1>
    <?php 
        if(isset($_POST['hitung'])){
            $Tbil1    =$_POST['bil1'];
            $Tbil2    =$_POST['bil2'];
            $Toperasi =$_POST['operasi'];

            //Switch, Case, dan Break didalam PHP. Switch adalah salah satu alternatif yang dapat digunakan untuk membuat pengkondisian, kemudian dari pengkondisian tersebut akan diambil sebuah tindakan.

            switch ($Toperasi) {
                case 'Persegipanjang':
                $label = "Persegi Panjang";
                $hasil = $Tbil1*$Tbil2;
                break;
                case 'Persegi':
                $label = "Persegi";
                $hasil = $Tbil1*$Tbil2;
                break;
                case 'Segitiga':
                $label = "Segitiga";
                $hasil = 1/2*$Tbil1*$Tbil2;
                break;
                case 'Lingkaran':
                $label = "Lingkaran";
                $hasil = 3.14*$Tbil1*$Tbil1;
            }
        }
    ?>
    <div class="kalkulator" align="center"> 
        <h4 class="judul" align="center">PROGRAM MENGHITUNG</h4>
        <form method="post" action="kalkulator.php"> 
            <input type="text" name="bil1" id="bil1" class="bil" required />
            <input type="text" name="bil2" id="bil2" class="bil" />
            <select id="operasi" class="opt" name="operasi" >
                <option value="Persegipanjang" align="center">Persegi Panjang</option>
                <option value="Persegi" align="center">Persegi</option>
                <option value="Segitiga" align="center">Segitiga</option>
                <option value="Lingkaran" align="center">Lingkaran</option>
            </select>
            <input type="submit" name="hitung" value="Hitung" class="tombol"/>            
            <input type="reset" value="Hapus" class="tombol" onclick="location.href = '?clear'"/></a> 
        </form>
            <?php if(isset($_POST['hitung'])){
            ?>
                <label class="judul"><?php echo $label; ?></label>
                <input type="text" value="<?php echo $hasil; ?>" class="hasil"/>
            <?php
            }
            else{
            ?>
                <input type="text" class="hasil"/>
            <?php
            }
            ?> 
    </div>
</body>
</html>
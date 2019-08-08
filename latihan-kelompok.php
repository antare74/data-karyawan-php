<!-- // id
// nama
// gaji
// cabang
// jabatan -->
<?php 
$karyawan1 = [
    ["Andri satu","500","7.000.000","Kelapa Gading","Frontend Developer"],
    ["Rudi dua","501","7.300.000","Kelapa Parut","Frontend Developer"],
    ["Karto tiga","502","7.100.000","Kelapa Kopyor","Backend Developer"],
    ["Marni empat","503","7.300.000","Kelapa Muda","UI/UX"],
    ["Bambang lima","504","7.220.000","Kelapa Es","Design"]
];
$karyawan2 = [
    ["Rono satu","576","5.000.000","Rutan Gading","Advertising"],
    ["Fitri dua","568","5.300.000","Rutan Parut","Market"],
    ["Purno tiga","676","5.100.000","Rutan Kopyor","Public Relation"],
    ["Yami empat","787","5.300.000","Rutan Muda","Sales"],
    ["Kuntet lima","679","5.220.000","Rutan Es","Sales"]
];
$karyawan3 = [
    ["Bomo satu","756","4.000.000","Duren Gading","Warehouse SAP"],
    ["Kinci dua","567","4.300.000","Duren Parut","Income SAP"],
    ["Santi tiga","878","4.100.000","Duren Kopyor","Outcome SAP"],
    ["Murni empat","567","4.300.000","Duren Muda","Attend SAP"],
    ["Eka lima","687","4.220.000","Duren Es","Admin"]
];
$menu = [["NO","NAMA","ID","GAJI","CABANG","PEKERJAAN"]
];
?>

<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
<body>
    <div class="container border">
    <h3 style="color:green">Divisi IT</h3>
    <table class="table">
    <?php
        $no = 0;
        foreach ($menu as list($tb1,$tb2,$tb3,$tb4,$tb5,$tb6)){
        echo "<tr style='color:blue'>";
            echo "<th scope='col'>$tb1</th>";
            echo "<th scope='col'>$tb2</th>";
            echo "<th scope='col'>$tb3</th>";
            echo "<th scope='col'>$tb4</th>";
            echo "<th scope='col'>$tb5</th>";
            echo "<th scope='col'>$tb6</th>";
        echo "</tr>";
        foreach ($karyawan1 as list($nama,$nrp,$gaji,$cabang,$jabatan)) {
            $no++;
            echo"<tr>";
                echo"<th>$no</th>";
                echo"<td>$nama</td>";
                echo"<td>$nrp</td>";
                echo"<td>$gaji</td>";
                echo"<td>$cabang</td>";
                echo"<td>$jabatan</td>";
            echo"</tr>";
            };
        };
    ?>
    </table>
    <h3 style="color:green">Divisi Digital Marketing</h3>
    <table class="table">
    <?php
        $no = 0;
        foreach ($menu as list($tb1,$tb2,$tb3,$tb4,$tb5,$tb6)){
        echo "<tr style='color:blue'>";
            echo "<th scope='col'>$tb1</th>";
            echo "<th scope='col'>$tb2</th>";
            echo "<th scope='col'>$tb3</th>";
            echo "<th scope='col'>$tb4</th>";
            echo "<th scope='col'>$tb5</th>";
            echo "<th scope='col'>$tb6</th>";
        echo "</tr>";
        foreach ($karyawan2 as list($nama,$nrp,$gaji,$cabang,$jabatan)) {
            $no++;
            echo"<tr>";
                echo"<th scope='row'>$no</th>";
                echo"<td>$nama</td>";
                echo"<td>$nrp</td>";
                echo"<td>$gaji</td>";
                echo"<td>$cabang</td>";
                echo"<td>$jabatan</td>";
            echo"</tr>";
            };
        };
    ?>
    </table>
    <h3 style="color: green">Divisi Administrasi</h3>
    <table class="table">
    <?php
        $no = 0;
        foreach ($menu as list($tb1,$tb2,$tb3,$tb4,$tb5,$tb6)){
        echo "<tr style='color:blue'>";
            echo "<th scope='col'>$tb1</th>";
            echo "<th scope='col'>$tb2</th>";
            echo "<th scope='col'>$tb3</th>";
            echo "<th scope='col'>$tb4</th>";
            echo "<th scope='col'>$tb5</th>";
            echo "<th scope='col'>$tb6</th>";
        echo "</tr>";
        foreach ($karyawan3 as list($nama,$nrp,$gaji,$cabang,$jabatan)) {
            $no++;
            echo"<tr>";
                echo"<th scope='row'>$no</th>";
                echo"<td>$nama</td>";
                echo"<td>$nrp</td>";
                echo"<td>$gaji</td>";
                echo"<td>$cabang</td>";
                echo"<td>$jabatan</td>";
            echo"</tr>";
            };
        };
    ?>
    </table> 
    </div>   
    </body>
</html>



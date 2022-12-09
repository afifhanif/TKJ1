<!DOCTYPE html>
<html>
<head>
    <title>Perpustakaan UNAF.com</title>
    <style type="text/css">
    body{
        background-image: url("Walpaper (1).jpg");
        background-color: #cccccc;
    }
    table{
        border-collapse: collapse;
        width: 25%;
        text-align: locale_filter_matches;
        font-family:'Comic Sans MS';
    }
    th {
        background-color: pink;
        color: white;
    }
    tr:hover {
        background-color: ;
    }
    </style>
</head>
</head>
<body>
    <h2 align="center">EDIT DATA BUKU</h2>
    <?php
    include 'koneksi.php';
    $id = $_GET['kodebuku'];
    $data = mysqli_query($koneksi,"select * from buku where kodebuku='$id'");
    while($d = mysqli_fetch_array($data)){
        ?>
        <form action="update.php" method="post">
            <table align="center" bgcolor="pink">
            <tr>
                    <td>Kode Buku</td>
                    <td>
                    <input type="number" name="kodebuku" value="<?php echo $d['kodebuku']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Nama Buku</td>
                    <td>
                    <input type="text" name="namabuku" value="<?php echo $d['namabuku']; ?>">
                    </td>
                </tr>
                    <td>Pengarang</td>
                    <td><input type="text" name="pengarang" value="<?php echo $d['pengarang']; ?>"></td>
                </tr>
                </tr>
                    <td>Harga</td>
                    <td><input type="number" name="harga" value="<?php echo $d['harga']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN" name="proses">
                    <input type="reset" value="BATAL" name="batal">
                    <input type="button" name="KEMBALI" value="KEMBALI" onclick="self.history.back()"></td>
                </tr> 
            </table>
         </from>
         <?php
    }
    ?>
</body> 
</html>

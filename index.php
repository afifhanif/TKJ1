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
        width: 80%;
        text-align: locale_filter_matches;
        font-family:'Comic Sans MS';
    }

    table, th, td {
        border: 2px solid black;
        background-color: white;
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
<body>
    <h2 align="center" style="color:white;font-family:comic sans MS">DAFTAR DATA BUKU PERPUSTAKAAN UNAF</h2>
    <form method="GET" action="index.php" style="text-align: center;">
    <label>Pencarian : </label>
    <input type="text" name="cari" value="<?php if(isset($_GET['cari'])){ echo $_GET['cari']; } ?>">
    <button type="submit">CARI</button>
    <a  href="tambah.php"><input  type="button" name="TAMBAH BUKU" value="TAMBAH BUKU " ></a>
    <input type="button" name="kembali" value="KEMBALI" onclick="self.history.back ()">
</form>
    
    <br/>
    <table border="1" align="center" width="100%">
        <tr>
            <th>Kode Buku</th>
            <th>Nama Buku</th>
            <th>Pengarang</th>
            <th>Harga</th>
            <th>OPSI</th>
        </tr>
        <tr>
        <?php
        include 'koneksi.php';
        if(isset($_GET['cari'])){
            $pencarian = $_GET['cari'];
            $query = "select * from buku where kodebuku like '%".$pencarian."%' or namabuku like '%".$pencarian."%' or
            pengarang like '%".$pencarian."%' or harga like '%".$pencarian."%' ";
        } else {
            $query = "select * from buku order by kodebuku asc";
        }

        $no = 1;
        $data = mysqli_query($koneksi,"$query");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr align="left">
                <td><?php echo $d['kodebuku']; ?></td>
                <td><?php echo $d['namabuku']; ?></td>
                <td><?php echo $d['pengarang']; ?></td>
                <td><?php echo $d['harga']; ?></td>
                <td align="center">
                    <a href="edit.php?kodebuku=<?php echo $d['kodebuku']; ?>"><button>EDIT DATA</button></a>
                    <a href="hapus.php?kodebuku=<?php echo $d['kodebuku']; ?>"><button>HAPUS DATA</button></a>
                </td>
            </tr>
            <?php    
        }
        ?>
    </table>
    
</body>
</html>
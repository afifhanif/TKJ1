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
        background-color: blue;
        color: white;
    }
    tr:hover {
        background-color: ;
    }
    </style>
</head>
<body>
    
<h2 align="center">TAMBAH DATA BUKU</h2>
    <form action="simpandata.php" method="post">
        <table align="center" bgcolor="pink" width="300">
        <tr>
                <td>kode Buku</td>
                <td><input type="number" name="kodebuku" size="20" placeholder="Masukkan kode Buku..."></td></td>
            </tr>
            <tr>
                <td>Nama Buku</td>
                <td><input type="text" name="namabuku" size="20" placeholder="Masukkan Nama Buku..."></td></td>
            </tr>
            <tr>
                <td>Pengarang</td>
                <td><input type="text" name="pengarang" size="20" placeholder="Masukkan Nama Pengarang..."></td>
            </tr>
            
            <tr>
                <td>Harga</td>
                <td><input type="number" name="harga" size="20" placeholder="Masukkan Harga..."></td>
            </tr>
            <tr>
                <td></td>
                <td>
                <input type="submit" value="SIMPAN" name="proses">
                <input type="reset" value="BATAL" name="batal">
                <input type="button" name="KEMBALI" value="KEMBALI" onclick="self.history.back()">
                </td>
                
            </tr> 
          
        </table>
    </from>
</body>
</html>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        input[type=text],select{
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=submit]{
            width: 10%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor : pointer;
        }
        input[type=submit]:hover{
            background-color: #45a49;
        }
        div{
            border-radius: 5px;
            padding:20px; 
            background-color: #f2f2f2;
        }
        .kotakform{
            width:80%;
            margin: 20px auto 20px auto;
        }
        h1{
            text-align: center;
            margin: 80px auto 0 auto;
        }
    </style>
    <title>sekolah</title>
</head>
<body>
    <h1>Data Peserta Didik</h1>
    <div class= "kotakform">
        <form action="form.php" method="POST">
            <label for=" nis">NIS</label>
            <input type="text" name="nis" id= "nis" placeholder="NIS anda">
            <label for=" nama">NAMA</label>
            <input type="text" name="nama" id= "nama" placeholder="NAMA LENGKAP anda">
            <label for=" addr">ALAMAT</label>
            <input type="text" name="alamat" id= "addr" placeholder="ALAMAT anda">
            <label for=" kelas">KELAS</label>
            <select name="kelas" id= "kelas">
                <option value="11">XI</option>
                <option value="12">XII</option>
            </select>
            <label for=" jurusan">JURUSAN</label>
            <select name="jurusan" id= "jurusan">
                <option value="RPL">RPL</option>
                <option value="TKJ">TKJ</option>
            </select>
            <input type = "submit" value="submit">
        </form>
    </div>
</body>
</html>
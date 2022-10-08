<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Perpustakaan</title>
</head>
<body>
    <h3>Tambah Data Mahasiswa</h3>
    <form action="prosestambah.php" method="post">
        Nama :
        <input type="text" name="nama" value="" class="form-control">
        NIM :
        <input type="number" name="nim" value="" class="form-control">
        ALAMAT :
        <input type="text" name="alamat" value="" class="form-control">
        USERNAME :
        <input type="text" name="username" value="" class="form-control">
        PASSWORD :
        <input type="password" name="password" value="" class="form-control"><br>
        <input type="submit" name="simpan" value="Tambah Mahasiswa" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>
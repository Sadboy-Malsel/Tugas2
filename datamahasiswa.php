<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Perpustakaan</title>
</head>
<body>
    <a style="margin-bottom: 10px" href="tambahmahasiswa.php" type="button" class="btn btn-info">Tambah Mahasiswa</a>
    <h3>Data Mahasiswa</h3>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>NIM</th>
                <th>ALAMAT</th>
                <th>USERNAME</th>
                <th>PASSWORD</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";
            $qry_mahasiswa=mysqli_query($koneksi, "select * from mahasiswa");
            $no=0;
            while($data_mahasiswa=mysqli_fetch_array($qry_mahasiswa)){
                $no++;
            
            ?>
            <tr class="table table-success table-striped">
                <td><?=$no?></td>
                <td><?=$data_mahasiswa['nama']?></td>
                <td><?=$data_mahasiswa['nim']?></td>
                <td><?=$data_mahasiswa['alamat']?></td>
                <td><?=$data_mahasiswa['username']?></td>
                <td><?=$data_mahasiswa['password']?></td>
                <td><a href="edit.php?id_mahasiswa=<?=$data_mahasiswa['id_mahasiswa']?>"
                    class="btn btn-success">Edit</a>
                    <a href="hapus.php?id_mahasiswa=<?=$data_mahasiswa['id_mahasiswa']?>"
                    onclick="return confirm('Apakah anda yakin menghapus data ini')"
                    class="btn btn-danger">Delete</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="../gambar/logo_pesat.png" type="image/x-icon">
</head>

<body>
    <div class="container">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
            <a class="navbar-brand" href="../">
                <img src="../gambar/logo_pesat.png" height="74px" class="d-inline-block align-text-center"> 
                <span class="h1">Data Siswa Pesat</span>
            </a>
            <div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup"> 
                    <div class="navbar-nav">
                        <a class="nav-link" aria-current="page" href="../">Home</a>
                        <a class="nav-link" href="../kelas">Kelas</a>
                        <a class="nav-link active" href=".">Siswa</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>



        <div class="row">
            <div class="col-md-12">
         <a href="add.php" class="btn btn-primary" style="float: right;">Tambah Data</a>
         <table class="table table-striped">
             <thead>
                 <tr>
                     <th>No</th>
                     <th>NIS</th>
                     <th>Nama</th>
                     <th>Tempat Lahir</th>
                     <th>Tanggal Lahir</th>
                     <th>Kelas</th>
                     <th>Aksi</th>
                </tr>
             </thead>
             <tbody>
                 <?php
                 require_once('../config.php');
                 $sql = "SELECT kelas.kelas, siswa.id as sid, siswa.nis, siswa.nama, siswa.tempat_lahir, siswa.tanggal_lahir FROM siswa JOIN kelas ON siswa.kelas_id = kelas.id";
                 $query = mysqli_query($config, $sql);
                 if (mysqli_num_rows($query) > 0) {
                     $no = 1;
                     while ($row = mysqli_fetch_assoc($query)) {
                         echo "<tr>";
                         echo "<td>" . $no . "</td>";
                         echo "<td>" . $row['nis'] . "</td>"; 
                         echo "<td>" . $row['nama'] . "</td>";
                         echo "<td>" . $row['tempat_lahir'] . "</td>";
                         echo "<td>" . $row['tanggal_lahir'] . "</td>";
                         echo "<td>" . $row['kelas'] . "</td>";
                         echo "<td>";
                         echo "<a href='edit.php?id=". $row['sid'] . "' class='btn btn-warning btn-sm'>Edit</a> &nbsp;";?>
                         <a href="delete.php?id=<?= $row['sid']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus Kelas akan menghapus Data Siswa yang dikelas tersebut\nYakin dihapus?')">Hapus</a>
                        </td>
                    </tr>
                    <?php
                    $no++;
                }
            }
            ?>
        </tbody>
        <tfoot class="table-dark">
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </tfoot>
    </table>
    
    </div>
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
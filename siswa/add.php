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

        <div class="card">
            <div class="card-body">
                <div class="mb-2">
                <span class="h2">Tambah Siswa</span>
                <a href="index.php" class="btn btn-primary" style="float: right;">Kembali</a>
            </div>
            <from action="save.php" method="post">
            <div class="input-group mb-3">
                <input type="number" name="nis" class="form-control" placeholder="Nomor Induk Siswa*" aria-label="nis" aria-describedby="basic-addonl" required autofocus>
            </div>
            <div class="input-group mb-3">
                <input type="text" name="nama" class="form-control" placeholder="Nama Siswa*" aria-label="nama" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir (Kabupaten/Kota)" aria-label="tempat_lahir" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" aria-label="tanggal_lahir" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <select name="kelas_id" class="form-control" require>
                    <option value="">Pilih Kelas</option>
                    <?php
                    require_once('../connfig.php');
                    $sql = "SELECT * FROM kelas ORDER BY kelas ASC";
                    $query = mysqli_query($config, $sql);
                    while ($rk = mysqli_fetch_assoc($query)) {
                        echo "<option value='$rk[id]'>$rk[kelas]</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="input-group mb-3">
                <input type="reset" class="btn btn-warning btn-sm">&nbsp;&nbsp;
                <input type="submit" name="simpan" class="btn btn-primary btn-sm" value="Simpan">
            </div>
        </form>
    
    </div>
</div>

        
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
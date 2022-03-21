<?php
if(isset($_GET['id'])) {
    require_once("../config.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM siswa WHERE id='$id'";
    $query = mysqli_query($config, $sql);
    if($query) {
        header('location: index.php');
    } else {
        echo "Data gagal dihapus";
    }
} else {
    // echo "JANGAN AKSES LANGSUNG DONG": 
    header('location: index.php');
}
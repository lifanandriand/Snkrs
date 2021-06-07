<?php
// $conn = mysqli_connect("sql107.epizy.com", "epiz_28816358", "5TgQ2ugEPjmn", "epiz_28816358_snkrsdb");
$conn = mysqli_connect("localhost", "root", "", "snkrsdb");
function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row=mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $harga = htmlspecialchars($data["harga"]);
    $detail = htmlspecialchars($data["detail"]);
    
    $gambar = upload();
    if(!$gambar){
        return false;
    }

    $query = "INSERT INTO produk
    VALUE
    ('', '$nama', '$harga', '$gambar', '$detail')
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if($error === 4){
        echo"<script>
        alert('pilih gambar terlebih dahulu!');
        </script>";
        return false;
    }

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'jfif'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower (end($ekstensiGambar));
    if(!in_array($ekstensiGambar,$ekstensiGambarValid)){
        echo "<script>
        alert('yang anda upload bukan gambar!');
        </script>";
        return false;
    }

    if($ukuranFile > 1000000){
        echo "<script>
        alert('ukuran gambar terlalu besar!');
        </script>";
        return false;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar; 

    move_uploaded_file($tmpName, '../Images/' . $namaFileBaru);
    return $namaFileBaru;
}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM produk WHERE id_sepatu = '$id'");
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $harga = htmlspecialchars($data["harga"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);
    $detail = htmlspecialchars($data["detail"]);
    
    if($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE produk SET 
    nama = '$nama', 
    harga = '$harga',
    gambar = '$gambar',
    detail = '$detail'
    WHERE id_sepatu = '$id'";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword){
    $query = "SELECT * FROM produk WHERE nama LIKE '%$keyword%' OR harga LIKE '%$keyword%'";
    return query($query);
}

?>
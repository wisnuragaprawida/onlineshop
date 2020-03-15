<?php 
 $conn = mysqli_connect("localhost","root","","phpdasar");

 function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
return $rows;
}


function tambah($data){

    global $conn;
    $nama = $_POST["nama"];
    $nik = $_POST["nik"];
    $jurusan = $_POST["jurusan"];

    $query= "INSERT INTO datasiswa VALUES('','$nama','$nik','$jurusan') ";

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);


}
?>
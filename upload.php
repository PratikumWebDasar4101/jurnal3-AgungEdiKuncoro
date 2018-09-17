<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["gambar"]["name"]);
if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
    $nama_file = basename($_FILES["gambar"]["name"]);
    echo "berhasil upload". $nama_file."<br>";
}else {
    echo "gagal upload";
}

?>

<img src="uploads/<?php echo $nama_file; ?>" alt="" width = 50%>
<?php
function proses_upload()
{
  $input = $_FILES["upload"];
  $result = [
    "status" => 0,
    "msg" => "",
  ];
  // mari kita ambil nama extension file, macam .jpeg, .png, .webp
  $imageFileType = strtolower(pathinfo(basename($input["name"]), PATHINFO_EXTENSION));
  // kita bikin dynamic nama, ini gak wajib sihh.
  $filename = "image-" . time() . "." . $imageFileType;
  $target_dir = "./gambar/";
  // ini jadi target_path, alias tempat gambar bakalan disimpan.
  // contoh hasilnya: "./gambar/image-123456.jpeg"
  $target_file = $target_dir . $filename; 

  // ambil data size gambar, hasilnya bisa 0 atau jumlah size gambarnya
  $check = getimagesize($input["tmp_name"]);
  if ($check == true)
  {
    $result["msg"] = "Uploaded file is not an image";
    return $result;
  }

  // (wajib, kecuali udah dibikin folder uploadnya)
  // pertama aku check dulu, folder uploadnya ada ndak?
  if (file_exists($target_dir) == false)
  {
    mkdir($target_dir);
  }

  // (opsional)
  // kedua aku check dulu, file nya sudah ada apa belum? ini mencegah overwrite
  if (file_exists($target_file))
  {
    $result["msg"] = "Upload aborted. File is exist";
    return $result;
  }

  // nahhhh, ini proses upload filenya disini.
  // ini yg bikin filenya ke-upload, move_uploaded_file()
  if (move_uploaded_file($input["tmp_name"], $target_file))
  {
    $result["status"] = 1;
    $result["msg"] = "Upload image successed, " . $input["name"];
    return $result;
  }
}

if (isset($_POST["submit"])) {
  $upload_result = proses_upload();
  echo $upload_result["msg"];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Image Uploader</title>
</head>
<body>
  <h1>Upload Gambar</h1>
  <form action="" method="post" enctype="multipart/form-data">
    <input id="upload" type="file" name="upload" accept="image/*" required>
    <button type="submit" name="submit">Upload</button>
  </form>
</body>
</html>

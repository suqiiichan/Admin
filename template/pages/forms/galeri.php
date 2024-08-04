<?php
// (opsional)
// function validasi gambarnya, itu gambar apa bukan.
function IS_IMAGE(string $name)
{
  $allowed_ext = ["."];
  $ext = pathinfo($name, PATHINFO_EXTENSION);

  $allowed = array_search($ext, $allowed_ext) != false;
  return $allowed;
}

// ngambil file-file dengan extensi tertentu di folder gambar. (extension liat line 6)
$image_list = array_filter(glob("gambar/*"), "IS_IMAGE");
/* hasil image list */
echo "<pre>";
echo "Image List: \n";
print_r($image_list);
echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Galeri</title>
  <style>
  .image {
    width: 200px;
  }
  </style>
</head>
<body>
  <h1>Galeri</h1>
<?php
  foreach ($image_list as $img):
    $base_server = "";
    # mau pake absolute path? uncomment code di bawah.
    # $base_server = "http://localhost/projects/image-upload-fs/";
    $img = $base_server . $img;

    # sedikit penjelasan
    # "gambar/contoh_file.jpg" adalah relative path
    # "http://localhost/gambar/contoh_file.jpg" adalah absolute path
?>
  <img src="<?= $img ?>" class="image">
<?php
  endforeach;
?>
</body>
</html>

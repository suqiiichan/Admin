<?php
function IS_IMAGE(string $name)
{
  $allowed_ext = ["."];
  $ext = pathinfo($name, PATHINFO_EXTENSION);

  $allowed = array_search($ext, $allowed_ext) != false;
  return $allowed;
}

function to_absolute_path(string $name)
{
  $dir = "http://localhost/projects/image-upload-fs/gambar/";
  $path = $dir . basename($name);
  return $path;
}

$image_list = array_filter(glob("../gambar/*"), "IS_IMAGE");

# Karna ini API, untuk menghindari kesalahan PATH URL gambar yang tidak tepat.
# Kita harus mengubah value $image_list yang masih berbentuk RELATIVE PATH
# Menjadi ABSOLUTE PATH.
# OLD URL = "../gambar/contoh_gambar.jpg"
# NEW URL = "http://localhost/projects/image-upload-fs/gambar/contoh_gambar.jpg"
$image_list = array_map("to_absolute_path", $image_list);

header("Content-Type:application/json");
echo json_encode($image_list);
?>

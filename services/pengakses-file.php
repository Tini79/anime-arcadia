<?php
if (isset($_POST['submit'])) {
  $target_dir = dirname(__DIR__) . '/public/uploads/';
  $target_file = $target_dir . basename($_FILES['file']['name']);
  $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  if ($file_type !== 'txt') {
    echo 'Only txt file is allowed! ';
    return;
  }

  if (file_exists($target_file)) {
    echo 'File already exists! Try to Upload another file!';
    return;
  }

  if ($_FILES['file']['size'] >= 1000000) {
    echo 'File cannot be greater than 1mb!';
    return;
  }

  if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
    $converted_html = file_get_contents($target_file);
    echo $converted_html;
  } else {
    echo 'Failed convert txt file!';
  }
}

if (isset($_POST['submitWeb'])) {
  $website_link = $_POST['website-link'];
  $html = file_get_contents($website_link);
  $text_content = $html;

  // Generate unique filename
  $file_path = generateUniqueFilename(dirname(__DIR__) . '/public/websites/web-content.txt');

  file_put_contents($file_path, $text_content);
  echo "<script>alert('Berhasil diunduh'); window.location.href='../pengakses-file.php'</script>";
  exit();
}

// Function to generate unique filename
function generateUniqueFilename($file_path)
{
  $original_file_path = $file_path;
  $count = 1;
  while (file_exists($file_path)) {
    $file_path = $original_file_path . $count . '.txt';
    $count++;
  }
  return $file_path;
}
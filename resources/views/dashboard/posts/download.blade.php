<?php
$file = '"/posts/{{ $post->slug }}"file.pdf'; // Ganti dengan path file PDF yang ingin diunduh

if (file_exists($file)) {
  header('Content-Description: File Transfer');
  header('Content-Type: application/pdf');
  header('Content-Disposition: attachment; filename=' . basename($file));
  header('Content-Length: ' . filesize($file));
  readfile($file);
  exit;
} else {
  echo 'File tidak ditemukan.';
}

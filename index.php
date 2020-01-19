<?php
$directory = 'input/';
foreach (glob($directory."*.jpg") as $key => $filename) {
    $file = realpath($filename);
    rename($file, str_replace($filename, "output/office-$key.jpg", $file));
}

echo "All files renamed successfully";

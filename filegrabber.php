<?php
# Define the file you want to download
$target = "http://54.229.13.50:81/test.html";
$file_handle = fopen($target, "r");

# Fetch the file
while (!feof($file_handle))
    echo fgets($file_handle, 4096);
fclose($file_handle); ?>

<?php
# Define the file you want to download
$target = "http://176.34.157.182:81";
$file_handle = fopen($target, "r");

# Fetch the file
while (!feof($file_handle))
    echo fgets($file_handle, 4096);
fclose($file_handle); ?>

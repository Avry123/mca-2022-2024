<?php 

function use_fgetc() {
    $fp = fopen('file1.txt','r');
    echo '<h1>Reading with fgetc </h1>';
    while (!feof($fp)) {
        echo fgetc($fp);
    }
    fclose($fp);
}

function use_fwrite() {
    // $fp = fopen('file1.txt', 'w');

    // $fp = fopen('file1.txt', 'a/w');
   
      $fp = fopen('file1.txt', 'w');

    echo '<h1>Writing into File1.txt</h1>';

    fwrite($fp, 'I love Luka Doncic');

    fclose($fp);
}

// use_fwrite();

function readCsv() {
    $fp = fopen('excel1.csv', 'r');
    while (!feof($fp)) {
        echo '<h1>' print_r(fgetcsv($fp)), '</h1>';
    }
    fclose($fp);
}

readCsv();

if (file_exists('file1.txt')) {
    echo '<h1> Trying to read file1.txt' . readfile('file1.txt') . '</h1>';
    if (filesize('file1.txt') == 0) {
        echo '<h1>File size is ' . 0 . '</h1>';
    } else {
        echo '<h1>File size is ' . filesize('file1.txt') . 'bytes</h1>';
        $fh = fopen('file1.txt', 'r');
        $stats = fstat($fh);
        echo '<h1>File Info </h1>';
        // Steps to read a file
        // File is not empty
        // read contents by choosing one out of readfile()/file _get_content(),fgets(),fget()
        // close the file
        echo '<h1>File contents are:' . file_get_contents('file1.txt', filesize('file1.txt')) . '</h1>';
        fclose($fh);
    }
} else {
    echo '<h1>File Does not exists.</h1>';
}

?>
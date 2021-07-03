<?php

$connect = mysqli_connect('localhost', 'root', '', 'latihan');

if($connect == false){
    exit("Gagal koneksi database...");
}
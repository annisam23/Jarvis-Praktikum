<?php
//string
$nama = "Nisa";

echo "Hello nama saya $nama";

echo "<br>";

//var_dump($nama);
echo str_replace("Nisa", "Ica", $nama);

echo "<br><br>";

//integer
$umur = 20;

echo $umur + 3 . "<br>";

var_dump($umur);

echo "<br><br>";


//float
$nilai = 3.72;

var_dump($nilai);

echo "<br><br>";

//boolean
$is_student = true;

var_dump($is_student);
echo "<br><br>";

//Array biasa
$mahasiswa1 = ["Nisa", 20, 3.90, false];

var_dump($mahasiswa1);
echo "<br><br>";

echo "Umur saya $mahasiswa1[1]";
echo "<br><br>";

//array asosiatif
$mahasiswa3 = [
    "nama" => "Annisa",
    "umur" => 20,
    "nilai" => 4.0,
    "is_active" => true
];

var_dump($mahasiswa3);

echo "<br><br>";
echo "Hello,saya" . $mahasiswa3['nama'];

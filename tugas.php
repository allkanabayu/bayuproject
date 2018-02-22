<h2>Tugas Web Programing</h2>

<?php
//nama  : Alkana Bayu Augustta
//kelas : 4D
//nim   : 16090085

$nama = "Alkana Bayu Augustta";
$semester = 4;
$jurusan = "Teknik Informatika";
$matakuliah = "Web Programing";

echo "Nama          : $nama"; echo "<br>";
echo "Semester      : $semester"; echo "<br>";
echo "jurusan       : $jurusan"; echo "<br>";
echo "Mata Kuliah   : $matakuliah"; echo "<br>";
echo "<br>";

var_dump($nama); echo "<br>";
var_dump($semester); echo "<br>";
var_dump($jurusan); echo "<br>";
var_dump($matakuliah); echo "<br>";
echo "<br>";

function tampil() {
    global $matakuliah;
    global $jurusan;    
    global $nama;
    global $semester;
    
    echo "<h3>Nama  : $nama<h3>";
    echo "<h3>Semester  : $semester<h3>";
    echo "<h3>Jurusan   : $jurusan<h3>";
    echo "<h3>Mata Kuliah  : $matakuliah<h3>";

}
tampil(); 

?>
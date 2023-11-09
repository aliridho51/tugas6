<?php
 $nilai=75; //Nilai Siswa Yang Diinputkan

 if ($nilai >= 90) { //Jika Nilai Siswa Lebih Dari 90 Maka Menampilkan Kondisi 1
  echo "A"; //Kondisi 1
 }else if ($nilai >= 80) { //Jika Nilai Siswa Lebih Dari 80 Maka Menampilkan Kondisi 2
  echo "B"; //Kondisi 2
 }else if ($nilai >= 70) { //Jika Nilai Siswa Lebih Dari 70 Maka Menampilkan Kondisi 4
  echo "C"; //Kondisi 3
 }else if ($nilai >= 60) { //Jika Nilai Siswa Lebih Dari 60 Maka Menampilkan Kondisi 4
  echo "D"; //Kondisi 4
 }else { //Jika Nilai Siswa Kurang Dari 90 Maka Menampilkan Kondisi 5
  echo "E"; //Kondisi 5
 }
?>
<?php
function deret_finbonacci($deret){
// siapkan 2 angka awal
  $angka_sebelumnya=0;
  $angka_sekarang=1;
  
  //simpan string angka awal
   $hasil = " ";

  for ($i=1; $i<$deret; $i++)
  {
    // hitung angka fibonacci
    $output = $angka_sekarang + $angka_sebelumnya;
    // hasilnya ditambahkan ke string $hasil
    if ($output < $deret) {
       $hasil = $hasil." $output";
   }
    //siapkan angka untuk perhitungan berikutnya
   $angka_sebelumnya = $angka_sekarang;
   $angka_sekarang = $output;
}
return $hasil;
}

function oddSum($jumlah)
{
  // siapkan 2 angka awal
  $angka_sebelumnya=0;
  $angka_sekarang=1;
  
  //simpan string angka awal
  $genap = 0;

  for ($i=1; $i<$jumlah; $i++)
  {
    // hitung angka fibonacci
    $output = $angka_sekarang + $angka_sebelumnya;
    // hasilnya ditambahkan ke string $hasil
    if ($output < $jumlah) {
        if ($output % 2 == 1) {
           $genap = $genap + $output;
       }
   }
    //siapkan angka untuk perhitungan berikutnya
   $angka_sebelumnya = $angka_sekarang;
   $angka_sekarang = $output;
}
return $genap;
}

function genap($nilai_genep)
{
  // siapkan 2 angka awal
  $angka_sebelumnya=0;
  $angka_sekarang=1;
  
  //simpan string angka awal
  $hasil = " ";

  for ($i=1; $i<$nilai_genep; $i++)
  {
    // hitung angka fibonacci
    $output = $angka_sekarang + $angka_sebelumnya;
    // hasilnya ditambahkan ke string $hasil
    if ($output < $nilai_genep) {
        if ($output % 2 == 1) {
          if ($i == 1) {
            $hasil = $hasil." $output";
          }else{
           $hasil = $hasil." + $output";
       }
          }
   }
    //siapkan angka untuk perhitungan berikutnya
   $angka_sebelumnya = $angka_sekarang;
   $angka_sekarang = $output;
}
return $hasil;
}

function test($akhirr)
{
  // siapkan 2 angka awal
  $angka_sebelumnya=0;
  $angka_sekarang=1;
  
  //simpan string angka awal
  $hasil = " ";

  for ($i=0; $i< $akhirr; $i++)
  {
    // hitung angka fibonacci
    $output = $angka_sekarang + $angka_sebelumnya;
    // hasilnya ditambahkan ke string $hasil
    if ($output < $akhirr) {
           $hasil = "$output";
       
          
   }
    //siapkan angka untuk perhitungan berikutnya
   $angka_sebelumnya = $angka_sekarang;
   $angka_sekarang = $output;
}
return $hasil;
}
$nilai = 100;
$akhir = test($nilai);
echo "TUGAS NOMOR 5 BAGIAN 'B'<br><br>";
echo "oddSum(".$nilai."):<br>";
echo "Deret Finbonacci: ";
echo deret_finbonacci($nilai);
echo " (".$akhir." kurang dari ".$nilai.")<br>";
echo genap($nilai);
echo " = ";
echo oddSum($nilai);
echo "<br>";
?>

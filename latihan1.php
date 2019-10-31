<?php
/**
*
*/
class akademik
{
  public static $dosen="Andri Ilham";
  public static function show_dosen(){
    return "Tampilkan Nama Dosen".self::$dosen;
  }
}
/**
*
*/
class mahasiswa extends akademik{
  public static $mahasiswa="Anggi";

  function show_mahasiswa(){
    return "Tampilkan Nama Mahasiswa" .self::$mahasiswa;
  }
}

// $nama = new mahasiswa();
// echo $nama->show_dosen();
// echo "</br>";
// echo $nama->show_mahasiswa();

echo akademik::show_dosen();
echo "</br>";
echo mahasiswa::show_mahasiswa();
?>

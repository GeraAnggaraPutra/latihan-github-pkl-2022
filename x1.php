<?php
class manusia{
    public static $nama;

    public static function aksi($name){
        echo "Nama saya ".$name;
    }
}

echo manusia::$nama = "Mic";
echo "<br>";

class boy extends manusia{
    
}
boy::aksi("asep");

/////////////////////////////////////

abstract class hewan{
    abstract protected 
} 
?>
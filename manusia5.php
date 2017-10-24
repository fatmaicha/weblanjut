<?php
class Manusia5
{
    //menentukan property dengan private
    private $nama = "malas ngoding";    
    
    //method public
    public function tampilkan_nama(){
        return "Nama saya " .$this->nama;
    }
}
$manusia5 = new manusia5();
echo $manusia5->tampilkan_nama();
?>

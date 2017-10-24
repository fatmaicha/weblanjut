<?php 
class Manusia6{
    public $nama_saya;  
    function berinama($saya){
        $this->nama_saya=$saya;
    }   
}
class Teman extends Manusia6{
    public $nama_teman;
    function berinamateman($teman){
        $this->nama_teman=$teman;
    }
    function namasaya($sayalagi){
        $this->nama_teman=$sayalagi;
    }
    function getnamasaya(){
       return $this->nama_teman;
    }
}
$malasngoding = new teman;
$malasngoding->berinama(" MALAS NGODING ");
$malasngoding->berinamateman(" chacha ");
echo "Nama teman Saya :" . $malasngoding->nama_saya . "<br/>";
$malasngoding->namasaya("SREGEP NGODING")
echo "Nama saya sekarang: " . $malasngoding->getnamasaya();
?>


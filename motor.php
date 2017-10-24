<?php 
class motor {
public $nama_merk ;
public $tipe ;
public $harga ;
public $kecepatan ;
public $warna ;
	public function __construct ($nama_merk,$tipe,$harga,$kecepatan,$warna)		{
		
		$this->nama_merk = $nama_merk ;
		$this->tipe= $tipe ;
		$this->harga = $harga ;
		$this->kecepatan = $kecepatan ;
		$this->warna = $warna ;

}
}

$motor = new motor ('honda','cbr150r','21000000','150cc','Biru') ;
echo "<center> =============================<br> <center> Motor </center>============================= <br>" ;
echo " Nama_merk = ".$motor->nama_merk."<br>" ;
echo " Tipe = ".$motor->tipe."<br>" ;
echo " Harga = ".$motor->harga."<br>" ;
echo " Kecepatan = ".$motor->kecepatan."<br>" ;
echo " Warna = ".$motor->warna."<br>" ;
?>


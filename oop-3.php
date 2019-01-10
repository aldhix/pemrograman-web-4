<?php
Class OrangTua {
	
	protected $nama = 'Andi' ;
	protected $jenisKelamin = "Laki-Laki";

	public function setData($nm, $jk){
		$this->nama = $nm;
		$this->jenisKelamin = $jk;
	}

	public function makan() {
		return "{$this->nama} sedang makan <br>";
	}
}

Class AnakOrang extends OrangTua {

	public function biodata() {
		return "Nama : $this->nama <br>".
			   "Jenis Kelamin : {$this->jenisKelamin} <br>".
			   "===========================================<p>";
	}
}

$anak = new AnakOrang;
$anak->setData('Amanda','Perempuan');
echo $anak->biodata();
echo $anak->makan();
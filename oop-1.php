<?php

Class Orang {

	public $nama = 'Andi' ;
	public $jenisKelamin;

	public function makan(){
		return $this->nama.' sedang makan <br>';
	}

}

$saya = new Orang;
$saya->nama = "Amanda";
echo $saya->makan();

<?php
 	class Segitiga_model extends CI_Model {
 		// mendefinisikan konstanta untuk nilai PI
 			const ST = 0.5;
 		// atribut model
 			private $alas;
 			// metode untuk menentukan nilai $radius
 				public function set_alas($a) {
 				$this->alas = $a;
 				}
 			// metode untuk mengambil nilai $radius
 				public function get_alas() {
 				return $this->alas;
 				}
 			private $tinggi;
 			// metode untuk menentukan nilai $radius
 				public function set_tinggi($t) {
 				$this->tinggi = $t;
 				}
 			// metode untuk mengambil nilai $radius
 				public function get_tinggi() {
 				return $this->tinggi;
 				}
		// metode untuk menghitung luas lingkaran
 			public function hitung_luas() {
 			return self::ST * $this->alas * $this->tinggi;
 		}

	 }
?>

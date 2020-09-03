<?php
class produk{
	public  $namabarang;
			$merk;
			$harga;
}
 	public function getCetak(){
 	return "$this->namabarang,$this->merk,$this->harga";
 	}
 	public function  __construct($namabarang="nama barang",$merk="merk",$harga=0){
 	$this -> namabarang =$namabarang;
 	$this -> merk =$merk;
 	$this -> harga =$harga;
 	}
 }
 class cetakinfoproduk{
	 public function cetakinfo(produk $produk){ 
		 $str="{$produk->namabarang"}, {$produk->getCetak()}";
		 return $str;
	 }
 }

 $produk1 = new produk("laptop","lenovo",7000000);
 $produk2 = new produk("flasdisk","sandisk",100000);
 $produk3 = new produk("macbook","apple",12000000);
 $produk4 = new produk("mouse","logitech",200000);
 $infoproduk = new cetakinfoproduk();

echo "nama barang laptop : " . $produk1 ->getCetak(); 
echo "<br>";
echo "nama barang aksesoris: " . $produk2 ->getCetak(); 
echo "<br>";
echo "nama barang laptop : " . $produk3 ->getCetak(); 
echo "<br>";
echo "nama barang aksesoris: " . $produk4 ->getCetak(); 
echo "<br>";
echo $infoproduk->cetakinfo($produk4);
?>
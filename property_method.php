<?php


class Product
{
    public $judul = "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0;

    public function sayHello()
    {
        return "Hello Word";
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

// $product1 = new Product();
// $product1->judul = "Naruto";
// var_dump($product1);
// $product2 = new Product();
// $product2->judul = "Uncherted";
// var_dump($product2);


$product3 = new Product();
$product3->judul = "Naruto";
$product3->penulis = "Murtaki";
$product3->penerbit = "Takiya";
$product3->harga = 100000;

echo "Komik: $product3->judul, $product3->penulis";
echo "<br>";
echo $product3->getLabel();

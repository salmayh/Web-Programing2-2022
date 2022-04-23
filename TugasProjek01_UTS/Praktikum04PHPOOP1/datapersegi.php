<?php

class persegi
{
  var $panjang;
  var $lebar;
  function __construct($p, $l)
  {
    $this->panjang = $p;
    $this->lebar = $l;
  }
  function getLuas()
  {
    return  $this->panjang * $this->lebar;
  }
  function getKel()
  {
    return 2 * ($this->panjang + $this->lebar);
  }
}


$per1 = new persegi(4, 2);
$per2 = new persegi(12, 2);

echo 'Luas pesegi panjang 1: ' . $per1->getLuas();
echo '<br>Keliling pesegi panjang 1: ' . $per1->getKel();
echo '<br><br>Luas pesegi panjang 2: ' . $per2->getLuas();
echo '<br>Keliling pesegi panjang 2: ' . $per2->getKel();


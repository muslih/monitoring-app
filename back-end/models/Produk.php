<?php 

class Produk extends Activerecord\Model{

  static $has_many = array(
     array('permintaan')
  ); 

  public static $table_name = 'produk';
}
?>
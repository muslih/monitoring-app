<?php 

class Permintaan extends Activerecord\Model{

  public static $table_name = 'permintaan';

  static $has_many = array(
     array('statuspermintaan')
  ); 

  static $belongs_to = array(
     array('pelanggan'),
     array('produk'),
  ); 

  public function before_create(){
    $this->dibuat = Date('d-m-Y H:i:s', strtotime('now'));
  } 

  // public function after_create(){
  //   Statuspermintaan::create(array(
  //     "id_permintaan" => $this->id
  //   ))
  // } 
       

}

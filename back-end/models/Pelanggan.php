<?php 

class Pelanggan extends Activerecord\Model{

  public static $table_name = 'pelanggan';

  static $belongs_to = array(
     array('gender'),
     array('tipe')
  ); 

    static $has_many = array(
     array('permintaan')
  ); 


  public function before_create(){
    $this->dibuat = Date('d-m-Y H:i:s', strtotime('now'));
  } 

  public function before_update(){
    $this->diupdate = Date('d-m-Y H:i:s', strtotime('now'));
  } 
}

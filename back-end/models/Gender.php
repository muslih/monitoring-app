<?php 
class Gender extends Activerecord\Model{

  public static $table_name = 'gender';

  static $has_many = array(
     array('pelanggan')
  );  

  public function before_create(){
    $this->dibuat = Date('d-m-Y H:i:s', strtotime('now'));
  } 

}

<?php 
class Gender extends Activerecord\Model{

  public static $table_name = 'tipe';

  public function before_create(){
    $this->dibuat = Date('d-m-Y H:i:s', strtotime('now'));
  } 

}

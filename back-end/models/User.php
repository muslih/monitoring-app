<?php 
class User extends Activerecord\Model{

  public static $table_name = 'user';

  public function before_create(){
    $this->dibuat = Date('d-m-Y H:i:s', strtotime('now'));
  } 

}

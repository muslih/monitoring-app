<?php 
class User extends Activerecord\Model{

  public static $table_name = 'user';

  public function before_create(){
    $this->dibuat = Date('d-m-Y H:i:s', strtotime('now'));
  } 

  public function before_update(){
    $this->diupdate = Date('d-m-Y H:i:s', strtotime('now'));
  } 

}

<?php 

class Permintaan extends Activerecord\Model{

  public static $table_name = 'permintaan';

  public function before_create(){
    $this->date_added = Date('d-m-Y H:i:s', strtotime('now'));
  } 

  public function before_update(){
    $this->date_modified = Date('d-m-Y H:i:s', strtotime('now'));
  } 
}
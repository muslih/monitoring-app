<?php 
class Status_permintaan extends Activerecord\Model{

  public static $table_name = 'status_permintaan';

  public function before_create(){
    $this->dibuat = Date('d-m-Y H:i:s', strtotime('now'));
  } 

}

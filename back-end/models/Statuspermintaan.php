<?php 
class Statuspermintaan extends Activerecord\Model{

  public static $table_name = 'statuspermintaan';

  static $belongs_to = array(
     array('permintaan')
  ); 

  public function before_create(){
    $this->dibuat = Date('d-m-Y H:i:s', strtotime('now'));
  } 

}

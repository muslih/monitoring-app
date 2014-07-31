<?php 
class Userlog extends Activerecord\Model{

  public static $table_name = 'user_log';

  static $belongs_to = array(
     array('user')
  ); 

  public function before_create(){
    $this->waktu = Date('d-m-Y H:i:s', strtotime('now'));
  } 

}

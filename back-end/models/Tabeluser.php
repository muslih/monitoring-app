<?php 
class Tabeluser extends Activerecord\Model{

  public static $table_name = 'tabel_user';

  public function before_create(){
    $this->dibuat = Date('d-m-Y H:i:s', strtotime('now'));
  } 

}

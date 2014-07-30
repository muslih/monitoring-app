<?php 
class Tipe extends Activerecord\Model{

  public static $table_name = 'tipe';

  static $has_many = array(
     array('pelanggan')
  ); 

}

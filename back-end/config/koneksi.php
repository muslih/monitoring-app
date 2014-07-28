<?php 

require_once 'php-activerecord/ActiveRecord.php';
// require_once 'config.php';
ActiveRecord\Config::initialize(function($cfg)
{
  $cfg->set_model_directory('models');
  $cfg->set_connections(array(
    'development' => 'mysql://root@localhost/monitoring'
    ));
  // $cfg->set_connections(array(
  //   'development' => 'mysql://root@localhost/b_entertaiment'
  //   ));
});
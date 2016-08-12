<?php 

require_once ('vendor/php-activerecord/php-activerecord/ActiveRecord.php');
  
ActiveRecord\Config::initialize(function($cfg) {
	$cfg->set_model_directory('model');
    $cfg->set_connections(
    	array('development' => 'mysql://root:@localhost/hxcursos_php_active_record')
    );
 });

echo "PHP ActiveRecord configurado com sucesso!<hr>";

/******************************************************/
/******************************************************/

/* Modo 1 */
$user = new User();
$user->name = 'User1';
if($user->save()) {
	echo "Modo 1 - Registro salvo com sucesso!<hr>";
}

/* Modo 2 */
$user2 = array(
	'name' => 'user2'
);
$user = User::create($user2);
if(isset($user)) {
	echo "Modo 2 - Registro salvo com sucesso!<hr>";	
}



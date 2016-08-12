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
echo "Method 'All' ou find('all')<br><br>";
$users = User::all();
foreach ($users as $user) {
	echo $user->name."<br>";
}
echo "<hr>";
/******************************************************/
echo "Method 'find(id)'<br><br>";
$user = User::find(1);
echo $user->name."<br>";
echo "<hr>";
/******************************************************/
echo "Method 'find_by_'field_name'<br><br>";
$user = User::find_by_id(2);
echo $user->name."<br>";
echo "<hr>";
/******************************************************/
echo "Method 'find('all', array('conditions' => ' field_name CONDITION field_value')<br><br>";
$user = User::find('all', array('conditions' => array('name = ?', '%d%')));
foreach ($users as $user) {
	echo $user->name."<br>";
}
echo "<hr>";
/******************************************************/
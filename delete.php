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

$id = 3;
$user = User::find_by_id($id);

if(isset($user)) {
	$user->delete();
	echo "Registro excluido com sucesso!<br>";
} else {
	echo "Nenhum registro encontrado (#id:$id)!<br>";
}
/******************************************************/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HXCursos - Curso PHP ActiveRecord</title>
</head>
<body>
	<?php require_once('menu.php'); ?>
</body>
</html>
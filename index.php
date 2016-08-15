<?php 

require_once 'vendor/php-activerecord/php-activerecord/ActiveRecord.php';
  
ActiveRecord\Config::initialize(function($cfg) {
	$cfg->set_model_directory('model');
 	$cfg->set_connections(
 		array('
 			development' => 'mysql://root:@localhost/hxcursos_php_active_record'
 		)
 	);
});
echo "PHP ActiveRecord configurado com sucesso!<hr>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HXCursos - Curso PHP ActtiveRecord</title>
</head>
<body>
	<?php require_once('menu.php'); ?>
</body>
</html>
<?php
$f3 = require('/home/'.get_current_user().'/AboveWebRoot/fatfree-master/lib/base.php');

// autoload Controller class(es) and anything hidden above web root, e.g. DB stuff
$f3->set('AUTOLOAD','autoload/;/home/'.get_current_user().'/AboveWebRoot/autoload/');

$db = DatabaseConnection::connect();		// defined as autoloaded class in AboveWebRoot/autoload/
$f3->set('DB', $db);

$f3->set('DEBUG',3);		// set maximum debug level
$f3->set('UI','ui/');		// folder for View templates
?>

<?

$config = Config::singleton();

	$config->set('lang','esp');
	$config->set('base_title','magma');
$config->set('base_url','//localhost/alphas/magma-web/admin/');
$config->set('base_url_data','//localhost/alphas/magma-web/data/');
	$config->set('db_prefix','');
	$config->set('tabla_default','eventos');
    $config->set('validUser','test');
    $config->set('validPass','test');

	/* Toggles */
	$config->set('developer_mode',1);
	$config->set('combo_add',0);
	$config->set('delete_permission',1);



	$config->set('big_h',0);// 0 for no resize
	$config->set('big_w',0); // 0 for no resize
	$config->set('img_content_w',503);
	$config->set('img_content_h',0);
	$config->set('thumb_h',180);
	$config->set('thumb_w',260);
	



    $PATH = dirname(__FILE__);

	$config->set('path',$PATH); 
	
	$config->set('setup_dir',$PATH.'/setup/');
	$config->set('data_dir',$PATH.'/../data/');

	$config->set('controllersFolder', 'controllers/');
	$config->set('modelsFolder', 'models/');
	$config->set('viewsFolder', 'views/');
  
	 
	$config->set('dbhost', 'localhost');
	$config->set('dbname', 'magma');
	$config->set('dbuser', 'root');
	$config->set('dbpass', 'tryagain');


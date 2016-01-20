<?php
/****
 *  CLEANigniter
 *	INDEX.php file
 *  set: project_name, version, cdn, root 
 ***/

define('INDEXMODULE', 'clean');
define('VERSION', 'development');
define('CDN','assets/');
define('PRIVATEPATH','../private/');
/*STARTigniter*/
require_once PRIVATEPATH.'_system/core/Start.php';

<?php
/**
 *
 * @author      AppBels <app.bels@gmail.com>
 * @package     Org\Schema
 * @see			https://github.com/appbels/Org
 * Date:        25/02/2017
 */

/**
 * Autoload Org\Schema.
 * @name	OrgSchemaAutoload
 * @param 	string	$classname
 */
function OrgSchemaAutoload ($classname)
{
	if (strpos($classname, "Org\\Schema") !== 0){
		return;
	}

	$ext = array(".interface.php", ".abstract.php", ".trait.php", ".class.php", ".php");
	$class = str_replace("\\", "/", $classname);
	$path = dirname(__FILE__)."/{$class}";
	$len = count($ext);

	for ($i = 0; $i < $len; $i++){
		$file = $path.$ext[$i];
		if (file_exists($file)){
			require_once $file;
			break;
		}
	}

}

spl_autoload_register("OrgSchemaAutoload");

?>
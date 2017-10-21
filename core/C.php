<?php
namespace core;
defined('HOME') OR exit('No direct script access allowed');

class C
{
	static public $classMap = array();

	static public function init()
	{
		$route=new route;
		$ctrlClass=$route->control;
		$action=$route->action;
		$ctrlfile=CONTROL.$ctrlClass.'.php';
		$ctrlClass='control\\'.$ctrlClass;
		p($ctrlfile);
		if(is_file($ctrlfile))
		{
			include $ctrlfile;
			$ctrl=new $ctrlClass();
			$ctrl->$action();
		}
		else
		{
			p("controller not find");
		}
	}

	static public function load($class)
	{
		//自动加载类库
		$class=str_replace('\\', '/', $class);
		if(isset($classMap[$class]))
			return true;

		$file=HOME.$class.".php";
		if(is_file($file))
		{
			include $file;
			self::$classMap[$class]=true;
			return true;
		}
		else
			return false;
	}
}
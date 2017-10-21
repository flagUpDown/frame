<?php
namespace core;
defined('HOME') OR exit('No direct script access allowed');

class route
{
	public $control;
	public $action;
	public function __construct()
	{
		if(!isset($_GET['ctrl']))
		{
			$this->control='index';
		}
		else
		{
			$this->control=$_GET['ctrl'];
		}
		if(!isset($_GET['act']))
		{
			$this->action='index';
		}
		else
		{
			$this->action=$_GET['act'];
		}

	}
}
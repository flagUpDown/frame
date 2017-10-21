<?php
namespace control;
defined('HOME') OR exit('No direct script access allowed');

class test extends control
{
	public function index()
	{
		p("123");
		$dbh=\model\database::getInstance();
	}

	public function hhh()
	{
		p('hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh');
	}
}
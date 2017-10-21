<?php
namespace control;
defined('HOME') OR exit('No direct script access allowed');

class index
{
	public function index()
	{
		p("hhhh");
		$dbh=\model\database::getInstance();
		$tem=$dbh->query("SELECT * FROM users")->fetchAll(\PDO::FETCH_NUM);
		var_dump($tem);
	}
}
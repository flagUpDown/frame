<?php
namespace control;
defined('HOME') OR exit('No direct script access allowed');

class control
{
	public function __call($functionName,$args)
	{
		p('action not find');
	}
}
<?php

class MainController
{
	private $config_value = 0;

	public function MainController()
	{

	}

	public function set_config_value($value)
	{
		$this->config_value = value;
	}

	public function get_config_value()
	{
		return $this->value;
	}
}

$main_controller = new MainController();
$main_controller->run();
<?php

class MainController
{
	private $config_value = 0;
	private $config_value2 = 5;

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

	public function set_config_value2($value)
	{
		$this->config_value2 = value;
	}

	public function get_config_value2()
	{
		return $this->value2;
	}
}

$main_controller = new MainController();
$main_controller->run();
print $main_controller->get_config_value2();
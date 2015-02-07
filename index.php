<?php

class MainController
{
	private $config_value = 0;
	private $config_value2 = 5;
	private $config_value4 = "LOL";
	private $config_value3 = 2.5;

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

	public function set_config_value3($value)
	{
		$this->config_value2 = value;
	}

	public function get_config_value3()
	{
		return $this->value2;
	}

	public function set_config_value4($value)
	{
		$this->config_value4 = value;
	}

	public function get_config_value4()
	{
		return $this->value4;
	}
}

$main_controller = new MainController();
$main_controller->run();
print $main_controller->get_config_value2();
print $main_controller->get_config_value3();
print $main_controller->get_config_value4();

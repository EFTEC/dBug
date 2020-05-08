<?php /** @noinspection PhpComposerExtensionStubsInspection */

namespace dBug\tests;

ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);
header('Content-Type: text/html;charset=utf-8;');
include_once(__DIR__ . '/../dBug.php');

use dBug\dBug;
use Exception;

class Vegetable
{

	public $edible;
	public $color;

	public function __construct($edible, $color = "green") {
		$this->edible = $edible;
		$this->color = $color;
	}

	public function is_edible() {
		return $this->edible;
	}

	public function what_color() {
		return $this->color;
	}
}

echo "<hr> dBug with variable types:<hr>";
new dBug(new Vegetable("spinach"));
echo "<br><hr> dBug without variable types:<hr>";
new dBug(new Vegetable("spinach"),'',false,false);
echo "<br><hr>var_dump:<hr>";
var_dump(new Vegetable("spinach"));

echo "<br><br><hr>var_dump (pre):<hr>";
echo "<pre>";
var_dump(new Vegetable("spinach"));
echo "</pre>";
echo "<hr>";
<?php
class example{
	
private $name;
public function startcar()
{
	echo "car started from parent class";
}
public function invoke()
{
	self::startcar();
}
}
class ex1 extends example{
public function startcar()
{
	echo "car started from childclass class";
}	
public function invoke1()
{
	parent::invoke();
}}
$ob1=new ex1();
$ob1->startcar();
$ob1->invoke1();	
?>

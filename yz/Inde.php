<?php

/**
 * @Author: Lenovo
 * @Date:   2019-03-18 09:13:08
 * @Last Modified by:   Lenovo
 * @Last Modified time: 2019-03-18 09:21:40
 */
namespace app\index\controller;
use think\Controller;
include "Person.php";
include "Walk.php";
include "Student.php";
class Inde extends Controller{
	public function inde(){
	$obj1=new Student('张三1',15);
	$obj2=new Student('张三2',16);
	$obj3=new Student('张三3',17);
	$obj4=new Student('张三4',18);
	$obj5=new Student('张三5',19);
	$obj6=new Student('张三6',20);
	$obj7=new Student('张三7',21);
	$obj8=new Student('张三8',22);
    // echo $obj;
    var_dump($obj);
    }
}


<?php

/**
 * @Author: Lenovo
 * @Date:   2019-03-18 09:07:22
 * @Last Modified by:   Lenovo
 * @Last Modified time: 2019-03-18 09:15:52
 */
namespace app\index\controller;
// use think\Controller;
class Person{
	public $uname;
	public $pwd;
	public function __construct($uname,$pwd){
                $this->uname=$uname;
                $this->pwd=$pwd;
	 }
}
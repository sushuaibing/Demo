<?php

/**
 * @Author: Lenovo
 * @Date:   2019-03-18 08:39:27
 * @Last Modified by:   Lenovo
 * @Last Modified time: 2019-03-18 09:06:56
 */
namespace app\index\controller;
use think\Controller;
class Yz extends Controller{
	//1-100循环方式得出
	public function sum1(){
		$sum=0;
         for ($i=1; $i <=100 ; $i++) { 
         	  $sum=$sum+$i; 
         }
         echo $sum;

	}
	//1-100递归方式得出
	public function sum2($n=100){
                 if($n==1){
                 	return $n;
                 }else{
                 	return $n+=$this->sum2($n-1);
                 }
	}

	//函数的封装方式得出
	public function sum3(){
         echo  $this->sum4(100);
	}

	public function sum4($n){
             if($n==1){
                 	return $n;
                 }else{
                 	return $n+=$this->sum2($n-1);
                 } 
	}

	//实现n阶乘的循环的方式
	public function jc1(){
            $r=1;    
           for ($i=1; $i <=6 ; $i++) { 
           	     $r*=$i;
           }
           echo $r;

	}


   //实现n阶乘的递归的方式
	public function jc2($n=6){
              if($n==1){
              	return $n;
              }else{
              	return $n=$n*$this->jc2($n-1);
              }
	}


	public function hui(){
		$str='abba';
		$len=strlen($str);
		// echo $len;
		$attr=str_split($str);
		for ($i=0; $i< $len ; $i++) { 
		    if($attr[$i]!=$str[$len-1]){
		    	echo "这个数不是回文函数";die;
		    }else{
		    	echo 1;die;
		    } 
		}
		 $len--;
	}
}
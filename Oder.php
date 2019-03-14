<?php

/**
 * @Author: Lenovo
 * @Date:   2019-03-12 15:05:31
 * @Last Modified by:   Lenovo
 * @Last Modified time: 2019-03-14 08:38:07
 */
namespace app\index\controller;
use think\Controller;
class Oder extends Controller{
  public function shui(){
    $m=150;
    $n=156;
    $sum=153;
    for ($i=$m; $i <$n ; $i++) { 
          $h=floor($sum/100);
          $t=floor(($sum-$h*100)/10);
          $a=floor($sum%100);
          $num=$h*$h*$h*+$n*$n*$n+$a*$a*$a;
          if($sum==$num){
          echo "是水仙花数";die;
          }
    }
    echo "不是水仙花";
  }







































































// //判断是不是回文
//   public function answer(){

//     $str="abbba";

//     $num=strlen($str);
//    // echo $num;die;
//     $attr=str_split($str);

//       for ($i=0; $i < $num ; $i++) { 

//          if($attr[$i]!=$str[$num-1]){
          
//            echo "这个数不是回文函数";die;
//          }
//          $num--;
//      }
//        echo 1;

//   }

//   public function water(){
//         $m=150;
//         $n=156;
//         $sum=153;
//     for ($i=$m; $i <$n ; $i++) { 
//               $h=floor($sum/$m);
//               $t=floor(($sum-$h*100)/10);
//               $a=floor($sum%10);
//               $new=$h*$h*$h+$t*$t*$t+$a*$a*$a;
//               if($sum==$new){
//                   echo "是水仙花";die;
//               }
//             }
//             echo "不是水仙花";        
//   }













   public function yi(){
   	 $str="asdfgass";
   	 $data=str_split($str);
   	 $data=array_count_values($data);
   	 foreach ($data as $key => $val) {
   	 	   if($val==3){
   	 	   	echo $key;
   	 	   }
   	 }
   }









































	
	// public function index(){
	// 	echo 111;die;
	// }


 //   //N的阶乘
 //     public function demo1(){
 //     	  $n=6;
 //     	  $this->demo($n);
 //     	  echo $n."的阶乘的值".$this->demo($n);
 //     }

 //       public function demo($n)
 //       {
 //           if($n > 1){

	//           $r=$n*($n-1);

	//              }else
	//                  {
	//                 $r=$n;
	//                    }
	//               return $r;
 //       }


     //字符串出现的次数
       public function str(){
       	$str="aabbba";
       	$arr=str_split($str);
       	// print_r($arr);die;
       	$data=array_count_values($arr); 
       	// echo $num;
       	// print_r($data);die;
       	foreach ($data as $key => $val) {
       		  if($val==3){
       		  	echo $key;break;
       		  }
       	}
       }


       public function str1(){

       	$str="asdfghjka";
       
      // $res=strlen($str);
       	
     // $res=substr($str, -1);

     // $res=substr($str,0,strlen($str)-1);

     // $res=substr_replace($str, 'qwer', 0);

     // $res=explode('f', $str);

     // $res=substr_count($str, 'a');

   	 // $res=strpos($str, 'd');

   	 // $res=strrpos($str, 'a');

   	 // $res=str_replace('a', 'A', $str);

   	 // $res=str_shuffle($str);

     // $res=strrchr($str,'k' );

       var_dump($res);


       }
       
}
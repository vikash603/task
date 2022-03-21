<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArrayController extends Controller
{
    public function array()
    {
        $arr=array(1,3,4,5);

        return $arr;
   
    }
    public function sum()
    {
        $arr=array(1,2,3,4,5,6,7);
        $sum=0;
        
        for ($i=0; $i <count($arr) ; $i++) { 

            $sum=$sum+$arr[$i];

        }
        return $sum;
    }

    public function sumeven()
    {
        $arr=array(1,22,8,14,5,6);

        $sum=0;


        for($i=0; $i<count($arr); $i++)
        {

             if($arr[$i]%2==0) 
            $sum=$sum+$arr[$i];

            
                    
        
                
            }
            return $sum;
        }



        public function oudsum()
    {
        $arr=array(1,22,8,14,5,6);

        $sum=0;


        for($i=0; $i<count($arr); $i++)
        {

             if($arr[$i]%2==1) 
            $sum=$sum+$arr[$i];

            
                    
        
                
            }
            return $sum;
        }

        public function indexeven()
           {
        $arr=array(1,22,8,14,5,6);

        $sum=0;


        for($i=0; $i<count($arr); $i++)
        {

             if($i%2==0) 
            $sum=$sum+$arr[$i];

            
                    
        
                
            }
            return $sum;
        }



    public function count()
    {
        for ($i=0; $i <=100; $i++){
            echo $i;
           echo '<br>';
       }
    }

    public function even()
    {

        for ($i=1; $i <=100; $i++)
            {
                if($i%2==0){

                    echo $i;
                    echo '<br>';

                }
            
       }
   }

       public function oud()
    {

        for ($i=1; $i <=100; $i++)
            {
                if($i%2==1){

                    echo $i;
                    echo '<br>';

                }
            
       }
   }



   public function swap()
   {


/* $a=7;
$b=5;


$c=$a;
$a=$b;
$b=$c;

echo $a;
echo "<br>";
echo $b;*/

$a=7;
$b=5;
 
 $a=$a+$b;
 $b=$a-$b;
 $a=$a-$b;

 echo $a;
 echo "<br>";
 echo $b;


   }

   public function palindrome()
   {
    $a=1;
    $b=2;
    echo $a;
    echo "<br>";
    echo $b;
    echo "<br>";
    for($i=0; $i<=100; $i++)
    {
        $c=$a+$b;
        $a=$b;
        $b=$c;

        echo $c;
        echo "<br>";
    }
   }

  public function big()
  {
    $arr=array(23,4,7,10,2,4);
    
    for ($i=0; $i<count($arr); $i++)
    {
        for($j=$i+1; $j<count($arr); $j++){
            if($arr[$i] < $arr[$j]){
                $c=$arr[$i];
                $arr[$i]=$arr[$j];
                $arr[$j]=$c;
            }
        }
    }

return $arr;

  }

 public function prime(){
      $arr=array();
      for ($i=2; $i <10 ; $i++) {
      $count=0;
      for($j=2; $j<$i-1; $j++){
        if($i%$j==0){
            $count++;
        }
      }
      if($count==0){
        $arr[]=$i;
      }
       }
       return $arr;
 }

 public function table(){
   
    for($i=1; $i<=10; $i++){
       
       $a=$i*5;
       echo "2" ." " ."X" ." " .$i ."=" .$a;
     echo "<br>";  
    }
   
 }

 public function table2(){

   for($i=1; $i<=10; $i++){
    for($j=2; $j<=10; $j++){
        $a=$i*$j;
        echo $i ." " ."X" ." " .$j ."=" .$a;
        echo "<br>";
    }
    echo "<br>";
   }
 }


public function table3(){
    for($i=1; $i<=10; $i++){
        for ($j=2; $j<=10  ; $j++) { 
            if ($i%2==0) {
                
                     $a=$i*$j;
              
                echo $i ." " ."X" ." " .$j ."=" .$a;
                echo "<br>";

              
               
            }
        }

    }
}

        public function exam(){
        
        $a=10;

        if ($a<=33) {
            echo "Failed";
        }

        if ($a>33 && $a<=50) {
            echo "Third";
        }

        if ($a>50 && $a<=60) {
            echo "second";
        }

        if ($a>60 && $a<=75) {
            echo "first";
        }

        if ($a>75 && $a<=100) {
            echo "Marit";
        }

        if($a>100){
            echo "this is rong Entry";
        }
    }

    public function search(){
    $arr=array(8,15,9,21,3,2);
    $a='';
    $b=2;
    for($i=0; $i<count($arr); $i++){
        if($arr[$i]==$b){
            $a=$i;
        }

    }

    return $a;
}

public function evenn(){
    $arr=array(3,4,8,4,5,7,5);
    
    $ar=array();
    for($i=0; $i<count($arr); $i++){
        if($arr[$i]%2==0){
           

            $ar[]=$arr[$i];
           
        }

    }
    return $ar;
}

public function star(){

    for($i=0; $i<10; $i++){
        for($j=0; $j<$i; $j++){


        if($i%2==1){
            echo "*";
            }
        }
        echo "<br>";
    }

}


 public function star2()
    {
       for($i=10; $i>=2; $i--){
        for($j=0; $j<$i; $j++){


        if($i%2==1){
            echo "*";
            }
        }
        echo "<br>";
    }

    }


    

   



    

}

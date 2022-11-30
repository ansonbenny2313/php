<?php
      $num1=20;
      $num2=99;
      $num3=22;
      if($num1>$num2 && $num1>$num3){
        echo $num1;
      }
      else{
        if($num2>$num1 && $num2>$num3){
          echo $num2;
        }
        else
          echo $num3;
      }
      echo "<br>hello everyone\n";
      echo "<h1> Hello this is myself ".$num3." this is nic</h1>";
      $a=[1,2,3,"helo","ason",3.14];
      $a[]=10;
      for($i=1;$i<count($a);$i++)
      {
        echo "<h2>".$a[$i]."</h2>";
      }
      echo "<hr>";
      foreach($a as $ele){ echo "<h3>".$ele."</h3>";}
      echo $a[2];
      function add($num1,$num2)
      {
        $sum=$num1+$num2;
        return $sum;
      }
      echo add($num1,$num2);

      

?>
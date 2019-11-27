<!DOCTYPR html>
<html>
    <body>
        <?php 
        echo "Hello World!"
        ?>
    </body>
</html>







<?php
$x=5;
$y=6;
$z=$x+$y;
echo $z;
?>





<?php
  $x=5;
  function myTest()
  {
      $y=10;
      echo "$x";    
      echo "$y";   //10

  }

  myTest();
  echo "$x";     //5
  echo "$y";
  ?>



<?php
$x=5;
$y=10;
function myTest()
{
    global $x,$y;
    $y=$x+$y;    //50

}

myTest();
echo $y;
?>



<?php
$x=5;
$y=10;
function myTest(){
    $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
}

myTest();
echo $y;
?>



<?php
echo <<<EOF
 <h1>hello</h1>
 <p>hello hello</p>
EOF;

 ?>



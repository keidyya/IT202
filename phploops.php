<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
   <?php
$nums = array(1, 2, 5, 15, 62, 92, 100);
$max = count($nums);
for($x =0; $x < $max ; $x++){
    echo " " . $nums[$x];
}

echo "<br></br>";

for($i = 0; $i < $max; $i++){

	if ($nums[$i] % 2 == 0){
    	echo " " . $nums[$i];
    }

}

?>  
  </body>
</html>
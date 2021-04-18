<a href="index.html"><button>В меню</button></a>
<?php
$ch1=0;
$ch2=1;
$ch3=0;
 for($i=0;$i<64;$i++)
 {
	 $ch3=$ch1+$ch2;
	 $ch1=$ch2;
	 $ch2=$ch3;
	 echo "<p>".$ch1."</p>";
 }
 
?>

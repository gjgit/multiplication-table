<html>
<body>
<table border=1>	
<?php

//i denotes the table sequence
 for ($i=1; $i<=10000; $i++)
  { echo"<tr>";
  //a denotes the multipler 
	  for($a=1;$a<=16;$a++)
	  {
		echo"
 <td>";
 // displays i*a multiply value 
 echo $i *$a;
 echo "</td>";
}
echo"</tr>";
}

?> 
</table> 
</body>
</html>
 

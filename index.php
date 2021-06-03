<html>
<head>
<style>
body { background-color: black }
</style>
</head>
<body>
<center>
<font color="green">
<h1> HELLO FROM DEVOPS WORLDPAGE!</h1>
</font>
</center>

<?php

echo '<p style="color: red; text-align: center">
      Hello from AWS Elastic Beanstalk WebServer!
	  </p>';
	  
?>

<style type="text/css">
   .text1 { 
    color: magenta; 
    }
  </style> 

<div align="center" class="text1">
<?php

	  echo 'IP Address is:' . $_SERVER['SERVER_ADDR'];	  
?>
</div>

<div align="center">
<?php

	  echo "<img src='1.jpg'>" ;	  
?>
</div>
	  
</body>
</html>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>JRT_key</title>
<script src="javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>
<link href="javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
<script src="javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<link href="javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
<header>
  <div class="container">
   <div class="text-center">
    <div class="visible-xs">
    <?php echo "今天是 " . date("Y-m-d  l") . "<br>"; ?>
    </div>
    <img class="img-responsive center-block" src="image/JRT_logo.jpg" alt="JRT首页" /></div>
   </div>
  </div>
</header>
<div class="container text-center">
  <div class="col-sm-6">
   <img class="img-responsive center-block" src="image/JRT_well*e.jpg" alt="JRT首页" />
  </div>
 <div class="col-sm-6">
  <div class="hidden-xs">
   <?php echo "今天是 " . date("Y-m-d  l") . "<br>"; ?>
  </div>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <br />
  KEY: <input type="text" name="fname">
  <input type="submit" value="Start">
  </form>
  <?php $name = $_POST['fname'];
  if($name==="robotteam") {
  	echo $name;
	 $myfile = fopen("exec.txt", "w") or die("Unable to open file!");
	 $txt = "key";
  fwrite($myfile, $txt);
  fclose($myfile);
  //	system('./key.py');
  } else {
  		echo "error";
   	} ?>
   	<div class="text-center">
   	<a href="./elFinder-2.x/elfinder.html">帮助</a>-<a href="http://59.72.114.29">首页</a>
   	<hr>
   	<div>JRT 唐敖庆B512号</div>
   	</div>
  </div>
</div>
<footer>
  <div class="container text-center">
  </div>
</footer>
</body></html>
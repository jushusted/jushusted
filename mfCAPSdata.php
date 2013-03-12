<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>JS Bin</title>
</head>
<body>
  <div>
    <?php 
    //$capsPage = readfile($_GET['http://api.fool.com/caps/ws/Ticker/GOOG?apikey=ZbhGBKUXVluPZXywfF7yytztBknJdQWr']);
	  $capsPage = file_get_contents('http://api.fool.com/caps/ws/Ticker/GOOG?apikey=ZbhGBKUXVluPZXywfF7yytztBknJdQWr');
	  echo isset($capsPage); ?>
  </div>
</body>
</html>

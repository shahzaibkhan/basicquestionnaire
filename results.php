<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Result</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">
  <style>
  
body{
  font:13px/1.3 'Lucida Grande',sans-serif;
  color:#666;
}

.chart {
  display: table;
  table-layout: fixed;
  width: 60%;
  max-width: 700px;
  height: 200px;
  margin: 0 auto;
  background-image: linear-gradient(to top, rgba(0, 0, 0, 0.1) 2%, rgba(0, 0, 0, 0) 2%);
  background-size: 100% 50px;
  background-position: left top;
}
.chart li {
  position: relative;
  display: table-cell;
  vertical-align: bottom;
  height: 200px;
}
.chart span {
  margin: 0 1em;
  display: block;
  background: rgba(209, 236, 250, 0.75);
  animation: draw 1s ease-in-out;
}
.chart span:before {
  position: absolute;
  left: 0;
  right: 0;
  top: 100%;
  padding: 5px 1em 0;
  display: block;
  text-align: center;
  content: attr(title);
  word-wrap: break-word;
}

@keyframes draw {
  0% {
    height: 0;
  }
}
.button { 
  margin: 0 auto;    width: 134px;    display: block;
}
a.button {
    background: #ff0000;
    color: white;
}
a.button:hover {
    color: #f0f0f0;
}
</style>
</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
    <div class="row">
      <div class="full column" style="margin-top: 18%">
		<center><h2>Results</h2></center>
		<?php
		
			$ans = $_POST['answers'];
			$pieces = explode(",", $ans);
			$count1 = 0;
			$count2 = 0;
			$count3 = 0;
			$count4 = 0;
			foreach($pieces as $row) {
				if($row == "A") {
					$count1 = $count1 + 1;
				}
				if($row == "B") {
					$count2 = $count2 + 1;
				}
				if($row == "C") {
					$count3 = $count3 + 1;
				}
				if($row == "D") {
					$count4 = $count4 + 1;
				}
			}
			
			$h1 = ($count1/15)*100;
			$h2 = ($count2/15)*100;
			$h3 = ($count3/15)*100;
			$h4 = ($count4/15)*100;
			
		?>
		

<ul class="chart">
  <li>
    <span style="height:<?php echo $h1; ?>%;background: rgba(65, 105, 225, 0.9);" title="EAGLE"></span>
  </li>
  <li>
    <span style="height:<?php echo $h2; ?>%;background: rgba(255, 255, 0, 0.9);" title="PARROT"></span>
  </li>
  <li>
    <span style="height:<?php echo $h3; ?>%;background: rgba(255, 194, 204, 0.9);" title="DOVE"></span>
  </li>
  <li>
    <span style="height:<?php echo $h4; ?>%;background: rgba(50, 205, 50, 0.9);" title="OWL"></span>
  </li>
</ul>    
<p style="display: block;clear: both;text-align: center;margin-top: 64px;">Click the button below to read your personal results!</p>
<?php if($h1>$h2 && $h1>$h3 && $h1>$h4) {
?>
<a href="https://www.ramonalever.com/the-eagle"target="_blank" class="button">Click Here</a>
<?php 	
} else if($h2>$h1 && $h2>$h3 && $h2>$h4) { ?>
<a href="https://www.ramonalever.com/the-parrot"  target="_blank" class="button">Click Here</a>
<?php } else if($h3>$h1 && $h3>$h2 && $h3>$h4) {?>
<a href="https://www.ramonalever.com/the-dove"   target="_blank" class="button">Click Here</a>
<?php } else if($h4>$h1 && $h4>$h2 && $h4>$h3) {?>
<a href="https://www.ramonalever.com/the-owl"   target="_blank" class="button">Click Here</a>
<?php } else if($h1==$h2) { ?>
<a href="https://www.ramonalever.com/eagle-parrot"  target="_blank"  class="button">Click Here</a>
<?php } else if($h1==$h3) { ?>
<a href="https://www.ramonalever.com/dove-eagle"  target="_blank"  class="button">Click Here</a>
<?php } else if($h1==$h4) { ?>
<a href="https://www.ramonalever.com/eagle-owl"   target="_blank" class="button">Click Here</a>
<?php } else if($h2==$h3) { ?>
<a href="https://www.ramonalever.com/dove-parrot"  target="_blank"  class="button">Click Here</a>
<?php } else if($h2==$h4) { ?>
<a href="https://www.ramonalever.com/parrot-owl"   target="_blank" class="button">Click Here</a>
<?php } else if($h3==$h4) { ?>
<a href="https://www.ramonalever.com/owl-dove"   target="_blank" class="button">Click Here</a>
<?php } ?>
		
      </div>
    </div>
  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>

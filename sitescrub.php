<!DOCTYPE html> 

<html>
<head>
<title>Fill My Macros</title>
<meta name="description" content="Your Description" />
<meta charset="utf-8">
<link rel="image_src" href="http://stackoverflow.com/images/logo.gif" />
<link rel="icon" href="/favicon.ico" type="image/x-icon" /> <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120-precomposed.png" />
<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152-precomposed.png" />
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=yes">

</head>

<body>

<div class="Container">

<div class="TopMenuHolder">
<div class="Row" id="menurow">
<div class="Column" id="menu1"><a href="http://www.fillmymacros.com/site.php"><i class="fa fa-home" aria-hidden="true">&nbsp; Home</a></i></div>
<div class="Column" id="menu2"><a href="http://www.fillmymacros.com/about.php"><i class="fa fa-info" aria-hidden="true">&nbsp; About</a></i></div>
<div class="Column" id="menu4"><a href="http://www.fillmymacros.com/blog.php"><i class="fa fa-pencil-square-o" aria-hidden="true">&nbsp; Blog</a></i></div>
<div class="Column" id="menu3"><a href="http://www.fillmymacros.com/contact.php"><i class="fa fa-comments-o" aria-hidden="true">&nbsp; Contact</a></i></div>
</div>
</div>

<div id="overlay" style="padding-bottom:0.25em;margin: 0 auto;display:block;text-align:center;vertical-align: middle;">
<p id="title" style="font-family:'Dancing Script';font-size:15vh;color: #fff;text-shadow: 2px 2px 4px rgba(0, 0, 0, 1);-webkit-margin-before: 1em;-webkit-margin-after: 5%;">Fill My Macros</p>
<p style="width:80%;margin: 0 auto;text-align: center;font-size: 3vh;color: #fff;padding-bottom: 1%;text-shadow: 2px 2px 4px rgba(0, 0, 0, 1);">Can't figure out what to snack on? We can help you out.</p>
<p style="width:80%;margin: 0 auto;text-align: center;font-size: 2vh;color: #fff;text-shadow: 2px 2px 4px rgba(0, 0, 0, 1);">Let us know what macros you're working with and we'll give you some killer ideas.</p>
</div>

<form id="searchform" action="site.php?go" method="GET">

<div class="divTable" style="width:75%;margin:0px auto;display:block; text-align:center;">
<div class="divTableBody">

<div class="Row">
<div class="Column">
<p style="font-size:32px; -webkit-margin-after: .25em;">Protein:</p><input style="border-radius: 0.25em; border-style: solid; border-width: 1px; padding:10px; text-align: center; font-size:x-large;" maxlength="3" name="protein" size="3" placeholder="0" type="text" width="3" />
</div>

<div class="Column">
<p style="font-size:32px; -webkit-margin-after: .25em;">Carbs:</p><input style="border-radius: 0.25em; border-style: solid; border-width: 1px; padding:10px; text-align: center; font-size:x-large;" maxlength="3" name="carbs" size="3" placeholder="0" type="text" width="3" />
</div>

<div class="Column">
<p style="font-size:32px; -webkit-margin-after: .25em;">Fats:</p><input style="border-radius: 0.25em; border-style: solid; border-width: 1px; padding:10px; text-align: center; font-size:x-large;" maxlength="3" name="fats" size="3" placeholder="0" type="text" width="3" />
</div>

</div>
</div>
</div>

<div id="spacing" style="height:80px;">
</div>

<div style="width:100%;margin:0px auto;display:block; text-align:center;">
<input class="Button" type="submit" value="Hit me">
</div>
</form>

</div>


<div class="results" id="results" style="background-color:#424242; color:white;">


<?php       

if(!empty($_GET)) {
    if(isset($_GET['protein'])) {
		
		
		$protein=$_GET['protein'];
		$carbs = $_GET['carbs'];        
		$fats = $_GET['fats'];
		
		if(!is_numeric($protein) && !is_numeric($carbs) && !is_numeric($fats)) {
			echo "<div class=\"isa_error\" id=\"updated\">";
			echo "<i class=\"fa fa-times-circle-o\"></i>";
			echo "Make sure you enter at least one value.";
			echo "</div>";
			
			echo "<script>";
			
			echo "$(function() {";
			echo "$('html, body').animate({";
			echo "scrollTop: $(\"#results\").offset().top";
			echo "}, 2000);";
			
			echo "$(\"#updated\").delay(2000).fadeOut(\"slow\",function() {;";
			echo "});";
			
			echo "});";
			
			echo "</script>";
			
			die;
		}
				
		$rowcount = 0;
	
		// connect to db        
		//secret!
		
		// create query        
		$stmt = $db->prepare("SELECT * FROM data WHERE  (carbs BETWEEN ? AND ?) AND (fats BETWEEN ? AND ?) AND (protein BETWEEN ? AND ?) ");
		
		$stmt->bind_param('ssssss',$cl,$ch,$fl,$fh,$pl,$ph);
		
		$pl=$protein - 5;
		$ph=$protein + 5;
		$cl=$carbs - 10;
		$ch=$carbs + 10;
		$fl=$fats - 3;
		$fh=$fats + 3;
		
		// run query
		$stmt->execute();
		$result = $stmt->get_result();
		
		echo "<div id=\"spacing\" style=\"height:80px;\"></div>";
		
		echo "<table style=\"width: 85%; margin:0 auto; border-spacing:30px;\" >";
		echo "<tbody>";
		
		while($row = $result->fetch_array()) {          
		
			// loop over results
			
			if (($result->num_rows) == 0) {
				echo "Sorry, we don't have anything that fits the bill! If you think of something why not suggest it?";
			}

			$carbs2=$row['carbs'];             
			$fats2=$row['fats'];             
			$protein2=$row['protein'];             
			$id2=$row['snack_id'];            
			$name2=$row['name'];
			$imglink2=$row['imglink'];
			$descr2=$row['description'];
			$url2=$row['url'];
			
			// display the result to page       

			if ($rowcount % 3 == 0) {
				echo "<tr>";
			}
		   
			echo "<td class = \"hello\">";
			echo "<div class=\"divTableCell\" style=\"height:350px;position:relative; z-index:1; background: -webkit-linear-gradient(bottom, rgba(0,0,0,0.40) 0%,rgba(0,0,0,0) 45%), url('".$imglink2."'); background-size:cover;\"> <span style=\"margin-top:20px; display:block;\">" . $name2 . " </span> </br> <p>" . $protein2 . "p, " . $carbs2 . "c, " . $fats2 . "f</p> </div>";
			echo "<div class=\"hideme\"><a class=\"wordwrap;\" href=\" /snack.php?id=".$url2."\">".$descr2."</a></div> ";
			echo "</td>";
			
			
			$rowcount++;
			
			if ($rowcount % 3 == 0) {
				echo "</tr>";
			}
	}
	
	echo "</tbody>";
	echo "</table>";
	
	}              
	
	else {
		echo  "<p align=center>Sorry - something went wrong! Please refresh and try again...</p>";        
	}            
	
 ?>
 <script>
	$(function() {
    $('html, body').animate({
        scrollTop: $("#results").offset().top
    }, 2000);
	});
</script>

<?php
	}
?>

</div>


<div id="bottombar">
<div style="width:2%;"></div>
<div style="display:table-cell; width:32%;">
<span>&copy; 2017 Fill My Macros</span>
</div>
<div style="display:table-cell; width:32%; text-align: -webkit-center; text-align:center;">
<span><a style="padding: 0px 10px;" href="http://www.fillmymacros.com/site.php">Home</a> &nbsp; <a style="padding: 0px 10px;" href="http://www.fillmymacros.com/about.php">About</a> &nbsp; <a style="padding: 0px 10px;" href="http://www.fillmymacros.com/blog.php">Blog</a> &nbsp; <a style="padding: 0px 10px;" href="http://www.fillmymacros.com/contact.php">Contact</a></span>
</div>
<div style="display:table-cell; width: 32%; text-align: right;">
<span> Follow us: <i class="fa fa-facebook" aria-hidden="true"></i> &nbsp; <i class="fa fa-twitter" aria-hidden="true"></i></span>
</div>
<div style="width:2%;"></div>
</div>

</body>

<link href='//fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>
<script async src="https://use.fontawesome.com/baf4afef61.js"></script>
<script async src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</html>
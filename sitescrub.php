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
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" media="screen and (min-width: 300px) and (max-width: 800px)" href="style_mobile.css" />
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
<p id="title" style="font-family:'Dancing Script';font-size:15vh;color: #fff;text-shadow: 2px 2px 4px rgba(0, 0, 0, 1); margin-top: 1em; margin-bottom: 5%;">Fill My Macros</p>
<p style="width:80%;margin: 0 auto;text-align: center;font-size: 3vh;color: #fff;padding-bottom: 1%;text-shadow: 2px 2px 4px rgba(0, 0, 0, 1);">Can't figure out what to snack on? We can help you out.</p>
<p style="width:80%;margin: 0 auto;text-align: center;font-size: 2vh;color: #fff;text-shadow: 2px 2px 4px rgba(0, 0, 0, 1);">Let us know what macros you're working with and we'll give you some killer ideas.</p>
</div>

<form id="searchform" action="site.php" method="GET">

<div class="divTable" style="width:75%;margin:0px auto;display:block; text-align:center;">
<div class="divTableBody">

<div class="Row">
<div class="Column">
<p style="font-size:32px; margin-bottom: .25em;">Protein:</p><input style="border-radius: 0.25em; border-style: solid; border-width: 1px; padding:10px; text-align: center; font-size:x-large;" maxlength="3" name="protein" size="3" placeholder="0" type="text" width="3" />
</div>

<div class="Column">
<p style="font-size:32px; margin-bottom: .25em;">Carbs:</p><input style="border-radius: 0.25em; border-style: solid; border-width: 1px; padding:10px; text-align: center; font-size:x-large;" maxlength="3" name="carbs" size="3" placeholder="0" type="text" width="3" />
</div>

<div class="Column">
<p style="font-size:32px; margin-bottom: .25em;">Fats:</p><input style="border-radius: 0.25em; border-style: solid; border-width: 1px; padding:10px; text-align: center; font-size:x-large;" maxlength="3" name="fats" size="3" placeholder="0" type="text" width="3" />
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

<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];

if(!preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) {
	echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>";
} else {
	echo "<script type=\"text/javascript\">
	document.getElementById('searchform').action='site.php#results';
	</script>";
}
?>



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
		//secret!
		
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
			echo "<div class=\"divTableCell\" style=\"height:350px;position:relative; z-index:1; background: -webkit-linear-gradient(bottom, rgba(0,0,0,0.40) 0%,rgba(0,0,0,0) 45%), url('".$imglink2."'); background: -moz-linear-gradient(bottom, rgba(0,0,0,0.40) 0%,rgba(0,0,0,0) 45%), url('".$imglink2."'); background-size:cover;\"> <span style=\"margin-top:20px; display:block;\">" . $name2 . " </span> </br> <p>" . $protein2 . "p, " . $carbs2 . "c, " . $fats2 . "f</p> </div>";
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
$(document).ready(function () {
	$(function() {
    $('html, body').animate({
        scrollTop: $("#results").offset().top
    }, 2000);
	});
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
<div style="display:table-cell; width:32%; text-align:center;">
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

</html>
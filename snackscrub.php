<!DOCTYPE html> 

<html>
<head>
<title>Fill My Macros - About</title>
<meta name="description" content="Your Description" />
<meta charset="utf-8">
<link rel="image_src" href="http://stackoverflow.com/images/logo.gif" />
<link rel="icon" href="/favicon.ico" type="image/x-icon" /> <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120-precomposed.png" />
<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152-precomposed.png" />
<link rel="stylesheet" type="text/css" href="../style.css">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=yes">

</head>

<body>
<link href='//fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>
<script src="https://use.fontawesome.com/baf4afef61.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<div class="Container" style="margin-bottom: -40px;">

<div class="TopMenuHolder">
<div class="Row" id="menurow">
<div class="Column" id="menu1"><a href="http://www.fillmymacros.com/site.php"><i class="fa fa-home" aria-hidden="true">&nbsp; Home</a></i></div>
<div class="Column" id="menu2"><a href="http://www.fillmymacros.com/about.php"><i class="fa fa-info" aria-hidden="true">&nbsp; About</a></i></div>
<div class="Column" id="menu4"><a href="http://www.fillmymacros.com/blog.php"><i class="fa fa-pencil-square-o" aria-hidden="true">&nbsp; Blog</a></i></div>
<div class="Column" id="menu3"><a href="http://www.fillmymacros.com/contact.php"><i class="fa fa-comments-o" aria-hidden="true">&nbsp; Contact</a></i></div>
</div>
</div>

<div style="padding-bottom:0.25em;margin: 0 auto;display:block;text-align:center;vertical-align: middle;">

<div id="box">
<div id="innerbox">

<div style="position:relative; top:20px; left:10px; width:10%; font-size:x-large;">
<a href="javascript:history.back()"><i class="fa fa-backward" aria-hidden="true"></i><span>&nbsp; Back</span></a>
</div>

<?php
//secret!

$stmt = $db->prepare("SELECT * FROM data WHERE url = ?");
$stmt->bind_param('s',$_GET["id"]);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_array();
?>

<div style="height:100%">
<table style="margin: 0 auto; width: 90%; position: relative; top:4vw;">
<tbody>
<tr>
<th colspan="2" style="padding-bottom:4vw; color:white;">
<?php
echo "<span style=\"font-family:'Dancing Script'; font-size:5vw; padding-bottom:1vh;\">" . $row['name'] . "</span>";
?>
</th>
</tr>
<tr>
<td style="width: 30%; box-shadow: 5px 5px 5px 1px black; padding: 4px; background: #151515; border: 1px solid #000; border-right: 1px solid #696868; border-bottom: 1px solid #696868; border-radius: 5px;">
<?php
echo "<img style=\"width:20vw;height:32vh;max-width:400px;\" src=\"../ " . $row['imglink'] ."\"> ";
?>
</td>
<td style="width: 70%; color:white; font-size:large; padding-left:4vw; text-align:left">
<?php
echo $row['fulldesc'];
?>
</td>
</tr>
</tbody>
</table>
</div>


</div>
</div>

</div>

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

</html>
<?php 
	include_once("lib/config.inc.php");
	$config = Config::getInstance();
	$email = "";
	try {
		$email = $config->app->email;
	}
	catch(Exception $ex) {}
	$name = "";
	try {
		$name = $config->app->name;
	}
	catch(Exception $ex) {}
	echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="de">
  <head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=0.6, minimum-scale=0.6, maximum-scale=1">
    <title>Data Logger Pro</title>
    <script type="text/javascript" src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/datepicker.de.js"></script>
    <script type="text/javascript" src="js/charts.js"></script>
    <script type="text/javascript" src="js/toolbar.js"></script>
    <script type="text/javascript" src="js/table.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
	<link rel="stylesheet" type="text/css" href="css/format.css">
	<link rel="stylesheet" type="text/css" href="css/smoothness/jquery-ui-1.9.2.custom.min.css">
	
    <!-- offline gviz -->
	<link src="js/gviz_tooltip.css" rel="stylesheet">
    <script type="text/javascript" src="js/jsapi.js"></script>
    <script type="text/javascript" src="js/uds_api_contents.js"></script>
  </head>

  <body>
  <div id="contentWrap" width="100%" height="100%">
	<svg id="logo" xmlns="http://www.w3.org/2000/svg"  width="200" height="60">
		  <g transform="translate(0,-992.36218)">
		   
		    <text style="font-size:22px;font-style:normal;font-weight:normal;line-height:125%;letter-spacing:0px;word-spacing:0px;fill:#666666;fill-opacity:1;stroke:none;" x="-1.1482943" y="1033.807">
		    	<tspan x="-1.1482943" y="1033.807" style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;fill:#666666;font-family:Arial">
		    		<tspan style="font-size:20px;fill:#666666">Data Logger</tspan>
		    		<tspan style="font-size:16px;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;fill:#666666;font-family:Arial"> Pro</tspan>
		    	</tspan>
		    </text>
		    <text x="-0.13813959" y="1049.5406">
		    	<tspan x="-0.13813959" y="1049.5406" style="font-size:12px;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;fill:#666666;font-family:Arial"><?php echo $name;?></tspan>
		    </text>
		  </g>
		</svg>
		<div id="contact"><?php include("VERSION"); ?> <a href="https://github.com/s--o--n--y/uvr1611_DLP_ECO_HK_30_mod.git" target="_blank">GitHub</a> <a href="mailto:<?php echo $email; ?>">Kontakt</a></div>
	<div id="content">
		
	<div id="overlay"></div>
	<div id="toolbar">
		<button id="home">Hauptmenü</button>
		<button id="backToChart">Zurück</button>
		<div id="datepicker_wrapper" >
			<input id="datepicker" />
			<div id="buttonset" >
				<button id="back1">Zurück</button>
				<button id="back">Zurück</button>
				<button id="date">Heute</button>
				<button id="forward">Vor</button>
				<button id="forward1">Vor</button>
			</div>
		</div>
		<div id="period">
			<input type="radio" id="week1" name="week" value="day" checked="checked"/><label for="week1">Tag</label>
			<input type="radio" id="week2" name="week" value="week" /><label for="week2">Woche</label>
			<input type="radio" id="week3" name="week" value="week3" /><label for="week3">2 Wochen</label>
			<input type="radio" id="week4" name="week" value="month" /><label for="week4">Monat</label>
		</div>
		<div id="grouping">
			<input type="radio" id="month1" name="month" value="days" checked="checked"/><label for="month1">Tage</label>
			<input type="radio" id="month2" name="month" value="months" /><label for="month2">Monate</label>
		</div>
		
	</div>
	<iframe id="forecast_embed" align="middle" type="text/html" frameborder="0" height="220" src="http://forecast.io/embed/#lat=46.77534&lon=13.9632&name=Gnesau&units=si"> </iframe> 
	<div id="container">
	<div id="pages">
	</div>
	</div>
	</div>
	<div id="menu">
	
		<div id="indicator"></div>
	</div>
	
	</body>
</html>

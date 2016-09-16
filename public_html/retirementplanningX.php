<?php

// this script 
// 1. pulls in Retirement Planning
//    (http://www.philadelphia-reflections.com/blog/1373.htm)
//
// 2. Strips off the Philadelphia Reflections HTML and header stuff
//
// 3. Includes the appropriate stuff for this site including fixing XHTML errors
//
// 4. sends it out the door
//
// This way I don't have to maintain the page in two locations

# pull in the web page

$filename = "http://www.philadelphia-reflections.com/blog/1373.htm";
$handle		= fopen($filename, "r");
$contents = stream_get_contents($handle);
fclose($handle);

# strip off the superfluous stuff

if (preg_match('%<\/h3>.*<p>\(1373\)<\/p>%s', $contents, $regs)) {
	$body = $regs[0];
} else {
	$body = "";
}

# fix XHTML problems

$body = substr($body, 5);														# start after the initial </h3>
$body = str_replace('<p>(1373)</p>', '', $body);		# strip off the end

$body = str_replace('<br>', '<br />', $body);				# fix br and hr
$body = preg_replace('/<hr([^>]*)>/si', '<hr $1 />', $body);

$body = preg_replace  ('/(<img [^>]*)>/s', "\\1 />", $body);

# send the reformatted page out the door

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>

<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type"  content="text/css" />
<meta http-equiv="content-type"        content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar"        content="no" />

<link rel="stylesheet" type="text/css" media="all" href="http://www.georgefisheradvisors.com/styles/philadelphia-reflections/reflectionsLayout.css" />
<link rel="stylesheet" type="text/css" media="all" href="http://www.georgefisheradvisors.com/styles/philadelphia-reflections/reflectionsIndividualColumn.css" />
<link rel="stylesheet" type="text/css" media="all" href="http://www.georgefisheradvisors.com/styles/philadelphia-reflections/reflectionsTopicsColumn.css" />

<title>Retirement Planning</title>

<style type="text/css" media="print">

body			  { margin: 0; padding: 0; width: 100%; }				
				
#wrapper		{ margin: 0; padding:	0; width: 100%; }
		
#center			{ margin-top: 0; margin-bottom:	0; margin-right: 0; margin-left: 0; padding: 	0; }

#content		{ font-size:110%; }
				
</style>

</head>

<body>
<div id="wrapper" style="margin-bottom:0px;">
<div id="left" style="visibility: hidden; display: none;"></div><div id="right" style="visibility: hidden; display: none;"></div><div id="center"><div id="content">

<img src="http://www.georgefisheradvisors.com/images/retirementplanning.jpg" alt="{Asset allocation and portfolio rebalancing}" style="margin: 0;" />

<?php echo $body; ?>

</div></div></div>

		<!-- Start of StatCounter Code -->
		<script type="text/javascript">
			var sc_project=1770955; 
			var sc_invisible=1; 
			var sc_partition=16; 
			var sc_security="fb8cf3f2"; 
		</script>

		<script type="text/javascript" src="http://www.statcounter.com/counter/counter_xhtml.js"></script>
		<noscript>
		  <div class="statcounter">
		    <a class="statcounter" href="http://www.statcounter.com/">
		      <img class="statcounter" src="http://c17.statcounter.com/counter.php?sc_project=1770955&amp;java=0&amp;security=fb8cf3f2&amp;invisible=0" alt="web hit counter" />
		    </a>
		  </div>
		</noscript>
		<!-- End of StatCounter Code -->

</body>

</html>
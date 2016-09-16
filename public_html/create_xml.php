<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title>Create the sitemap and urllist for georgefisheradvisors dot com</title>
  </head>
  <body>

<?

//
// .................................................................
// .                                                               .
// .  This script finds all the htm, html, pdf, kml & kmz files    .
// .  and creates the appropriate XML files                        .
// .                                                               .
// .................................................................
//
//

			// function to write a flat file
			// .............................
			
			function write_flat_file($flat_file_contents, $flat_file_name)
				{
				if (!file_exists($flat_file_name)) { die ("<br /><span style=\"color:red\">$flat_file_name file does not exist</span><br />");}
	
				if (!is_writable($flat_file_name)) { die ("<br /><span style=\"color:red\">$flat_file_name file is not writable</span><br />");}

				if (!$flat_file_handle	= fopen($flat_file_name, "wb")) { die ("<br /><span style=\"color:red\">$flat_file_name file failed to open</span><br />");}

			    if (!fwrite($flat_file_handle, $flat_file_contents)) { die ("<br /><span style=\"color:red\">Could not write to $flat_file_name file</span><br />");}

			    fclose($flat_file_handle);
				
				unset($flat_file_contents, $flat_file_handle);
				}
				
			// .............................


//
// from PHP Manual opendir function
// Finds all files in a specified directory and all subdirectories. 
// The function returns an array with the path of all the files found.
//

function getFiles($directory) {
    // Try to open the directory
    if($dir = opendir($directory)) {
        // Create an array for all files found
        $tmp = Array();

        // Add the files
        while($file = readdir($dir)) {
            // Make sure the file exists
            if($file != "." && $file != ".." && $file[0] != '.') {
                // If it's a directiry, list all files within it
                if(is_dir($directory . "/" . $file)) {
                    $tmp2 = getFiles($directory . "/" . $file);
                    if(is_array($tmp2)) {
                        $tmp = array_merge($tmp, $tmp2);
                    }
                } else {
                    array_push($tmp, $directory . "/" . $file);
                }
            }
        }

        // Finish off the function
        closedir($dir);
        return $tmp;
    }
}

// pull out all the files from the root
$filearray = getFiles('.');

// pull out all the htm, html, pdf, php, kml & kmz files
$files = array();
foreach ($filearray as $file) {
            if (substr($file, strlen($file) - 5) == '.html') {
                array_push($files, $file);
                continue;
            }
						if (substr($file, strlen($file) - 4) == '.htm') {
                array_push($files, $file);
                continue;
            }
						if (substr($file, strlen($file) - 4) == '.kml') {
                array_push($files, $file);
                continue;
            }
						if (substr($file, strlen($file) - 4) == '.kmz') {
                array_push($files, $file);
                continue;
            }
						if (substr($file, strlen($file) - 4) == '.pdf') {
                array_push($files, $file);
                continue;
            }
						if (substr($file, strlen($file) - 4) == '.php') {
                array_push($files, $file);
                continue;
            }
}

$document_root = $_SERVER['DOCUMENT_ROOT'];

// create a multidimensional array: one array for each moddate

foreach ($files as $file) {
	$full_filename = $document_root . substr($file, 1);
	$moddate = filemtime($full_filename);
	
	if (stristr($full_filename, "margaret/")) {continue;}
	if (stristr($full_filename, "HTML Changes")) {continue;}
	if (stristr($full_filename, "create_xml")) {continue;}
	if (stristr($full_filename, "_vti_cnf")) {continue;}
	if (stristr($full_filename, "_vti_pvt")) {continue;}
	if (stristr($full_filename, "joericketts/")) {continue;}	
	if (stristr($full_filename, "cache")) {continue;}
	if (stristr($full_filename, "errors")) {continue;}
	if (stristr($full_filename, "404.htm")) {continue;}
	if (stristr($full_filename, "No-EmailCollectionTerms")) {continue;}
	if (stristr($full_filename, "andrew")) {continue;}
	if (stristr($full_filename, "checklist/")) {continue;}
	if (stristr($full_filename, "test")) {continue;}
	if (stristr($full_filename, "av-1")) {continue;}
	if (stristr($full_filename, "/fp-3")) {continue;}
	if (stristr($full_filename, "/ip-3")) {continue;}
	
	$filesbydate[$moddate] = array();
}

// fill the multidimensional array with the files for each moddate

foreach ($files as $file) {
	$full_filename = $document_root . substr($file, 1);
	$moddate = filemtime($full_filename);
	
	if (stristr($full_filename, "margaret/")) {continue;}
	if (stristr($full_filename, "HTML Changes")) {continue;}
	if (stristr($full_filename, "create_xml")) {continue;}
	if (stristr($full_filename, "_vti_cnf")) {continue;}
	if (stristr($full_filename, "_vti_pvt")) {continue;}
	if (stristr($full_filename, "joericketts/")) {continue;}
	if (stristr($full_filename, "cache")) {continue;}
	if (stristr($full_filename, "errors")) {continue;}
	if (stristr($full_filename, "404.htm")) {continue;}
	if (stristr($full_filename, "No-EmailCollectionTerms")) {continue;}
	if (stristr($full_filename, "andrew")) {continue;}
	if (stristr($full_filename, "checklist/")) {continue;}
	if (stristr($full_filename, "test")) {continue;}
	if (stristr($full_filename, "av-1")) {continue;}
	if (stristr($full_filename, "/fp-3")) {continue;}
	if (stristr($full_filename, "/ip-3")) {continue;}
	
	$full_filename	= preg_replace("/ /", "%20", $full_filename);
	
	array_push($filesbydate[$moddate],$full_filename);
}

// sort the the array by moddate
krsort($filesbydate);

// set up the XML file strings

			$XMLcopyrightDate = date("Y");
			$GoogleBaseDate		= date("Y-m-d");


			$GOOGLEfile	= "<?xml version=\"1.0\" encoding=\"utf-8\" ?>\n";
			$GOOGLEfile	.= "<urlset xmlns=\"http://www.google.com/schemas/sitemap/0.84\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xsi:schemaLocation=\"http://www.google.com/schemas/sitemap/0.84 http://www.google.com/schemas/sitemap/0.84/sitemap.xsd\">\n";
			$GOOGLEfile	.= "\t<!--                                    -->\n";
			$GOOGLEfile	.= "\t<!--  George Fisher Advisors dot com    -->\n";
			$GOOGLEfile	.= "\t<!--         Google Sitemap             -->\n";
			$GOOGLEfile	.= "\t<!--                                    -->\n";
			
			$URLLISTfile	= NULL;
			
			$RSSfile	= "<?xml version=\"1.0\" encoding=\"utf-8\" ?>\n";
			$RSSfile	.= "<rss version=\"2.0\" xmlns:geo=\"http://www.w3.org/2003/01/geo/wgs84_pos#\" xmlns:dc=\"http://purl.org/dc/elements/1.1/\" xmlns:atom=\"http://www.w3.org/2005/Atom\" xmlns:georss=\"http://www.georss.org/georss\" xmlns:sy=\"http://purl.org/rss/1.0/modules/syndication/\" xmlns:icbm=\"http://postneo.com/icbm\" xmlns:g=\"http://base.google.com/ns/1.0\">\n";
			$RSSfile	.= "\t<!--                                   -->\n";
			$RSSfile	.= "\t<!--      George Fisher Advisors       -->\n";
			$RSSfile	.= "\t<!--             RSS feed              -->\n";
			$RSSfile	.= "\t<!--                                   -->\n";
			$RSSfile	.= "\t<channel>\n";
				$RSSfile	.= "\t\t<title>George Fisher Advisors LLC</title>\n";
				$RSSfile	.= "\t\t<atom:link rel=\"self\" type=\"application/rss+xml\" href=\"http://www.georgefisheradvisors.com/rss.xml\" />\n";
				$RSSfile	.= "\t\t<link>http://www.georgefisheradvisors.com/</link>\n";
				$RSSfile	.= "\t\t<description>A history of the Philadelphia area: William Penn's Quaker Colonies</description>\n";
				$RSSfile	.= "\t\t<language>en-us</language>\n";
				$RSSfile	.= "\t\t<copyright>Copyright (c) 2004 - $XMLcopyrightDate George Fisher Advisors LLC. All rights reserved.</copyright>\n";
				$RSSfile	.= "\t\t<category>financial planning</category>\n";
				$RSSfile	.= "\t\t<category>investment advice</category>\n";
				$RSSfile	.= "\t\t<managingEditor>george@georgefisheradvisors.com (George Fisher)</managingEditor>\n";
				$RSSfile	.= "\t\t<webMaster>george@georgefisher.com (George Ross Fisher, IV)</webMaster>\n";
				$RSSfile	.= "\t\t<generator>Hand-crafted using PHP</generator>\n";
				$RSSLastBuildDate = date("D, d M Y H:i:s T");
				$RSSfile	.= "\t\t<lastBuildDate>$RSSLastBuildDate</lastBuildDate>\n";
				$RSSsyBaseDate = date("Y-m-d") . "T" . date("H:i:s") . substr(date("O"),0,3) . ":00";
				$RSSfile	.= "\t\t<sy:updatePeriod>monthly</sy:updatePeriod>\n";
				$RSSfile	.= "\t\t<sy:updateFrequency>12</sy:updateFrequency>\n";
				$RSSfile	.= "\t\t<sy:updateBase>$RSSsyBaseDate</sy:updateBase>\n";
				$RSSfile	.= "\t\t<docs>http://backend.userland.com/rss091</docs>\n";
			$RSSfile	.= "\t\t<!--                                   -->\n";
			$RSSfile	.= "\t\t<!--                                   -->\n";
			$RSSfile	.= "\t\t<!--                                   -->\n";
			$RSSfile	.= "\t\t<image>\n";
				$RSSfile	.= "\t\t\t<url>http://www.georgefisheradvisors.com/images/rssimage.jpg</url>\n"; 
				$RSSfile	.= "\t\t\t<width>144</width>\n";
				$RSSfile	.= "\t\t\t<height>144</height>\n";
				$RSSfile	.= "\t\t\t<title>George Fisher Advisors LLC</title>\n";
				$RSSfile	.= "\t\t\t<link>http://www.georgefisheradvisors.com/</link>\n";
			$RSSfile	.= "\t\t</image>\n";
			$RSSfile	.= "\t\t<!--                                   -->\n";
			$RSSfile	.= "\t\t<!--                                   -->\n";
			

// pull out each moddate:filename pair
foreach ($filesbydate as $moddate => $subarray) 
	{
	foreach ($subarray as $filename) 
		{
		$file_url = str_replace($document_root, "http://www.georgefisheradvisors.com", $filename);
		
		$guid = "tag:www.georgefisheradvisors.com," . date("Y-m-d") . ":%2F" . $filename;
		
		$mod = $moddate;
		$GOOGLEmoddate	= date("Y-m-d", $mod);
		$RSSmoddate			= date("D, d M Y H:i:s T", $mod);
		
		$GOOGLEfile .= "\t<url>\n";
			$GOOGLEfile .= "\t\t<loc>$file_url</loc>\n";
			$GOOGLEfile .= "\t\t<lastmod>$GOOGLEmoddate</lastmod>\n";
					
															 $GOOGLEpriority = "0.0"; $GOOGLEfreq = "yearly";	// default
					if ($mod > mktime(0,0,0) - 86400*210)	{$GOOGLEpriority = "0.1"; $GOOGLEfreq = "monthly";}	// past 210 days
					if ($mod > mktime(0,0,0) - 86400*180)	{$GOOGLEpriority = "0.2"; $GOOGLEfreq = "monthly";}	// past 180 days
					if ($mod > mktime(0,0,0) - 86400*150)	{$GOOGLEpriority = "0.3"; $GOOGLEfreq = "monthly";}	// past 150 days
					if ($mod > mktime(0,0,0) - 86400*120)	{$GOOGLEpriority = "0.4"; $GOOGLEfreq = "monthly";}	// past 120 days
					if ($mod > mktime(0,0,0) - 86400*90)	{$GOOGLEpriority = "0.5"; $GOOGLEfreq = "monthly";}	// past 90 days
					if ($mod > mktime(0,0,0) - 86400*60)	{$GOOGLEpriority = "0.6"; $GOOGLEfreq = "monthly";}	// past 60 days
					if ($mod > mktime(0,0,0) - 86400*30)	{$GOOGLEpriority = "0.7"; $GOOGLEfreq = "monthly";}	// past 30 days
					if ($mod > mktime(0,0,0) - 86400*7)		{$GOOGLEpriority = "0.8"; $GOOGLEfreq = "weekly";}	// past 7 days
					if ($mod > mktime(0,0,0) - 86400)			{$GOOGLEpriority = "0.9"; $GOOGLEfreq = "daily";}	// yesterday
					if ($GOOGLEmoddate == date("Y-m-d"))	{$GOOGLEpriority = "1.0"; $GOOGLEfreq = "hourly";}	// today
					
			$GOOGLEfile .= "\t\t<changefreq>$GOOGLEfreq</changefreq>\n";
			$GOOGLEfile .= "\t\t<priority>$GOOGLEpriority</priority>\n";
		$GOOGLEfile .= "\t</url>\n";
		
		$URLLISTfile .= $file_url . "\n";
		
		$RSSfile .= "\t\t<item>\n";
			$RSSfile .= "\t\t\t<title>$filename</title>\n";
			$RSSfile .= "\t\t\t<g:publication_name>$filename</g:publication_name>\n";
			$RSSfile .= "\t\t\t<link>$file_url</link>\n";
			$RSSfile .= "\t\t\t<guid isPermaLink=\"false\">$guid</guid>\n";
			$RSSfile .= "\t\t\t<pubDate>$RSSmoddate</pubDate>\n";
    $RSSfile .= "\t\t</item>\n";
		
    }
	}

// put on the closing tags
$GOOGLEfile		.= "</urlset>\n";

$RSSfile	  	.= "\t</channel>\n";
$RSSfile	  	.= "</rss>\n";



// write the Google sitemap file
$GOOGLEfileName = $document_root . "/sitemap.xml";
write_flat_file($GOOGLEfile, $GOOGLEfileName);
unset($GOOGLEfile);

// write the Yahoo URL List file
$URLLISTfileName	= $document_root . "/urllist.txt";
write_flat_file($URLLISTfile, $URLLISTfileName);
unset($URLLISTfile);	

// write the RSS file
$RSSfileName	= $document_root . "/rss.xml";
write_flat_file($RSSfile, $RSSfileName);
unset($RSSfile);

# readfile ($GOOGLEfileName);

echo "<h2>george fisher advisors dot com XML file creation</h2>";

$GoogleSitemapURL	= str_replace($document_root, "http://www.georgefisheradvisors.com", $GOOGLEfileName);
echo "<p><a href=\"$GoogleSitemapURL\">Google sitemap</a></p>";

$YahooUrllistURL	= str_replace($document_root, "http://www.georgefisheradvisors.com", $URLLISTfileName);
echo "<p><a href=\"$YahooUrllistURL\">Yahoo urllist</a></p>";

$RSSURL 					= str_replace($document_root, "http://www.georgefisheradvisors.com", $RSSfileName);
echo "<p><a href=\"$RSSURL\">RSS</a></p>";
echo "<hr /><a href=\"http://feedvalidator.org/check.cgi?url=$RSSURL\">Validate the RSS feed</a><br />";

echo "<hr /><hr /><a href=\"http://submissions.ask.com/ping?sitemap=http%3A//www.georgefisheradvisors.com/sitemap.xml\">Ping Ask</a><br />";
echo "            <a href=\"http://www.google.com/webmasters/tools/ping?sitemap=http://www.georgefisheradvisors.com/sitemap.xml\">Ping Google</a><br />";
echo "            <a href=\"http://api.moreover.com/ping?u=http://www.georgefisheradvisors.com/sitemap.xml\">Ping Moreover</a><br />";
echo "            <a href=\"http://www.bing.com/webmaster/ping.aspx?siteMap=http://www.georgefisheradvisors.com/sitemap.xml\">Ping Microsoft Bing</a><br />";


?>
</body>
</html>
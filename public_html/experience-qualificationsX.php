<?php
if (isset($_GET["q"]))
{
	$q = $_GET["q"];
	$cv_str="null";
	if ($q != 'null')
	{
		$file = "experience/" . $q . ".txt";
		$fh = fopen($file, 'r');
		$cv_str = fread($fh, filesize($file));
		fclose($fh);	
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Employment History | Professional Qualifications | CFP | Boston | George Fisher Advisors LLC</title>

	<meta name="Title" content="Employment History | Professional Qualifications | George Fisher Advisors LLC" />
	<meta name="DC.Title" content="Employment History | Professional Qualifications | George Fisher Advisors LLC" />

	<meta name="description" content="Employment History | Professional Qualifications | George Fisher Advisors LLC" />
	<meta name="DC.description" content="Employment History | Professional Qualifications | George Fisher Advisors LLC" />
	<meta name="abstract" content="Registered Investment Advisor Company" />
	<meta name="keywords" content="RIA, CFP, Registered Investment Advisor, Certified Financial Planner, Financial Planning, Financial Advice, Investment Management, Investment Advice" />
	
	<!-- geo tags for 5 Constellation Wharf, Boston MA 02129 -->
	<meta name="ICBM" content="42.3733, -71.049" />
	<meta name="geo.country" content="US" />
	<meta name="geo.region" content="US-MA" />
	<meta name="geo.placename" content="George Fisher Advisors LLC" />
	<meta name="geo.position" content="42.3733; -71.049" />

	<meta name="tgn.name" content="George Fisher Advisors LLC" />
	<meta name="tgn.nation" content="United States" />

	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="content-script-type" content="text/javascript" />
	<meta http-equiv="content-style-type" content="text/css" />

	<meta http-equiv="imagetoolbar" content="no" />

	<meta name="distribution" content="global" />
	<meta name="Locale" content="EN-US" />
	<meta name="language" content="EN" />
	<meta name="DC.language" content="en" scheme="RFC1766" />
	<meta name="MSSmartTagsPreventParsing" content="TRUE" />
	<meta name="author" content="George R. Fisher, IV" />
	<meta name="Designer" content="Andrew Brundle" />
	<meta name="DC.Creator" content="Fisher IV, George" />

	<meta name="copyright" content="(c) 2004 - 2009 George R. Fisher IV All Rights Reserved." />
	<meta name="doc-rights" content="Copywritten Work" />

	<meta name="rating" content="GENERAL" />
	<meta name="resource-type" content="document" />
	
	<link rel="stylesheet" type="text/css" href="main.css" />	
	
	<style type="text/css">
		#content{width: 100%; padding: 0px 0px 45px 0px; background: url(graphics/bg-content-horizontal.png) repeat-y center}
		#margin-bottom-long{height: 90px; background: url(graphics/bg-container-vertical.png) repeat-x 0px -440px}		
		#menu-bottom{margin: 8px 0px 0px 70px}
		#experience{width: 524px; padding: 25px 0px 0px 75px}
		#experience-nav{width: 524px; height: 20px; margin: 8px 0px 15px 0px; background: url(graphics/sprite.png) no-repeat -250px -450px}
		#button-work, #button-qualifications{width: 172px; height: 20px; float: left; cursor: pointer; margin: 0px 13px 0px 0px}
		#button-qualifications{width: 233px}
		#experience-nav A span{display: none}
		#icons-outer{ width: 524px; height: 151px; overflow: hidden; clear: both}
		#icons{width: 1072px; height: 131px; background: url(graphics/icons.png) left top}
		#icon-one, #icon-two, #icon-three, #icon-four, #icons A{width: 113px; height: 113px; margin: 0px 24px 0px 0px; float: left; cursor: pointer}
		#icons A span{display: none}
		#icon-four{margin: 0px}	
		.icon-hover, .icon-active, #icons A:hover{background: url(graphics/icon-hover.png)}	
		#throbber{display: none; width: 16px; height: 16px; border-top: solid 1px #d8c8a8; padding: 20px 254px 20px 254px}
		#cv-qual{display: none; width: 524px; padding: 20px 0px 0px 0px; border-top: solid 1px #d8c8a8}
		H2{width: 505px; height: 19px; margin: 0px 0px 10px 0px; background: url(graphics/sprite.png) no-repeat -250px -95px}

		#company-qual-headers{width: 524px; height: 200px; background: url(graphics/experience-sprite.png)}
		.company-qual{width: 524px; height: 25px; background: url(graphics/experience-sprite.png) no-repeat 0px 0px}
		.morgan{background-position: 0px 0px}
		.fidelity{background-position: 0px -25px}
		.prudential{background-position: 0px -50px}
		.wachovia{background-position: 0px -75px}
		.cfp{background-position: 0px -100px}
		.chfc{background-position: 0px -125px}
		.finra{background-position: 0px -150px}
		.fpa{background-position: 0px -175px}	

		P.job-title{color: #706850; font-family:'Trebuchet MS',Tahoma,Verdana,sans-serif; font-size: 16px; font-weight: bold; padding: 10px 0px 15px 0px}
		P.sub-header{color: #605840; font-size: 13px; line-height: 18px; margin: -5px 0px 0px 0px; padding: 0px 0px 14px 0px}
		P.qual{color: #686048; font-size: 12px; line-height: 17px; text-align: justify; padding: 10px 0px 14px 0px}
		P.qual A{color: #686048}	
		P.content-cv-qual, P.content-cv-qual-top{font-size: 12px; line-height: 17px; text-align: justify; padding: 0px 0px 14px 0px}
		P.content-cv-qual-top{padding-top: 12px}
		P.bullet-odd, P.bullet-even, P.bullet-odd-bottom, P.bullet-even-bottom{color: #383018; font-size: 11px; line-height: 11px; padding: 8px 0px 8px 15px; border-top: solid 1px #d8c8a8; background: #ededdd url(graphics/bullet.gif) no-repeat 5px center}	
		P.bullet-even, P.bullet-even-bottom{background: #FFFDF0 url(graphics/bullet.gif) no-repeat 5px center}	
		P.bullet-odd-bottom, P.bullet-even-bottom{border-bottom: solid 1px #d8c8a8}	
		P.small-reg-number{font-size: 10px; line-height: 11px; padding: 10px 0px 15px 5px}	
	</style>	
	
	<style type="text/css">
		#icons{background-position: -548px 0px}
		#experience-nav{background-position: -250px -470px}
		<?php
		if ($cv_str!='null')
		{
		echo '#cv-qual{display:block}';
		}
		?>
		
	</style>	
	
	<link rel="shortcut icon" type="image/ico" href="/favicon.ico" />	
		
</head>
<body>
	<div id="container">
		<div class="preload">
			<img width="113" height="113" src="graphics/icon-hover.png" alt="" />
		</div>
		<h1>
			<span>George Fisher Advisors LLC</span>
		</h1>
		<div id="content-top"></div>
		<div id="content">
			<div id="content-inner">
				<div id="content-inner-bg">		
					<div id="nav">
						<ul>
							<li><a class="link-home" href="index.html"><span>Home</span></a></li>
							<li><a class="link-fp" href="financial-planning.html"><span>Financial Planning</span></a></li>  
							<li><a class="link-ip" href="investment-planning.html"><span>Investment Planning</span></a></li> 
							<li><a class="link-pm" href="portfolio-management.html"><span>Portfolio Management</span></a></li>
							<li><a class="link-experience-active" href="experience.html"><span>Experience</span></a></li> 
							<li><a class="link-about" href="about.html"><span>About</span></a></li> 
							<li><a class="link-contact" href="contact.html"><span>Contact</span></a></li>
						</ul>
					</div>
					<div id="experience">
						<h2>
							<img width="400" height="19" src="headers/experience.png" alt="Professional Experience" />
						</h2>
						<p class="content">
							George Ross Fisher, IV CFP<sup class="sup">&#174;</sup> ChFC<sup class="sup">&#174;</sup> is the Manager and owner of George Fisher Advisors LLC. He has a degree in Economics and spent 25 years on Wall Street before starting George Fisher Advisors LLC.  To learn more about his background and professional qualifications, select one of the menu items below and click on any of the icons.
						</p>
						<div id="experience-nav">
							<a href="experience-work.php?q=null" id="button-work"><span>Employment History</span></a>
							<a href="experience-qualifications.php?q=null" id="button-qualifications"><span>Professional Qualifications</span></a>
						</div>
						<div id="icons-outer">
							<div id="icons">
								<a href="experience-qualifications.php?q=cfp"><span>CFP</span></a>
								<a href="experience-qualifications.php?q=chfc"><span>ChFC</span></a>
								<a href="experience-qualifications.php?q=finra"><span>FINRA</span></a>
								<a href="experience-qualifications.php?q=fpa" id="icon-four"><span>FPA</span></a>
							</div>
						</div>
						<div id="throbber">
							<img width="16" height="16" alt="" src="graphics/throbber.gif" />
						</div>
						<div id="cv-qual">
							<?php
							if ($cv_str != "null")
							{
								echo $cv_str;	
							}
							?>
						</div>
					</div>				
					<div id="menu-bottom">
						<p class="menu-bottom">
							<a href="index.html">Home</a> | <a href="financial-planning.html">Financial Planning</a> | <a href="investment-planning.html">Investment Planning</a> | <a href="portfolio-management.html">Portfolio Management</a> | <a href="experience.html">Experience</a> | <a href="about.html">About</a> | <a href="contact.html">Contact</a>
						</p>
					</div>						
				</div> 
				<div id="legal">
					<p class="legal">
						copyright &copy; George Fisher Advisors 2005 - 2009
							|
						<a class="legal" href="disclaimer.html">disclaimer</a>
							|
						<a class="legal" href="sitemap.html">sitemap</a>
							| website by
						<a class="legal" href="andrew.html">andrew brundle</a>
					</p>
				</div>
			</div>
		</div>
		<div id="content-bottom"></div>
		<div id="margin-bottom-long"></div>
	</div>	
	
<!-- Start of StatCounter Code -->
<script type="text/javascript">
//<![CDATA[
  sc_project=1770955; 
  sc_invisible=1; 
  sc_partition=16; 
  sc_security="fb8cf3f2"; 
//]]>
</script>
<script type="text/javascript" src="http://www.statcounter.com/counter/counter_xhtml.js">
</script>
<noscript>
  <div class="statcounter">
    <a title="site stats" class="statcounter" href="http://www.statcounter.com/free_web_stats.html">
      <img class="statcounter" src="http://c17.statcounter.com/1770955/0/fb8cf3f2/1/" alt="site stats" /></a>
  </div>
</noscript>
<!-- End of StatCounter Code -->
	
</body>
</html>
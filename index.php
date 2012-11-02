
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Andrew Hess Curriculum Vitae</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Curriculum Vitae for Andrew Hess">
    <meta name="author" content="Andrew Hess">

    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
	<script>

		/** ADD MY GOOGLE ANALYTICS SHIT HERE */

	</script>
  
  </head>

<body class="preview" data-spy="scroll" data-target=".subnav" data-offset="80">
<!--
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            </a>
          <a class="brand" href="#">Curriculum Vitae</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="#about">About</a></li>
              <li><a href="#education">Education</a></li>
              <li><a href="#experience">Experience</a></li>
              <li><a href="#technical">Technical</a></li>
              <li><a href="#honors">Honors</a></li>
              
            </ul>
            <div class="nav-collapse collapse pull-right">
            <ul class="nav">
              <li><a href="http://philipithomas.com" target="_blank>">Homepage</a></li>
              <li class="dropdown ">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Links <i class="caret"></i>
                            </a>

                   <ul class="dropdown-menu ">
                                <li><a href="http://linkedin.com/in/philiptihomas" target="_blank">LinkedIn</a></li>
                <li><a href="http://github.com/philipithomas" target="_blank">Github</a></li>
                <li><a href="http://twitter.com/philipithomas" target="_blank"><i class="icon-off"></i> Sign Out</a></li>
            </ul>
               </li>
              <li><a href="/resume.pdf">Download PDF</a></li>          
            </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
-->
    <div class="container">
	
	<header class="jumbotron">
		
    <div class="row">
	<div class="span12">
		<h3 style="text-align: center; text-style: italic">Curriculum Vitae for</h3>
		
      <h1 style="padding: 10px 0px; text-align: center; font-size: 60px">Andrew Hess</h1>
	<span class="" style="text-align: center;"> 
		<address>
		<a href="http://www.andrewhess.net" target="_blank">www.andrewhess.net</a><br />
		<a href="mailto:#">andrew@andrewhess.net</a><br />
		<a>+1 (248) 224-0335</a>
		</address>
	</span>
		</div>
    </div> 

	</header>

<section id="about">
      <div class="row">

      <div class="page-header">
 <h2>About</h2>
      </div>
          </div> 
          <div class="row">
      
      <div class="span12">Andrew Hess is a 3rd year B.S Candidate at Washington University in St. Louis studying systems engineering and computer science.  Currently seeking a cooperative educational experience that focuses on mathematics and software.
      </div> 

      </section>

      <section id="education">
            <div class="row">

      <div class="page-header">
      <h2>Education</h2>
      </div>
    </div> <!-- end row -->
<?php
position("Washington University in Saint Louis","Saint Louis, MO","Bachelor of Science in Systems Engineering","Expected 5/14","Minor in Computer Science","",'
<ul>
<li><span style="font-weight: bold">Engineering:</span> Control Systems, Operations Research, Signals & Systems</li>
<li><span style="font-weight: bold">Computer Science:</span> Computer Science I & II, Algorithms & Data Structures</li>
<li><span style="font-weight: bold">Mathematics:</span> Engineering Math, Discrete Mathematics</li>
</ul>',"");
?>

      </section>
      
      
      
      <section id="experience">
            <div class="row">

      <div class="page-header">
      <h2>Professional and Leadership Experience </h2>
      </div>
    </div> <!-- end row -->
    <?php


	position("Expensify Inc.","San Francisco, CA","Engineering Intern","5/12-8/12",'
	<ul>
	<li>Worked on various aspects of the Expensify product including website and mobile applications.</li>
	<li>Developed in multiple languages including php, JavaScript, Objective-C, and Java.</li>
	</ul>','https://www.expensify.com/');
	
	
	position("TextReject.com","Saint Louis, MO","Co-Founder","10/12-Present",'
	<ul>
	<li>Designed, built, and launced a humorous php application that connects with Twilio for an automated text messaging service.</li>
	</ul>',"http://textreject.com/");
	
	
	position("CapScan","Saint Louis, MO","Analyst","12/11-4/12",'
	<ul>
	<li>Developed an Android application to collect coupon codes with pictures using OCR (optical character recognition) technology.</li>
	<li>Developed image processing algorithms to help <a href="http://code.google.com/p/tesseract-ocr/" target="_BLANK">Tesseract</a> process the text in images.</li>
	<li>Project was cancelled and never released due to the difficulty involved with developing accurate and reliable OCR.</li>
	</ul>',"");
	
	
	position("Washington University Tech Entrepreneurs (wute)","Saint Louis, MO","Co-President","5/11-Present",'
	<ul>
	<li>wute is a community of students interested in technology and entrepreneurship.</li>
	<li>Help coordinate meetups that feature a small, informal discussion with people from related industry.</li>
	</ul>', "http://wute.org");

           ?>
    
    
      </section>
      
      <section id="technical">
            <div class="row">

      <div class="page-header">
      <h2>Technical</h2>
      </div>
    </div> <!-- end row -->
<div class="row">

	
	<div class="span8">
<?php
iprogram('Javascript','75');
iprogram('PHP','70');
iprogram('Java','60');
iprogram('Objective-C','20');
iprogram('Matlab','65');
iprogram('Unix Systems','70');
iprogram('Git','60');
iprogram('CAD','50');
iprogram('CSS','40');
iprogram('UX Design','50');
iprogram('Adobe CS6','50');
?>


</div>
<div class="span4">
	<div class="well">
		<h4>Selected Projects</h4>
		<hr />
		<ul>
		<?php
			project('TextReject.com','http://www.textreject.com','');
		?>
		</ul>
		<a class="pull-right btn btn-small btn-inverse" href="http://github.com/andhess">Github Profile <i class="icon-arrow-right icon-white"></i></a><br />
	</div>
</div>
</div>
      
      </section>
      
      
      <section id="honors">
            <div class="row">

      <div class="page-header">
      <h2>Honors and Skills</h2>
      </div>
    </div> <!-- end row -->
	<div class="row">
	<div class="span8">
	<?php
	
	extra('Awards','2010 Olin Business School - Lionsgate Films Case Competition Winner');
	extra('Language','Familiar with Spanish and French');
	
	?>
	</div>
	
<!--
	<div class="span4">
	<div class="well">
		<h4>Selected Press</h4>
		<hr />
		<ul>
			<li>St. Louis Business Journal: <a href="http://www.bizjournals.com/stlouis/blog/BizNext/2012/10/community-voices-philip-thomas-at.html?page=all">Philip Thomas at Startup Weekend </a></li>
				<li>Fox 2 Now: <a href="http://philipithomas.com/2012/07/food-truck-stl-on-fox-2-news-in-the-morning/">Live Interview with Food Truck Site Founder Philip I. Thomas </a></li>
				<li>Forbes: <a href="http://www.forbes.com/sites/kaipetainen/2011/11/11/washu-students-provide-teva-some-healthy-love/">WashU Students Provide Teva Some Healthy Love</a></li>
			<li>St. Louis Business Journal: <a href="http://www.bizjournals.com/stlouis/blog/BizNext/2012/09/wutevc-starts-venture-capital-lecture.html">wute.vc starts venture capital lecture series</li>
		</ul>
		<a class="pull-right btn btn-small btn-inverse" href="http://philipithomas.com/press">View Full Press <i class="icon-arrow-right icon-white"></I></a><br />
	</div>
	</div>
-->

	</div>


      </section>

      <footer style="padding-top: 20px;">
	<hr />
      <p style="text-align: center">&copy; <a href="#">Philip I Thomas</a> 2012</p>
      </footer>      

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.js"></script>

  </body>
</html>

<?php
// =========================================================
/* 

These are some functions to make uniform sections

*/

function position($company,$city,$job,$dates,$blob,$link) {
	/*
	This function is for use in the experience section. It unififes formatting for the various positions. 
	*/
	
	echo '
		<div class="row" style="padding: 35px 0 4px 0;">
			<div class="span8"><h4 style="margin: 0">'.$company;
				if (!empty($link)) {
					echo ' <a href="'.$link.'" target="_BLANK"><span class="badge">Website <i class="icon-arrow-right icon-white"></i></span></a>';
				}
			echo '</h4> 
			
			</div>	
			<div class="span4"><h4 class="pull-right hidden-phone" style="margin: 0">'.$city.'</h4>
			</div>
			
		</div> <!-- end row-->
			
		<div class="row">
			<div class="span6"><span style="font-style:italic; font-size: 15px;">'.$job.'</span></div>	
			<div class="span6">
			<span class="visible-phone label">'.$dates.'</span>
			<span class="hidden-phone pull-right" style="font-style:italic; font-size: 15px;" >'.$dates.'</span>
			
			</div>
		</div> <!-- end row-->
		';
		if (!empty($blob)) {
			echo '
			<div class="row" style="padding-top: 8px;"><div class="span12">'.$blob.'</div></div>';
			}	
			
}


function iprogram($language,$percent) {
	// Progress bars for technical section
	echo '
	<div class="row">
		<div class="span3"
		<p><h4 style="text-align: right" class="hidden-phone">'.$language.'</h4></p>
		<p><span class="badge visible-phone" style="text-align: center">'.$language.'</span></p>
		</div>
		<div class="span4">
	      <div class="progress" style="margin: 10px 0 10px 0; height: 22px;">
	        <div class="bar" style="width: '.$percent.'%;"></div>
	      </div>
	    </div>
		<div class="span1"></div>
	</div>
	';
	
}

function project($name,$look,$code) {
	// Makes lists for displaying projects
	echo '<li style="padding-top: 12px">';
	
	if (!empty($look)) {
		// link to look at completed project
		echo '<a href="'.$look.'" target="_BLANK" >'.$name.'</a>';
	}
	else {
		echo $name;
	}
	
	if (!empty($code)) {
		// link to look at completed project
		echo ' <a href="'.$code.'" target="_BLANK""><span class="badge badge-info">Code <i class="icon-arrow-right icon-white"></i></span></a>';
	}
	echo '</li>';
}

function extra($title,$blob) {
	echo '<div class="row" style="padding-top:30px">
				<div class="span3">
					<span class="pull-right hidden-phone"><strong>'.$title.'</strong></span>
					<span class="visible-phone badge">'.$title.'</span>
				</div>
				<div class="span5">
					'.$blob.'
				</div>
			</div>';
				
}
?>

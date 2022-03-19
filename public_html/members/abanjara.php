<!-- Put your name and year of graduation here! -->
<!-- Amesha Banjara, class of 2023 -->
<!-- When someone edits this file, they will add their name too. -->

<!DOCTYPE html>
<html>
    <!--This is a comment. The browser won't show it.-->

    <head>
        <title>Amesha Banjara</title>

        <!-- This line links the CSS file to this one.-->
	<link href="/css/bootstrap.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="/css/default.css" type="text/css"/>
	<style> .button {
  font: bold 1em Arial;
  text-decoration: none;
  background-color: #d3d3d3;
  color: #333333;
  padding: 2px 6px 2px 6px;
  border-top: 1px solid #333333;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #333333;
} 
ul.horizontal{
margin:0;
padding:0;
White-space: nowrap;
}
ul.horizontal li{
display:block;
float:left;
padding:0 10px;
}

</style>

    </head>

    <body>
        <!-- The line below brings in the header from another file, using PHP. -->
        <?php include "../common/header.php" ?>

        <!-- Your page's content begins here.-->
        <h1>Meet Amesha Banjara, Class of 2023</h1>
		<div>
			<ul class="horizontal">
				<li><a class="button" href="https://github.com/ameshabanjara" target="_blank">Amesha Banjara's GitHub</a></li>
				<li><a class="button" href="https://www.linkedin.com/in/amesha-banjara-8719a0212/" target="_blank">Amesha Banjara's LinkedIn</a></li>
			</ul>
		</div>
		<div style="clear: both;"></div>
	<!--<img src="/members/ebroad.png" alt="Emily Broad" align="center" /> -->
	<img src="https://rhsgirlswhocode.club/members/abanjara.jpg" alt="AmeshaB"style="display: block;margin-left: auto; margin-right: auto;width:90vw;height:auto;max-width:60%"
        
	<p>Ever since Amesha Banjara took her first computer class in her freshman year of high school, she has been enthralled in all aspects of technology. As a member and leader of several technology-related clubs, Amesha has competed in HPE CodeWars, CyberPatriot, Mayor’s Cup, National Cyber League, National Cyber Scholarship, and was a 2021 NCWIT Regional Affiliate Winner. Within Girls Who Code, Amesha currently serves as the Club Secretary and developed the “About Us” page as well as the Member Profiles page that you’re reading right now! In the future, Amesha hopes to continue pursuing a career in Computer Science or Information Technology in order to use her knowledge to help develop and manage innovations in technology. For more information, check her out on GitHub and LinkedIn!
</p>
	

        <!-- Page content ends here.-->

        <!-- This line brings in the footer. -->
        <?php include "common/footer.php" ?>
    </body>
</html>
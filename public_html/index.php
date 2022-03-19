<!-- Put your name and year of graduation here!-->
<!-- Melody Gill, Class of 2021 -->
<!-- Emily Broad, Class of 2022 -->
<!-- Sierra Janson, Class of 2023 -->
<!-- When someone edits this file, they will add their name too.-->

<!DOCTYPE html>
<html>
    <!--This is a comment. The browser won't show it.-->
    <head>
        <title>RHS Girls Who Code</title>
        <!-- This line links the CSS file to this one.-->
		<!-- This page isn't connecting to the default css page !!!!!!!!!!!-->
	<link href="/css/bootstrap.css" type="text/css" rel="stylesheet" />
       <link rel="stylesheet" href="/css/default.css" type="text/css" />  
    </head>

    <body>
        <!-- The line below brings in the header from another file, using PHP. -->
        <?php include "common/header.php" ?>

        <!-- Your page's content begins here.-->
        <h1>Rocklin High School's Girls Who Code</h1>
        <!-- Here's our club photo from Spring 2021 -->
        <img id="clubPhoto" src="Club Photo.JPG" alt="Spring 2021 Club Photo" style="display: block;margin-left: auto; margin-right: auto;width:80vw;height:auto;max-width:60%">

        <br>

        <p>Hello there, this is the home page for the Rocklin High School chapter of Girls Who Code, an international organization with the goal of closing the gender gap in the computer science industry.</p>
        <p>We'd love to have you join our club, but this website is also for anyone interested in seeing what it is we do, from computer science education to coding competitions. All students are welcome to participate in Girls Who Code regardless of sex or gender identity!</p>
        <p>For recruiters and admissions officers, feel free to explore the hard work our members have put into this website, built by us for the club (there's more information on members linked in the nav, too).</p>
        <p>For more information about Rocklin High School, visit the school site: <a href="https://rhs.rocklinusd.org/#">here</a></p>
           
        <!-- Page content ends here.-->

        <!-- This line brings in the footer. -->
        <?php include "common/footer.php" ?>
    </body>
</html>
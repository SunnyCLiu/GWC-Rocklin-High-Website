<!-- Put your name and year of graduation here! -->
<!-- Amesha Banjara, class of 2023 -->
<!-- When someone edits this file, they will add their name too. -->

<!DOCTYPE html>
<html>
    <!--This is a comment. The browser won't show it.-->

    <head>
        <title>Sunny Liu</title>

        <!-- This line links the CSS file to this one.-->
	<link href="/css/bootstrap.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="/css/default.css" type="text/css"/>
	<style> .button {
  font: bold 1em Arial;
  text-decoration: none;
  background-color: #EEEEEE;
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
        <h1>Meet Sunny Liu, Class of 2023</h1>
		<div>
			<ul class="horizontal">
				<li><a class="button" href="https://github.com/SunnyCLiu" target="_blank">Sunny Liu's GitHub</a></li>
				<li><a class="button" href="https://www.linkedin.com/in/liu-sunny" target="_blank">Sunny Liu's LinkedIn</a></li>
			</ul>
		</div>
		<div style="clear: both;"></div>
	<img src="https://rhsgirlswhocode.club/members/sliu.jpg" alt="Sunny Liu"style="display: block;margin-left: auto; margin-right: auto;width:90vw;height:auto;max-width:60%">
        <p>Sunny Liu is currently the Treasurer and Co-Tutor of the Rocklin High School Girls Who Code. She helped make the HTML and developed the main CSS of the website you’re reading right now! In her free time, Sunny loves to work on community service projects, code games and programs, swim, play the piano, and hang out with friends. Learn more about Sunny through her GitHub and LinkedIn above!</p>
	

        <!-- Page content ends here.-->

        <!-- This line brings in the footer. -->
        <?php include "common/footer.php" ?>
    </body>
</html>
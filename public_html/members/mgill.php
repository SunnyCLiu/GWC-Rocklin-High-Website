<!-- Put your name and year of graduation here! -->
<!-- Amesha Banjara, class of 2023 -->
<!-- When someone edits this file, they will add their name too. -->

<!DOCTYPE html>
<html>
    <!--This is a comment. The browser won't show it.-->

    <head>
        <title>Melody Gill</title>

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
        <h1>Meet Melody Gill, Class of 2021</h1>
		<div>
			<ul class="horizontal">
				<li><a class="button" href="https://github.com/melodygill" target="_blank">Melody Gill's GitHub</a></li>
				<li><a class="button" href="https://www.linkedin.com/in/melody-gill" target="_blank">Melody Gill's LinkedIn</a></li>
			</ul>
		</div>
		<div style="clear: both;"></div>
	<img src="https://rhsgirlswhocode.club/members/mgill.jpg" alt="Melody Gill"style="display: block;margin-left: auto; margin-right: auto;width:90vw;height:auto;max-width:60%">
        <p>Ever since she began learning Python in sixth grade, Melody Gill has been interested in computer science. Since then, Melody has learned Java and started learning PHP. She also has had experience in the field with a Hewlett Packard Enterprise internship. As the project manager of her Girls Who Code club, she is responsible for planning the website you're currently reading, as well as creating the login system. Melody plans to attend UC San Diego with a major in Computer Science in the class of 2025! Learn more about Melody through her links above!</p>
	

        <!-- Page content ends here.-->

        <!-- This line brings in the footer. -->
        <?php include "common/footer.php" ?>
    </body>
</html>
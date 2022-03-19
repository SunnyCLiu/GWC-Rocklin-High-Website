<!-- Put your name and year of graduation here! -->
<!-- Emily Broad, class of 2022 -->
<!-- Amesha Banjara, class of 2023 -->
<!-- When someone edits this file, they will add their name too. -->

<!DOCTYPE html>
<html>
    <!--This is a comment. The browser won't show it.-->

    <head>
        <title>Emily Broad</title>

        <!-- This line links the CSS file to this one.-->
	<link href="/css/bootstrap.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="/css/default.css" type="text/css"/>
	<style> .button {
  font: bold 1em Arial;
  text-decoration: none;
  background-color: #EEEEEE;
  color: #333333;
  padding: 2px 6px 2px 6px;
  border-top: 1px solid #CCCCCC;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #CCCCCC;
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
        <h1>Meet Emily Broad, Class of 2022</h1>
		<div>
			<ul class="horizontal">
				<li><a class="button" href="https://github.com/embroad" target="_blank">Emily Broad's GitHub</a></li>
				<li><a class="button" href="https://www.linkedin.com target="_blank"/in/emily-broad-819833210">Emily Broad's LinkedIn</a></li>
			</ul>
		</div>
		<div style="clear: both;"></div>

	<!--<img src="/members/ebroad.png" alt="Emily Broad" align="center" /> -->
	<img src="https://rhsgirlswhocode.club/members/ebroad.jpg" alt="Emily"style="display: block;margin-left: auto; margin-right: auto;width:90vw;height:auto;max-width:60%"
>
        <p>Emily first started Girls Who Code after discovering her love for problem solving and computer science during her freshman year at Rocklin High School. As the president of the Rocklin High School Girls Who Code, Emily says that her introduction to computer science stemmed from her dad who used to be a computer science/mathematics professor. She enjoys programming mainly because of the connection it has to math and how it brings like-minded people together within the club. Over the years, Emily has participated in HPE CodeWars, learned to code in Python, and even has some experience in C! Outside of Girls Who Code, she also enjoys applying her computer science based problem solving skills to helping student athletes through the Sports Medicine Program at RHS. For more information, check out her GitHub and LinkedIn above!</p>
	

        <!-- Page content ends here.-->

        <!-- This line brings in the footer. -->
        <?php include "common/footer.php" ?>
    </body>
</html>
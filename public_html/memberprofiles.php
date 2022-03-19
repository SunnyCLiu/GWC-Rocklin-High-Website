<!-- Put your name and year of graduation here! -->
<!-- Emily Broad, class of 2022 -->
<!-- Amesha Banjara, Class of 2023 -->
<!-- When someone edits this file, they will add their name too. -->

<!-- my intial goal is to format it with a grid of photos linked to pages for each member, both current and former -->
<!-- for now, the pages are just linked together with some normal links -->

<!DOCTYPE html>
<html>
    <!--This is a comment. The browser won't show it.-->

    <head>
        <title>Member Profiles</title>

        <!-- This line links the CSS file to this one.-->
	<link href="/css/bootstrap.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="/css/default.css" type="text/css"/>
    </head>

    <body>
        <!-- The line below brings in the header from another file, using PHP. -->
        <?php include "common/header.php" ?>

        <!-- Your page's content begins here.-->
        <h1>Meet the RHS Girls Who Code</h1>
        
        <h2>Current Members</h2>
        <ul>
            <li><a href="/members/ebroad.php">Emily Broad, Class of 2022</a></li>
            <li><a href="/members/mgill.php">Melody Gill, Class of 2021</a></li>
            <li><a href="/members/sliu.php">Sunny Liu, Class of 2023</a></li>
            <li><a href="/members/abanjara.php">Amesha Banjara, Class of 2023</a></li>
            <li><a href="/members/sjanson.php">Sierra Janson, Class of 2023</a></li>
            <li>Dhriti Jagadish, Class of 2023</li>
        </ul>

        <!-- Page content ends here.-->

        <!-- This line brings in the footer. -->
        <?php include "common/footer.php" ?>
    </body>
</html>
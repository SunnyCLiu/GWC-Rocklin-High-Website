<!-- I went ahead and broke the link for the projects page for now, once we have some content, we can upload it- emily :) -->

<nav class="nav">
    <a class="nav-link" href="/index.php">Home Page</a>
    <a class="nav-link" href="/about.php">About Us</a>
    <a class="nav-link" href="/memberprofiles.php">Member Profiles</a>
    <!-- <a class="nav-link" href="/projects.php">Projects</a> -->
    <a class="nav-link" href="/activities.php">Activities</a>
    <a class="nav-link" href="/resources.php">Resources</a>
    <?php
    if(isset($_COOKIE['rhsgwc_security']))
        {
            echo('<a class="nav-link" href="/login-system/logout.php">Log Out</a>');
            echo('<a class="nav-link" href="/login-system/createuser.php">Create User</a>');
            echo('<a class="nav-link" href="/login-system/changepassword.php">Change Password</a>');
            echo('<a class="nav-link" href="/login-system/deleteuser.php">Delete User</a>');
        }
    else
    {
        echo('<a class="nav-link" href="/login-system/login.php">Log In</a>');
    }
    ?>
</nav>
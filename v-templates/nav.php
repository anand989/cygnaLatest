<?php
	//checking cookie value and session value
	if(isset($_SESSION['user_id']) && isset($GLOBALS['_COOKIE']['uid'])){
?>
	 <div class="collapse navbar-collapse navbar-right" id="profile_header_nav">
        <ul class="nav navbar-nav header_nav_outline">
            <li class="header_nav"><a href="cygna.php">Cygna</a></li>
            <li class="header_nav"><a href="profile.php">Profile</a></li>
            <li class="header_nav"><a href="project-list.php">Projects</a></li>
            <li class="header_nav"><a href="post-bid.php">Bid</a></li>
            <li class="header_nav"><a href="survey.php">Survey</a></li>
            <li class="header_nav"><a href="ticket.php">Submit Ticket</a></li>
            <li class="header_nav"><a href="v-modules/logout.php">Log Out</a></li>
        </ul>
    </div>

<?php
	} else {
?>

	 <div class="collapse navbar-collapse navbar-right" id="profile_header_nav">
        <ul class="nav navbar-nav header_nav_outline">
            <li class="header_nav"><a href="index.php">Home</a></li>
            <li class="header_nav"><a href="services-products.php">Services</a></li>
            <li class="header_nav"><a href="hiring-freelancer.php">Hire</a></li>
            <li class="header_nav"><a href="finding-job.php">Work</a></li>
            <li class="header_nav"><a href="survey.php">Survey</a></li>
            <li class="header_nav"><a href="contact-us.php">Contact us</a></li>
        </ul>
    </div>
    
<?php } ?>


   

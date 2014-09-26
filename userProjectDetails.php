<?php
	session_start();
	$pageTitle = 'User Project Details';
	if(!isset($GLOBALS['_COOKIE']['uid']) && !isset($_SESSION['user_id']))
	{
		header("Location: log-in.php");
	}
	include ("v-templates/header.php");
?>
<?php
	if(isset($GLOBALS['_GET']))
	{
		$pid = $GLOBALS['_GET']['pid'];
		//getting user id of this project id
		$uid = $manageContent->getUserIdFromPro($pid);
		if($uid != $_SESSION['user_id'])
		{
			header("Location: cygna.php?op=pro");
		}
?>
<?php
	//including post header to this page
	include ("v-templates/post-header.php");
?>
<!-- body starts here -->
<div id="profile_body_outline">
	
    <!-- div for showing success message--->
	<div class="alert alert-success" id="success_msg"></div>
	<!-- div for showing warning message--->
	<div class="alert alert-danger" id="warning_msg"></div>
    
	<div class="container">
    	<div class="row profile_body_row">
        	<!-- body left section starts here -->
        	<div class="col-md-3 profile_left_part_outline">
                <?php
                	include 'v-modules/right-nav.php';
				?>
				<?php
					include 'v-modules/user-running-projects.php';
				?>
			<?php
				include ("v-modules/polling.php");
			?>	
			</div>	
			
            <!-- body left section ends here -->
            <!-- body right section starts here -->
           <div class="col-md-8 profile_left_part_outline">
           		<div class="project_list_heading_bar project_title_outline_userdetails">
                    <span class="pull-left">Project Details</span>
                    
                    <div class="clearfix"></div>
                </div>
				<?php
					include 'v-modules/post-bid-project-details.php';
				?>
                <?php
					include 'v-modules/user-project-bid-list.php';
				?>
            </div>
            <!-- body right section ends here -->
        </div>
    </div>
</div>
</div>
<?php } ?>
<!-- body ends here -->
<?php
	include 'v-templates/post-footer.php';
?>

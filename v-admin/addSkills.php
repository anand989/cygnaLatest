<?php
	session_start();
	$pageTitle = 'Add Skills';
	include 'v-templates/header.php';
?>
	<?php
		include 'v-templates/left_sidebar.php';
	?>
        <div id="page-wrapper">
        	<!-- div for showing success message--->
            <div class="alert alert-success" id="success_msg"></div>
            <!-- div for showing warning message--->
            <div class="alert alert-danger" id="warning_msg"></div>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Skill Details</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <?php if(!isset($GLOBALS['_GET']['id'])){ ?>
            <!-- /.row -->
            <div class="row">
            	<div class="col-lg-12">
                	<div class="panel panel-default">
                        <div class="panel-heading"><i class="fa fa-plus-circle fa-fw"></i> Add Skill</div>
                        <div class="panel-body">
                        	<form action="v-includes/class.formData.php" role="form" method="post">
                                <div class="form-group">
                                    <label class="control-label p_label col-sm-3">Skill Name</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="skill_name" />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-7 col-sm-offset-3">
                                    	<input type="hidden" name="fn" value="<?php echo md5('add_skill') ?>" />
                                        <input type="submit" class="btn btn-success btn-lg" value="SUBMIT" />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                   
                </div>
            </div>
            <!-- /.row -->
            <?php 
				} else {
					$skills = $manageContent->getAdminSelectedDetails('skills','skillId',$_GET['id']);
            ?>
            <!-- /.row -->
            <div class="row">
            	<div class="col-lg-12">
                	<div class="panel panel-default">
                        <div class="panel-heading"><i class="fa fa-plus-circle fa-fw"></i> Edit Skill</div>
                        <div class="panel-body">
                        	<form action="v-includes/class.formData.php" role="form" method="post">
                                <div class="form-group">
                                    <label class="control-label p_label col-sm-3">Skill Name</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="skill_name" value="<?php echo $skills[0]['name']; ?>"/>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-7 col-sm-offset-3">
                                    	<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>" />
                                    	<input type="hidden" name="fn" value="<?php echo md5('edit_skill') ?>" />
                                        <input type="submit" class="btn btn-success btn-lg" value="UPDATE" />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                   
                </div>
            </div>
            <!-- /.row -->
            <?php } ?>
            <div class="row">
            	<div class="col-lg-12">
                	<div class="panel panel-default">
                        <div class="panel-heading"><i class="fa fa-plus-circle fa-fw"></i> Current skills on the system</div>
                        <div class="panel-body">
                        	<?php
                        		//skills in the system
                        		$manageContent->getSkills();
                        	?>
                        </div>
                    </div>
                   
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php
	include 'v-templates/footer.php';
?>

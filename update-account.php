<?php
	session_start();
	require ("../databases/config_users.php");
	require("php/header.php");

	if(isset($_GET['project'])){
		$project = $_GET['project'];
		$sql = mysql_query("SELECT * FROM `ideas` WHERE `project`='$project'");

		if(mysql_num_rows($sql) > 0 ){
			while($row = mysql_fetch_object($sql)){
				$title = $row->title;
				$descrip = $row->descrip;
				$equity = $row->equity;
				$company = $row->company;
				$founder = $row->founder;

			}
		}
	}

?>
<html>
	<!--JUMBOTRON BEGINNING -->


		<div class="container">
			<div class="jumbotron">
				<h1 class="h1" id ="welcome">Project Settings</h1>
				<?php echo '<form action="update_project.php?project='. $project .'" method="POST" id="projectForm">'?>
					<label>Title:
						<input class="form-control"  id = "title"name="title" type="text" value=<?php echo $title;?>>
					</label><br/>

					<label>Founder(s):
						<input class="form-control"  id = "founder"name="founder" type="text" value=<?php echo $founder;?>>
					</label><br/>

					<label>Equity:
						<input class="form-control"  id = "equity"name="equity" type="text" value=<?php echo $equity;?>>
					</label><br/>

					<label>Description:
						<textarea type="textarea" id = "desc"name="desc"class= "form-control" style="overflow:auto;resize:none !important;" rows="5" cols="40"><?php echo $bioa; ?></textarea>
					</label><br/>
					<button type="submit" id = "saveProject" name="saveProject" class="btn btn-success">Save</button>
				</form>
			</div>
		</div>


		<script type="text/javascript" src  = "js/Login-AJAX.js"></script>
</html>
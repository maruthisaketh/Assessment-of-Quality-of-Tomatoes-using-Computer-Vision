<html>
	<head>
		<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap.js"></script>
	<!------ Include the above in your HEAD tag ---------->
	<style>
  	body 
  	{
    	font: 400 15px Lato, sans-serif;
      	line-height: 1.8;
      	color: #818181;
  	}
	  .jumbotron {
	      background-color: #f4511e;
	      color: #fff;
	      padding: 40px 25px;
	      font-family: Montserrat, sans-serif;
	  }
	  .container-fluid {
	      padding: 60px 50px;
	  }
	  .panel {
	      border: 1px solid #f4511e; 
	      border-radius:0 !important;
	      transition: box-shadow 0.5s;
	  }
	  .panel:hover {
	      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
	  }
	  .panel-heading {
	      color: #fff !important;
	      background-color: #f4511e !important;
	      padding: 10px;
	      border-bottom: 1px solid transparent;
	      border-top-left-radius: 0px;
	      border-top-right-radius: 0px;
	      border-bottom-left-radius: 0px;
	      border-bottom-right-radius: 0px;
	  }
	  .float-right
	  {
	  	float : right;
	  }
	  .float-left
	  {
	  	float : left;
	  }
  		.round-logo
  {
    z-index: 100;
    left: 50%;
    border-radius: 100%;
    width: 150px;
    height: 150px;
    margin-left: 40px;
  }
  </style>
	</head>
	<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
		<div class="jumbotron text-center">
      <img class="round-logo img-fluid float-left" src="Logo_tmp2.png" style="margin-top:-25px"alt="">
  			<h1 align="center">Quality Assessment</h1> 
  			<p>of Tomatoes</p> 
  		</div>
			<?php
				$target_dir = "D:/MINI/dest/";
				$target_file = $target_dir . basename($_FILES["filetoupload"]["name"]);
				$uploadOk = 1;
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
				move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file);
				shell_exec("C:/Users/saketh/Anaconda3/envs/myenv/python.exe move_images.py");
				$dirname = "proj_imgs/0/";
				if($opendir = opendir($dirname))
				{
					while(($file = readdir($opendir)) !== FALSE)
					{
						if($file != "." && $file != "..")
						{
							echo "<div class = 'container' style='margin-top:30px' align = 'center'>";
							echo "<img src = '$dirname/$file' height = '150' width = '150'><br/>";
							echo "</div>";
						}
					}
				}		
			?>
		<div class = "container" style="margin-top:30px" align = "center">
			<form role="form" action = "assess.php" method = "post">
				<button type="submit" class="btn btn-sm btn-default">Assess</button>
			</form>
		</div>
	</body>
</html>
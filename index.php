<html>
	<head>
		<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<link href="css/mypage.css" rel="stylesheet">
	<!------ Include the above in your HEAD tag ---------->
	<style>
  .round
  {
    z-index: 100;
    position: absolute;
    left: 50%;
    border-radius: 100%;
    background-color: #f4511e;
    box-shadow: 0 0 5px #4582ec;
    width: 200px;
    height: 200px;
    margin-left: -100px;
    margin-top: -7px;
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
    <?php
      shell_exec("python move_dest.py");
      ?>
		<div class="jumbotron text-center">
      <img class="round-logo img-fluid float-left" src="Logo_tmp2.png" style="margin-top:-25px"alt="">
  			<h1 align="center">Quality Assessment</h1> 
  			<p>of Tomatoes</p> 
  		</div>
		<div class="container-fluid" bg-grey" style="margin-top:30px">
			<div class = "row">
				<div class="col-md-7">
          <h3>Flow of process</h3>
      <ul class="timeline">
        <li>
          <div class="timeline-image">
           <img class="round" src="logo1.png" alt="">
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4></h4>
            </div>
            <div class="timeline-body">
              <p class="text-muted">
                 </p>
            </div>
          </div>
          <div class="line"></div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-image">
            <img class="round" src="logo2.png" alt="">
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4></h4>
            </div>
            <div class="timeline-body">
              <p class="text-muted">
                
              </p>
            </div>
          </div>
          <div class="line"></div>
        </li>
        <li>
          <div class="timeline-image">
            <img class="round" src="logo3.png" alt="">
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4></h4>
            </div>
            <div class="timeline-body">
              <p class="text-muted">
                
              </p>
            </div>
          </div>
        </li>
		    	</div>
			<div class="col-md-5 float-right">
				<div class="panel panel-default float-right" style="margin-top:30px">
					<div class="panel-heading">
						<h3 class="panel" align = "center"><strong>Choose</strong></h3>
					</div>
					<div class="panel-body" style="margin:15px 2px">
						<div class = "container">
							<form role="form" action = "img_disp.php" method = "post">
						<p>Capture an image <button type="submit" class="btn btn-sm btn-default float-right">Capture</button></p>
							</form>
							<form role="form" action = "file.php" method = "post" enctype="multipart/form-data">
								<input class = "float-left" type="file" name="filetoupload" accept="image/*" id = "filetoupload">
								<button type="submit" class="btn btn-sm btn-default float-right">Upload</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</body>
</html>
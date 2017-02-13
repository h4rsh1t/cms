<?php
session_start();

	if(!isset($_SESSION['coe'])){
		header("Location:index.php");
	}
	if(isset($_POST["logout"])){
		session_destroy();
		header('location:index.php');
	}
?>
<html>
<head>
    <title>COE Portal | Welcome</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body style="background-color: #eeeeee ; padding-left: 150px;padding-top: 150px">
	<form method="post" >
		<button type="submit" class="btn btn-default" name="logout" method="post">Logout</button>
	</form>

<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#mailbox">Mail</a></li>
    <li><a data-toggle="tab" href="#timeTable">Time Table</a></li>
    <li><a data-toggle="tab" href="#dateSheet">Date Sheet</a></li>
</ul>
<div class="tab-content">
    <div id="mailbox" class="tab-pane fade in active">
			<button type="button" data-toggle="modal" class="btn btn-danger" href="#composeModal">Compose</button>
    </div>
    <div id="timeTable" class="tab-pane fade in">
       <div class="row">
           <div class="col-md-4">
                <form role="form" method="post" action="uploadTt.php" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="semester">Semester</label>
                        <select class="form-control" name="semester">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="branch">Branch</label>
                        <select name="branch" class="form-control">
                            <option value="cse">CSE</option>
                            <option value="mech">MECH</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="section">Section</label>
                        <select name="section" class="form-control">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="file" name="tTable" id="fileToUpload" class="form-control"><span class="small">Maximum size: 1mb</span>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-default" type="submit">Upload</button>
                    </div>

                </form>
           </div>
       </div>
    </div>
    <div id="dateSheet" class="tab-pane fade in">
        <form role="form" action="uploadDs.php" method="post" enctype="multipart/form-data">
            <div class="form-group">Please Select the file to be uploaded</div>
            <div class="form-group"> <input type="file" name="fileToUpload" id="fileToUpload"><span class="small">Maximum size: 1mb</span> </div>
            <div class="form-group"><button class="btn btn-default" name="dateSheetUpload">Upload</button></div>
        </form>
    </div>
</div>
<div class="modal fade" id="composeModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #5e5e5e;text-align: center;color: white !important;font-size: 30px">
                <h6 style="font-size: 20px">New Message</h6>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body" style="padding: 40px 50px">
                <form role="form" method="post" action="mailsend.php">
                    <div class="form-group">
                        <lable for="to">To: </lable>
                        <input type="text" class="form-control" name="to" required />
                    </div>
                    <div class="form-group">
                        <lable for="subject">Subject: </lable>
                        <input type="text" class="form-control" name="subject" required />
                    </div>
                    <div class="form-group">
                        <lable for="body">Body: </lable>
                        <textarea class="form-control" name="body" cols="40" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success"  type="submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>

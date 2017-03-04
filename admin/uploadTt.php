<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Dashboard</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
</head>
<body>
    <div id="timeTable" class="tab-pane fade in">
        <form role="form" method="post" action="uploadMain.php" enctype="multipart/form-data">
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
                    <button class="btn btn-default" name = "timeTable" type="submit">Upload</button>
                </div>

            </form>
        </div>

<script>
    CKEDITOR.replace( 'editor1' );
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>


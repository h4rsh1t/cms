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
<form role="form" action="uploadMain.php" method="post" enctype="multipart/form-data">
    <div class="form-group">Please Select the file to be uploaded</div>
    <div class="form-group"> <input type="file" name="fileToUpload" id="fileToUpload"><span class="small">Maximum size: 1mb</span> </div>
    <div class="form-group"><button class="btn btn-default" name="datesheet">Upload</button></div>
</form>


<script>
    CKEDITOR.replace( 'editor1' );
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

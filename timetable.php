<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Time Table</title>
    <!-- Bootstrap core CSS -->
    <link href="admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin/css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body>

    <form role="form" method="post" enctype="multipart/form-data"  action="showTimeTable.php">

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
            <button name="viewTimeTable" class="btn btn-info" type="submit">View</button>
        </div>
    </form>








    <script>
       CKEDITOR.replace( 'editor1' );
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

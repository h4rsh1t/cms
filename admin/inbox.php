<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body>

    <div class="panel panel-default">
      <div class="panel-heading">
          <div class="container">
              <div class="row">
                  <div class="col-md-6">
                      <h3 class="panel-title">Mail Box</h3>
                  </div>
                  <div class="col-md-6">
                      <div class="dropdown create">
                          <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="modal" data-target="#composeModal">
                              Compose
                          </button>

                      </div>
                  </div>
              </div>
          </div>

      </div>
      <div class="panel-body">
        <table class="table table-striped table-hover">
            <tr>
              <th>#</th>
              <th>From</th>
              <th>Subject</th>
            </tr>
            <?php
            /*if(mysqli_num_rows($sql) > 0){
              $i = 1;
                while ($row = mysqli_fetch_assoc($sql)) {

                  echo "<tr>";
                  echo "<td>".$i."</td>"; //row[1] = name
                  echo "<td>".$row['sender']."</td>"; //row[0] = username
                  echo "<td><a href='view.php?id=".$row['sr_no']."'>".$row['subject']."</a></td>"; //row[2] = timestamp
                  echo "</tr>";
                  $i++;
                }
            }*/

            ?>
        </table>
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














    <script>
       CKEDITOR.replace( 'editor1' );

    </script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
  </body>
</html>

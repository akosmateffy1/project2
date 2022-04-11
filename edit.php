
<?php
$servername =   'localhost';
$username   =   'root';
$password   =   '';
$dbname     =   'nytabor';
$connection =   mysqli_connect($servername, $username, $password,"$dbname");
$update = '';
if(!$connection)
{
    die('Could not connect My Sql:' .mysql_error());
}

$country  = mysqli_query($connection, "SELECT DISTINCT country FROM tbl_insert");

if(count($_POST)>0)
{
    mysqli_query($connection,"UPDATE tbl_insert set name='" . $_POST['name'] . "',country='" . $_POST['country'] . "' WHERE `tbl_insert`.`id` = 1");
    $update = "Update has been successfully.!";
}

$edite = mysqli_query($connection,"SELECT * FROM tbl_insert WHERE `tbl_insert`.`id` = 1");
$row= mysqli_fetch_array($edite);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="icon" type="img/home.png" href="img/home.png">
</head>
<body>
  
    <div class="container-fluid h-100 bg-light text-dark">
        <div class="row justify-content-center align-items-center">
            <h1>Select Option Dynamic Mysql</h1>    
        </div>
        <hr/>
        <div class="row justify-content-center align-items-center h-100">
            <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
            <a href="index.php">Back to list</a>
            <h5 class="text-success text-center" id="update"><?=$update;?><h5>
                <form action="edite.php" method="POST">
                
                <br />
                <div class="form-group">
                    <input type="text" class="form-control" name="name" value="<?=$row['name']; ?>">
                </div>
                <div class="form-group">
                    <select class="form-control" name="country">
                    <?php foreach($country as $rows):?>
                        <option value="<?php echo $rows['country']; ?>"<?php if($row['country'] == $rows['country']) echo 'selected="selected"'; ?>><?php echo $rows['country']; ?></option>
                    <?php endforeach;?>

                    </select>
                </div>
              <div class="form-group">
                <div class="container">
                  <div class="row">
                    <div class="col"><button type="submit" name="submit" class="col-6 btn btn-primary btn-sm float-left">Submit</button></div>
                    <div class="col"><button type="submit" name="reset" class="col-6 btn btn-secondary btn-sm float-right">Reset</button></div>
                  </div>
                </div>
              </div>
            </form>
    

          </div>
        </div>
      </div>
</body>
</html>
<?php
$servername =   'localhost';
$username   =   'root';
$password   =   '';
$dbname     =   'nytabor';
$connection =   mysqli_connect($servername, $username, $password,"$dbname");
if(!$connection)
{
    die('Could not connect My Sql:' .mysql_error());
}

$select =   "SELECT * FROM `tbl_select`";
$retrive = mysqli_query($connection, "SELECT * FROM tbl_insert");
$option = mysqli_query($connection, "SELECT * FROM tbl_select");


$message    =   '';
if(isset($_POST['submit']))
{
    $name       = $_POST['name'];
    $country    =   $_POST['country'];

    // insert data to database
    $insert = "INSERT INTO tbl_insert (name, country) VALUES ('$name', '$country')";
    if(mysqli_query($connection, $insert))
    {
        $message =  "Sikeres időpontot foglalás!";
    } 
    else
    {
        $message = "ERROR: Could not able to execute $insert. " . mysqli_error($connection);
    }
    // close connection
    mysqli_close($connection);
}

?>
<!DOCTYPE html>
<html lang="hu">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style2.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   <title>Sportok</title>
   <link rel="icon" type="img/home.png" href="img/home.png">
</head>

<body>

    <section class="section1">

        <div class="card">
            <div class="card-body">
                <a href="home.php"><img class="photo" src="home.png" alt="Vissza a Főoldalra!"></a>
                <div class="">
                    <h5 class="text-success text-center" id="message"><?=$message;?><h5>
                    <form action="index.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Foglalási név" required>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="country">
                            <option>Kérlek Válassz időpontot!</option>
                            <?php foreach($option as $key => $value){ ?>
                                <option value="<?=$value['country'] ;?>"><?=$value['country'] ;?></option>
                            <?php } ?>
                        </select>
                    </div>
                  <div class="form-group">
                    <div class="container">
                      <div class="row">
                        <div class="col"><button type="submit" name="submit" class="col-3 btn btn-primary btn-sm ">Foglalás</button></div>
                       
                      </div>
                    </div>
                  </div>
                </form>
              

              </div>
            </div>
        </div>

        <script>
            $(document).ready(function()
            {
                setTimeout(function()
                {
                    $('#message').hide();
                },3000);
            });
    
            $(document).ready(function()
            {
                setTimeout(function()
                {
                    $('#update').hide();
                },3000);
            }); 
    
        </script>
    </section>
    <br>
    <section class="section1">
    <table id="tableHorizontalWrapper" class="table table-striped table-bordered table-sm text-center" cellspacing="0"width="60%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Név</th>
                            <th>Időpont</th>
                            <th>Helyszin</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    while($row = mysqli_fetch_array($retrive))
                    {
                        ?>
                        <tr>
                        <td><?= $row['id'];?></td>
                        <td><?= $row['name'];?></td>
                        <td><?= $row['country'];?></td>
                        <td><a href="https://www.google.hu/maps/place/M%C5%B1f%C3%BCves+Focip%C3%A1lya/@47.7788785,18.9472777,14z/data=!4m9!1m2!2m1!1zVmlzZWdyw6FkIGZvY2kgcMOhbHlh!3m5!1s0x476a7df8769176a1:0x9d8d963b6b5991f6!8m2!3d47.7788785!4d18.9647872!15sChVWaXNlZ3LDoWQgZm9jaSBww6FseWGSAQxzb2NjZXJfZmllbGQ?hl=hu&authuser=0">Visegrád Akácfa u 7.</a></td>
                        <!-- <td><a href="edite.php?id=<?php echo $row["id"]; ?>">Edite</a></td> -->
                        </tr>
                    <?php
                    }
                
                    ?>
                    </tbody>
                </table>
                
    </section>
    <center>
            <a href="home.php" class="delete-btn">Vissza</a>
    </center>
    

</body>
</html>
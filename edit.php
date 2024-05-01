<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "hostel_management";

// create connection

$connection = new mysqli($servername, $username, $password, $database);

$id= "";
$owner= "";
$hostel_name= "";
$rent= "";
$contact= "";
$address= "";
$description= "";

$errorMessage= "";
$successMessage= "";

if($_SERVER['REQUEST_METHOD']== 'GET'){
    //GET method show the data of client

     if(!isset($_GET["id"])){
        header("location:/hostel_management/index.php");
        exit;
     }

     $id = $_GET["id"];
    $sql = "SELECT*FROM clients WHERE id=$id";
    $result = $connection-> query($sql);
    $row = $result-> fetch_assoc();

    if(!$row){
        header("location:/hostel_management/index.php");
        exit;
     }

     $owner = $row["Owner"];
     $hostel_name = $row["Hostel_name"];
     $rent = $row["Rent"];
     $contact = $row["Contact"];
     $address = $row["Address"];
     $description = $row["Description"];

}else{
    //POST method: update the data of client

    $id = $_POST["id"];
    $owner = $_POST["Owner"];
    $hostel_name = $_POST["Hostel_name"];
    $rent = $_POST["Rent"];
    $contact = $_POST["Contact"];
    $address = $_POST["Address"];
    $description = $_POST["Description"];

    do{
       
        if(empty($owner) || empty($hostel_name) || empty($rent) || empty($contact) || empty($address) || empty($description)){
            $errorMessage = "All the fields are required";
            break;
         }

         $sql = "UPDATE clients".
         "SET owner= '$owner' , Hostel_name= '$hostel_name', Rent='$rent', Contact='$contact' , Address= '$address', Description= '$description' ".
         "WHERE id = $id";

         $result = $connection-> query($sql);
         if(!$result){
            $errorMessage = "Invalid query: " .$connection->error;
            break;
         }

         $successMessage = "Client updated correctly";

         header("location:/hostel_management/index.php");
         exit;

    }while(false);
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Management System</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src= "	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Hostel Guide</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

    <div class="container my-5">
        <h2>New Hostel</h2>

        <?php
            if(!empty($errorMessage)){
                echo "
                <div class='alert alert-warning alert-dismissible fade show' role= 'aler'>
                <strong>$errorMessage</strong>
                <button type = 'button' class= 'btn-close' data-bs-dismiss='alert' aria-label= 'Close'></button>
                </div>
                ";
            }
        ?>
        <form method="post">
            <input type="hidden" name= "id"value = "<?php echo $id; ?>">


            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Owner</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Owner" value="<?php echo $owner; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Hostel name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Hostel_name" value="<?php echo $hostel_name; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Rent</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Rent" value="<?php echo $rent; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Contact</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Contact" value="<?php echo $contact; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Address</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Address" value="<?php echo $address; ?>">
                </div>
            </div>
            <div class="row mb-3">
               <label class="col-sm-3 col-form-label">Add Description</label>
                <div class="col-sm-6">
                <textarea class="form-control" name="Description" rows="4"><?php echo $description; ?></textarea>
    </div>
</div>


            <?php
            if(!empty($successMessage)){
                echo "
                <div class='alert alert-warning alert-dismissible fade show' role= 'aler'>
                <strong>$successMessage</strong>
                <button type = 'button' class= 'btn-close' data-bs-dismiss='alert' aria-label= 'Close'></button>
                </div>
                ";
            }
            ?>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type= "submit" class="btn btn-outline-success">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="/hostel_management/index.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
<?php
   
   $servername = "localhost";
   $username = "root";
   $password = "";
   $database = "hostel_management";



// create connection

$connection = new mysqli($servername, $username, $password, $database);
  $owner= "";
  $hostel_name = "";
  $rent= "";
  $contact = "";
  $address = "";
  $description = "";

  $errorMessage = ""; 
  $successMessage = "";

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $owner= $_POST ["Owner"];
    $hostel_name= $_POST ["Hostel_name"];
    $rent= $_POST ["Rent"];
    $contact= $_POST ["Contact"];
    $address= $_POST ["Address"];
    $description= $_POST ["Description"];

    do{
         if(empty($owner) || empty($hostel_name) || empty($rent) || empty($contact) || empty($address) || empty($description)){
            $errorMessage = "All the fields are required";
            break;
         }

         // add new client to database

         $sql = "INSERT INTO clients (Owner, Hostel_name, Rent, Contact,Address, Description)".
               "VALUES('$owner', '$hostel_name', '$rent', '$contact', '$address', '$description')";
           $result = $connection->query($sql);

           if(!$result){
            $errorMessage = "Invalid query: " .$connection->error;
            break;
           }
                         

         $owner= "";
  $hostel_name = "";
  $rent= "";
  $contact = "";
  $address = "";
  $description = "";

  $successMessage = "Client added correctly";

  header("location: /hostel_management/index.php");
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
   <style> 
   
.navbar {
    margin-top:1%;
    width: 90%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #0096c7;
    padding: 10px 20px;
    z-index: 1000;
}

.logo {
    color: white;
    font-size: 1.5em;
    font-weight: bold;
}
.logo a{
    color: white;
    text-decoration: none;
    padding: 8px 12px;
    transition: background-color 0.3s;
}
.logo:hover{
    color:#54DEFD;
}

.nav-links {
    display: flex;
    gap: 15px;
}

.nav-links a {
    color: white;
    text-decoration: none;
    padding: 8px 12px;
    transition: background-color 0.3s;
}

.nav-links a:hover {
    background-color:#54DEFD;
    color: rgb(61, 61, 85);
    border-radius: 4px;
}
</style>
</head>
<body>

<center>
<nav class="navbar">
        <div class="logo">
        <span><a href="home.php">ZN</a></span>
        </div>
        <div class="nav-links">
            <a href="hostels.php">Hostels</a>
            <a href="about.php">About Me</a>
        </div>
    </nav></center>

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
            <div class="row mb-4">
                <label class="col-sm-3 col-form-label">Owner</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Owner" value="<?php echo $owner; ?>">
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-3 col-form-label">Hostel name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Hostel_name" value="<?php echo $hostel_name; ?>">
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-3 col-form-label">Rent</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Rent" value="<?php echo $rent; ?>">
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-3 col-form-label">Contact</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Contact" value="<?php echo $contact; ?>">
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-3 col-form-label">Address</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Address" value="<?php echo $address; ?>">
                </div>
            </div>
            <div class="row mb-4">
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
                    <a class="btn btn-outline-info" href="/hostel_management/index.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
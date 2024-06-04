
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Management System</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
}

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
<<<<<<< HEAD
<center>
<nav class="navbar">
        <div class="logo">
        <span><a href="home.php">ZN</a></span>
        </div>
        <div class="nav-links">
            <a href="hostels.php">Hostels</a>
            <a href="about.php">About Me</a>
            <a href="/hostel_management/create.php">Add Hostel</a>
        
        </div>
    </nav></center>
=======

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php">Hostel Guide</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    
      </ul>


      <!-- added form method and inputs name here -->
      <form method="POST" class="d-flex">
        <input name="search_value" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary" type="submit" name="search_btn">Search</button>
      </form>


    </div>
  </div>
</nav>
>>>>>>> 5ab04e82f7223d4e7e4590384e54c53094b2f8e3



    <div class="container my-5">
        <h1>List of Hostels</h1>
        <br>
        <a class="btn btn-info" href="/hostel_management/create.php" role= "button">Add new Hostel</a>
        <br><br>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Owner</th>
                    <th>Hostel name</th>
                    <th>Rent</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>Description</th>
                    <th>Created At</th>
                    <th>Action</th>


                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "hostel_management";

                // Create connection 
                $connection = new mysqli($servername, $username, $password, $database);

                // check connection
                if($connection -> connect_error){
                   die("Connection failed : ".$connection->connect_error); 
                }
                 
           
                // ================ start of search logic ===================================

                if (isset($_POST['search_btn'])) {
                  $search_value =  $_POST['search_value'];
                  $sql = "SELECT * FROM clients where Hostel_name like '%$search_value%'  ";
                }else{
                  $sql = "SELECT * FROM clients";
                }
                // ================ end of search logic ===================================

                $result = $connection ->query($sql);

                if(!$result){
                    die("Invalid query". $connection->error);
                }

                // read data of each row
                while($row= $result -> fetch_assoc()){
                    echo "
                    <tr>
                    <td>$row[id]</td>
                    <td>$row[Owner]</td>
                    <td>$row[Hostel_name]</td>
                    <td>$row[Rent]</td>
                    <td>$row[Contact]</td>
                    <td>$row[Address]</td>
                    <td>$row[Description]</td>
                    <td>$row[created_at]</td>
                    <td>
                        <a class='btn btn-info btn-sm' href='/hostel_management/edit.php?id=$row[id]'>Edit</a>
                        <a class='btn btn-danger btn-sm' href='/hostel_management/delete.php?id=$row[id]'>Delete</a>
                    </td>
                </tr>";
                }


                ?>
               
            </tbody>

        </table>
    </div>
</body>
</html>
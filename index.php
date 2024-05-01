
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Management System</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php">Hostel Guide</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>



    <div class="container my-5">
        <h1>List of Hostels</h1>
        <br>
        <a class="btn btn-primary" href="/hostel_management/create.php" role= "button">Add new Hostel</a>
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
                 
                // read all row from database table
                $sql = "SELECT * FROM clients";
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
                        <a class='btn btn-primary btn-sm' href='/hostel_management/edit.php?id=$row[id]'>Edit</a>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vertical Navbar</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>

        .navbar2 {
            background-color: rgb(152, 152, 214);
            width: 200px;
            height: 100%;
            position: fixed;
            left: 0;
            top: 0;
            overflow-x: hidden;
            padding-top: 20px;
        }
        
        .navbar2 a {
            margin-top: 50px;
            margin-left: 10px;
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 18px;
            color: black;
            display: block;
        }
        
        .navbar2 a:hover {
            background-color: rgb(221, 216, 236);
        }

        .box {
            display: inline-block;
            width: 200px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .box img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 15px;
        }
        .box p {
            font-size: 14px;
            line-height: 1.6;
        }
    </style>
</head>
<body>
   




    <div class="navbar2">
        <?php
        $menuItems = array("Home", "About", "Services", "Contact");
        
        foreach ($menuItems as $item) {
            echo "<a href='...'>$item</a>";
        }
        ?>
    </div>

    <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php">Hostel Guide</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      </ul>
    </div>
  </div>
</nav>

    <div style="margin-left: 200px; padding: 20px;"> 
       <center> <h3>Hostels</h3> </center>
        <div class="box">
            <h5>Hostel 1</h5>
    <img src="img1.jpg" alt="Placeholder Image">
    <a href=""><p>This is a description of the item in the box.</p></a>
</div>

<div class="box">
            <h5>Hostel 2</h5>
    <img src="img2.jpg" alt="Placeholder Image">
    <a href=""><p>This is a description of the item in the box. </p></a>
</div>

<div class="box">
            <h5>Hostel 3</h5>
    <img src="img3.jpg" alt="Placeholder Image">
    <a href=""><p>This is a description of the item in the box. </p></a>
</div>

<div class="box">
            <h5>Hostel 4</h5>
    <img src="img4.jpg" alt="Placeholder Image">
    <a href=""><p>This is a description of the item in the box. </p></a>
</div>

<div class="box">
            <h5>Hostel 5</h5>
    <img src="img5.jpg" alt="Placeholder Image">
    <a href=""><p>This is a description of the item in the box. </p></a>
</div>

    </div>

   
</body>
</html>

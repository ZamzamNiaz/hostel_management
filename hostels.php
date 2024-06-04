<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostels</title>
    <style>
        body{
            background-color:#8BD7D2;
            font-family: Arial, sans-serif;
        }
        .navbar {
    margin-top:1%;
    width: 90%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: white;
    padding: 10px 20px;
    z-index: 1000;
}

.logo {
    color: #0096c7;
    font-size: 1.5em;
    font-weight: bold;
}
.logo a{
    color:#0096c7;
    text-decoration: none;
    padding: 8px 12px;
    transition: background-color 0.3s;
}
.logo a:hover{
    color:white;
    background-color:#0096c7;
}

.nav-links {
    display: flex;
    gap: 15px;
}

.nav-links a {
    color:  #0096c7;
    text-decoration: none;
    padding: 8px 12px;
    transition: background-color 0.3s;
}

.nav-links a:hover {
    background-color:#0096c7;
    color: white;
    border-radius: 4px;
}
         .box {
            background-color:white;
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
            color:#0096c7;
        }
        .box a{
            text-decoration: none;
        }
        .divbox :hover{
  transform: scale(1.1);
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
            <a href="login.php">Login</a>
            <a  href="hostels.php">Book Now</a>
        </div>
    </nav></center>
<div class="divbox" style="margin-left: 200px; padding: 20px;"> 
        <div class="box">
            <h5 style="color:#0096c7;">Hostel 1</h5>
    <img src="img2.jpg" alt="Placeholder Image">
    <a href="detail.php"><p>Check out for further Details.</p></a>
</div>

<div class="box">
            <h5 style="color:#0096c7;">Hostel 2</h5>
    <img src="img2.jpg" alt="Placeholder Image">
    <a href="detail.php"><p>Check out for further Details. </p></a>
</div>

<div class="box">
            <h5 style="color:#0096c7;">Hostel 3</h5>
    <img src="img2.jpg" alt="Placeholder Image">
    <a href="detail.php"><p>Check out for further Details. </p></a>
</div>

<div class="box">
            <h5 style="color:#0096c7;">Hostel 4</h5>
    <img src="img2.jpg" alt="Placeholder Image">
    <a href="detail.php"><p>Check out for further Details. </p></a>
</div>

<div class="box">
            <h5 style="color:#0096c7;">Hostel 5</h5>
    <img src="img2.jpg" alt="Placeholder Image">
    <a href="detail.php"><p>Check out for further Details. </p></a>
</div>

<div class="box">
            <h5 style="color:#0096c7;">Hostel 5</h5>
    <img src="img2.jpg" alt="Placeholder Image">
    <a href="detail.php"><p>Check out for further Details. </p></a>
</div>

<div class="box">
            <h5 style="color:#0096c7;">Hostel 5</h5>
    <img src="img2.jpg" alt="Placeholder Image">
    <a href="detail.php"><p>Check out for further Details. </p></a>
</div>

<div class="box">
            <h5 style="color:#0096c7;">Hostel 5</h5>
    <img src="img2.jpg" alt="Placeholder Image">
    <a href="detail.php"><p>Check out for further Details. </p></a>
</div>

    </div>
</body>
</html>
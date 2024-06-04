<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
    <style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: url('img12.jpg') no-repeat center center fixed;
    background-size: cover;

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

.hero {
    margin-top:5%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: #0096c7;
    padding-top: 60px; 
    opacity: 0.8;
}

.hero-content {
    background-color: #f5f5f5;
    padding: 20px;
    border-radius: 10px;
}

.hero h1 {
    font-size: 3em;
    margin: 0;
}

.hero p {
    font-size: 1.5em;
}
.example_c {
color: #0096c7 !important;
text-transform: uppercase;
text-decoration: none;
background: #ffffff;
padding: 20px;
border: 4px solid #0096c7 !important;
display: inline-block;
transition: all 0.4s ease 0s;
}
.example_c:hover {
color: #ffffff !important;
background: #00BD9D;
border-color: #f6b93b !important;
transition: all 0.4s ease 0s;
}
footer{
    margin-top:30%;
    font-family: Arial, sans-serif;
    background: url('img10.jpg') no-repeat center center fixed;
    background-size: cover;
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

    <div class="hero">
        <div class="hero-content">
            <h1>Welcome to Our Site</h1>
            <p>"Your Home Away from Home - Comfort, Community, and Adventure Await"!</p>
            <div class="button_cont" align="center"><a class="example_c" href="hostels.php" target="_blank" rel="nofollow noopener">Book Now</a></div>
        </div>
    </div>

    

    <footer style="background-color:white; color:  #0096c7; padding: 20px 0; text-align: center;">
    <div style="max-width: 1200px; margin: auto;">
        <div style="display: flex; justify-content: space-around; flex-wrap: wrap;">
            <div style="flex: 1; min-width: 200px; padding: 10px;">
                <h3>Info</h3>
                <p>Email: <a href="" style="color:  #0096c7; text-decoration: none;">zamzamniaz@gmail.com</a></p>
                <p>Phone: <a href="tel:+1234567890" style="color:  #0096c7; text-decoration: none;">090078601</a></p>
            </div>
            <div style="flex: 1; min-width: 200px; padding: 10px;">
                <h3>Quick Links</h3>
                <ul style="list-style: none; padding: 0;">
                    <li><a href="about.php" style="color:  #0096c7; text-decoration: none;">About Me</a></li>
                    <li><a href="hostels.php" style="color:  #0096c7; text-decoration: none;">Services</a></li>
                </ul>
            </div>
            <div style="flex: 1; min-width: 200px; padding: 10px;">
                <h3>Follow Us</h3>
                <a href="https://facebook.com" target="_blank" style="color:  #0096c7; text-decoration: none; margin-right: 10px;">Facebook</a>
                <a href="https://instagram.com" target="_blank" style="color: #0096c7; text-decoration: none; margin-right: 10px;">Instagram</a>
                <a href="https://linkedin.com" target="_blank" style="color:  #0096c7; text-decoration: none;">LinkedIn</a>
            </div>
        </div>
        <div style="margin-top: 20px;">
            <p>&copy; 2024 ZN. All rights reserved.</p>
        </div>
    </div>
</footer>


</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        * {
           
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}

body {
    background-color:#8BD7D2;
    /* display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh; */
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
.container {
    margin-top:6%;
    display:inline-block;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 600px;
    padding: 20px;
    text-align: center;
}

.profile-pic img {
    border-radius: 50%;
    width: 150px;
    height: 150px;
    object-fit: cover;
    margin-bottom: 20px;
}

.info h1 {
    font-size: 2em;
    margin-bottom: 10px;
    color: #0096c7;
}

.info p {
    font-size: 1em;
    color: #0096c7;
    margin-bottom: 10px;
}

.social-media a {
    color: #0096c7;
    text-decoration: none;
}

.social-media a:hover {
    text-decoration: underline;
}

    </style>
</head>
<body>

<center>
<nav class="navbar">
        <div class="logo">
            <span><a href="about.php">ZN</a></span>
        </div>
        <div class="nav-links">
            <a href="home.php">Home</a>
            <a href="hostels.php">Hostels</a>
            <a  href="hostels.php">Book Now</a>
        </div>
    </nav></center>
    <center>
    <div class="container">
        <div class="profile-pic">
            <img src="img11.png" alt="Your Name">
        </div>
        <div class="info">
            <h1>Zamzam Niaz</h1>
            <p>Hello! I am Zamzam, a Psychology student, trying to explore and learn tech.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam expedita impedit voluptatum rerum praesentium debitis eum saepe non dolorem sunt ut aut sequi excepturi id quidem laborum consequuntur officia ab explicabo, ipsa velit! Itaque, quasi voluptas numquam aliquid vel voluptatem.</p>
            <p><strong>Email:</strong> zamzamniaz@gmail.com</p>
            <p><strong>My Socials:</strong> 
            <div class="social-media">
      <a class="navbar-brand" href="https://www.instagram.com/zamzam.niaz?igsh=MW1rMzlpZ3A2MHFkaw==">
        <i class="fa-brands fa-square-instagram"></i>
      </a>
      <a class="navbar-brand" href="https://www.linkedin.com/in/zamzam-niaz-ahmed-baa90b247?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">
        <i class="fa-brands fa-linkedin"></i>
      </a>
      <a class="navbar-brand" href="https://github.com/ZamzamNiaz">
        <i class="fa-brands fa-github"></i>
      </a>
    </div>
            </p>
        </div>
    </div></center>
</body>
</html>

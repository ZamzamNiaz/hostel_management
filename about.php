<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <style>
    body{
  background: #49C6E5;
}

a{
  color: white;
}

.photo{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  display: block;
}

.photo img{
  border-radius:50%;
  width: 200px;
  height: 200px;
  object-fit: cover;
  filter: grayscale(0%) contrast(100%);
  box-shadow: 10px 15px 25px 0 rgba(0,0,0,.2);
  display: block;
  transition: all .5s cubic-bezier(0.645, 0.045, 0.355, 1);
  margin-top: -10px;
}

.photo:hover img{
  box-shadow: 1px 1px 10px 0 rgba(0,0,0,.1);
}

.photo .glow-wrap{
  overflow: hidden;
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  margin-top: -10px;
}

.photo .glow{
  display: block;
  position:absolute;
  width: 40%;
  height: 200%;
  background: rgba(255,255,255,.2);
  top: 0;
  filter: blur(5px);
  transform: rotate(45deg) translate(-450%, 0);
  transition: all .5s cubic-bezier(0.645, 0.045, 0.355, 1);
}

.photo:hover .glow{
  transform: rotate(45deg) translate(450%, 0);
  transition: all 1s cubic-bezier(0.645, 0.045, 0.355, 1);
}

.photo:hover img,
.photo:hover .glow-wrap{
  margin-top: 0;
}

h1{
  position: absolute;
  z-index: 1;
  transform: translate(-25%, -65%);
  font-family: 'Montserrat', sans-serif;
  margin: 0;
  line-height: 1.2;
}


#author{
  font-family: Helvetica, Arial;
  text-transform: uppercase;
  font-size: 14px;
  text-decoration: none;
  position: fixed;
  bottom: 25px;
  left: 50%;
  transform: translateX(-50%);
  color: white;
}

#author:hover{
  color: black;
}
  </style>
</head>
<body>


<a href="#" class="photo">
  <h1>Zamzam Niaz</h1>
    <img src="img11.png" />
  <div class="glow-wrap">
    <i class="glow"></i>
  </div>
</a>


<a href="aboutme.php" target="_blank" id="author">About me</a>
</body>
</html>
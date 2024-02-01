<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
  <link href="/serviceQuotationMaker/resources/css/style.css" rel="stylesheet" type="text/css">

  <title>One day digital</title>
</head>

<body>

  <div class="overlay">
    <h1>ONE DAY DIGITAL</h1>
    <span>YOUR BUSINESS START HERE </span>
  </div>
  <div class="wrapper">
    <div class="nav">
      <div class="logo">
        <h1>
          <img src="https://oneday.digital/wp-content/uploads/2020/11/web-logo-size-790x323.png" style="width: 300px; height: 120px;">
          <br>
          YOUR BUSINESS START HERE
        </h1>
      </div>

      <div class="menu-links">
        <ul>
          <li><a href="/#" style="text-decoration: none; color: inherit;">Home.</a></li>
          <li><a href="/Register" style="text-decoration: none; color: inherit;">Register.</a></li>
          <li><a href="/About" style="text-decoration: none; color: inherit;">About Us.</a></li>
        </ul>
      </div>

      <div class="scrolldown">build your business</div>
    </div>

    <div class="text">
      <div class="title"> Log In Now</div>
      <p>LET'S BUILD YOUR E-COMMERCE WEBSITE IN A DAY!</p>

<form action="login"method="POST" class="form">
        
            @csrf
                <div class = "email_container">
                <input type="email" id="email" required name="email">
                <label class="lbl-nombre"><span class="text-nomb">Email</span></label>
                </div>
                <div class="password_container">
                <input type="password"  name="password" id="password"  required>
               <label class="lbl-nombre"><span class="text-nomb">Password</span></label>
                </div>
            
      <div class="btn">
        <button class="button-23" type="submit" >Login</button>
      </div>
</form>

    </div>

    <div class="watchnow">
      <i class="fa fa-play"></i>
      <a href="#">Best Service Provider</a>



    </div>

    <div class="media">
      <ul>
        <li><i class="fa fa-facebook"></i></li>
        <li><i class="fa fa-twitter"></i></li>
        <li><i class="fa fa-instagram"></i></li>
      </ul>
    </div>

    <div class="ellipse-container">
      <div class="ellipse thin"></div>
      <div class="ellipse thick"></div>
      <div class="ellipse yellow"></div>
      <div class="circle1"><span>Maecenas purus at</span></div>
      <div class="circle2"><span>Fringilla Maecenas</span></div>
    </div>



  </div>

  <script>

    TweenMax.to(".overlay h1", 2, {
      opacity: 0,
      y: -60,
      ease: Expo.easeInOut
    })

    TweenMax.to(".overlay span", 2, {
      delay: .3,
      opacity: 0,
      y: -60,
      ease: Expo.easeInOut
    })

    TweenMax.to(".overlay", 2, {
      delay: 1,
      top: "-100%",
      ease: Expo.easeInOut
    })

    TweenMax.from(".ellipse-container", 1, {
      delay: 2,
      opacity: 0,
      ease: Expo.easeInOut
    })

    TweenMax.from(".yellow", 1, {
      delay: 3.5,
      opacity: 0,
      ease: Expo.easeInOut
    })

    TweenMax.from(".circle1", 1, {
      delay: 2.4,
      opacity: 0,
      ease: Expo.easeInOut
    })

    TweenMax.from(".circle2", 1, {
      delay: 2.6,
      opacity: 0,
      ease: Expo.easeInOut
    })

    TweenMax.from(".logo", 1, {
      delay: 3,
      opacity: 0,
      y: -100,
      ease: Expo.easeInOut
    })

    TweenMax.staggerFrom(".menu-links ul li", 1, {
      delay: 3.2,
      opacity: 0,
      x: -100,
      ease: Expo.easeInOut
    }, 0.08)

    TweenMax.from(".scrolldown", 2, {
      delay: 3.4,
      opacity: 0,
      y: 100,
      ease: Expo.easeInOut
    })

    TweenMax.from(".text .title", 1, {
      delay: 3,
      opacity: 0,
      x: 200,
      ease: Expo.easeInOut
    })

    TweenMax.from(".text p", 1, {
      delay: 3.2,
      opacity: 0,
      x: 200,
      ease: Expo.easeInOut
    })

    TweenMax.from(".watchnow", 1, {
      delay: 3.4,
      opacity: 0,
      x: 200,
      ease: Expo.easeInOut
    })

    TweenMax.staggerFrom(".media ul li", 1, {
      delay: 3,
      opacity: 0,
      y: 100,
      ease: Expo.easeInOut
    }, 0.08)

  </script>
</body>
</html>
<style>
* {
  margin: 0;
  padding: 0
}

body {
  width: 100%;
  height: 100vh;
  font-family: 'agency fb';
  background: url('reindeer.png') no-repeat;
  background-position: 50%;
  background-size: cover;
  overflow: hidden;
}

ul {
  list-style: none;
}

.nav {
  width: 300px;
  height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.logo {
  flex: 0 0 50%;
  background: #FFEB00;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
}

.logo h1 {
  font-weight: 300;
  text-transform: uppercase;
  font-size: 16px;
  line-height: 2;
}

.logo span {
  font-size: 60px;
  line-height: 1;
}

.menu-links {
  flex: 1;
  display: flex;
  justify-content: flex-end;
  text-align: right;
  padding-top: 50px;
}

.menu-links ul {
  width: 100%;
}

.menu-links ul li {
  padding: 10px;
  color: #494949;
  font-size: 20px;
  font-weight: 600;
  text-transform: uppercase;
  cursor: pointer;
}

.menu-links ul li:hover {
  background: #494949;
  color: #fff;
  }

.scrolldown {
  flex: 1;
  display: flex;
  justify-content: center;
  transform: rotate(90deg);
}

.scrolldown::before {
  display: inline-block;
  content: "";
  border-top: 1px solid #000;
  width: 150px;
  margin: 0 10px 0 0;
  transform: translateY(10px);
}

.text {
  position: absolute;
  top: 35%;
  right: 180px;
  transform: translateY(-50%);
  text-align: right;
  color: #494949;
}

.text .title {
  font-size: 150px;
}

.watchnow {
  position: absolute;
  top: 60%;
  right: 0;
  transform: translateY(-50%);
  background: #FFEB00;
  padding: 30px 180px 30px 30px;
}

.watchnow a {
  text-decoration: none;
  color: #000;
  font-size: 20px;
  font-weight: 600;
  text-transform: uppercase;
  border-bottom: 3px solid #000;
  padding-bottom: 5px;
}

.fa-play {
  color: #fff;
  font-size: 30px;
  margin-right: 20px;
  cursor: pointer;
}

.media {
  position: absolute;
  bottom: 0;
  right: 0;
  padding: 20px;
}

.media ul li {
  display: inline-block;
  padding: 20px;
  font-size: 20px;
  color: #494949;
  cursor: pointer;
  border-radius: 50%;
}

.media ul li:hover {
  background: #FFEB00;
}

.ellipse-container {
  width: 608px;
  height: 608px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  border-radius: 50%;
  margin: 0 auto;
  z-index: -1;
}

.ellipse {
  position: absolute;
  top: 0;
  border-radius: 50%;
  border-style: solid;
}

.ellipse.thin {
  width: 100%;
  height: 100%;
  border-width: 1px;
  border-color: #494949;
  opacity: .5;
}

.ellipse.thick {
  width: 93%;
  height: 93%;
  border-width: 10px;
  border-color: #fff;
  transform: rotate(-45deg);
  top: 12px;
  left: 12px;
}

.ellipse.yellow {
  width: 93%;
  height: 93%;
  border-width: 10px;
  border-color: #FFEB00 transparent;
  transform: rotate(-45deg);
  top: 12px;
  left: 12px;
  animation: ellipseRotate 15s ease-in-out infinite;
}

@keyframes ellipseRotate {
  0% {
    transform: rotate(-45deg);
  }
  100% {
    transform: rotate(-405deg);
  }
}

.circle1,
.circle2 {
  border-style: solid;
  width: 64px;
  height: 64px;
  border-width: 1px;
  border-color: rgba(0,0,0,.5);
  border-radius: 50%;
  position: absolute;
}

.circle1 {
  top: -100px;
  left: -100px;
}

.circle2 {
  bottom: -100px;
  right: -100px;
}

.circle1::before,
.circle1::after,
.circle2::before,
.circle2::after {
  content: '';
  border-radius: 50%;
  display: inline-block;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}

.circle1::before,
.circle2::before {
  width: 12px;
  height: 12px;
  background: #fff;
  z-index: 1;
}

.circle1::after,
.circle2::after {
  width: 40px;
  height: 40px;
  background: #FFEB00;
}

.circle1 span,
.circle2 span {
  position: absolute;
  top: 25px;
  width: 100px;
  font-size: 14px;
}

.circle1 span {
  left: 75px;
}

.circle2 span {
  left: -90px;
}

.overlay {
  position: absolute;
  width: 100%;
  height: 100vh;
  background: #FFEB00;
  top: 0%;
  z-index: 1;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.overlay h1 {
  font-size: 100px;
  letter-spacing: 20px;
}

.overlay span {
  font-size: 30px;
  letter-spacing: 3px;
}

.emailf{
top:40px;
position: relative;
}

.passw #password
{
  
  height: 10px;
}

	
	.form{
		width: 400px;
		height:  300px;
		max-width: 400px;
		position: relative;
		overflow: hidden;
    top:120px;
    right:270px
	}
  .email_container{
		position: relative;
		overflow: hidden;
    top:10px;
    
    left:60px;
    height:18px:
  }
  .password_container{
    position: relative;
		overflow: hidden;
    top:10px;
    left:60px;
    height:18px:
  }
  .btn{
    position: relative;
		overflow: hidden;
    left:-150px;
    top:40px;
   
  }
	.form input{
		width: 100%;
		height: 100%;
		background: none;
		color: #0f0e0e;
		padding-top: 50px;
		border: none;
		outline: 0px;
	}
	.form .lbl-nombre{
		position: absolute;
		bottom: 0;
		left: 0;
		width: 100%;
		height: 100%;
		pointer-events: none;
		border-bottom: 1px solid #050505;
	}
	.form .lbl-nombre:after{
		content: '';
		position: absolute;
		left: 0;
		bottom: -5px;
		width: 100%;
		height: 80%;
		border-bottom: 3px solid #2ecece;
		transform: translateX(-100%);
		transition: all 0.3s ease;
	}
	.text-nomb{
		position: absolute;
		bottom: 10px;
		left: 0;
		transition: all 0.3s ease;
		color: #070606;
    height: 20px;
	}
	form input:focus + .lbl-nombre .text-nomb,.form input:valid + .lbl-nombre .text-nomb{
		transform: translateY(-100%);
		font-size: 14px;
		color: #2ecece;
	}
	form input:focus + .lbl-nombre:after, .form input:valid + .lbl-nombre:after{
		transform: translateX(0%);
    
	}

	@media only screen and (min-width:320px) and (max-width:500px){
	 .form{
		width:85%;
	}
		}


    .button-23 {
  background-color: #FFFFFF;
  border: 1px solid #222222;
  border-radius: 8px;
  box-sizing: border-box;
  color: #222222;
  cursor: pointer;
  display: inline-block;
  font-family: Circular,-apple-system,BlinkMacSystemFont,Roboto,"Helvetica Neue",sans-serif;
  font-size: 16px;
  font-weight: 600;
  line-height: 20px;
  margin: 0;
  outline: none;
  padding: 13px 23px;
  position: relative;
  text-align: center;
  text-decoration: none;
  touch-action: manipulation;
  transition: box-shadow .2s,-ms-transform .1s,-webkit-transform .1s,transform .1s;
  user-select: none;
  -webkit-user-select: none;
  width: auto;
}

.button-23:focus-visible {
  box-shadow: #222222 0 0 0 2px, rgba(255, 255, 255, 0.8) 0 0 0 4px;
  transition: box-shadow .2s;
}

.button-23:active {
  background-color: #F7F7F7;
  border-color: #000000;
  transform: scale(.96);
}

.button-23:disabled {
  border-color: #DDDDDD;
  color: #DDDDDD;
  cursor: not-allowed;
  opacity: 1;
}
    </style>

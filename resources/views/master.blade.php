
<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-comm Project</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- services page linkes  -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>

<!-- button linkes  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    {{View::make('header')}}
    @yield('content')

</body>
<style>

    
    body{
        margin: 0;
        font-family: sans-serif;
        background:#f2f2f2;
        background-color: var(--clr-primary-800);
        place-content: center;
        
        
    }
    h3{
        text-align: center;
        font-size: 30px;
        margin:0;
        padding-top: 10px;
    }
    a{
        text-decoration: none;
    }
    .gallery {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}
    .content {
    flex: 1 0 20%; /* flex-grow | flex-shrink | flex-basis */
    max-width: 20%; /* Limit the size to 20% to ensure 4 items per row */
    box-sizing: border-box;
    margin: 15px;
    text-align: center;
    border-radius: 20px;
    cursor: pointer;
    padding-top:20px;
    box-shadow: 0 14px 28px rgb(0,0,0,0.25),
    0 10px 10px rgb(0,0,0,0.22);
    transition: .4s;
    background: #f2f2f2;
}
    .content:hover{
        box-shadow: 0 3px 6px rgb(0,0,0,0.16),
        0 3px 6px rgb(0,0,0,0.23);
        transform: translate(0px,-8px);
    }
    .imgs{
        width:320px;
        height: 280px;
        text-align: center;
        margin: 0 auto;
        display: block;

    }
    p{
        text-align: center;
        color: #b2bec3;
        padding-top:0 8px;

    }
    h6{
        font-size: 26px;
        text-align: center;
        color: #222f3e;
        margin:0;
    }
    .stars{
        list-style: none;
        display: flex;
        justify-content: center;
        align-items: center;
        padding-top:0;
    }
    .starslist{
        padding-top: 5px;
        transition: .4s;
        margin: 3px;
        align-items: center;
    }
    .checkend{
        color: #ff9f43;
        align-items: center;
    }
    .fa:hover{
        transform: scale(1.3);
        transition: .6s;

    }
.buy-1{
    text-align: center;
    font-size: 24px;
    color: #fff;
    width: 100%;
    padding: 15px;
    border: 0;
    outline: none;
    cursor: pointer;
    margin-top:5px;
    border-bottom-right-radius: 20px;
    border-bottom-left-radius: 20px;
    background: #ff9f43;
}
@media(max-width:750px){
    .content{
        flex: 1 0 50%;
        max-width: 50%;
    }
}
@media(max-width:500px){
    .content{
        flex: 1 0 100%;
        max-width: 100%;
    }
}

    <!-- Latest compiled and minified JavaScript -->
    .scroller {
  max-width: 600px;
}

.scroller__inner {
  padding-block: 1rem;
  display: flex;
  flex-wrap: wrap;
  gap: 1rem;
}

.scroller[data-animated="true"] {
  overflow: hidden;
  -webkit-mask: linear-gradient(
    90deg,
    transparent,
    white 20%,
    white 80%,
    transparent
  );
  mask: linear-gradient(90deg, transparent, white 20%, white 80%, transparent);
  display: grid;
        place-items: center;
        
}

.scroller[data-animated="true"] .scroller__inner {
  width: max-content;
  flex-wrap: nowrap;
  animation: scroll var(--_animation-duration, 40s)
    var(--_animation-direction, forwards) linear infinite;
}

.scroller[data-direction="right"] {
  --_animation-direction: reverse;
}

.scroller[data-direction="left"] {
  --_animation-direction: forwards;
}

.scroller[data-speed="fast"] {
  --_animation-duration: 20s;
}

.scroller[data-speed="slow"] {
  --_animation-duration: 60s;
}

@keyframes scroll {
  to {
    transform: translate(calc(10% - 0.1rem));
  }
}


/* general styles */

:root {
  --clr-neutral-100: hsl(0, 10%, 100%);
  
}
.tag-list {
  margin: 0;
  padding-inline: 0;
  list-style: none;
}

.tag-list li {
  padding: 1rem;
  background: var(--clr-primary-400);
  border-radius: 0.5rem;
  box-shadow: 0 0.5rem 1rem -0.25rem var(--clr-primary-900);
}

    <!-- Latest compiled and minified JavaScript -->
    .footer-page{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'poppins',sans-serif;
    display: flex;
    justify-content: flex-end;
    align-items: flex-end;
    min-height:100vh;
    background:#333;
}
footer{
    position: relative;
    width: 100%;
    background:#3586ff;
    min-height: 100px;
    padding: 30px 50px ;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
footer .social_icon,.menu{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 10px 0;
    flex-wrap: wrap;
}
footer .social_icon li, .menu li{
    list-style: none;
}
footer .social_icon li a{
    font-size: 6mm;
    color: #fff;
    margin: 0 10px;
    display: inline-block;
    transition: 0.5s;
}
footer .social_icon li a:hover{
    transform: translate(-10px); 
}
footer .menu li a{
    font-size: 5mm;
    color: #ffffff;
    margin: 0 10px;
    display: inline-block;
    transition: 0.5s;
    text-decoration: none;
    opacity: 0.75;
}
footer .menu li a:hover{
    opacity: 1;
}
footer p{
    color: #fff;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 10px;
    font-size: 1.1em;
}

footer .waves {
    position: absolute;
    top: -100px; /* Position waves at the top of the footer */
    left: 0;
    width: 100%;
    height: 100px;
    background:  url('/storage/gallery/wave.png');
    background-size: 1000px 100px;
}

footer .wave .waves#wave1 {
    z-index: 1000;
    opacity: 1;
    bottom: 0;
    animation: animateWave 4s linear infinite;
    
}
footer .wave .waves#wave2 {
    z-index: 999;
    opacity: 0.5;
    bottom: 10px;
    animation: animateWave-02 4s linear infinite;
    
}
footer .wave .waves#wave3 {
    z-index: 1000;
    opacity: 0.2;
    bottom: 15px;
    animation: animateWave 3s linear infinite;
    
}
footer .wave .waves#wave4 {
    z-index: 999;
    opacity: 0.7;
    bottom: 20px;s
    animation: animateWave-02 3s linear infinite;
    
}
@keyframes animateWave {
    0% {
        background-position-x: 1000px;
    }
    100% {
        background-position-x: 0px;
    }
}
@keyframes animateWave-02  {
    0% {
        background-position-x: 0px;
    }
    100% {
        background-position-x: 1000px;
    }
}


    <!-- pageFooter desinning -->

    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Open Sans",sans-serif;
  text-decoration: none;
  list-style: none;
}


.pricing-table{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  width: min(1600px, 100%);
  margin: auto;
}

.pricing-card{
  flex: 1;
  max-width: 360px;
  background-color: #fff;
  margin: 20px 10px;
  text-align: center;
  cursor: pointer;
  overflow: hidden;
  color: #2d2d2d;
  transition: .3s linear;
}

.pricing-card-header{
  background-color: #0fbcf9;
  display: inline-block;
  color: #fff;
  padding: 12px 30px;
  border-radius: 0 0 20px 20px;
  font-size: 16px;
  text-transform: uppercase;
  font-weight: 600;
  transition: .4s linear;
}

.pricing-card:hover .pricing-card-header{
  box-shadow: 0 0 0 26em #0fbcf9;
}

.price{
  font-size: 70px;
  color: #0fbcf9;
  margin: 40px 0;
  transition: .2s linear;
}

.price sup, .price span{
  font-size: 22px;
  font-weight: 700;
}

.pricing-card:hover ,.pricing-card:hover .price{
  color: #fff;
}

.pricing-card li{
  font-size: 16px;
  padding: 10px 0;
  text-transform: uppercase;
}

.order-btn{
  display: inline-block;
  margin-bottom: 40px;
  margin-top: 80px;
  border: 2px solid #0fbcf9;
  color: #0fbcf9;
  padding: 18px 40px;
  border-radius: 8px;
  text-transform: uppercase;
  font-weight: 500;
  transition: .3s linear;
}

.order-btn:hover{
  background-color: #0fbcf9;
  color: #fff;
}

@media screen and (max-width:1100px){
  .pricing-card{
    flex: 50%;
  }
}  

<!-- new detailes services page css -->
@font-face {
  font-family: 'Raiderfont';
  src: local('Raiderfont'), url('./fonts/Raiderfont.ttf') format('truetype');
}

ul {
  list-style: none;
}

.leftdetailes,
.rightdetailes{
  position: absolute;
  width: 50%;
  height: 100%;
  z-index: -1;
}

.leftdetailes{
  background: #B3B4AF;
  left: 0%;
  width: 0%;
}

.rightdetailes{
  background: #191921;
  right: 0%;
  width: 100%;
}

.nav ul {
  display: flex;
  justify-content: space-around;
  align-items: center;
  height: 80px;
  padding: 0 20px;
}

.nav ul li {
  display: inline-block;
  color: #fff;
  text-transform: uppercase;
  letter-spacing: 3px;
  font-size: 8px;
  font-weight: 600;
  padding: 0 30px;
}

.nav .logo {
  flex: 1;
  font-size: 18px;
  letter-spacing: 0;
}

.nav .menu {
  flex: 1;
  font-size: 18px;
}

.nav .collection {
  flex: 1;
}

.nav .explore {
  flex: 4;
}

.nav .search {
  flex: 3;
}

.nav .profile {
  flex: 0;
}

.nav .profile .img {
  background-image: url('./img/web-development-responsive-web-design-web-page-web-design-793e2cfa8a2302dc6b5c7cfda91118aa.png');
  background-position: 50%;
  background-size: cover;
  height: 100px;
  width: 30px;
  border-radius: 50%;
}

.img-wrapper {
  position: absolute;
  bottom: 0;
  left: 250px;
}

.img-wrapper .karina {
  
  background-size: contain; /* Adjust this property */
  background-repeat: no-repeat;
  background-position: center;
  height: 590px;
  width: 90%;
}
.info {
  position: absolute;
  bottom: 0;
  left: 180px;
  background: rgba(0, 0, 0, .8);
  padding: 0 10px;
}

.info ul li{
  display: inline-block;
  padding: 20px 25px;
  color: #fff;
  text-transform: uppercase;
  letter-spacing: 3px;
  font-size: 8px;
  font-weight: 600;
}

.info i {
  font-size: 18px;
}

.text {
  position: absolute;
  top: 30%;
  right: 100px;
  transform: translateY(-50%);
}


.text h1 {
  font-size: 90px;
  color: #fff;
  font-family: 'Raiderfont';
  text-transform: uppercase;
}
.text h2 {
  font-size: 18px;
  color: #fff;
  text-transform: uppercase;
  position: relative;
  top:80px;
  margin: 10px 0px 0px;
  width:400px;
  left: 500px;
 
}

.text .pricedeaties {
    top: 150px;
}


.text p {
  font-size: 20px;
  top: 10%;
  color: #fff;
  font-family: monospace;
  position: relative;
  top: 20px;
  left: 380px;
  width: 700px; /* Adjust this width as needed */
  word-wrap: break-word;
  text-align: left; 
}

.name1 {
  position: absolute;
  top: 50%;
  left: -270px;
  transform: translateY(-50%);
  font-size: 90px;
  font-family: 'Raiderfont';
  text-transform: uppercase;
  color: black;
  -webkit-text-stroke: 2px #fff;
}

.bottomnav {
  position: absolute;
  bottom: 100px;
  right: 100px;
}

.bottomnav ul li {
  color: #fff;
  text-transform: uppercase;
  letter-spacing: 15px;
  margin-top: 20px;
}

.bottomnav .btn{

}

.bottomnav ul li:nth-child(2) {
  font-weight: bolder;
}

.bottomnav ul li:nth-child(2)::before {
  content: "";
  display: inline-block;
  border: 1px solid #fff;
  width: 65px;
  margin: 0 10px 0 -78px;
  transform: translateY(-3px);
}
<!-- buttons css -->




<!-- end of services detailes css end -->


    <!-- slider and minified JavaScript -->
    .trending-image{
        display: grid;
        place-items: center;
        height: 60vh;
    }
    .header {
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000; /* Ensures the header stays on top of other elements */
}
     .custom-login{
        height: 500px;
        padding-top: 100px;
    }
    img.slider-img{
        height: 500px !important
    }
    .custom-services{
        height: 1000px
    }
    .slider-text{
        background-color: #35443585 !important;
    }
    .trending-image{
        height: 100px;
    }
    .trening-item{
        float: right;
        width: 20%;
    }
    .trending-wrapper{
        margin: 30px;
    }
    .detail-img{
        height: 200px;
    }
    .search-box{
        width: 500px !important
    }
    .cart-list-devider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px
    }
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
  .bottomnav .btn{
  width: 10em;
  height: 5em;
  background-color: #ffffff;
  border: none;
  border-radius: 3em;
  box-shadow: 0 0 1em rgba(0,0,0, .2);
  outline: none;
  cursor: pointer;
  top:108px;
   right:200px;
  transition: transform .3s ease;

  position: relative;

  display: flex;
  align-items: center;
  justify-content: center;

  overflow: hidden;
}

.btn:active{
  transform: scale(.9);
}

.btn__text{
  font-size: 1.5rem;
  font-weight: 600;
  color: var(--color);
  position: absolute;
}

.btn__text--second{
  opacity: 0;
}

.btn__icon{
  font-size: 1.5rem;
  color: var(--color);
  position: absolute;
}

.btn__icon--cart{
  left: -20%;
}

.btn__icon--box{
  top: -50%;
}

/* --------- ANIMATION ----------- */
.btn.active .btn__text--first{
  animation: text1 .3s forwards;
}

.btn.active .btn__text--second{
  animation: text2 3s forwards;
}

.btn.active .btn__icon--cart{
  animation: cart 2.5s forwards;
}

.btn.active .btn__icon--box{
  animation: box 1.5s forwards;
}

@keyframes text1 {
  100% {
    opacity: 0;
  }
}

@keyframes text2 {
  90%{
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@keyframes cart {
  30%, 60%{
    left: 42%;
  }
  100%{
    left: 110%;
  }
}

@keyframes box {
  80%{
    color: var(--color);
  }
  90%, 100%{
    top: 15%;
    color: transparent;
  }
} 
    
    </style>
    <script>
const scrollers = document.querySelectorAll(".scroller");

// If a user hasn't opted in for recuded motion, then we add the animation
if (!window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
  addAnimation();
}

function addAnimation() {
  scrollers.forEach((scroller) => {
    // add data-animated="true" to every `.scroller` on the page
    scroller.setAttribute("data-animated", true);

    // Make an array from the elements within `.scroller-inner`
    const scrollerInner = scroller.querySelector(".scroller__inner");
    const scrollerContent = Array.from(scrollerInner.children);

    // For each item in the array, clone it
    // add aria-hidden to it
    // add it into the `.scroller-inner`
    scrollerContent.forEach((item) => {
      const duplicatedItem = item.cloneNode(true);
      duplicatedItem.setAttribute("aria-hidden", true);
      scrollerInner.appendChild(duplicatedItem);
    });
  });
}
    </script>
    <script>//footer icons</script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>//footer icons</script>
    </html>
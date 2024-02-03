@extends('master')
@section("content")

<div class="custom-services">
     <!-- test open --> {{View::make('header')}}
    

      <!-- test open -->
      <div class="carousel">
        
        <div class="list">
          
          @foreach($services as $item)
            <div class="item">
              

                <img src="{{$item['gallery']}}">
                <div class="introduce">
                    <div class="title">{{$item['category']}}</div>
                    <div class="topic">{{$item['name']}}</div>
                    <div class="des">
                        <!-- 20 lorem -->   
                        {{$item['description']}}
                    </div>
                    <button class="seeMore">SEE MORE &#8599</button>
                </div>
                <div class="detail">
                    <div class="title">{{$item['name']}}</div>
                    <div class="des">
                      {{$item['description']}}</div>
                   
                    <div class="checkout">  
                       
                       
                        <form id="add-to-cart-form" action="/add_to_cart" method="POST">
                          @csrf
                          <input type="hidden" name="service_id" value="{{ $item['id'] }}">
                          <button class="btn" type="submit">  
                            Get Quote
                          </button>
                      </form>
                    </div>
                </div>
            </div>
            @endforeach();
        </div>
        
        <div class="arrows">
            <button id="prev"><</button>
             <button id="next">></button>
            <button id="back">See All  &#8599</button>
        </div>
    </div>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
body{
    margin: 0;
    background-color: #F4F4F4;
    font-family: Poppins;
}
:root{
    --item1-transform: translateX(-100%) translateY(-5%) scale(1.5);
    --item1-filter: blur(30px);
    --item1-zIndex: 11;
    --item1-opacity: 0;

    --item2-transform: translateX(0);
    --item2-filter: blur(0px);
    --item2-zIndex: 10;
    --item2-opacity: 1;

    --item3-transform: translate(50%,10%) scale(0.8);
    --item3-filter: blur(10px);
    --item3-zIndex: 9;
    --item3-opacity: 1;

    --item4-transform: translate(90%,20%) scale(0.5);
    --item4-filter: blur(30px);
    --item4-zIndex: 8;
    --item4-opacity: 1;
    
    --item5-transform: translate(120%,30%) scale(0.3);
    --item5-filter: blur(40px);
    --item5-zIndex: 7;
    --item5-opacity: 0;
}
header{
    width: 1140px;
    max-width: 90%;
    display: flex;
    justify-content: space-between;
    margin: auto;
    height: 50px;
    align-items: center;
}
header .logo{
    font-weight: bold;
}
header nav a{
    margin-left: 30px;
    text-decoration: none;
    color: #555;
    font-weight: 500;
}

/* carousel */
.carousel{
    position: relative;
    height: 800px;
    overflow: hidden;
    margin-top: -14px;
}
.carousel .list{
    position: absolute;
    width: 1140px;
    max-width: 90%;
    height: 80%;
    left: 50%;
    transform: translateX(-50%);
}
.carousel .list .item{
    position: absolute;
    left: 0%;
    width: 90%;
    height: 100%;
    font-size: 15px;
    transition: left 0.5s, opacity 0.5s, width 0.5s;

}
.carousel .list .item:nth-child(n + 6){
    opacity: 0;
}
.carousel .list .item:nth-child(2){
    z-index: 10;
    transform: translateX(0);
}
.carousel .list .item img{
    width: 50%;
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    transition: right 1.5s;
}

.carousel .list .item .introduce{
    opacity: 0;
    pointer-events: none;
}
.carousel .list .item:nth-child(2) .introduce{
    opacity: 1;
    pointer-events: auto;
    width: 400px;
    position: absolute;
    top: 50%;
    transform:  translateY(-50%);
    transition: opacity 0.5s;
}
.carousel .list .item .introduce .title{
    font-size: 2em;
    font-weight: 500;
    line-height: 1em;
}
.carousel .list .item .introduce .topic{
    font-size: 4em;
    font-weight: 500;
}
.carousel .list .item .introduce .des{
    font-size: small;
    color: #5559;
}
.carousel .list .item .introduce .seeMore{
    font-family: Poppins;
    margin-top: 1.2em;
    padding: 5px 0;
    border: none;
    border-bottom: 1px solid #555;
    background-color: transparent;
    font-weight: bold;
    letter-spacing: 3px;
    transition: background 0.5s;
}
.carousel .list .item .introduce .seeMore:hover{
    background: #eee;
}
.carousel .list .item:nth-child(1){
    transform: var(--item1-transform);
    filter: var(--item1-filter);
    z-index: var(--item1-zIndex);
    opacity: var(--item1-opacity);
    pointer-events: none;
}
.carousel .list .item:nth-child(3){
    transform: var(--item3-transform);
    filter: var(--item3-filter);
    z-index: var(--item3-zIndex);
}
.carousel .list .item:nth-child(4){
    transform: var(--item4-transform);
    filter: var(--item4-filter);
    z-index: var(--item4-zIndex);
}
.carousel .list .item:nth-child(5){
    transform: var(--item5-transform);
    filter: var(--item5-filter);
    opacity: var(--item5-opacity);
    pointer-events: none;
}
/* animation text in item2 */
.carousel .list .item:nth-child(2) .introduce .title,
.carousel .list .item:nth-child(2) .introduce .topic,
.carousel .list .item:nth-child(2) .introduce .des,
.carousel .list .item:nth-child(2) .introduce .seeMore{
    opacity: 0;
    animation: showContent 0.5s 1s ease-in-out 1 forwards;
}
@keyframes showContent{
    from{
        transform: translateY(-30px);
        filter: blur(10px);
    }to{
        transform: translateY(0);
        opacity: 1;
        filter: blur(0px);
    }
}
.carousel .list .item:nth-child(2) .introduce .topic{
    animation-delay: 1.2s;
}
.carousel .list .item:nth-child(2) .introduce .des{
    animation-delay: 1.4s;
}
.carousel .list .item:nth-child(2) .introduce .seeMore{
    animation-delay: 1.6s;
}
/* next click */
.carousel.next .item:nth-child(1){
    animation: transformFromPosition2 0.5s ease-in-out 1 forwards;
}
@keyframes transformFromPosition2{
    from{
        transform: var(--item2-transform);
        filter: var(--item2-filter);
        opacity: var(--item2-opacity);
    }
}
.carousel.next .item:nth-child(2){
    animation: transformFromPosition3 0.7s ease-in-out 1 forwards;
}
@keyframes transformFromPosition3{
    from{
        transform: var(--item3-transform);
        filter: var(--item3-filter);
        opacity: var(--item3-opacity);
    }
}
.carousel.next .item:nth-child(3){
    animation: transformFromPosition4 0.9s ease-in-out 1 forwards;
}
@keyframes transformFromPosition4{
    from{
        transform: var(--item4-transform);
        filter: var(--item4-filter);
        opacity: var(--item4-opacity);
    }
}
.carousel.next .item:nth-child(4){
    animation: transformFromPosition5 1.1s ease-in-out 1 forwards;
}
@keyframes transformFromPosition5{
    from{
        transform: var(--item5-transform);
        filter: var(--item5-filter);
        opacity: var(--item5-opacity);
    }
}
/* previous */
.carousel.prev .list .item:nth-child(5){
    animation: transformFromPosition4 0.5s ease-in-out 1 forwards;
}
.carousel.prev .list .item:nth-child(4){
    animation: transformFromPosition3 0.7s ease-in-out 1 forwards;
}
.carousel.prev .list .item:nth-child(3){
    animation: transformFromPosition2 0.9s ease-in-out 1 forwards;
}
.carousel.prev .list .item:nth-child(2){
    animation: transformFromPosition1 1.1s ease-in-out 1 forwards;
}
@keyframes transformFromPosition1{
    from{
        transform: var(--item1-transform);
        filter: var(--item1-filter);
        opacity: var(--item1-opacity);        
    }
}

/* detail  */
.carousel .list .item .detail{
    opacity: 0;
    pointer-events: none;
}
/* showDetail */
.carousel.showDetail .list .item:nth-child(3),
.carousel.showDetail .list .item:nth-child(4){
    left: 100%;
    opacity: 0;
    pointer-events: none;
}
.carousel.showDetail .list .item:nth-child(2){
    width: 100%;
}
.carousel.showDetail .list .item:nth-child(2) .introduce{
    opacity: 0;
    pointer-events: none;
}
.carousel.showDetail .list .item:nth-child(2) img{
    right: 50%;
}
.carousel.showDetail .list .item:nth-child(2) .detail{
    opacity: 1;
    width: 50%;
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    text-align: right;
    pointer-events: auto;
}
.carousel.showDetail .list .item:nth-child(2) .detail .title{
    font-size: 4em;
}
.carousel.showDetail .list .item:nth-child(2) .detail .specifications{
    display: flex;
    gap: 10px;
    width: 100%;
    border-top: 1px solid #5553;
    margin-top: 20px;
}
.carousel.showDetail .list .item:nth-child(2) .detail .specifications div{
    width: 90px;
    text-align: center;
    flex-shrink: 0;
}
.carousel.showDetail .list .item:nth-child(2) .detail .specifications div p:nth-child(1){
    font-weight: bold;
}
.carousel.carousel.showDetail .list .item:nth-child(2) .checkout button{
    font-family: Poppins;
    background-color: transparent;
    border: 1px solid #5555;
    margin-left: 5px;
    padding: 5px 10px;
    letter-spacing: 2px;
    font-weight: 500;
}
.carousel.carousel.showDetail .list .item:nth-child(2) .checkout button:nth-child(2){
    background-color: #693EFF;
    color: #eee;
}
.carousel.showDetail .list .item:nth-child(2) .detail  .title,
.carousel.showDetail .list .item:nth-child(2) .detail  .des,
.carousel.showDetail .list .item:nth-child(2) .detail .specifications,
.carousel.showDetail .list .item:nth-child(2) .detail .checkout{
    opacity: 0;
    animation: showContent 0.5s 1s ease-in-out 1 forwards;
}
.carousel.showDetail .list .item:nth-child(2) .detail  .des{
    animation-delay: 1.2s;
}
.carousel.showDetail .list .item:nth-child(2) .detail .specifications{
    animation-delay: 1.4s;
}
.carousel.showDetail .list .item:nth-child(2) .detail .checkout{
    animation-delay: 1.6s;
}
.arrows{
    position: absolute;
    bottom: 10px;
    width: 1140px;
    max-width: 90%;
    display: flex;
    justify-content: space-between;
    left: 50%;
    transform: translateX(-50%);
}
#prev,
#next{
    width: 40px;
    height: 40px;
    border-radius: 50%;
    font-family: monospace;
    border: 1px solid #5555;
    font-size: large;
    bottom: 20%;
    left: 10%;
}
#next{
    left: unset;
    right: 10%;
}
#back{
    position: absolute;
    z-index: 100;
    bottom: 0%;
    left: 50%;
    transform: translateX(-50%);
    border: none;
    border-bottom: 1px solid #555;
    font-family: Poppins;
    font-weight: bold;
    letter-spacing: 3px;
    background-color: transparent;
    padding: 10px;
    /* opacity: 0; */
    transition: opacity 0.5s;
}
.carousel.showDetail #back{
    opacity: 1;
}
.carousel.showDetail #prev,
.carousel.showDetail #next{
    opacity: 0;
    pointer-events: none;
}
.carousel::before{
    width: 500px;
    height: 300px;
    content: '';
    background-image: linear-gradient(70deg, #DC422A, blue);
    position: absolute;
    z-index: -1;
    border-radius: 20% 30% 80% 10%;
    filter: blur(150px);
    top: 50%;
    left: 50%;
    transform: translate(-10%, -50%);
    transition: 1s;
}
.carousel.showDetail::before{
    transform: translate(-100%, -50%) rotate(90deg);
    filter: blur(130px);
}
@media screen and (max-width: 991px){
    /* ipad, tablets */
    .carousel .list .item{
        width: 90%;
    }
    .carousel.showDetail .list .item:nth-child(2) .detail .specifications{
        overflow: auto;
    }
    .carousel.showDetail .list .item:nth-child(2) .detail .title{
        font-size: 2em;
    }
}
@media screen and (max-width: 767px){
    /* mobile */
    .carousel{
        height: 600px;
    }
    .carousel .list .item{
        width: 100%;
        font-size: 10px;
    }
    
    .carousel .list{
        height: 100%;
    }
    .carousel .list .item:nth-child(2) .introduce{
        width: 50%;
    }
    
    .carousel .list .item img{
        width: 40%;
    }
    .carousel.showDetail .list .item:nth-child(2) .detail{
        backdrop-filter: blur(10px);
        font-size: small;
    }
    .carousel .list .item:nth-child(2) .introduce .des,
    .carousel.showDetail .list .item:nth-child(2) .detail .des{
        height: 100px;
        overflow: auto;
    }
    .carousel.showDetail .list .item:nth-child(2) .detail .checkout{
        display: flex;
        width: max-content;
        float: right;
    }
}
      </style>
      <script>
        let nextButton = document.getElementById('next');
let prevButton = document.getElementById('prev');
let carousel = document.querySelector('.carousel');
let listHTML = document.querySelector('.carousel .list');
let seeMoreButtons = document.querySelectorAll('.seeMore');
let backButton = document.getElementById('back');

nextButton.onclick = function(){
    showSlider('next');
}
prevButton.onclick = function(){
    showSlider('prev');
}
let unAcceppClick;
const showSlider = (type) => {
    nextButton.style.pointerEvents = 'none';
    prevButton.style.pointerEvents = 'none';

    carousel.classList.remove('next', 'prev');
    let items = document.querySelectorAll('.carousel .list .item');
    if(type === 'next'){
        listHTML.appendChild(items[0]);
        carousel.classList.add('next');
    }else{
        listHTML.prepend(items[items.length - 1]);
        carousel.classList.add('prev');
    }
    clearTimeout(unAcceppClick);
    unAcceppClick = setTimeout(()=>{
        nextButton.style.pointerEvents = 'auto';
        prevButton.style.pointerEvents = 'auto';
    }, 2000)
}
seeMoreButtons.forEach((button) => {
    button.onclick = function(){
        carousel.classList.remove('next', 'prev');
        carousel.classList.add('showDetail');
    }
});
backButton.onclick = function(){
    carousel.classList.remove('showDetail');
}
      </script>



    






























      <div class="trending-wrapper">
        <h3>Our Best Services</h3>
        <div class="gallery">
            @foreach($services as $item)
            <div class="content">
                <img class="imgs" src="{{$item['gallery']}}"> 
                <h3>{{$item['name']}}</h3>
                <h6>{{$item['price']}}</h6>
                
                <ul class = stars>
                        <li class= starslist><i class="fa fa-star checked"></i></li>
                        <li class= starslist><i class="fa fa-star checked"></i></li>
                        <li class= starslist><i class="fa fa-star checked"></i></li>
                        <li class= starslist><i class="fa fa-star"></i></li>
                        <li class= starslist><i class="fa fa-star"></i></li>
                </ul>

                <button  class="buy-1"  onclick="location.href='detail/{{$item['id']}}'" type="button">
                    Buy One
                </button>
                

                
            </div>


            @endforeach
        </div class >
        <h1 style="text-align:center">We Are Expert In</h1>
        </div>
        <div class="scroller" data-speed="fast">
            <ul class="tag-list scroller__inner">
              <li>HTML</li>
              <li>CSS</li>
              <li>JS</li>
              <li>SSG</li>
              <li>webdev</li>
              <li>animation</li>
              <li>UI/UX</li>
            </ul>
          
          
          <div class="scroller" data-direction="right" data-speed="fast">
            <div class="scroller__inner">
              <img src="https://i.pravatar.cc/150?img=1" alt="" />
              <img src="https://i.pravatar.cc/150?img=2" alt="" />
              <img src="https://i.pravatar.cc/150?img=3" alt="" />  
              <img src="https://i.pravatar.cc/150?img=4" alt="" />
              <img src="https://i.pravatar.cc/150?img=5" alt="" />
              <img src="https://i.pravatar.cc/150?img=6" alt="" />
            </div>
          </div>

        </div >
        <section class="Wrapper" style="display: flex; justify-content: center;">
            <div class="pricing-table">
                <div class="pricing-card">
                  <h3 class="pricing-card-header">Personal</h3>
                  <div class="price"><sup>$</sup>15<span>/MO</span></div>
                  <ul>
                    <li><strong>3</strong> Websites</li>
                    <li><strong>20 GB</strong> SSD</li>
                    <li><strong>1</strong> Domain Name</li>
                    <li><strong>5</strong> Email</li>
                    <li><strong>1x</strong> CPU & RAM</li>
                  </ul>
                  <a href="#" class="order-btn">Order Now</a>
                </div>
            
                <div class="pricing-card">
                  <h3 class="pricing-card-header">Professional</h3>
                  <div class="price"><sup>$</sup>30<span>/MO</span></div>
                  <ul>
                    <li><strong>10</strong> Websites</li>
                    <li><strong>50 GB</strong> SSD</li>
                    <li><strong>1</strong> Domain Name</li>
                    <li><strong>20</strong> Email</li>
                    <li><strong>1.5x</strong> CPU & RAM</li>
                  </ul>
                  <a href="#" class="order-btn">Order Now</a>
                </div>
            
                <div class="pricing-card">
                  <h3 class="pricing-card-header">Premium</h3>
                  <div class="price"><sup>$</sup>50<span>/MO</span></div>
                  <ul>
                    <li><strong>30</strong> Websites</li>
                    <li><strong>150 GB</strong> SSD</li>
                    <li><strong>1</strong> Domain Name</li>
                    <li><strong>40</strong> Email</li>
                    <li><strong>2x</strong> CPU & RAM</li>
                  </ul>
                  <a href="#" class="order-btn">Order Now</a>
                </div>
            
                <div class="pricing-card">
                  <h3 class="pricing-card-header">Ultimate</h3>
                  <div class="price"><sup>$</sup>80<span>/MO</span></div>
                  <ul>
                    <li><strong>100</strong> Websites</li>
                    <li><strong>500 GB</strong> SSD</li>
                    <li><strong>1</strong> Domain Name</li>
                    <li><strong>100</strong> Email</li>
                    <li><strong>4x</strong> CPU & RAM</li>
                  </ul>
                  <a href="#" class="order-btn">Order Now</a>
                </div>
              </div>
        </section>
        <br><br><br>
        {{View::make('footer')}}
        
    </div>
        
    </div>    
      </div>
</div>


@endsection
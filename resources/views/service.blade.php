@extends('master')
@section("content")
<div class="custom-services">
     <!-- test open -->

      <!-- test open -->

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" class="sliderlist" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" class="sliderlist"data-slide-to="1"></li>
          <li data-target="#myCarousel" class="sliderlist"data-slide-to="2"></li>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          @foreach ($services as $item)
        <div class="item {{$item['id']==1?'active':''}}">
        <a href="detail/{{$item['id']}}">
              <img class="slider-img" src="{{$item['gallery']}}">
            <div class="carousel-caption slider-text">
              <h3>{{$item['name']}}</h3>
              <p>{{$item['description']}}</p>
            </div>
            </a>
          </div>
    
          @endforeach
        </div>
      
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
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


@extends('master')
@section("content")
<div class="wrapper">
    <div class="leftdetailes"></div>
    <div class="rightdetailes"></div>


    <div class="content1">
      {{View::make('header')}}
      <div class="img-wrapper">
        <div class="karina" style="background-image: url('<?php echo $services['gallery']; ?>')"></div>
      </div>

      <div class="info">
        <ul>
          <li>one day digital.com</li>
          <li>@chanscoder</li>
          <li>best service</li>
          <li><i class="fa fa-share-alt"></i></li>
        </ul>
      </div>

      <div class="text">
        <h1><?php echo $services['name']; ?></h1>
      </div>

      <div class="Details">
        <h2> Features : </h2>
      </div>

      <div class="responsive-list">
        <p>
        <?php
        $description_parts = explode('.', $services['description']);
        echo "<ul style='color: white; font-size: 12px;'>";
        foreach($description_parts as $part) {
            if(trim($part) != '') {
                echo "<li>" . trim($part) . ".</li>";
            }
        }
        echo "</ul>";
        ?>
        </p>
      </div>
        
	
    
  
    
      

      <div class="name1">One Digital</div>
      

      <div class="bottomnav">
        <form id="add-to-cart-form" action="/add_to_cart" method="POST">
            @csrf
            <input type="hidden" name="service_id" value="{{ $services['id'] }}">
            <button class="btn" type="submit">  
                <i class="btn__icon btn__icon--cart fa-solid fa-cart-shopping"></i>
                <i class="btn__icon btn__icon--box fa-solid fa-parachute-box"></i>
                <span class="btn__text btn__text--first">Get Quote</span>
                <span class="btn__text btn__text--second">Added</span>
            </button> 
        </form>
        <ul>
            <li>Our</li>
            <li>Best</li>
            <li>service</li>
        </ul>
    </div>
    </div>
  </div>
  <script>
 

 const btn = document.querySelector('.btn');
const form = document.getElementById('add-to-cart-form');

btn.addEventListener('click', (event) => {
    event.preventDefault(); // Prevent the default form submission

    btn.classList.add('active');

    // Increase the delay before form submission to 15 seconds (15000 milliseconds)
    setTimeout(() => {
        form.submit(); // Trigger form submission after the delay
    }, 3000);
});
form.addEventListener('submit', () => {
    // No need to remove the 'active' class here,
    // as it will automatically be removed after the specified delay
});



    TweenMax.to('.leftdetailes', 2, {
      delay: .8,
      width: '50%',
      ease: Power2.easeInOut
    })

    TweenMax.to('.rightdetailes', 2, {
      delay: .6,
      width: '50%',
      ease: Power3.easeInOut
    })

    TweenMax.from('.nav', 2, {
      delay: .8,
      opacity: 0,
      ease: Expo.easeInOut
    })

    TweenMax.from('.text h1', 2, {
      delay: .6,
      x: 1000,
      ease: Circ.easeInOut
    })
 TweenMax.from('.text h2', 2, {
      delay: .6,
      x: 1000,
      ease: Circ.easeInOut
    })

    TweenMax.from('.text p', 2, {
      delay: .7,
      x: 1000,
      ease: Circ.easeInOut
    })
    TweenMax.from('.responsive-list', 2, {
      delay: .7,
      x: 1000,
      ease: Circ.easeInOut
    })
    TweenMax.from('.Details', 2, {
      delay: .7,
      x: 1000,
      ease: Circ.easeInOut
    })

    TweenMax.to('.karina', 1, {
      delay: 1.5,
      width: '1000px',
      ease: Power2.easeInOut
    })

    TweenMax.staggerFrom('.bottomnav ul li', 2, {
      delay: 1,
      x: 1000,
      ease: Circ.easeInOut
    }, 0.08)
    TweenMax.staggerFrom('.bottomnav .btn', 3, {
      delay: 1,
      x: 1500,
      ease: Circ.easeInOut
    }, 0.08)

    TweenMax.from('.info', 2, {
      delay: 1.5,
      y: 100,
      ease: Circ.easeInOut
    })

    TweenMax.from('.name1', 2, {
      delay: 1.5,
      x: -600,
      ease: Circ.easeInOut
    })

  </script>


@endsection
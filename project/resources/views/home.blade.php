<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <link href="{{ asset('css/page.css') }}" rel="stylesheet" type="text/css">
    <link
    rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.10.2/css/all.css"
  />
    @livewireStyles
</head>
<body>
  
    @livewire('navbar') 
  
  <div class="flex flex-col items-center">

    <div class="color pl-16 flex">
      <div>
        <img src="{{ URL::to('/images/lamp.png') }}" width="387" height="387">
      
        <div class="lg:pt-32 lg:pl-20">
         <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="7.5" cy="7.5" r="7.5" fill="#FB2E86"/>
         </svg>
        </div>

      </div>   
        
      <div class="lg:pt-40 md:pt-16">
        <p class="furniture_color">Best Furniture For Your Castle...</p>
        <h1 class="text-5xl pt-3">New Furniture Collection Trends in 2020</h1>
        <p class="describe_color lg:pt-3 lg:pb-6">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis pariatur dolorum, velit saepe aliquid perferendis. 
          Eveniet, velit eos!
         </p>
         <button class="shop_button lg:h-10 lg:w-32">Shop Now</button>
      </div> 

      <div class="couch pt-24 flex">
        <img src="{{ URL::to('/images/couch.png') }}" width="629" height="629"> 
      </div> 
          
    </div>

    <div class="lg:pt-32">
    <livewire:product-title title_text="Featured Products"/>
    </div>

    <div class="flex gap-8">
      <livewire:featured-products title="Cantilever chair" code="Y531241" price="$42.00"/>
      <livewire:featured-products title="Cantilever chair" code="Y531241" price="$42.00"/>
      <livewire:featured-products title="Cantilever chair" code="Y531241" price="$42.00"/>
      <livewire:featured-products title="Cantilever chair" code="Y531241" price="$42.00"/>

    </div>

    <div class="grid items-center lg:pt-32">
      <livewire:product-title title_text="Latest Products"/>
      <div class="links flex lg:gap-10 lg:pt-8 items-center lg:pl-8">
        <u><a href="#" class="link_color">New Arrival</a></u>
        <a href="#">Best Seller</a>
        <a href="#">Featured</a>
        <a href="#">Special Offer</a>
      </div>
    </div>


    <div class="">
      <div class="flex lg:gap-11">
      <livewire:latest-products title="Comfort Handy Craft" reduced_price="$42.00" price="$65.00"/>
      <livewire:latest-products title="Comfort Handy Craft" reduced_price="$42.00" price="$65.00"/>
      <livewire:latest-products title="Comfort Handy Craft" reduced_price="$42.00" price="$65.00"/>
      </div>
      <div class="flex lg:gap-11 lg:pt-11">
      <livewire:latest-products title="Comfort Handy Craft" reduced_price="$42.00" price="$65.00"/>
      <livewire:latest-products title="Comfort Handy Craft" reduced_price="$42.00" price="$65.00"/>
      <livewire:latest-products title="Comfort Handy Craft" reduced_price="$42.00" price="$65.00"/>
      </div>
    </div>

    <div class="lg:pt-32">
    <livewire:product-title title_text="What Shopex Offer!"/>
    </div>

    <div class=" lg:pb-32 flex lg:gap-4">
      <livewire:shopex-offer image="{{URL::to('/images/truck.jpg')}}" text="24/7 Support" description="Lorem ipsum dolor sit amet,consectur adipiscng elit.Massa purus gravida."/>
      <livewire:shopex-offer image="{{URL::to('/images/truck.jpg')}}" text="24/7 Support" description="Lorem ipsum dolor sit amet,consectur adipiscng elit.Massa purus gravida."/>
      <livewire:shopex-offer image="{{URL::to('/images/truck.jpg')}}" text="24/7 Support" description="Lorem ipsum dolor sit amet,consectur adipiscng elit.Massa purus gravida."/>
      <livewire:shopex-offer image="{{URL::to('/images/truck.jpg')}}" text="24/7 Support" description="Lorem ipsum dolor sit amet,consectur adipiscng elit.Massa purus gravida."/>
    </div>
  </div>

    
    <div class="div_color flex justify-center" >
      
      <div class="flex">

       <div class="">
          <img src="{{ URL::to('/images/bluechair.png') }}" width="509" height="550">
       </div>

      <div class="lg:pt-24 ">

        <h1 class="h1_position text-3xl">Unique Features Of leatest & Trending Poducts</h1>
        <div class=" lg:pt-11">
        <ul class="description_color">
          <li>All frames constructed with hardwood solids and laminates</li>
          <li>Reinforced with double wood dowels, glue, screw - nails corner blocks and machine nails</li>
          <li>Arms, backs and seats are structurally reinforced</li>
        </ul>
        </div>
         <div class="lg:pt-9 flex items-center lg:gap-4">
          <button class="shop_button lg:h-10 lg:w-32">Add To Cart</button>
          <div>
            <p class="paragraph_color">B&B Italian Sofa</p>
            <p class="paragraph_color">$32.00</p>
          </div>
         </div>
      </div>

      </div>

    </div>


  <div class="flex flex-col items-center">

    <div class="lg:pt-32">
      <livewire:product-title title_text="Trending Products"/>
    </div>

    <div class="flex  lg:gap-7">
      <livewire:trending-products image="{{ URL::to('/images/graychair.png') }}" text="Cantilever chair" reduced_price="$26.00" price="$42.00"/>
      <livewire:trending-products image="{{ URL::to('/images/graychair.png') }}" text="Cantilever chair" reduced_price="$26.00" price="$42.00"/>
      <livewire:trending-products image="{{ URL::to('/images/graychair.png') }}" text="Cantilever chair" reduced_price="$26.00" price="$42.00"/>
      <livewire:trending-products image="{{ URL::to('/images/graychair.png') }}" text="Cantilever chair" reduced_price="$26.00" price="$42.00"/>
    </div>

    <div class="flex  lg:pt-12 lg:gap-7">
      <div>
      <livewire:trending-products-discount title="23% off in all products"  text="Shop Now"  image="{{ URL::to('/images/image.png') }}"/>
      </div>
      <div>
      <livewire:trending-products-discount title="23% off in all products"  text="Shop Now"  image="{{ URL::to('/images/image.png') }}"/>
      </div>
      <div class="grid lg:gap-4">
      <livewire:trending-products-chair image="{{ URL::to('/images/smallchair.png') }}" text="Executive Seat chair" price="$30.00"/>
      <livewire:trending-products-chair image="{{ URL::to('/images/smallchair.png') }}" text="Executive Seat chair" price="$30.00"/>
      <livewire:trending-products-chair image="{{ URL::to('/images/smallchair.png') }}" text="Executive Seat chair" price="$30.00"/>
      </div>
    </div>

   <div class="grid items-center lg:pt-32">
    <livewire:product-title title_text="Discount Item"/>
      <div class="links flex lg:gap-10 lg:pt-8  items-center lg:pl-8">
        <u><a href="#" class="link_color">Wood Chair</a></u>
        <a href="#">Plastic Chair</a>
        <a href="#">Sofa Collection</a>
        
      </div>
   </div>

   <div class="flex items-center">
     <div class="">
     <h1 class="discount_h1 lg:pb-4">20% Discount Of All Products</h1>
     <h2 class="discount_h2 lg:pb-6">Eams Sofa Compact</h2>
     <p class="discount_paragraph lg:pb-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eu eget feugiat habitasee nec, bibedum condimemtun</p>
     <div class="flex lg:gap-6 lg:pb-6">
       <div class="grid items-start">
          <p class="paragraph_check"><span class="check_color">✓</span>Material expose like metals</p>
          <p class="paragraph_check"><span class="check_color">✓</span>Simple neutral colors</p>
       </div>
       <div class="grid items-start">
          <p class="paragraph_check"><span class="check_color">✓</span>Clear lines and geomatric figures</p>
          <p class="paragraph_check"><span class="check_color">✓</span>Material expose like metals</p>
       </div>
     </div>
      <button class="shop_button lg:h-10 lg:w-48">Shop Now</button>
     </div>
     <div>
      <img src="{{URL::to('/images/brchair.png')}}" width="690" height="600">
     </div>
   </div>

   <div class="lg:pt-32">
   <livewire:product-title title_text="Top Categories"/>
   </div>

   <div class="flex items-center  lg:pt-12 lg:gap-10 lg:pb-44">
     <livewire:top-categories image="{{URL::to('/images/whitechair.png')}}" text="Mini LCW Chair" price="$56.00"/>
     <livewire:top-categories image="{{URL::to('/images/whitechair.png')}}" text="Mini LCW Chair" price="$56.00"/>
     <livewire:top-categories image="{{URL::to('/images/whitechair.png')}}" text="Mini LCW Chair" price="$56.00"/>
     <livewire:top-categories image="{{URL::to('/images/whitechair.png')}}" text="Mini LCW Chair" price="$56.00"/>

   </div>

  </div>

   <div class="lg:py-40  newsletter_image" >
    <div class="text-center">
      <div class="text-center">
        <h1 class="newsletter_h1 "> Get Latest Update By Subscribing</h1><h1 class="newsletter_h1 lg:pb-7"> Our Newsletter</h1>
      </div>
    <button class="shop_button lg:h-10 lg:w-44">Shop Now</button>
    </div>
   </div>
   
   <div class="lg:pt-24 text-center">
    <center><img src="{{ URL::to('/images/design.png') }}" width="903" height="93"></center>
   </div>

  <div class="flex flex-col items-center">

   <div class="lg:pt-32">
    <livewire:product-title title_text="Leatest Blog"/>
   </div>

   <div class="flex lg:pt-20  lg:gap-12 lg:pb-24">
     <livewire:leatest-blog image="{{URL::to('/images/latest.png')}}" text="SaberAli" date="21 August,2020"
       title="Top essentialTrends in 2021" description="More of this less hello samlande lied much over tightly circa horse taped mightly"/>
      <livewire:leatest-blog image="{{URL::to('/images/latest.png')}}" text="SaberAli" date="21 August,2020"
       title="Top essentialTrends in 2021" description="More of this less hello samlande lied much over tightly circa horse taped mightly"/>
      <livewire:leatest-blog image="{{URL::to('/images/latest.png')}}" text="SaberAli" date="21 August,2020"
       title="Top essentialTrends in 2021" description="More of this less hello samlande lied much over tightly circa horse taped mightly"/>
   </div>
  
  </div>


    @livewire('footer')
    @livewireScripts
</body>
</html>
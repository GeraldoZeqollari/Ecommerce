<div>
  <div class="shadow-lg">
    <div class="border_color image_color lg:pl-3 lg:pt-4 lg:pb-3 ">
        <div class="div">
          <img src="{{ URL::to('/images/chair.png') }}" width="178" height="178">
        </div>
        <div class="flex icons gap-3 ">
          <i class="fas fa-shopping-cart"></i>
          <i class="far fa-heart"></i>
          <i class="fas fa-search-plus"></i>
        </div>
    </div>

    <div class="latest_div border_color grid text-center  hover:bg-blue-700  gap-4">
       <p class="furniture_color lg:pt-4">{{$title}}</p>
       <p class="paragraph_color">{{$code}}</p>
       <p class="paragraph_color">{{$price}}</p>
    </div>
  </div>
</div>

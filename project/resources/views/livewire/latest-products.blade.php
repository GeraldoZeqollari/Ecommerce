<div class="lg:pt-12">
    <div class="image_color  lg:pl-14 lg:pr-14">
        <div class="lg:pt-8">
            <img src="{{ URL::to('/images/redchair.png') }}" width="220" height="229">
        </div>

    </div>
    <div class="flex lg:gap-12 text-center" >
           <p class="paragraph_color">{{$title}}</p> 
           <div class="flex lg:gap-6">
           <p class="paragraph_color">{{$reduced_price}}</p> 
           <p class="price_color">{{$price}}</p> 
           </div>
    </div>
</div>

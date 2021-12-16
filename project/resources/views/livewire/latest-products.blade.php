<div class="lg:pt-12">
    <div class="image_color flex flex-col justify-center">
        <div class="lg:pt-8 lg:ml-14 lg:pr-14 div"  >
            <img src="{{ URL::to('/images/redchair.png') }}" width="220" height="229">
        </div>
        <div class="flex flex-col gap-2 pl-3 icons">
            <i class="fas fa-shopping-cart"></i>
            <i class="far fa-heart"></i>
            <i class="fas fa-search-plus"></i>
        </div>
    </div>
    <div class="flex lg:gap-12 text-center " >
           <p class="paragraph_color">{{$title}}</p> 
           <div class="flex lg:gap-6">
                <p class="paragraph_color">{{$reduced_price}}</p> 
                <p class="price_color">{{$price}}</p> 
           </div>
    </div>
</div>

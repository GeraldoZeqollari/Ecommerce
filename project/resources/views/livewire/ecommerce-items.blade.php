<div class="lg:grid lg:grid-cols-4 gap-12">
    @foreach ($images as $image)
     <div class="flex flex-col gap-3">  
   <div class="image_color lg:pr-4 flex items-center lg:pt-4 lg:pb-3">
    <img src="../storage/images/{{$image->path_name}}" width="200" height="200"/>
   </div>
   
   <div class="flex flex-col items-center lg:pt-4">
       <div><p class="ecommerce_paragraph">{{$image->title}}</p></div>
       <div class="flex lg:gap-4 ">
           <p class="ecommerce_price">{{$image->price}}</p>
           <p class="ecommerce_reduced">{{$image->reduced_price}}</p>
       </div>
   </div>
     </div>
   @endforeach

</div>

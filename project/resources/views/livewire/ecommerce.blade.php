<div class="lg:flex lg:flex-row  lg:justify-center sm:flex sm:flex-col sm:items-center  lg:pt-28  sm:pt-12
lg:pb-40 lg:gap-28 md:gap-20 sm:gap-8 lg:ml-12 md:ml-8 sm:ml-6 ">
    
        <div class="flex flex-col" >
            <h1 class="ecommerce">{{$title}}</h1>
            <p class="results">{{$results}}</p>
        </div>

     <div class="flex items-center pb-3">
        
        <div class="flex items-center lg:w-1/4" >
            <p class="filter">{{$per_page}}</p><input type="text" class="input" style="width: 30%"/>
        </div>

        <div class="flex items-center">
            <p class="filter">{{$sort}}</p>
                <select class="text-xs input">
                    <option >Best Match</option>
                </select>
        </div>

        <div class="flex items-center ">
            <p class="filter">{{$view}}</p>
            <input type="text" class="input" style="width: 60%"/>
        </div>
     </div>
     
    
</div>

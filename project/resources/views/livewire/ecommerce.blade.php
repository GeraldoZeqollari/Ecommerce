<div class="lg:flex  lg:flex-wrap sm:flex sm:flex-col justify-center lg:pt-28 lg:pb-40 lg:gap-40 ">
    <div class="flex gap-12">
        <div class="flex flex-col" >
            <h1 class="ecommerce">{{$title}}</h1>
            <p class="results">{{$results}}</p>
        </div>

     <div class="flex justify-center">
        
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
</div>

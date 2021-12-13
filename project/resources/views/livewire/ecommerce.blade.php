<div class="flex  lg:pl-96 lg:pt-28 lg:pb-40 lg:gap-44">
    <div>
        <h1 class="ecommerce">{{$title}}</h1>
        <p class="results">{{$results}}</p>
    </div>
    <div class="flex">
        
        <div class="flex items-center lg:w-1/5">
            <p class="filter">{{$per_page}}</p><input type="text" class="input" style="width: 30%"/>
        </div>

        <div class="flex items-center">
            <p class="filter">{{$sort}}</p>
                <select class="text-xs input">
                    <option >Best Match</option>
                </select>
        </div>

        <div class="flex items-center lg:pl-5">
            <p class="filter">{{$view}}</p>
            <input type="text" class="input" style="width: 60%"/>
        </div>

    </div>
</div>

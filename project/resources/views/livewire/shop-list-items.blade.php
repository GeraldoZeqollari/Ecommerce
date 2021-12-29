<head>

</head>
<body>
<div class="flex border_color items-center gap-7 pt-4 shadow-lg">
  <div>
    <img src="{{ $image }}" width="313" height="217">
  </div>

  <div>
        <h1 class="shoplist_title py-4 ">{{$title}}</h1>
        <div class="flex gap-4">
          <p class="shoplist_price">{{$price}}</p>
          <p class="shoplist_price_reduced lg:pb-4">{{$reduced_price}}</p>
        </div>
        <div class="shoplist_text lg:mr-48">
          <p class="">{{$description}}</p>
        </div>
        <div class="flex lg:gap-4 lg:pt-8 lg:pb-6">
            <p><i class="fas fa-shopping-cart"></i></p>
            <p><i class="far fa-heart"></i></p>
            <p><i class="fas fa-search-plus"></i></p>
        </div>
  </div>

</div>
</body>
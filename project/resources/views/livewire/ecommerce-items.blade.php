<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script>
    var i;
    var elements = document.getElementsByClassName("column");
    var row=document.getElementsByClassName("row");

    function listView() {
              for (i = 0; i < elements.length; i++) {
                elements[i].style.display="block";
              }

              for (i = 0; i < row.length; i++) {
                row[i].style.padding="50px";
              }
    }

    function gridView() {
        for (i = 0; i < elements.length; i++) {
          elements[i].style.display = "flex";
        }
    }
    
    </script>
</head>
<body>
<div>
    <div class="lg:grid lg:grid-cols-4 gap-12 lg:pb-12 md:pb-8 sm:pb-6  column">
      @foreach ($images as $image)
        
        <div class="flex flex-col gap-3" >  
            <div class="flex items-end image_color">
                <div class=" lg:pr-4 flex items-center lg:pt-4 lg:pb-3 div row">
                  <img src="../storage/images/{{$image->path_name}}" width="220" height="220"/>
                </div>
   
              <div class="flex flex-col gap-2 pl-3 icons">
                  <i class="fas fa-shopping-cart"></i>
                  <i class="far fa-heart"></i>
                  <i class="fas fa-search-plus"></i>
              </div>
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

  {{$images->links()}}

</div>
</body>
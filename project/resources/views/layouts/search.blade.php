<head>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <link href="{{ asset('css/page.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css"/>
</head>
<body>

    @livewire('navbar') 

    <div class="flex flex-col items-center">
        <h1 class="title_color lg:text-3xl md:text-xl sm:text-base lg:py-20 md:py-12 sm:py-6">Results for {{$search}} </h1>

        @if(count($images))
            <div class="flex gap-12 lg:pb-12 md:pb-8 sm:pb-6">
                @foreach ($images as $image)
                    <div class="flex flex-col gap-3" >  
                        <div class="image_color lg:pr-4 flex justify-center lg:pt-4 lg:pb-3">
                            <img src="../storage/images/{{$image->path_name}}" width="220" height="220"/>
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
        @else
            <div> <h2 class="title_color lg:text-3xl md:text-xl sm:text-base lg:py-12 md:py-8 sm:py-4">No images found</h2> </div>
        @endif
       
        @if(count($blogs))
    
            <div class="lg:grid lg:grid-cols-4 gap-12 lg:pb-12 md:pb-8 sm:pb-6">
                @foreach ($blogs as $blog)
                    <div class="flex flex-col gap-3" >  
                        <div class="image_color lg:pr-4 flex justify-center lg:pt-4 lg:pb-3">
                            <img src="../storage/images/{{$blog->path_name}}" width="220" height="220"/>
                        </div>
       
                        <div class="flex flex-col items-center lg:pt-4">
                            <div><p class="ecommerce_paragraph">{{$blog->title}}</p></div>
                            <div class="flex lg:gap-4 "><p class="ecommerce_price">{{$blog->description}}</p></div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div> <h2 class="title_color lg:text-3xl md:text-xl sm:text-base lg:py-12 md:py-8 sm:py-4">No blogs found</h2> </div>
        @endif

    </div>

    @livewire('footer')

</body>
<head>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <link href="{{ asset('css/page.css') }}" rel="stylesheet" type="text/css">
    

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css"/>
</head>
<body>
     
  @livewire('navbar') 
  @auth
<div class="flex justify-center py-20">
    <a href="{{route('createblog')}}" class="link"><button type="button" class="link lg:w-40 lg:h-12">Create new blog</button></p></a>
</div>
@endauth
<div class="flex flex-col items-center pb-20">
    @foreach ($blogs as $blog)
    <div class="flex  gap-12 py-12 shadow-2xl px-12 ">  

           <div class="flex items-end image_color">
            <div class=" lg:pr-4 flex items-center lg:pt-4 lg:pb-3 div">
              <img src="../storage/images/{{$blog->path_name}}" width="220" height="220"/>
            </div>
           </div>

          <div class="flex flex-col items-center lg:pt-4 gap-12">

              <div><p class="ecommerce_paragraph">{{$blog->title}}</p></div>
                <div class="flex lg:gap-4 ">
                    <p class="ecommerce_price">{{$blog->description}}</p>
                </div>
            <div><p class="ecommerce_paragraph">{{$blog->user->name}}</p></div>

           </div>
           
          </div>

            <div class="flex flex-col lg:gap-6 sm:gap-4 w-2/5 lg:pt-8">
            <form  method="POST">
                @csrf
                <h1 class="discount_h1">Post a Comment</h1>
            

                <div class="py-4">
                     <textarea class="input lg:h-40  sm:w-full" name="comment">Type your comment</textarea>
                </div>

                <button class="shop_button lg:w-32 lg:h-11" type="submit" >Post</button>
                
                <input type="number" class="icons" name="id" value="{{$blog->id}}"/>
            
            </form>
            @if(count($blog->comments))
           
                
            @for ($i = 0; $i < count($blog->comments); $i++)
            <p>{{$blog->user->name}}</p>
            <p>{{$blog->comments[$i]->comment}}</p>
                
            @endfor
          
            @else
                <p></p>
            @endif
           </div>
        

    @endforeach
        <div class="lg:py-20 md:py-12 sm:py-8">
            {{$blogs->links()}}

        </div>

    
</div>
 
@livewire('footer') 
</body> 
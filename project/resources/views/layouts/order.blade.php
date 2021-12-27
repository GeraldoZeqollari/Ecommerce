<head>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <link href="{{ asset('css/page.css') }}" rel="stylesheet" type="text/css">
    <link
    rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.10.2/css/all.css"
  />
    @livewireStyles
</head>
<body>
  
    @livewire('navbar') 
  
    <livewire:shop-grid title="Order Completed" text="Order Completed"/>

    <div> <livewire:order-completed image="{{URL::to('/images/clock.png')}}" title="Your Order Is Completed"/> </div>

    <div class="lg:py-20 sm:py-12"> <center><img src="{{ URL::to('/images/design.png') }}" width="903" height="93"></center> </div>
    
    @livewire('footer')
    
    @livewireScripts
</body>
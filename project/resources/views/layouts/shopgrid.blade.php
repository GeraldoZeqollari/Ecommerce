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
  
   
    <livewire:shop-grid title="Shop Grid Default" text="ShopGridDefault"/>
      
    <livewire:ecommerce title="Ecommerce Accessories & Fashion item" results="About 9620 results(0.62 seconds)" 
    per_page="Per_page" sort="Sort By" view="View"/>

    <div class="flex justify-center pt-3"> <livewire:ecommerce-items /> </div>

    <div class="lg:py-20 sm:py-12"> <center><img src="{{ URL::to('/images/design.png') }}" width="903" height="93"></center> </div>

    @livewire('footer')
    @livewireScripts
</body>
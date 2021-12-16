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

    <div class="flex flex-col items-center pt-3">

      <div class="lg:flex  sm:grid sm:grid-cols-2 lg:gap-12 sm:gap-6 ecom_accessories">
        <livewire:ecommerce-items image="{{URL::to('/images/lightgray.png')}}" title="Vel elit euismod" price="$26.00" reduced_price="$42.00"/>
        <livewire:ecommerce-items image="{{URL::to('/images/lightgray.png')}}" title="Vel elit euismod" price="$26.00" reduced_price="$42.00"/>
        <livewire:ecommerce-items image="{{URL::to('/images/lightgray.png')}}" title="Vel elit euismod" price="$26.00" reduced_price="$42.00"/>
        <livewire:ecommerce-items image="{{URL::to('/images/lightgray.png')}}" title="Vel elit euismod" price="$26.00" reduced_price="$42.00"/>
      </div>

      <div class="lg:flex sm:grid sm:grid-cols-2 lg:gap-12 sm:gap-6 lg:pt-20 ecom_accessories">
        <livewire:ecommerce-items image="{{URL::to('/images/lightgray.png')}}" title="Vel elit euismod" price="$26.00" reduced_price="$42.00"/>
        <livewire:ecommerce-items image="{{URL::to('/images/lightgray.png')}}" title="Vel elit euismod" price="$26.00" reduced_price="$42.00"/>
        <livewire:ecommerce-items image="{{URL::to('/images/lightgray.png')}}" title="Vel elit euismod" price="$26.00" reduced_price="$42.00"/>
        <livewire:ecommerce-items image="{{URL::to('/images/lightgray.png')}}" title="Vel elit euismod" price="$26.00" reduced_price="$42.00"/>
      </div>

      <div class="lg:flex  sm:grid sm:grid-cols-2 lg:gap-12 sm:gap-6 lg:pt-20 ecom_accessories">
        <livewire:ecommerce-items image="{{URL::to('/images/lightgray.png')}}" title="Vel elit euismod" price="$26.00" reduced_price="$42.00"/>
        <livewire:ecommerce-items image="{{URL::to('/images/lightgray.png')}}" title="Vel elit euismod" price="$26.00" reduced_price="$42.00"/>
        <livewire:ecommerce-items image="{{URL::to('/images/lightgray.png')}}" title="Vel elit euismod" price="$26.00" reduced_price="$42.00"/>
        <livewire:ecommerce-items image="{{URL::to('/images/lightgray.png')}}" title="Vel elit euismod" price="$26.00" reduced_price="$42.00"/>
      </div>

    </div>

    <div class="lg:py-20 sm:py-12">
       <center><img src="{{ URL::to('/images/design.png') }}" width="903" height="93"></center>
    </div>

    @livewire('footer')
    @livewireScripts
</body>
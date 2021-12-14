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
  
    <livewire:shop-grid title="Shop List" text="ShopList"/>

    <livewire:ecommerce title="Ecommerce Accessories & Fashion item" results="About 9620 results(0.62 seconds)" 
    per_page="Per_page" sort="Sort By" view="View"/>

    <div class="flex flex-col items-center lg:gap-8">
    <livewire:shop-list-items title="Accumsan tincidunt" price="$26.00" reduced_price="$50.00" 
    description="Lorem ipsum sit amet , consectetur aplisiscing elit.Magna in est adiplsicng in phaselluf non in justo"
    image="{{URL::to('/images/shoplist.png')}}" />

    <livewire:shop-list-items title="Accumsan tincidunt" price="$26.00" reduced_price="$50.00" 
    description="Lorem ipsum sit amet , consectetur aplisiscing elit.Magna in est adiplsicng in phaselluf non in justo"
    image="{{URL::to('/images/shoplist.png')}}" />

    <livewire:shop-list-items title="Accumsan tincidunt" price="$26.00" reduced_price="$50.00" 
    description="Lorem ipsum sit amet , consectetur aplisiscing elit.Magna in est adiplsicng in phaselluf non in justo"
    image="{{URL::to('/images/shoplist.png')}}" />

    <livewire:shop-list-items title="Accumsan tincidunt" price="$26.00" reduced_price="$50.00" 
    description="Lorem ipsum sit amet , consectetur aplisiscing elit.Magna in est adiplsicng in phaselluf non in justo"
    image="{{URL::to('/images/shoplist.png')}}" />

    <livewire:shop-list-items title="Accumsan tincidunt" price="$26.00" reduced_price="$50.00" 
    description="Lorem ipsum sit amet , consectetur aplisiscing elit.Magna in est adiplsicng in phaselluf non in justo"
    image="{{URL::to('/images/shoplist.png')}}" />

    <livewire:shop-list-items title="Accumsan tincidunt" price="$26.00" reduced_price="$50.00" 
    description="Lorem ipsum sit amet , consectetur aplisiscing elit.Magna in est adiplsicng in phaselluf non in justo"
    image="{{URL::to('/images/shoplist.png')}}" />

    <livewire:shop-list-items title="Accumsan tincidunt" price="$26.00" reduced_price="$50.00" 
    description="Lorem ipsum sit amet , consectetur aplisiscing elit.Magna in est adiplsicng in phaselluf non in justo"
    image="{{URL::to('/images/shoplist.png')}}" />

    </div>
    <div class="lg:py-20">
      <center><img src="{{ URL::to('/images/design.png') }}" width="903" height="93"></center>
    </div>
    @livewire('footer')
    @livewireScripts
</body>
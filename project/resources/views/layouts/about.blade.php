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
  
    <livewire:shop-grid title="About Us" text="About Us"/>
    
    <div class="lg:flex lg:flex-inline  justify-center gap-6  py-28">
       
        <img src="{{ URL::to('/images/meet.png') }}" width="550" height="390">
        
        <div>
            <h1 class="h1_position text-4xl lg:pt-6">Know About Our Ecommerce Business, History</h1>

            <p class="lg:pb-24 lg:pt-4 list_element about_paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mattis neques ultirces
                mattis aliquam, malesuada diam est.Malesuada sem tristique amet erat vita eeget
               dolor lobortis. Accumsan faucibus vitae lobortis quis bibendium quam.
            </p>

            <button class="shop_button lg:h-11 lg:w-36">Contact Us</button>
        </div>
    
    </div>

    <livewire:product-title title_text="Our Features"/>
    
    <div class="lg:pb-32 md:pb-28 sm:pb-16 flex flex-wrap pt-3 justify-center gap-4">
        <livewire:shopex-offer image="{{URL::to('/images/truck.jpg')}}" text="24/7 Support" description="Lorem ipsum dolor sit amet,consectur adipiscng elit.Massa purus gravida."/>
        <livewire:shopex-offer image="{{URL::to('/images/truck.jpg')}}" text="24/7 Support" description="Lorem ipsum dolor sit amet,consectur adipiscng elit.Massa purus gravida."/>
        <livewire:shopex-offer image="{{URL::to('/images/truck.jpg')}}" text="24/7 Support" description="Lorem ipsum dolor sit amet,consectur adipiscng elit.Massa purus gravida."/>
        <livewire:shopex-offer image="{{URL::to('/images/truck.jpg')}}" text="24/7 Support" description="Lorem ipsum dolor sit amet,consectur adipiscng elit.Massa purus gravida."/>
    </div>

    <div class="about_div flex flex-col items-center lg:mb-96 md:mb-72 sm:mb-24">
        <div class="lg:pt-12">
            <livewire:product-title title_text="Our Client Say"/>
        </div>

        <div class="flex lg:gap-6 lg:pt-10">
            <img src="{{ URL::to('/images/first.png') }}" class="lg:py-4" width="55" height="55">

            <div>
                <img src="{{ URL::to('/images/second.png') }}" class="lg:pb-4" width="55" height="55">
            </div>

            <img src="{{ URL::to('/images/third.png') }}" class="lg:py-4" width="55" height="55">
        </div>
        
        <h1 class="client_name lg:pt-8">Selina Gomez</h1>
        <p class="results">Ceo At Webecy Digital</p>

        <p class="client_paragraph text-center lg:pt-4 lg:pb-24">Lorem ipsum dolor sit amet, cosectetur adipiscing elit.
            Non duis ultrices quam vel dui sollicitudin aliquet id arcu.Nam vitae a enim nunc, sed sapien egestas ac nam.
            Treistiques ultrices dolor aliquam lacues volutpat praesent
        </p>
    </div>

    @livewire('footer')
    @livewireScripts
</body>
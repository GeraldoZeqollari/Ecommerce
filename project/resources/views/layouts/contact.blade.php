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
  
    <livewire:shop-grid title="Contact Us" text="Contact Us"/>
    
    <div class="flex flex-col items-center lg:pb-72 pt-24" >

        <div class="lg:flex lg:flex-row lg:items-center sm:flex sm:flex-col sm:items-center lg:pb-20 sm:pb-12  lg:gap-28 sm:gap-12" >
            <div>
                <h1 class="discount_h1">Information About Us</h1>
                <p class="client_paragraph lg:pt-4">Lorem ipsum dolor sit amet, cosectetur adipiscing elit.
                    Non duis ultrices quam vel dui sollicitudin aliquet id arcu.Nam vitae a enim nunc, sed sapien egestas ac nam.
                    Treistiques ultrices dolor aliquam lacues volutpat praesent
                </p>

                <div class="flex lg:pt-6 sm:pt-3">
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12.5" cy="12.5" r="12.5" fill="#5625DF"/>
                        </svg>

                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12.5" cy="12.5" r="12.5" fill="#FF27B7"/>
                        </svg>

                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12.5" cy="12.5" r="12.5" fill="#37DAF3"/>
                        </svg>
                </div>   
            </div>

            <div class="lg:mr-0 sm:mr-40">
                <h1 class="discount_h1 ">Contact Way</h1>

                <div class="flex lg:pt-4 gap-11 lg:pb-9" >
                    <div class="flex items-center gap-4">
                        <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="22.5" cy="22.5" r="22.5" fill="#5726DF"/>
                        </svg>

                        <div class="flex flex-col contact_paragraph">
                            <p>Tel:877-67-88-99</p>
                            <p>E-mail:shop@store.com</p>
                        </div>
                    </div>

                    <div class="flex  items-center gap-4">
                        <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="22.5" cy="22.5" r="22.5" fill="#FB2E86"/>
                        </svg>

                        <div class="flex flex-col contact_paragraph">
                            <p>Support Forum</p>
                            <p>For over 24hr</p>
                        </div>
                    </div>
                </div>

                <div class="flex gap-8">
                    <div class="flex items-center gap-4">
                        <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="22.5" cy="22.5" r="22.5" fill="#FFB265"/>
                        </svg>

                        <div class="flex flex-col contact_paragraph">
                            <p>20 Margaret st,London</p>
                            <p>Great Britain, 3NM98-LK</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="22.5" cy="22.5" r="22.5" fill="#1BE982"/>
                        </svg>
                        <div class="flex flex-col contact_paragraph">
                            <p>Free standart shipping </p>
                            <p>on all orders</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="lg:flex lg:flex-row lg:items-center sm:flex sm:flex-col sm:items-center" >

            <div class="flex items-center">
                <div class="flex flex-col lg:gap-6 sm:gap-4">
                    <h1 class="discount_h1">Get In Touch</h1>
                    <p class="client_paragraph">Lorem ipsum dolor sit amet,consectetur adipiscing elit.
                    Mattis nequeultrices tristique amet erat vitaeeget dolor los vitae eget dolor los vitae lobortis quis bibendum quam
                    </p>

                    <div class="lg:pt-9 sm:pt-5 lg:flex lg:flex-row sm:flex sm:flex-col gap-5">
                        <input type="text" class="input lg:h-11 lg:w-64 sm:h-8" placeholder="Your Name*"/>
                        <input type="text" class="input lg:h-11 lg:w-64 sm:h-8" placeholder="Your E-mail"/>
                    </div>

                    <div>
                        <input type="text" class="input lg:h-11 lg:w-5/6 sm:w-full sm:h-8" placeholder="Subject*"/>
                    </div>

                    <div>
                        <textarea class="input lg:h-40 lg:w-5/6 sm:w-full">Type your message*</textarea>
                    </div>

                    <button class="shop_button lg:w-32 lg:h-11">Send Mail</button>
                </div>
            </div>

            <div><img src="{{ URL::to('/images/group.png') }}" width="600" height="640"> </div>
        </div>
        
    </div>

    @livewire('footer')
    @livewireScripts
</body>
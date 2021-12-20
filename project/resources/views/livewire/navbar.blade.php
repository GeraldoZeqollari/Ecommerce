
<div>

   <div class="navbar_color xl:flex xl:flex-wrap xl:items-center lg:flex lg:flex-wrap lg:justify-evenly  lg:p-3.5 md:flex 
            md:flex-wrap md:items-center md:gap-12 md:py-4 sm:flex sm:flex-wrap sm:justify-center sm:py-10 sm:gap-10">

     <div class="flex flex-wrap gap-8">
        
         <div class="flex items-center text-white gap-3 text-base font-sans" >
            <i class="far fa-envelope"></i>
            <p >mhhasanul@gmail.com</p>
         </div>   

        <div class="flex flex-wrap items-center text-white text-base font-sans">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.0438 14.666H11.0625C11.4145 14.666 11.7472 14.5274 11.9992 14.2754L13.8072 12.4674C13.8691 12.4055 13.9183 12.332 13.9518 12.2512C13.9854 12.1703 14.0026 12.0836 14.0026 11.996C14.0026 11.9085 13.9854 11.8218 13.9518 11.7409C13.9183 11.66 13.8691 11.5866 13.8072 11.5247L11.1405 8.85804C11.0786 8.79608 11.0052 8.74692 10.9243 8.71338C10.8434 8.67984 10.7567 8.66257 10.6692 8.66257C10.5816 8.66257 10.4949 8.67984 10.414 8.71338C10.3331 8.74692 10.2597 8.79608 10.1978 8.85804L9.13515 9.92071C8.64249 9.77404 7.72315 9.44071 7.14049 8.85804C6.55782 8.27537 6.22449 7.35604 6.07782 6.86337L7.14049 5.80071C7.20245 5.73885 7.25161 5.66538 7.28515 5.5845C7.31869 5.50363 7.33595 5.41693 7.33595 5.32937C7.33595 5.24182 7.31869 5.15512 7.28515 5.07425C7.25161 4.99337 7.20245 4.9199 7.14049 4.85804L4.47382 2.19137C4.34637 2.07108 4.17774 2.00406 4.00249 2.00406C3.82723 2.00406 3.6586 2.07108 3.53115 2.19137L1.72382 3.99937C1.47049 4.25271 1.32782 4.60071 1.33315 4.95604C1.34849 5.90537 1.59982 9.20271 4.19849 11.8014C6.79715 14.4 10.0945 14.6507 11.0438 14.666ZM4.00315 3.60537L5.72715 5.32937L4.86515 6.19137C4.78671 6.2696 4.72908 6.36621 4.69753 6.47241C4.66597 6.5786 4.66149 6.691 4.68449 6.79937C4.70049 6.87604 5.09182 8.69404 6.19849 9.80071C7.30515 10.9074 9.12315 11.2987 9.19982 11.3147C9.30819 11.3378 9.42062 11.3334 9.52684 11.3018C9.63305 11.2703 9.72966 11.2126 9.80782 11.134L10.6698 10.272L12.3938 11.996L11.0565 13.3327C10.2245 13.3187 7.37782 13.0954 5.14115 10.858C2.89715 8.61404 2.67982 5.75737 2.66649 4.94204L4.00315 3.60537ZM13.3325 7.33271H14.6658C14.6658 3.91271 12.0838 1.33337 8.65915 1.33337V2.66671C11.3672 2.66671 13.3325 4.62871 13.3325 7.33271Z" fill="white"/>
            <path d="M8.66602 5.33333C10.068 5.33333 10.666 5.93133 10.666 7.33333H11.9993C11.9993 5.18333 10.816 4 8.66602 4V5.33333V5.33333Z" fill="white"/>
            </svg>
            
            <p>(12345)67890</p>
        </div>
     </div>

     <div class="flex flex-wrap items-center gap-5 sm:flex sm:items-center">
        <select name="language" id="language" class="text-white navbar_color">
            <option value="english">English</option>
            <option value="italiano">Italiano</option>
        </select>

        <select name="payment" id="payment" class="text-white navbar_color">
            <option value="usd">USD</option>
            <option value="euro">EURO</option>
        </select>
        <div class="flex items-center gap-3 text-white">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            @guest <a href="{{ route('login') }}">Login</a>
                <i class="far fa-user"></i>
                <a href="{{ route('register') }}">Register</a> @endguest
                @auth
                <a href="{{ route('logout') }}">Logout</a>
                <i class="far fa-user"></i>
                @endauth
        </form>
        </div>
        <div class="flex items-center gap-3 text-white">
                <p>Wishlist</p>
                <i class="far fa-heart"></i>
        </div>

        <i class="text-white fas fa-shopping-cart"></i>
     </div>

   </div>

    <div class="flex flex-col items-center">
        <div class="lg:flex lg:flex-row  lg:p-8 items-center lg:gap-20 sm:flex sm:flex-col sm:gap-9">
            <div class="">
                <h1 class="hekto_text">HEKTO</h1>
            </div>

         <div class="lg:flex lg:flex-row lg:gap-40 sm:flex sm:flex-col sm:gap-5 sm:pb-4">
            <div class="lg:gap-10 lg:flex lg:flex-row lg:items-center sm:flex sm:flex-col sm:gap-5">
                <div class="flex flex-wrap items-center lg:gap-3">
                    <a href="#">Home</a><svg width="8" height="4" viewBox="0 0 10 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 0.5L5 4.5L9 0.5" stroke="#FB2E86" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <a href="#">Pages</a>
                <a href="#">Products</a>
                <a href="#">Blog</a>
                <a href="#">Shop</a>
                <a href="#">Contact</a>
            </div>   

            <div>
                <input type="text" class="search box-border max-w-xs outline-none"/>
                <button class="button"><i class="fas fa-search"></i></button>
            </div> 
         </div> 

        </div>
    </div>
    
</div>

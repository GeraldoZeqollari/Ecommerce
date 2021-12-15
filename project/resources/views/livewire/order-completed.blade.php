<div>

    <div class="flex lg:pl-96 lg:pt-28">
        <img src="{{ $image }}" width="94" height="94">
    </div>

    <div class="flex flex-col items-center lg:gap-6">
        <svg width="48" height="39" viewBox="0 0 48 39" fill="none" xmlns="http://www.w3.org/2000/svg">
           <path d="M1.31099 26.5001L14.311 37.5001C15.7293 38.7002 17.235 37.0001 17.8105 36L22.3105 30C21.8105 30.1667 22.8105 28.2 30.8105 19C40.8105 7.5 41.8105 9 46.8105 6C48.0105 2 44.9772 1 43.3105 1C42.6439 1.33333 40.8105 2.3 38.8105 3.5C33.6105 6.7 25.6439 15.1667 22.3105 19L14.311 29C13.4775 28.1667 10.6106 25.5001 5.81099 21.5001C0.610994 20.7001 0.644327 24.5001 1.31099 26.5001Z" fill="#FF1788" stroke="#FF1788"/>
        </svg>
        <h1 class="order_h1">{{$title}}</h1>     

        <p class="order_paragraph">Thank you for your order! Your order is being processed and will be completed within 3-6 </p>
        <p class="order_paragraph"> hours You will reciecve an email confirmation  when your order is completed"</p>

        <button class="shop_button lg:h-14 lg:w-52">Continue Shopping</button>
    </div>

    <div class="flex flex-col items-end lg:pr-96 lg:pt-20">
        <img src="{{ URL::to('/images/note.png') }}" width="70" height="70">
    </div>

</div>

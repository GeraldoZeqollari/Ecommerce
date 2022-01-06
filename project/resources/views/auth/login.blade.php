<head>
    <link href="{{ asset('css/page.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="px-8 py-6 mt-4 text-left bg-white shadow-lg">
            <h3 class="text-2xl font-bold text-center">Login to your account</h3>
            <form action="{{ route('login') }}" method="Post">
                @csrf
                <div class="mt-4">
                    <div>
                        <label class="block" for="email">Email<label>
                            <input type="text" placeholder="Email" name="email"
                                class=" @error('email') error-input @enderror w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                    </div>
                    <div class="mt-4">
                        <label class="block">Password<label>
                            <input type="password" placeholder="Password" name="password"
                                class=" @error('password') error-input @enderror w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                    </div>
                    <div class="flex items-baseline justify-between">
                        <input type="submit" value="Log in" class="px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900"/>
                        <a href="{{route('register')}}" class="text-blue-600 hover:underline">Join Us</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
<head>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <link href="{{ asset('css/page.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="px-8 py-6 mt-4 text-left bg-white shadow-lg">
            <form action="" method="Post" enctype="multipart/form-data">
                @csrf
                <div class="mt-4 flex flex-col items-center">
                    <div class="block w-full">
                        <label>Blog title</label>
                        <input type="text" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" name="title" required>
                    </div>

                    <div class="block mt-4">
                        <label>Blog description</label>
                         <input type="text" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" name="description" required>
                    </div>
                   
                    <div class="flex mt-4">
                         <input type="file" name="file" required>
                    </div>

                    <input type="submit" value="Create" class="px-8 py-2 mt-4 text-white bg-pink-600 rounded-lg hover:bg-pink-700"/>
                </div>
            </form>
        </div>
    </div>
</body>
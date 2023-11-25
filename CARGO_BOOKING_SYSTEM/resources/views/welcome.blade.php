<x-front-guest-layout>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900&display=swap" rel="stylesheet">

    <main class="bg-white font-montserrat">
        <header class="h-24 sm:h-32 flex items-center">
            <div class="container mx-auto px-6 sm:px-12 flex items-center justify-between">
                <div class="text-black font-black text-2xl flex items-center">
                    <span class="w-6 h-6 rounded-full bg-blue-500 mr-4"></span> CARGO BOOKING SITE
                </div>
                <div class="flex items-center">
                    <nav class="text-black text-lg hidden lg:flex items-center">

                        @if(Route::has('admin.login'))
                                <a href="{{ route('admin.login') }}" class="py-2 px-6 flex hover:text-blue-500">Admin</a>

                        @endif

                        @if (Route::has('login'))
                            @auth('front')
                                <a href="{{ url('/dashboard') }}" class="py-2 px-6 flex hover:text-blue-500">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="py-2 px-6 flex hover:text-blue-500">Log in</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 py-2 px-6 flex hover:text-blue-500">Register</a>
                                @endif
                            @endauth
                        @endif
                    </nav>
                    <button class="lg:hidden flex flex-col">
                        <span class="w-6 h-px bg-gray-900 mb-1"></span>
                        <span class="w-6 h-px bg-gray-900 mb-1"></span>
                        <span class="w-6 h-px bg-gray-900 mb-1"></span>
                    </button>
                </div>
            </div>
        </header>
        <div 
        class="bg-image d-flex justify-content-center align-items-center"
        style="
      background-image: url('https://assets.siccode.com/i-s-b/sic-code-42-motor-freight-transportation-warehousing.jpg'); 
      height: 489px ; width: 100%; no repeat"

      
      >
        <div  class="p-40 text-center bg-light"
        class="p-5 text-center bg-image"
        >
        <div
        class="text-black font-black text-5xl flex items-center"
        >
        <span class="w-6 h-6 rounded-full bg-blue-500 mr-4"></span> CARGO BOOKING MANAGEMENT SYSTEM
        </div>
        </div>
        </div>
       
    </main>

</x-front-guest-layout>

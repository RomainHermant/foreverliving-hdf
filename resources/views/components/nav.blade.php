<nav style="z-index: 999" class="shadow flex items-center justify-between lg:flex-wrap p-6 fixed bg-white w-full h-24 px-10">
    <div class="flex items-center flex-shrink-0 text-white mr-6 h-full">
        <a href="{{ route('index') }}" rel="index">
            <img src="{{asset('storage/images/logo-hdf.png')}}" class="h-12 lg:h-20">
        </a>
    </div>
    <div class="block flex-grow lg:flex lg:items-center lg:w-auto">
        <div class="text-sm lg:flex-grow text-black text-xl">
            <a href="{{ route('faq') }}" class="text-gray-800 hover:text-gray-900 rounded px-2 py-1 hover:bg-gray-200 transition-all duration-200 lg:inline-block lg:mt-0">
                FAQ
            </a>
            <!--<a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 hover:text-red-600 px-2">
                Examples
            </a>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 hover:text-red-600 px-2">
                Blog
            </a>-->
        </div>
    </div>
    <div class="flex items-center">
        <a href="#" class="inline-block mx-2">
            <img class="h-4" src="{{asset('storage/images/Flag_of_France.svg')}}" alt="">
        </a>
        /
        <a href="#" class="inline-block ml-2 mr-8">
            <img class="h-4" src="{{asset('storage/images/Flag_of_the_United_Kingdom.svg')}}" alt="">
        </a>
        <a href="#" class="inline-block text-base px-4 py-2 leading-none bg-yellow-400 text-black rounded-full hover:bg-yellow-500 lg:mt-4 lg:mt-0">MyAllonsY</a>
    </div>
</nav>

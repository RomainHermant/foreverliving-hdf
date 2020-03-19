<nav style="z-index: 999"class="flex items-center justify-between flex-wrap p-6 fixed bg-white w-full h-24 px-10">
    <div class="flex items-center flex-shrink-0 text-white mr-6 h-full">
        <a href="{{ route('index') }}" rel="index">
            <img src="{{asset('storage/images/logo-hdf.png')}}" class="h-20">
        </a>
    </div>
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
    <div class="text-sm lg:flex-grow text-black text-xl">
        <a href="{{ route('faq') }}" class="block mt-4 lg:inline-block lg:mt-0 hover:text-red-600 pl-8 pr-2">
            FAQ
        </a>
        <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 hover:text-red-600 px-2">
            Examples
        </a>
        <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 hover:text-red-600 px-2">
            Blog
        </a>
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
        <a href="#" class="inline-block text-base px-4 py-2 leading-none bg-yellow-400 text-black rounded-full hover:text-red-600 mt-4 lg:mt-0">MyAllonsY</a>
    </div>
</nav>

@include('components.nav')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Forever Living HDF</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>

    <body>
        <div  class="min-h-screen bg-gray-200">
            <div class="flex flex-wrap w-auto pt-40">
                <div class="card relative w-1/3 rounded-lg shadow-lg mx-auto" id="card">
                    <div class="h-full flex flex-col items-center justify-center">
                        <div class="flex-1 w-full flex items-center justify-center text-center">
                            <span class="text-4xl mx-5 h-20 text-gray-700">Qui sommes-nous ?</span>
                        </div>
                        <p class ="text-center">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit asperiores quasi eveniet, sapiente repellendus maxime consequatur pariatur fugiat rem aspernatur accusantium natus. Deleniti minus excepturi quisquam, architecto expedita dicta cumque!
                        </p>
                        <div class="flex-1 w-full flex items-center justify-center text-center">
                            <a class="btn bg-yellow-400 text-black rounded-full hover:text-teal-500 mt-4 lg:mt-0 text-base px-4 py-2 leading-none" :href="#">Des questions ?</a>
                        </div>
                    </div>
                </div>
                <div class="flex shadow-lg">
                    <img class="ml-auto rounded-lg" src="{{asset('storage/images/qui-sommes-nous.jpg')}}" alt="image aloe vera planté dans un champ">
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#f7fafc" fill-opacity="1" d="M0,320L1440,224L1440,320L0,320Z"></path>
            </svg>
        </div>
    </body>
</html>


<style>
    .card {
        --first: #F6E05E;
        height: 300px;
        background: white;
        border-bottom-style: solid;
        border-bottom-width: 3px;
        margin-top: 70px;
        border-bottom-color: var(--first);
    }
    .card a {
        font-size: 15px;
        background: var(--first);

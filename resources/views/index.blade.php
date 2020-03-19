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
        <div  class="bg-gray-200">
            <div class="flex flex-wrap w-auto pt-40 pb-10">
                <div class="card relative w-6/12 rounded-lg shadow-lg mx-auto bg-gray-100 px-10" id="card">
                    <div class="h-full flex flex-col items-center justify-center">
                        <div class="flex-1 w-full flex items-center justify-center text-center">
                            <span class="text-4xl mx-5 h-20 text-gray-700">Qui sommes-nous ?</span>
                        </div>
                        <p class ="text-center">
                        C'est avec une bonne dose de passion et beaucoup d'intégrité que les membres de l'entreprise
                        travaillent auprès de Rex Maughan et cela depuis de nombreuses années pour certains.

                        Nous accomplissons chaque jour nos missions en respectant les valeurs de Forever Living Products,
                        dans l'enthousiasme et l'empathie tout en cultivant l'envie d'entreprendre et l'esprit visionnaire qui
                        caractérisent Rex et ses engagements de toujours.
                        </p>
                        <div class="my-10">
                            <img class="" src="{{asset('storage/images/qui-sommes-nous-info.png')}}" alt="Background">
                        </div>
                        <div class="flex-1 w-full flex items-center justify-center text-center">
                            <a class="btn bg-yellow-400 text-black rounded-full hover:text-teal-500 mb-5 lg:mt-0 text-base px-4 py-2 leading-none" :href="#">Des questions ?</a>
                        </div>
                    </div>
                </div>
                <div class="flex shadow-lg">
                    <img class="ml-auto rounded-lg" src="{{asset('storage/images/qui-sommes-nous.jpg')}}" alt="Image d'aloe vera planté dans un champ">
                </div>
            </div>
            <!-- Background de transition -->
            <div class="w-full">
                <img class="w-full" src="{{asset('storage/images/triangle-wave.png')}}" alt="Background">
            </div>
            <!-- Fin background de transition -->
        </div>

        <!-- Bloc des sections -->
        <div class="bg-gray-100 py-10">
            <div class="text-center text-4xl mx-5 h-20 text-gray-700">
                <h1>Forever Living Products, votre allié au quotidien</h1>
            </div>
            <!-- Card notre aloe vera -->
            <div class="flex pt-10 mx-auto w-4/5">
                <div>
                    <img class="h-auto m-auto shadow-lg w-full" class="ml-auto rounded-lg" src="{{asset('storage/images/notre-aloe-index.jpg')}}" alt="Batiment de Forever Living">
                </div>
                <div class="card relative rounded-lg shadow-lg w-auto ml-5 bg-gray-200">
                    <div class="h-full flex flex-col items-center justify-center mx-10">
                        <div class="flex-1 w-full flex items-center">
                            <h3 class="text-3xl h-20 text-gray-700">Notre Aloe Vera</h3>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit asperiores quasi eveniet, sapiente repellendus maxime consequatur pariatur fugiat rem aspernatur accusantium natus. Deleniti minus excepturi quisquam, architecto expedita dicta cumque!
                        </p>
                        <div class="flex-1 w-full flex items-center text-center">
                            <a class="btn bg-yellow-400 text-black rounded-full hover:text-teal-500 mt-4 lg:mt-0 text-base px-4 py-2 leading-none" href="{{ route('faq') }}">Des questions ?</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin card notre aloe vera -->
            <!-- Card nos produits -->
            <div class="flex pt-10 mx-auto w-4/5">
                <div class="card relative rounded-lg shadow-lg w-auto mr-5 bg-gray-200">
                    <div class="h-full flex flex-col items-center justify-center mx-10">
                        <div class="flex-1 w-full flex items-center">
                            <h3 class="text-3xl h-20 text-gray-700">Nos produits</h3>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit asperiores quasi eveniet, sapiente repellendus maxime consequatur pariatur fugiat rem aspernatur accusantium natus. Deleniti minus excepturi quisquam, architecto expedita dicta cumque!
                        </p>
                        <div class="flex-1 w-full flex items-center text-center">
                            <a class="btn bg-yellow-400 text-black rounded-full hover:text-teal-500 mt-4 lg:mt-0 text-base px-4 py-2 leading-none" :href="#">Des questions ?</a>
                        </div>
                    </div>
                </div>
                <div>
                    <img class="h-auto m-auto shadow-lg w-full" class="ml-auto rounded-lg" src="{{asset('storage/images/nos-produits-index.jpg')}}" alt="Boisson à l'aloe vera de la marque Forever Living">
                </div>
            </div>
            <!-- Fin card nos produits -->
            <!-- Card nous rejoindre -->
            <div class="flex pt-10 mx-auto w-4/5">
                <div>
                    <img class="h-auto m-auto shadow-lg w-full" class="ml-auto rounded-lg" src="{{asset('storage/images/nous-rejoindre-index.jpg')}}" alt="Batiment de Forever Living">
                </div>
                <div class="card relative rounded-lg shadow-lg w-auto ml-5 bg-gray-200">
                    <div class="h-full flex flex-col items-center justify-center mx-10">
                        <div class="flex-1 w-full flex items-center">
                            <h3 class="text-3xl h-20 text-gray-700">Nous rejoindre</h3>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit asperiores quasi eveniet, sapiente repellendus maxime consequatur pariatur fugiat rem aspernatur accusantium natus. Deleniti minus excepturi quisquam, architecto expedita dicta cumque!
                        </p>
                        <div class="flex-1 w-full flex items-center text-center">
                            <a class="btn bg-yellow-400 text-black rounded-full hover:text-teal-500 mt-4 lg:mt-0 text-base px-4 py-2 leading-none" :href="#">Des questions ?</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin card nous rejoindre -->
        </div>
        <!-- Fin bloc des sections -->
        <!-- Footer -->
            <div class="bg-gray-200 p-10">
                <p class="text-center">© Copyright ForeverLiving - Tous droits reservés</p>
            </div>
        <!-- Fin footer -->
    </body>
</html>

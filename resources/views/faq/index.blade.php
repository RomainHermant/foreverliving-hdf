@extends('layouts.app')

@section('content')
    <style>
        .active {
            border-bottom: none;
        }

    </style>

    <div class="text-center">
        <h2 class="text-3xl mb-4">Foire aux questions</h2>
    </div>

    <hr class="border-2 border-gray-400">

    @foreach($faqs as $faq)
        <button class="accordion outline-none text-xl text-gray-800 w-full text-left border-b-2 border-gray-400 px-3 py-4">
            {{ $faq->question }}
        </button>
        <div class="panel hidden w-full px-3 pb-4 border-b-2 border-gray-400 text-gray-600">
            <p>{{ $faq->reponse }}</p>
        </div>
    @endforeach

    <script>
        let acc = document.getElementsByClassName("accordion");
        let i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                let panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
    </script>

@endsection

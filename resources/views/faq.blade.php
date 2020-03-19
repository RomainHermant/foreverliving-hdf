@extends('layouts.app')

@section('content')
    <style>
        .accordion {
            background-color: #eee;
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
        }

        .active, .accordion:hover {
            background-color: #ccc;
        }

        .panel {
            padding: 0 18px;
            display: none;
            background-color: white;
            overflow: hidden;
            width: 100%;
        }
    </style>

    <h2 class="text-2xl">Foire aux questions</h2>

    @foreach($faqs as $faq)
    <button class="accordion">{{ $faq->question }}</button>
    <div class="panel">
        <p>{{ $faq->reponse }}</p>
    </div>
    @endforeach

    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
    </script>

@endsection

@extends('auth.admin.layouts.app')

@section('content')

    <div class="w-full max-w-lg mx-auto">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ route('update.faq') }}" method="POST">

            @csrf

            <input type="hidden" name="id" id="id" value="{{ $faq->id }}">

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="question">Question : </label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="question" id="question" rows=6 required>{{ $faq->question }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="reponse">Réponse : </label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="reponse" id="reponse" rows=6 required>{{ $faq->reponse }}</textarea>
            </div>

            <div class="mb-4">
                <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" value="Modifier">
            </div>

        </form>
    </div>
@endsection

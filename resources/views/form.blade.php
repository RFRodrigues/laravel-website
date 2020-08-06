@extends ('layout')

@section ('header')





@endsection

@section ('content')
<div class="absolute inset-0 flex items-center justify-center bg-gray-300">
    <form action="/form/submit" method="POST">
        @csrf
        <p class="text-center">Olá {{ $name ?? 'Utilizador anónimo' }}</p>
        <input type="number" min="0" name="age" placeholder="Insert age">
        <input class="my-2" type="email" name="email" placeholder="Insert email">
        <div class="text-center"><input type="submit" value="Submit"></div>
    </form>
</div>

@endsection
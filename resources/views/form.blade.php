@extends ('layout')

@section ('header')


<p>Olá {{ $name ?? 'Utilizador anónimo' }}</p>


@endsection

@section ('content')

<form action="/form/submit" method="POST">
    @csrf
    <input class="block" type="number" min="0" name="age" placeholder="Insert your age">
    <input class="block" type="email" name="email" placeholder="Insert your email">
    <input class="block" type="submit" value="Submit">
</form>

@endsection
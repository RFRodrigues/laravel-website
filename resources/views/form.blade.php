@extends ('layout')

@section ('header')





@stop

@section ('content')
@foreach($errors->all() as $error)
<p>{{ $error }}</p>
@endforeach
<div class="absolute inset-0 flex items-center justify-center bg-gray-300">
    <form action="/form/submit" method="POST">
        @csrf
        <p class="text-center">Olá {{ $name ?? 'Utilizador anónimo' }}</p>
        <input type="number" min="0" name="age" placeholder="Insert age">
        @error('age') <p class="text-red-600 font-bold">{{ $message }}</p> @enderror
        <pre>{{old('email')}}</pre>
        <input class="my-2 {{ $errors->has('email') ? 'border-solid border-4 border-red-600' : '' }}" type="text" name="email" placeholder="Insert email" value="{{ old('email') }}">
        @error('email') <p class="text-red-600 font-bold">{{ $message }}</p> @enderror
        <div class="text-center"><input type="submit" value="Submit"></div>
    </form>
</div>

@stop
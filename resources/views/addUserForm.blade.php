@extends ('layout')


@section ('content')
<div class="absolute inset-0 flex items-center justify-center bg-gray-300">
    <form action="/form" method="get">
        <div >
            <input class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal" type="text" name="name" placeholder="Insert name">
        </div>
        <div class="flex justify-center">
            <input type="submit" id="submit" value="Submit">
        </div>
    </form>
</div>

@stop
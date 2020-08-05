@extends ('layout')


@section ('content')

        <form action="/form" method="get">
            <div class="block">
                <input class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal" type="text" name="name" placeholder="Insert your name">
            </div>
            <div class="block">
                <input type="submit" id="submit" value="Submit">
            </div>
        </form>

@endsection
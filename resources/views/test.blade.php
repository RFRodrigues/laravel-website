<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                
                {{ $view }}

                <p>
                    Hello: <b>{{ $name ?? 'asd' }}</b>
                </p>
                
            </div>
        </div>
    </body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        
    </head>
    <body>
        <h1>Task: {{ $emps -> count() }}</h1>
        <ul>
            @foreach ($emps as $emp)
            <li>
                {{ $emp -> name }} {{ $emp -> desc}}:
                {{ $emp -> employee() -> count() }}
                <ul>
                  <li>
                    {{ $emp -> employee -> name}}
                  </li>
                </ul>
                
            </li>
            @endforeach
        </ul>
    </body>
</html>

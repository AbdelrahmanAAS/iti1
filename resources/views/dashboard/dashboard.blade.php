@if (Auth::check())
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Dashboard</title>

        <head>
            <link href="{{ asset('assets/css/login.css') }}" rel="stylesheet">
            @include('admin.head')
        </head>

    <body>
        <header>
            @include('admin.header')
        </header>
        @include('dashboard.layout.aside')
        @include('dashboard.layout.index')
       
    </body>

    </html>
@else
@endif

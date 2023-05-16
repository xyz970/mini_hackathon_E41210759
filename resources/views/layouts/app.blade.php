<!DOCTYPE html>
{{-- app()->getLocale() untuk mengambil settingan bahasa sesuai dengan bahasa yang digunakan oleh laravel --}}
<html lang="{{str_replace('_','-',app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>{{config('app.name')}}</title> app.name mengambil settingan APP_NAME di .env --}}
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            @yield('content')
        </div>
    </div>
</body>
</html>
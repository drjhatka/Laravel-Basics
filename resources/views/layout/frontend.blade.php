<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('partials.css')
    @include('partials.js')
</head>
<body>
    <div class="row">
            @include('partials.header')

        <div class="col m12">
            @yield('content')
        </div>
    </div>
</body>
</html>

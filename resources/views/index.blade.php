<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Enes Doğan - Jr. Software Developer | Computer Engineering Student at Manisa Celal Bayar University. This is a portfolio website" />
    <meta name="keywords" content="Portfolio, Enes Doğan,Enes,Doğan,web" />
    <meta name="author" content="Enes Doğan" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('scss/style.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>Enes Doğan - Jr. Software Developer</title>
</head>

<body>
    @include('header')
    <div class="container-fluid">
        @include('about')
        @include('projects')
        @include('contact')
        @include('footer')
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>

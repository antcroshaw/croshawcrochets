<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Frontend Bootcamp</title>
</head>
<body>
    <script src=" {{ asset('js/bootstrap.bundle.min.js') }}"></script>

    {{ $slot }} 
</body>



<footer>

</footer>
</html>
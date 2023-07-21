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
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            <a href="#" class="navbar-brand">Croshaw Crochets</a>

            <button class="navbar-toggler" type="buttono" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="#learn" class="nav-link">What You'll Learn</a>
                    </li>
                    <li class="nav-item"><a href="#questions" class="nav-link">Questions</a>
                    </li>
                    <li class="nav-item"><a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{ $slot }} 
</body>



<footer>

</footer>
</html>
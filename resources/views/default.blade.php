<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <script src="/js/main.js" defer></script>
    <title>@yield('title')</title>
</head>

<body>
    <header class="header">
        <nav class="navbar">
        <a href="/pets" class="navbar__logo">PassenOpJeDier</a>
            <ul class="navbar__list" id="js--navbar__list">
                <li class="u-list-style-none "><a class="navbar__link" href="/applications/received">Applications</a></li>
                <li class="u-list-style-none "><a class="navbar__link" href="/pets/create">Add pet</a></li>
                <li class="u-list-style-none "><a class="navbar__link__profile" href="/users/{{ Auth::user()->id }}">Profile</a></li>
            </ul>
            <ul class="navbar__list__icons" id="js--navbar__list">
                <li class="u-list-style-none navbar__link"><a href="/applications/received"><span class="material-icons hidden" id="js--menuicon">feed</span></a></li>
                <li class="u-list-style-none navbar__link"><a href="/pets/create"><span class="material-icons hidden" id="js--menuicon">pets</span></a></li>
                <li class="u-list-style-none navbar__link"><a href="/users/{{ Auth::user()->id }}"><span class="material-icons hidden" id="js--menuicon">person</span></a></li>
            </ul>
        </nav>
    </header>
    @yield('content')
</body>
</html>
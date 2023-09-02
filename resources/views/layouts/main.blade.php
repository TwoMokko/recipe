<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <title>Document</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container">
                    <a class="navbar-brand" href="{{route('main.index')}}">LOGO</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Переключатель навигации">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{route('main.index')}}">Главная</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('recipe.index')}}">Рецепты</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            {{--                    <nav>--}}
            {{--                        <ul>--}}
            {{--                            <li><a href= "{{route('main.index')}}">Main</a></li>--}}
            {{--                            <li><a href= "{{route('recipe.index')}}">Recipes</a></li>--}}
            {{--                        </ul>--}}
            {{--                    </nav>--}}
        </header>
        <main class="container py-5">
            @yield('content')
        </main>
        <footer></footer>
    </body>
</html>

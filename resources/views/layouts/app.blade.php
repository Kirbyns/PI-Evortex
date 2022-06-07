<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <title>E-Vortex</title>
</head>

<body style="background-color: #051022">
    <div  class="bg-image" style="background-image:url(https://static.tibia.com/images/global/header/background-artwork.jpg);background-repeat: repeat-x" >
        <header>
            <nav class="navbar navbar-expand-md navbar navbar-dark bg-dark shadow-sm">
                <div class="container-fluid">
                    <ul class="navbar-nav me-auto mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('product.index') }}">
                                Produto
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('product.trash') }}">
                                Lixeira Produto
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('category.index') }}">
                                Categorias
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('category.trash') }}">
                                Lixeira Categorias
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('tag.index') }}">
                                Tag
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('tag.trash') }}">
                                Lixeira Tag
                            </a>
                        </li>
                        <li class="ms-auto">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <main>
            <div>
                {{ session()->get('success') }}
            </div>
            <section>
                @yield('content')
            </section>
        </main>
    </div>

</body>

</html>

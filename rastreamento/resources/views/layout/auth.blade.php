<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rastreamento</title>

    <style>
        .navbar {
            height: 80px;
            background-color: #f1f1f1;
        }

        footer {
            height: 50px;
            background-color: #f1f1f1;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .fimdoconteudo {
            margin-bottom: 100px;
        }
    </style>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <nav class="d-flex justify-content-between align-items-center navbar px-2 mb-5">
        <div>Rastreamento</div>
        <div>
            <form action="/logout" method="POST">
                @csrf
                <button class="btn btn-link">Logout</button>
            </form>
        </div>
    </nav>

    <div class="container fimdoconteudo">
        <div class="row">
            <div class="col-4">
                <ul>
                    <li><a href="/admin">Listagem de Produtos</a></li>
                    <li><a href="/admin/produto/create">Criação de Produto</a></li>
                    <li><hr></li>
                    <li><a href="/admin/categoria">Listagem de Categorias</a></li>
                    <li><a href="/admin/categoria/create">Criação de Categoria</a></li>
                </ul>
            </div>
            <div class="col">@yield('conteudo')</div>
        </div>
    </div>

    <footer class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <strong>Este é um footer</strong>
                </div>
            </div>
        </div>
    </footer>

    @yield('js')

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

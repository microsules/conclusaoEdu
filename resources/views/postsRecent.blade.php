<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('title', 'Postagensss')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
    <main class="container mt-3 bg-white">
        
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-hover table-bordered">
                    <tr>
                        <th>Nome</th>
                        <th>Categoria</th>
                        <th>Resumo</th>
                    </tr>
                    @foreach($posts as $post)
                        @if($post->active)
                        <tr>
                        @else
                        <tr class="table-secondary">
                        @endif
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->category->name }}</td>
                            <td>{{ $post->summary }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </main>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    
</body>
</html>

    
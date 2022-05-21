
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Últimas postagens</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
    <main class="container containerListas col-12">
        <div class="col-1">
            <form action="{{ route('postagens') }}" method="POST">
                {{ csrf_field() }}
            <button type="submit" class="btn btn-block btn-success">
                Login
            </button>
        </div>
        @foreach($posts as $post)
            @if($post->active)
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-5 justify-content-center">
                                <h1 class="text-dark font-weight-bold">{{ $post->title }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h3 class="text-dark font-weight-bold">{{ $post->text }}</h3>
                </div>
            </div>
            @endif
        @endforeach
        
        
    </main>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    
</body>
</html>

    
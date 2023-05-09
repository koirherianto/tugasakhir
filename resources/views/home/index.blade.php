@extends('layouts.app')

@section('content')

    <head>
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
        <link rel="stylesheet" type="text/css" href="css/mindmap1.css" />
    </head>

    <body>
        <div class="container-fluid">
            <div class="topic container mt-5">
                <?php $a = 242; ?>
                TRPL
                <ul class="ul-mindmap">
                    @foreach ($mindmaps as $mindmap)
                        <li
                            style="background:rgb({{ $mindmap->red }}, {{ $mindmap->green }}, {{ $mindmap->blue }}); ::after{ border-color:gray; }">
                            {{ $mindmap->judul }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </body>
@endsection

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>To-Do</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
            crossorigin="anonymous"
        />
    </head>
    <body>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4 mt-5">MY STORAGE</h1>
                <p class="lead">Welcome to your storage management!</p>
            </div>
        </div>

        <div class="container mt-5">
            <a href="/item/add" class="btn btn-primary" type="submit">
                Add New Item
            </a>
            <br>
            <br>

            <a href="/" class="btn bg-warning" type="submit">
                STORAGE
            </a>

            <a href="/item/furniture" class="btn bg-success text-white" type="submit">
                Furniture
            </a>

            <a href="/item/fnb" class="btn bg-success text-white" type="submit">
                FnB
            </a>

            <a href="/item/elect" class="btn bg-success text-white" type="submit">
                Electronic
            </a>

            <a href="/item/any" class="btn bg-success text-white" type="submit">
                Anything else
            </a>

            <div class="d-flex flex-wrap align-content-start mt-5">

            @foreach ($items as $item)
                    <div class="card mb-4 me-4" style="width: 18rem">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="h5 card-title">{{ $item->name }} - {{ $item->category->category }}</div>

                                @if ($item->amount > 50)
                                    <div>
                                        <div class="rounded p-1 bg-success text-white">
                                            Safe
                                        </div>
                                    </div>
                                @elseif ($item->amount >= 5)
                                    <div>
                                        <div class="rounded p-1 bg-warning text-dark">
                                            Enough
                                        </div>
                                    </div>
                                @else
                                    <div>
                                        <div class="rounded p-1 bg-danger text-white">
                                            Refill!!!
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <p class="card-text">
                                {{ $item->amount }}
                            </p>

                            <div class="mt-3 d-flex">
                                <form method="POST" action="{{"/item/{$item->id}/delete"}}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-primary"> Done </button>
                                </form>

                                <a
                                href="{{"/item/{$item->id}/edit"}}"
                                    class="btn btn-warning ms-2"
                                    >Edit</a
                                >
                            </div>
                        </div>
                    </div>
            @endforeach

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"
        ></script>
    </body>
</html>

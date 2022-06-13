<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Edit Item</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
            crossorigin="anonymous"
        />
    </head>
    <body>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-3">
                    <form method="post" action="{{"/item/{$item->id}/update"}}">
                        @csrf
                        @method('patch')
                        <h3 class="mb-3">Edit Item</h3>
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input
                                type="text"
                                class="form-control"
                                id="title"
                                name="name"
                                value="{{$item->name}}"
                            />
                        </div>
                        <div class="mb-3">
                            <label for="details" class="form-label"
                                >Amount</label
                            >
                            <textarea
                                name="amount"
                                id="details"
                                cols="30"
                                rows="2"
                                class="form-control"
                            >{{$item->amount}}</textarea
                            >
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">
                                Category
                            </label>
                            <select
                                name="category_id"
                                id="category"
                                class="form-select"
                            >
                                <option value="1" @if($item->category->category === 'Furniture') selected @endif>Furniture</option>
                                <option value="2" @if($item->category->category === 'Food n Beverages') selected @endif>Food n Beverages</option>
                                <option value="3" @if($item->category->category === 'Electronic') selected @endif>Electronic</option>
                                <option value="4" @if($item->category->category === 'Anything else') selected @endif>Anything else</option>
                            </select>
                        </div>
                        <div class="row justify-content-center">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"
        ></script>
    </body>
</html>

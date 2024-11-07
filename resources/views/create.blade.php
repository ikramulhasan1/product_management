<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center mt-3">Product Create</h1>
    <section class="container my-3">
        <div class=" m-auto d-flex justify-content-center">
            <div class="shadow p-3 rounded">
                <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Name" id="name" aria-describedby="name">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="description" class="form-control" placeholder="Description" id="description" aria-describedby="description">
                    </div>

                    <div class="mb-3">
                        <input type="text" name="price" placeholder="Price" class="form-control" id="price" aria-describedby="price">
                    </div>

                    <div class="mb-3">
                        <input type="number" name="stock" placeholder="Stock" class="form-control" id="stock" aria-describedby="stock">
                    </div>

                    <div class="mb-3">
                        <input type="file" name="image" class="form-control" id="image" aria-describedby="image">
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm rounded-0 ">Submit</button>
                </form>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
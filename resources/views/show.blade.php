<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <h1 class="text-center mt-3">Products</h1>
    <section class="container my-3">

        <div class=" m-auto d-flex justify-content-center">
            <div class="shadow p-3 rounded">
                <div class="row my-2">
                    <form class="form-inline my-2 my-lg-0">
                        <div class="d-flex ">
                            <div class="col-4">
                                <a href="{{route('product.index')}}" class="btn btn-primary btn-sm me-2">Back</a>
                            </div>

                        </div>
                    </form>
                </div>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Product Id</th>
                            <td scope="row">{{$product->product_id}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Name</th>
                            <td>{{$product->name}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Description</th>
                            <td>{{$product->description}}</td>

                        </tr>
                        <tr>
                            <th scope="col">Stock</th>
                            <td>{{$product->stock}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Price</th>
                            <td>{{$product->price}}</td>

                        </tr>
                        <tr >
                            <th scope="col" colspan="5">Image</th>
                        </tr>
                    </thead>
                    <tbody>


                        <tr>
                            <td colspan="5">
                                @if ($product->image)
                                <img src="{{ asset($product->image) }}" alt="Product Image" width="400" height="250">
                                @else
                                No Image
                                @endif
                            </td>

                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
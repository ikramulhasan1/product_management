<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Create</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                                <a href="{{route('product.create')}}" class="btn btn-primary btn-sm me-2">Create</a>
                            </div>
                            <div class="col-8 d-flex">
                                <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </div>
                        </div>
                    </form>

                    <!-- Sorting links -->


                </div>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Serial No.</th>
                            <th scope="col">Product Id</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name
                                <a href="{{ url('/product?sort=name&direction=asc') }}"><i class="fa-solid fa-sort-up"></i></a>
                                <a href="{{ url('/product?sort=name&direction=desc') }}"><i class="fa-solid fa-sort-down"></i></a>
                            </th>
                            <th scope="col">Price
                                <a href="{{ url('/product?sort=price&direction=asc') }}"><i class="fa-solid fa-sort-up"></i></a>
                                <a href="{{ url('/product?sort=price&direction=desc') }}"><i class="fa-solid fa-sort-down"></i></a>
                            </th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($products as $key => $product)
                        <tr>
                            <th scope="row">{{$products->firstItem()+$key}}</th>
                            <th scope="row">{{$product->product_id}}</th>
                            <td>
                                @if ($product->image)
                                <img src="{{ asset($product->image) }}" alt="Product Image" width="50" height="50">
                                @else
                                No Image
                                @endif
                            </td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}</td>
                            <td class="d-flex gap-1">
                                <a href="{{route('product.show', $product->id)}}" class="btn btn-sm btn-primary rounded-0">Show</a>
                                <a href="{{route('product.edit', $product->id)}}" class="btn btn-sm btn-warning rounded-0">Edit</a>
                                <form action="{{route('product.destroy',$product->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger rounded-0">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $products->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
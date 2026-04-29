<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <div class="container pt-5">

            <div
                class="table-responsive"
            >
                <table
                    class="table table-primary"
                >
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">User Name</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Color</th>
                            <th scope="col">Size</th>
                        </tr>
                    </thead>
                    <tbody>
                    {{-- @foreach ($products as $product)
                            <tr>
                                <th scope="row">{{ $product->id }}</th>
                                <th>{{ $product->user->name }}</th>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->brand->name }}</td>
                                <td>
                                    @foreach ($product->attributes as $attribute)
                                        <span class="badge bg-primary">
                                            {{ $attribute->name }}
                                        </span>
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach --}}

                        @foreach ($products as $product)
    <tr>
        <td>{{ $product->name }}</td>

        <td>
            @foreach ($product->attributes as $attribute)

                <div>
                    <strong>{{ $attribute->name }}:</strong>

                    @foreach ($attribute->values as $value)
                        <span class="px-2 py-1 text-xs bg-gray-200 rounded">
                            {{ $value->value }}
                        </span>
                    @endforeach
                </div>

            @endforeach
        </td>
    </tr>
@endforeach

                    </tbody>
                </table>
            </div>



        </div>



        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producten overzicht</title>
</head>
<body>
    <h1>Producten overzicht</h1>

    @if($products->isEmpty())
        <p>Geen producten gevonden.</p>
    @else
        @foreach($products as $product)
            <div>
            <h2><a href="/products/{{ $product->id }}">{{ $product->name }}</a></h2>
                <p>{{ $product->description }}</p>
                <p>Categorie: {{ $product->category->name ?? 'Onbekend' }}</p>
            </div>
        @endforeach
    @endif
</body>
</html>
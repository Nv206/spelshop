<x-layout title="Product detail">
    <x-panel title="Categorie informatie" class="category-panel" id="category-panel">
        <p><strong>Categorie:</strong> {{ $category->name }}</p>
        <p><strong>Beschrijving:</strong> {{ $category->description }}</p>
        <h2>Producten in deze categorie</h2>
        @if($category->products->isEmpty())
            <p>Er zijn nog geen producten in deze categorie.</p>
        @else
            <ul>
                @foreach($category->products as $product)
                    <li>
                        <a href="/products/{{ $product->id }}">{{ $product->name }}</a>
                    </li>
                @endforeach
            </ul>
        @endif
    </x-panel>

    <a href="/categories">Terug naar alle categorieen</a>
</x-layout> 


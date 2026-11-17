<x-layout title="Product detail">
    <x-panel title="Product informatie" class="product-panel" id="product-panel">
        <h2>Andere producten in deze categorie</h2>

        @php
            $relatedProducts = $product->category?->products->where('id', '!=', $product->id);
        @endphp

        @if($relatedProducts && $relatedProducts->isNotEmpty())
            <ul>
                @foreach($relatedProducts as $relatedProduct)
                    <li>
                        <a href="/products/{{ $relatedProduct->id }}">{{ $relatedProduct->name }}</a>
                    </li>
                @endforeach
            </ul>
        @else
            <p>Geen andere producten in deze categorie.</p>
        @endif
        <p><strong>Naam:</strong> {{ $product->name }}</p>
        <p><strong>Beschrijving:</strong> {{ $product->description }}</p>
        <p><strong>Categorie:</strong> {{ $product->category->name ?? 'Onbekend' }}</p>
    </x-panel>

    <a href="/products">Terug naar alle producten</a>
</x-layout>
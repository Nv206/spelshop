<x-layout title="Product detail">
    <x-panel title="Product informatie" class="product-panel" id="product-panel">
        <p><strong>Naam:</strong> {{ $product->name }}</p>
        <p><strong>Beschrijving:</strong> {{ $product->description }}</p>
        <p><strong>Categorie:</strong> {{ $product->category->name ?? 'Onbekend' }}</p>
    </x-panel>

    <a href="/products">Terug naar alle producten</a>
</x-layout>
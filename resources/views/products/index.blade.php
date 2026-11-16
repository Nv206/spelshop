<x-layout title="Producten overzicht">
    <h1>Producten overzicht</h1>

    @if($products->isEmpty())
        <p>Geen producten gevonden.</p>
    @else
        @foreach($products as $product)
            <x-panel title="{{ $product->name }}" class="product-panel">
                <p>{{ $product->description }}</p>
                <p>Categorie: {{ $product->category->name ?? 'Onbekend' }}</p>
                <h2><a href="/products/{{ $product->id }}">{{ $product->name }}</a></h2>
            </x-panel>
        @endforeach
    @endif
</x-layout>
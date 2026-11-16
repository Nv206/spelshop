<x-layout title="Product detail">
    <x-panel title="Categorie informatie" class="category-panel" id="category-panel">
        <p><strong>Categorie:</strong> {{ $category->name }}</p>
        <p><strong>Beschrijving:</strong> {{ $category->description }}</p>
    </x-panel>

    <a href="/categories">Terug naar alle categorieen</a>
</x-layout> 
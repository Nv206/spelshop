<x-layout title="Categorieen overzicht">
    <h1>Categorieen overzicht</h1>

    @if($categories->isEmpty())
        <p>Geen categorieen gevonden.</p>
    @else
        @foreach($categories as $category)
            <x-panel title="{{ $category->name }}" class="category-panel">
                <p>{{ $category->description }}</p>
                <a href="/categories/{{ $category->id }}">Bekijk details</a>
            </x-panel>
        @endforeach
    @endif
</x-layout>
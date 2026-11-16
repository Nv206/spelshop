<div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorieën overzicht</title>
</head>
<body>
    <h1>Categorieën overzicht</h1>
    
    @if($categories->isEmpty())
        <p>Geen categorieën gevonden.</p>
    @else
        <div class="categories-list">
            @foreach($categories as $category)
                <div class="category-item">
                <h2><a href="/categories/{{ $category->id }}">{{ $category->name }}</a></h2>
                <p>{{ $category->description }}</p>
                </div>
            @endforeach
        </div>
    @endif
</body>
</html>
</div>

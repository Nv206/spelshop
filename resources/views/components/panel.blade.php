@props(['title' => 'Info'])

<section {{ $attributes->merge(['class' => 'panel']) }}>
    <h2>{{ $title }}</h2>
    <div>
        {{ $slot }}
    </div>
</section>
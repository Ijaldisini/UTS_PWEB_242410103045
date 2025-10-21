@props(['title' => 'Judul'])

<div {{ $attributes->merge(['class' => 'card mb-3']) }}>
    <div class="card-body">
        @if($title)
        <h5 class="card-title">{{ $title }}</h5>
        @endif
        {{ $slot }}
    </div>
</div>
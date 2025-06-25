@if ($rating)
    @for ($i=1; $i<=5; $i++)
        <span class="text-xl">{{ $i <= round($rating) ? '★' : '☆' }}</span>
    @endfor
@else
@endif

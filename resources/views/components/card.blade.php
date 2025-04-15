@props(["photo" => "", "designation" => "", "ttc" => "", "ableToAdd" => true])
<div>
    <img src="{{ $photo }}" alt="">
    <p>{{ $designation }}</p>
    <p>{{ $ttc }} $</p>
    @if ($ableToAdd)
        <button wire:click="addToCart({{ $designation }})"><i class="bi bi-bag-plus"></i></button>
    @else
        <button><i class="bi bi-bag-plus"></i></button>
    @endif
</div>
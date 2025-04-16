<div class="w-2/5 h-screen bg-white border-r shadow-md p-4">
    <h2 class="text-xl font-bold mb-4">Cart</h2>
    {{-- Example cart display --}}
    <ul>
        @foreach ($cartItems as $item)
            <li class="flex justify-between mb-2">
                <span>{{ $item['designation'] }}</span>
                <span>{{ $item['ttc'] }} $</span>
            </li>
        @endforeach
    </ul>
</div>

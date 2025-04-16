@props(["photo" => "", "designation" => "", "ttc" => "", "ableToAdd" => true])

<div class="w-48 bg-white rounded-xl shadow-md m-2 text-center">
    <img src="{{ asset($photo) }}" alt="{{ $designation }}" class="w-full h-32 object-cover rounded">
    <p class="mt-2 font-bold text-gray-800 my-2">{{ $designation }}</p>
    <p class="text-green-600 font-semibold">{{ $ttc }} $</p>

<div class="w-full text-center flex justify-center my-3">

        @if ($ableToAdd)
        <button
        wire:click="$emit('addToCart', '{{ $designation }}')"
        class="mt-2 w-12 h-12 flex items-center justify-center rounded-full bg-blue-100 text-blue-600 hover:bg-blue-200 hover:text-blue-800 transition duration-200 shadow"
        title="Add to Cart"
    >
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
             class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
            <path
                d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 
                2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 
                .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 
                0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 
                1 1-2 0 1 1 0 0 1 2 0M9 5.5V7h1.5a.5.5 0 0 1 0 
                1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 
                0 0 1 1 0" />
        </svg>
    </button>
@else
    <button
        class="mt-2 w-12 h-12 flex items-center justify-center rounded-full bg-gray-200 text-gray-400 cursor-not-allowed"
        title="Unavailable"
    >
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
             class="bi bi-cart-x-fill" viewBox="0 0 16 16">
            <path
                d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 
                0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 
                0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 
                0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 
                1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 
                1 2 0M7.354 5.646 8.5 6.793l1.146-1.147a.5.5 0 0 1 
                .708.708L9.207 7.5l1.147 1.146a.5.5 0 0 1-.708.708L8.5 
                8.207 7.354 9.354a.5.5 0 1 1-.708-.708L7.793 7.5 6.646 
                6.354a.5.5 0 1 1 .708-.708" />
        </svg>
    </button>
@endif
</div>

</div>

<div class="w-3/5 h-screen  p-4 overflow-y-auto relative">
    <div class="mb-4 bg-white shadow-md rounded-xl fixed w-[850px]">
        <input type="search" wire:model.live="searchKey" placeholder="Search..." class=" border border-blue-300 w-3/4 pl-10 p-2 m-4 rounded-full shadow-sm bg-gray-100">
    </div>

    <div class=" p-3 overscroll-x-auto mt-[80px]">
        <button wire:click="setFamilleId(null)" class="bg-gray-200 hover:bg-gray-300  p-2 px-4 shadow-2xl rounded m-4">All</button>
        @foreach ($familles as $f)
            <button wire:click="setFamilleId({{$f->id}})" class=" hover:bg-gray-300  p-2 px-4 rounded shadow-2xl bg-blue-500"> {{$f->famille}} </button>
        @endforeach
    </div>

{{-- {{$famille_id}} --}}
    <div class="flex flex-wrap justify-start">
        @foreach ($articles as $article)

        @php
        $photoPath = file_exists(public_path($article->photo))
            ? asset($article->photo)
            : asset('storage/ArticlesImages/no_image.jpg');
        $ableToAdd = $article->stock == 0 ? 0 : 1;
        @endphp
            <x-card
                :photo="$photoPath"
                :designation="$article->designation"
                :ttc="number_format($article->prix_ht * (1 + $article->tva / 100), 2)"
                :ableToAdd="$ableToAdd"
            />
        @endforeach
    </div>
</div>

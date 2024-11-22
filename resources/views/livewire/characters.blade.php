<div class="p-20">
    <h1 class="mb-10 text-5xl">Personagens</h1>

    <div class="grid grid-cols-4 gap-8">
        @foreach ($sheets as $sheet)
        <a href="" class="grid grid-cols-4 bg-black">
            <img src="
            @if ($sheet->image != "")
            {{ $sheet->image }}
            @else
            img/user_image.png
            @endif
            ">

            <div class="p-3">
                <p class="text-2xl">{{ $sheet->name }}</p>
                <p class="pl-0.5 text-sm">{{ $sheet->archetype }}</p>
            </div>
        </a>
        @endforeach
    </div>
</div>
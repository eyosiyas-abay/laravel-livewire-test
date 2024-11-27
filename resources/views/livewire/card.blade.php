<div class="text-[#353844] flex overflow-hidden rounded-[8px] max-[525px]:flex-col">
    <div class="w-[184px] min-w-[184px] max-[525px]:w-full max-[525px]:bg-white max-[525px]:h-[180px]">
        @foreach ($images as $image)
            <img src="{{ asset($image) }}" alt="" class="object-cover min-w-full min-h-full h-full">
        @endforeach
    </div>

    <div class="flex-1 bg-white pt-[40px] px-[34px] max-[525px]:p-[34px]">
        <h3 class="text-2xl font-[700]">{{ $title }}</h3>

        <ul class="text-[15px] font-[700] my-3">
            @foreach ($bullet_points as $bullet_point)
                <li class="flex items-center gap-3 leading-[26px]">
                    <span class="flex w-2 h-2 bg-[#D2AD81] rounded-full"></span>
                    {{ $bullet_point }}
                </li>
            @endforeach
        </ul>

        <p class="leading-[24px]">{{ $description }}</p>
    </div>

</div>

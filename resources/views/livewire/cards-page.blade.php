<div class="flex items-center flex-col my-[108px] max-[840px]:my-10 max-[840px]:px-10">
    <h1 class="text-[52px] font-bold w-[730px] max-[840px]:w-auto text-center text-[#1B264F] leading-[55px]">We make
        creative media that
        <span class="text-[#506BCA]">adds
            value</span>
    </h1>

    <section
        class="my-[80px] grid grid-cols-3 gap-[30px] mx-[84px] max-[840px]:mx-0 max-[1525px]:grid-cols-2 max-[1065px]:grid-cols-1">
        @foreach ($cards as $card)
            @livewire('card', ['images' => $card['images'], 'bullet_points' => $card['bullet_points'], 'title' => $card['title'], 'description' => $card['description']], key($card['title']))
        @endforeach
    </section>

    <button
        class="w-[315px] h-[60px] flex items-center justify-center bg-[#1B264F] rounded-[12px] text-[17px] text-white font-[700]">GET
        STARTED</button>
</div>

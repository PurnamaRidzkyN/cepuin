<div class="container flex flex-col gap-5 border-t border-secondary-200">
    {{-- profile info --}}
    <div class="flex lg:items-center items-start gap-2.5">
        <a href="/profile" class="shrink-0">
            <img src="{{ asset('assets/images/frieren.jpg') }}" class="size-12 rounded-full object-cover" alt="profile">
        </a>
        <div class="flex gap-2 flex-col font-medium w-full">
            <div class="flex justify-between gap-2 items-center">
                <div class="flex items-center gap-3">
                    <div class="flex flex-col lg:flex-row items-start lg:items-center lg:gap-2 lg:text-500 gap-0">
                        <a href="/" class="font-semibold hover:underline">Bapak Mulyono</a>
                        <a href="/" class="text-secondary-100 text-500 hover:underline">@mulyonoganteng123</a>
                    </div>
                </div>

                <button class="{{ config('constants.icon.more') }} size-[24px] cursor-pointer"></button>
            </div>
            <div class="flex gap-2 items-center">
                <h2 class="text-secondary-100 text-500">1 menit</h2>
                <a href="/" class="bg-primary-400 font-bold text-500 px-2 py-1 rounded-md w-fit">Pendidikan</a>
            </div>
        </div>
    </div>

    {{-- caption --}}
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, laborum?</p>

    {{-- votes --}}
    <div class="flex justify-between text-500 lg:text-400">
        <div class="flex lg:gap-3 gap-1 items-center">
            {{-- upvote --}}
            <button class="flex text-[#4BA767] font-bold cursor-pointer">
                <span class="{{ config('constants.icon.arrow') }} size-6">
                </span>
                <p>1k</p>
            </button>
            {{-- downvote --}}
            <button class="flex text-[#D24D4D] font-bold cursor-pointer">
                <span class="{{ config('constants.icon.arrow') }} size-6 rotate-180">
                </span>
                <p>388</p>
            </button>
            {{-- comment --}}
            <button class="flex gap-1 text-[#8B5FC4] font-bold cursor-pointer">
                <span class="{{ config('constants.icon.comment') }} size-6">
                </span>
                <p>69</p>
            </button>
            {{-- location --}}
            <button class="flex text-secondary-100 cursor-pointer font-medium">
                <span class="{{ config('constants.icon.location') }} size-6">
                </span>
                <p>Pandaan</p>
            </button>

        </div>
        <button class="cursor-pointer">
            <span class="{{ config('constants.icon.share') }} size-6 text-secondary-200"></span>
        </button>
    </div>
</div>

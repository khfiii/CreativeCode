<div class="w-full  grid grid-rows-2 items-center -mt-10  md:mt-0 md:grid-cols-12 md:gap-x-2">
    <div class="col-span-5">
        <div class="flex flex-col gap-y-2 text-start ps-6 md:ps-0 w-full font-poppins font-bold md:text-start px-2">
            <h2 x-typeit class="text-white text-xl md:text-4xl">Provide Best Service For Your Bussiness.
            </h2>
            <div class="md:-space-y-0 md:px-0">
                <p class="text-sm font-normal">We possess the expertise to elevate your business, ensuring it’s not only reachable but also stands out on the global stage. </p>
            </div>
            <div class="w-full flex flex-col sm:flex-row mt-3 pe-2 h-[4rem] sm:w-[12rem] gap-2">
                <a href="{{ route('produk') }}" wire:navigate
                    class="btn btn-outline rounded-md bg-[#5c3463] hover:border-[#ba68c8] hover:bg-trans border-none text-white font-normal gap-2 w-[70%]">Services
                    <x-uni-search-alt-o class="w-5" />
                </a>
                <a href="https://t.me/creative_code_bot"
                    class="btn btn-outline rounded-md  border-[#ba68c8] text-white font-normal gap-2">Chat with our bot
                    <x-uni-telegram-alt-thin class="w-5" />
                </a>
            </div>
        </div>
    </div>

    <div class="col-span-7 mx-auto overflow-hidden">
        <div>
            <img src="{{ asset('img/Nerd-amico.svg') }}" alt="" class="w-[20rem] md:w-[22rem]">
        </div>
    </div>
</div>

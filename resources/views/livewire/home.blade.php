<div class="w-full grid grid-rows-2 items-center -mt-10 md:mt-0 -space-y-2 md:grid-cols-12 md:gap-x-2">
    <div class="col-span-5">
        <div class="flex flex-col gap-y-2 text-start ps-6 md:ps-0 w-full font-poppins font-bold md:text-start px-2">
            <h2 x-typeit class="text-white text-xl md:text-4xl">Menyediakan Layanan Terbaik Untuk nda.
            </h2>
            <div class="md:-space-y-0 md:px-0">
                <p class="text-sm font-normal">Biarkan kami meningkatkan pengalaman Anda dan
                    mendefinisikan
                    kembali arti
                    dari layanan terbaik.</p>
            </div>
            <div class="w-full flex flex-col sm:flex-row mt-3 pe-2 h-[4rem] sm:w-[11rem] gap-2">
                <a href="{{ route('produk') }}" wire:navigate
                    class="btn btn-outline w-full rounded-md bg-[#6724f4] hover:border-[#6724f4] hover:bg-trans border-none text-white font-normal gap-2">Lihat
                    Layanan
                    <x-uni-search-alt-o class="w-5" />
                </a>
                <a href="#"
                    class="btn btn-outline w-full rounded-md  border-[#6724f4] text-white font-normal gap-2">Konsultasi
                    <x-uni-telegram-alt-thin class="w-5" />
                </a>
            </div>
        </div>
    </div>

    <div class="col-span-7 mx-auto trans">
        <div>
            <img src="{{ asset('img/Nerd-amico.svg') }}" alt="" class="w-[20rem] md:w-[25rem]">
        </div>



    </div>
</div>

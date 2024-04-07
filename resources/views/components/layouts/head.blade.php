<div class="w-full" x-data="navbar">

    <div class="navbar bg-base-100 hidden md:flex md:px-[5rem]">
        <div class="flex-1">
            <div class="flex flex-col -space-y-3 justify-center items-center ps-2 font-poppins font-bold">
                <a class="text-white text-2xl">{{ env('APP_NAME') }}</a>
            </div>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1 font-poppins font-bold">
                @foreach (['home' => 'Beranda', 'produk' => 'Layanan', 'testimoni' => 'Testimoni', 'tentang' => 'Tentang', 'kontak' => 'Kontak'] as $item => $value)
                    <li class="hover:text-[#5c3463] {{ request()->routeIs($item) ? 'text-[#5c3463]' : '' }}"><a
                            href="{{ route($item) }}" wire:navigate>{{ $value }}</a></li>
                @endforeach
                <li class="hover:text-[#5c3463]"><a href="{{ route('login') }}" wire:navigate>Login</a></li>
            </ul>
        </div>
    </div>

    <div class="flex justify-between  items-center md:hidden mb-6 w-full">
        <div tabindex="0" role="button" class="btn btn-ghost btn-circle p-0" x-on:click="toggle">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
            </svg>
        </div>
    </div>

    <div x-show="open" class="flex w-full absolute right-0 top-0 bottom-0"
        x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full"
        x-transition:enter-end="opacity-100 translate-x-0" x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100" x-transition:leave-end="-translate-x-full">

        <div x-on:click.outside="open=false"
            class="basis-[70%] bg-[#1d232a] border-l border-opacity-5 relative border-white">
            <div class="flex justify-between p-2">
                <button href="" class="font-bold text-white font-poppins">Logo</button>


                <div class="flex justify-center items-center">
                    <button x-on:click="open=false">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 font-bold">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-2 items-center p-2 absolute">

                <div class="flex flex-col gap-y-6">
                    <div class="grid grid-cols-12 gap-y-2 gap-x-4 items-center font-poppins font-medium text-sm">
                        <div class="col-span-2">
                            <x-heroicon-o-home class="w-5" />
                        </div>
                        <div class="col-span-10">
                            <span
                                class="hover:text-[#5c3463] {{ request()->routeIs('home') ? 'text-[#5c3463]' : '' }}"><a
                                    href="{{ route('home') }}" wire:navigate>Beranda</a></span>
                        </div>

                        <div class="col-span-2">
                            <x-heroicon-o-shopping-bag class="w-5" />
                        </div>
                        <div class="col-span-10">
                            <span
                                class="hover:text-[#5c3463] {{ request()->routeIs('produk') ? 'text-[#5c3463]' : '' }}"><a
                                    href="{{ route('produk') }}" wire:navigate>Layanan</a></span>
                        </div>
                        <div class="col-span-2">
                            <x-heroicon-o-chat-bubble-left-right class="w-5" />
                        </div>
                        <div class="col-span-10">
                            <span
                                class="hover:text-[#5c3463] {{ request()->routeIs('testimoni') ? 'text-[#5c3463]' : '' }}"><a
                                    href="{{ route('testimoni') }}" wire:navigate>Testimoni</a></span>
                        </div>
                        <div class="col-span-2">
                            <x-heroicon-o-building-office-2 class="w-5" />
                        </div>
                        <div class="col-span-10">
                            <span
                                class="hover:text-[#5c3463] {{ request()->routeIs('tentang') ? 'text-[#5c3463]' : '' }}"><a
                                    href="{{ route('tentang') }}" wire:navigate>Tentang</a></span>
                        </div>
                        <div class="col-span-2">
                            <x-heroicon-o-phone class="w-5" />
                        </div>
                        <div class="col-span-10">
                            <span
                                class="hover:text-[#5c3463] {{ request()->routeIs('kontak') ? 'text-[#5c3463]' : '' }}"><a
                                    href="{{ route('kontak') }}" wire:navigate>Kontak</a></span>
                        </div>
                        <div class="col-span-2">

                        </div>
                        <div class="col-span-10">
                            <span class="hover:text-[#5c3463]"><a href="{{ route('login') }}"
                                    wire:navigate>Login</a></span>
                        </div>
                        <div class="col-span-2">

                        </div>
                        <div class="col-span-10">
                            <span class="hover:text-[#5c3463]"><a href="{{ route('register') }}"
                                    wire:navigate>Register</a></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="basis-[30%] backdrop-blur-sm">

        </div>

    </div>
</div>

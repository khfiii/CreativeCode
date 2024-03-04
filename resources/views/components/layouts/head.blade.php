
<div class="navbar bg-base-100">
    <div class="flex-1">
      <a class="btn btn-ghost text-xl">{{ config('app.name') }}</a>
    </div>
    <div class="flex-none">
      <ul class="menu menu-horizontal px-1 font-poppins font-medium">
        <li class="hover:text-[#c04cfb]"><a href="{{ route('home') }}" wire:navigate>Home</a></li>
        <li class="hover:text-[#c04cfb]"><a href="{{ route('produk') }}" wire:navigate>Produk</a></li>
        <li class="hover:text-[#c04cfb]"><a href="{{ route('testimoni') }}" wire:navigate>Testimoni</a></li>
        <li class="hover:text-[#c04cfb]"><a href="{{ route('tentang') }}" wire:navigate>Tentang</a></li>
        <li class="hover:text-[#c04cfb]"><a href="{{ route('kontak') }}" wire:navigate.hover>Kontak</a></li>
      </ul>
    </div>
  </div>

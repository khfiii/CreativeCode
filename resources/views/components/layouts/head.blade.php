
<div class="navbar bg-base-100">
    <div class="flex-1">
    <div class="flex flex-col -space-y-3 justify-center items-center btn btn-ghost">
        <a class="text-[#47c2b8] text-2xl">{{ config('app.name') }}</a>
        <small class="font-light">We'are ready for work</small>
    </div>
    </div>
    <div class="flex-none">
      <ul class="menu menu-horizontal px-1 font-poppins font-medium">
        @foreach (['home', 'produk', 'testimoni', 'tentang', 'kontak'] as $item)
         <li class="hover:text-[#c04cfb] {{ request()->routeIs($item) ? 'text-[#c04cfb]' : '' }}"><a href="{{ route($item) }}" wire:navigate>{{ $item }}</a></li>
        @endforeach
      </ul>
    </div>
  </div>

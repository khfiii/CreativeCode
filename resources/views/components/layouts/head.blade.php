
<div class="navbar bg-base-100 invisible md:visible">
    <div class="flex-1">
    <div class="flex flex-col -space-y-3 justify-center items-center btn btn-ghost ">
        <a class="text-white text-2xl">{{ config('app.name') }}</a>
    </div>
    </div>
    <div class="flex-none">
      <ul class="menu menu-horizontal px-1 font-poppins font-bold">
        @foreach (['home'=>'Home', 'produk'=> 'Produk', 'testimoni'=>'Testimoni', 'tentang'=> 'Tentang', 'kontak' => 'Kontak'] as $item => $value)
         <li class="hover:text-[#6724f4] {{ request()->routeIs($item) ? 'text-[#6724f4]' : '' }}"><a href="{{ route($item) }}" wire:navigate>{{ $value }}</a></li>
        @endforeach
      </ul>
    </div>
  </div>

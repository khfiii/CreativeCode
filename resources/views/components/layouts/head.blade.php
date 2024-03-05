
<div class="navbar bg-base-100">
    <div class="flex-1">
    <div class="flex flex-col -space-y-3 justify-center items-center btn btn-ghost ">
        <a class="text-[#932298] text-2xl">{{ config('app.name') }}</a>
        <div class="w-[200px] absolute">

            <div class="relative">
                <small class="font-light transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-[#44BCFF] via-[#932298] to-[#FF675E] rounded-xl blur-lg group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-spin">Ready for your bussiness</small>
            </div>

        </div>
    </div>
    </div>
    <div class="flex-none">
      <ul class="menu menu-horizontal px-1 font-poppins font-bold">
        @foreach (['home'=>'Home', 'produk'=> 'Produk', 'testimoni'=>'Testimoni', 'tentang'=> 'Tentang', 'kontak' => 'Kontak'] as $item => $value)
         <li class="hover:text-[#932298] {{ request()->routeIs($item) ? 'text-[#932298]' : '' }}"><a href="{{ route($item) }}" wire:navigate>{{ $value }}</a></li>
        @endforeach
      </ul>
    </div>
  </div>

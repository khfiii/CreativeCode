<x-website::auth>
    <div class="w-full p-5 md:p-0">
        <div class="rounded shadow md:border-none mt-20 p-2 flex flex-col gap-y-4 justify-center items-center">
            <div>
                <img src="{{ asset('img/email.svg') }}" alt="" class="w-[12rem]">
            </div>

            @if (session('message') == 'Link verifikasi telah dikirim')
                <span class="inline-flex gap-2 items-center">
                    <x-heroicon-o-check class="w-5 text-green-500" />
                    <span class="text-xs">Verifikasi tautan berhasil dikirim</span>
                </span>
            @endif


            <div class="text-center p-4 space-y-2">
                <h2 class="text-xl font-medium">Konfirmasi Email</h2>

                <div class="space-y-7 md:w-[28rem]">
                    <p class="text-xs text-justify">kami telah mengirimkan email verifikasi ke alamat
                        email <span class="text-primary"> {{ anonymizeEmail(auth()->user()->email) }} </span> Silahkan
                        klik
                        verifikasi tautan yang
                        kami
                        berikan. Jika Anda tidak mendapatkan email verifikasi dari tim kami, silahkan lakukan kirim
                        ulang
                        verifikasi.
                    </p>

                    <form action="{{ route('verification.send') }}" method="post">
                        @csrf
                        <button class="text-xs text-white bg-primary rounded p-2">Kirim ulang Verifikasi</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

</x-website::auth>

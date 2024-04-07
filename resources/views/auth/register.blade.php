<x-website::auth>
    <div class="font-[sans-serif] text-yellow-50">
        <div class="min-h-screen flex flex-col items-center">
            <div class="grid justify-center items-center gap-4 max-w-6xl w-full p-4 m-4 rounded-md">
                <div class="md:max-w-lg w-full sm:px-6 py-4  rounded-md">
                    <form method="POST" action="{{ route('registerProcess') }}">
                        @csrf
                        <div class="mb-12">
                            <h3 class="text-3xl font-extrabold">Daftar</h3>
                            <p class="text-sm mt-4 ">Silahkan buat akun terlebih dahulu.</p>

                        </div>
                        <div class="flex flex-col gap-y-4">
                            <div>
                                <span class="text-gray-500">Username</span>
                                <label class="input input-bordered flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                        class="w-4 h-4 opacity-70">
                                        <path
                                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" />
                                    </svg>
                                    <input type="text" class="grow" name="name" value="{{ old('name') }}" />
                                </label>
                                @error('name')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <span class="text-gray-500">Email</span>
                                <label class="input input-bordered flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                        class="w-4 h-4 opacity-70">
                                        <path
                                            d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" />
                                        <path
                                            d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" />
                                    </svg>
                                    <input type="email" class="grow" name="email" value="{{ old('email') }}" />
                                </label>
                                @error('email')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <span class="text-gray-500">Password</span>
                                <label class="input input-bordered flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                        class="w-4 h-4 opacity-70">
                                        <path fill-rule="evenodd"
                                            d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <input type="password" class="grow" name="password"
                                        value="{{ old('password') }}" />

                                </label>
                                @error('password')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mt-2">
                                <button type="submit"
                                    class="w-full shadow-xl py-2.5 px-4 text-sm font-semibold rounded-full text-white bg-[#5c3463] hover:bg-[#60216b] focus:outline-none">
                                    Daftar
                                </button>
                                <p class="mt-6">Sudah punya akun? <a class="underline" href="{{ route('login') }}"
                                        wire:navigate>Login</a> </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-website::auth>

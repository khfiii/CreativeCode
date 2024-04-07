<x-website::auth>
    <div class="font-[sans-serif] text-yellow-50">
        <div class="min-h-screen flex flex-col items-center">
            <div class="grid justify-center items-center gap-4 max-w-6xl w-full p-4 m-4 rounded-md">
                <div class="md:max-w-lg w-full sm:px-6 py-4  rounded-md">
                    <form>
                        <div class="mb-12">
                            <h3 class="text-3xl font-extrabold">Masuk</h3>
                            <p class="text-sm mt-4 ">Belum punya akun? <a href="{{ route('register') }}" wire:navigate
                                    class=" underline ml-1 whitespace-nowrap">Daftar</a></p>
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
                                <input type="text" class="grow" />
                            </label>
                        </div>
                        <div class="mt-8">
                            <span class="text-gray-500">Password</span>
                            <label class="input input-bordered flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                    class="w-4 h-4 opacity-70">
                                    <path fill-rule="evenodd"
                                        d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <input type="password" class="grow" />
                            </label>
                        </div>
                        <div class="flex items-center justify-between gap-2 mt-5">
                            <div class="flex items-center">
                                <input id="remember-me" name="remember-me" type="checkbox"
                                    class="h-4 w-4 shrink-0 text-[#5c3463] focus:ring-blue-500 border-gray-300 rounded" />
                                <label for="remember-me" class="ml-3 block text-sm">
                                    Ingat saya
                                </label>
                            </div>
                            <div>
                                <a href="jajvascript:void(0);" class="text-[#5c3463] text-sm hover:underline">
                                    Lupa password?
                                </a>
                            </div>
                        </div>
                        <div class="mt-12">
                            <button type="button"
                                class="w-full shadow-xl py-2.5 px-4 text-sm font-semibold rounded-full text-white bg-[#5c3463] hover:bg-[#60216b] focus:outline-none">
                                Masuk
                            </button>
                        </div>
                        <p class="my-8 text-sm text-gray-400 text-center">lanjutkan dengan</p>
                        <div class="space-x-8 flex justify-center">
                            <button type="button" class="border-none outline-none pb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30px" class="inline"
                                    viewBox="0 0 512 512">
                                    <path fill="#fbbd00"
                                        d="M120 256c0-25.367 6.989-49.13 19.131-69.477v-86.308H52.823C18.568 144.703 0 198.922 0 256s18.568 111.297 52.823 155.785h86.308v-86.308C126.989 305.13 120 281.367 120 256z"
                                        data-original="#fbbd00" />
                                    <path fill="#0f9d58"
                                        d="m256 392-60 60 60 60c57.079 0 111.297-18.568 155.785-52.823v-86.216h-86.216C305.044 385.147 281.181 392 256 392z"
                                        data-original="#0f9d58" />
                                    <path fill="#31aa52"
                                        d="m139.131 325.477-86.308 86.308a260.085 260.085 0 0 0 22.158 25.235C123.333 485.371 187.62 512 256 512V392c-49.624 0-93.117-26.72-116.869-66.523z"
                                        data-original="#31aa52" />
                                    <path fill="#3c79e6"
                                        d="M512 256a258.24 258.24 0 0 0-4.192-46.377l-2.251-12.299H256v120h121.452a135.385 135.385 0 0 1-51.884 55.638l86.216 86.216a260.085 260.085 0 0 0 25.235-22.158C485.371 388.667 512 324.38 512 256z"
                                        data-original="#3c79e6" />
                                    <path fill="#cf2d48"
                                        d="m352.167 159.833 10.606 10.606 84.853-84.852-10.606-10.606C388.668 26.629 324.381 0 256 0l-60 60 60 60c36.326 0 70.479 14.146 96.167 39.833z"
                                        data-original="#cf2d48" />
                                    <path fill="#eb4132"
                                        d="M256 120V0C187.62 0 123.333 26.629 74.98 74.98a259.849 259.849 0 0 0-22.158 25.235l86.308 86.308C162.883 146.72 206.376 120 256 120z"
                                        data-original="#eb4132" />
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-website::auth>

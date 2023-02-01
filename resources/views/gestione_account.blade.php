<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border-gray-200">

            @if (auth()->user()->email != 'admin@mail.it')
            <h1 class="text-center font-bold "> EMAIL</h1>
            <form method="get" action="/update_user">
                @csrf




                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Email
                    </label>

                    <input class="border border-gray-400 p-2 w-full" type="email" name="email" id="email"
                        value="{{ auth()->user()->email }}" required>

                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror

                </div>




                <div class="mb-6">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                        style="background: #1E9DEA; padding: 10px; width: 100%; text-align: center; display: block; border-radius:4px; color: #ffffff;">
                         Email
                    </button>
                </div>


        </form>
        @endif

        <h1 class="text-center font-bold mt-5 ">MODIFICA PASSWORD</h1>
        <form method="get" action="/update_password">
            @csrf

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    VECCHIA Password
                </label>

                <input class="border border-gray-400 p-2 w-full" type="password" name="old_password" id="password"
                    required>



            </div>




            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    NUOVA Password
                </label>

                <input class="border border-gray-400 p-2 w-full" type="password" name="new_password" id="password"
                    required>



            </div>

            <div class="mb-6">
                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                    style="background: #1E9DEA; padding: 10px; width: 100%; text-align: center; display: block; border-radius:4px; color: #ffffff;">
                    Modifica Password
                </button>
            </div>

        </form>



        </main>
    </section>

    @if (session()->has('error'))
                <div class="fixed bg-red-500 text-white py-3 px-4 rounded-xl bottom-3 right-3 text-sm">
                    <p>{{ session('error') }}</p>
                </div>

            @endif

</x-layout>
<style>
body{
    background-color:rgb(242, 242, 54);
}
    </style>


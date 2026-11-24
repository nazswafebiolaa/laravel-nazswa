<x-guest-layout>
    <div class="text-center">
        <h1 class="text-2xl font-bold text-gray-800">Sesi Login Kedaluwarsa</h1>
        <p class="mt-3 text-sm text-gray-600">
            Halaman ini kedaluwarsa karena token keamanan tidak lagi berlaku. Silakan login kembali.
        </p>
        <a href="{{ route('login') }}" class="inline-flex mt-5 px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700">
            Login Lagi
        </a>
    </div>
</x-guest-layout>

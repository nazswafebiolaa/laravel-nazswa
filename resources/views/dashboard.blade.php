<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
    </x-slot>

    <div class="min-h-[calc(100vh-9rem)] bg-slate-50 py-8 sm:py-12">
        <div class="mx-auto max-w-7xl space-y-8 px-4 sm:px-6 lg:px-8">
            <section class="relative overflow-hidden rounded-3xl bg-gradient-to-br from-slate-950 via-slate-900 to-indigo-950 px-6 py-10 shadow-xl sm:px-10 sm:py-12">
                <div class="pointer-events-none absolute -right-16 -top-24 h-72 w-72 rounded-full bg-cyan-400/10 blur-3xl"></div>
                <div class="relative max-w-3xl">
                    <p class="text-sm font-bold uppercase tracking-[0.2em] text-cyan-300">Area Belajar</p>
                    <h1 class="mt-4 text-3xl font-bold tracking-tight text-white sm:text-4xl">
                        Halo, {{ Auth::user()->name }}!
                    </h1>
                    <p class="mt-4 max-w-2xl text-base leading-7 text-slate-300">
                        Anda sudah berhasil masuk. Kelola catatan belajar Laravel atau lanjutkan dengan membuat catatan baru.
                    </p>
                    <div class="mt-8 flex flex-wrap gap-3">
                        <a href="{{ route('catatan.index') }}" class="inline-flex items-center rounded-xl bg-cyan-400 px-5 py-3 text-sm font-bold text-slate-950 shadow-lg shadow-cyan-950/30 transition hover:bg-cyan-300">
                            Lihat catatan
                        </a>
                        <a href="{{ route('catatan.create') }}" class="inline-flex items-center rounded-xl border border-slate-500 px-5 py-3 text-sm font-semibold text-white transition hover:border-cyan-300 hover:text-cyan-200">
                            + Buat catatan
                        </a>
                    </div>
                </div>
            </section>

            <section>
                <h2 class="mb-4 text-lg font-bold text-slate-800">Mulai dari sini</h2>
                <div class="grid gap-4 md:grid-cols-3">
                    <a href="{{ route('catatan.index') }}" class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-md">
                        <span class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-cyan-50 text-cyan-700">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 6h13M8 12h13M8 18h13M3 6h.01M3 12h.01M3 18h.01" />
                            </svg>
                        </span>
                        <h3 class="mt-4 font-bold text-slate-900">Daftar catatan</h3>
                        <p class="mt-2 text-sm leading-6 text-slate-500">Buka dan kelola semua catatan belajar Anda.</p>
                        <p class="mt-4 text-sm font-semibold text-cyan-700">{{ $jumlahCatatan }} catatan tersimpan</p>
                    </a>

                    <a href="{{ route('catatan.create') }}" class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-md">
                        <span class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-indigo-50 text-indigo-700">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v14m-7-7h14" />
                            </svg>
                        </span>
                        <h3 class="mt-4 font-bold text-slate-900">Buat catatan baru</h3>
                        <p class="mt-2 text-sm leading-6 text-slate-500">Simpan materi atau hal penting yang baru Anda pelajari.</p>
                    </a>

                    <a href="{{ route('profile.edit') }}" class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-md">
                        <span class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-violet-50 text-violet-700">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M20 21a8 8 0 0 0-16 0m8-10a4 4 0 1 0 0-8 4 4 0 0 0 0 8Z" />
                            </svg>
                        </span>
                        <h3 class="mt-4 font-bold text-slate-900">Profil akun</h3>
                        <p class="mt-2 text-sm leading-6 text-slate-500">Perbarui nama, email, atau kata sandi akun Anda.</p>
                    </a>
                </div>
            </section>
        </div>
    </div>
</x-app-layout>

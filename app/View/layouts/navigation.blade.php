<div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        {{ __('Dashboard') }}
    </x-nav-link>

    {{-- Tambahkan blok kode di bawah ini --}}
    @if (Auth::user()->role == 'admin')
        <x-nav-link :href="route('categories.index')" :active="request()->routeIs('categories.*')">
            {{ __('Kategori') }}
        </x-nav-link>
        {{-- Nanti kita tambahkan link Menu di sini --}}
    @endif
</div>
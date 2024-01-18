<x-layouts.base>

    @stack('styles')
    @include('layouts.sidebar.admin-sidebar')
    <div class="main-content" id="panel">
        @include('layouts.navbar.admin-navbar')

        {{ $slot }}

    </div>

    @stack('scripts')
</x-layouts.base>

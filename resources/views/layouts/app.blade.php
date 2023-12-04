<x-layouts.base>
    @include('layouts.sidebar.admin-sidebar')
<div class="main-content" id="panel">
    @include('layouts.navbar.admin-navbar')

    {{ $slot }}
</div>

</x-layouts.base>

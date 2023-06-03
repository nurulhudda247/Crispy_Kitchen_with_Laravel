@include('backend.includes.header')
@include('backend.includes.nav')
        <div id="layoutSidenav">
            @include('backend.includes.side-nav')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        @yield('content')
                    </div>
                </main>
                @include('backend.includes.copyright')
            </div>
        </div>
@include('backend.includes.footer')

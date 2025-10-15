<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('partials.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                @include('partials.topbar')

                <!-- Page Content -->
                @yield('content')
            </div>
            <!-- End of Main Content -->

            @include('partials.footer')
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    @include('partials.scripts')

</body>
</html>

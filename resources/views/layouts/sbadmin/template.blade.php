<!DOCTYPE html>
<html lang="en">

@include('layouts.sbadmin.head')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('layouts.sbadmin.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('layouts.sbadmin.navbar')


                @yield('content')


            </div>
            <!-- End of Main Content -->

            @include('layouts.sbadmin.footer')

            @include('layouts.sbadmin.script')

            @stack('scripts')

</body>

</html>

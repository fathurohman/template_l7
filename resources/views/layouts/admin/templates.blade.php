<!DOCTYPE html>
<html lang="en">


@include('layouts.admin.head')

<body>

  <!-- ======= Header ======= -->


    @include('layouts.admin.navbar')



  <!-- ======= Sidebar ======= -->
  @include('layouts.admin.sidebar')


  <main main id="main" class="main">
    @yield('content')
  </main>

  @include('layouts.admin.footer')

  @stack('scripts')
</body>

</html>

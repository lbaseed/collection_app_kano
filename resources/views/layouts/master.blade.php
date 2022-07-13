<!DOCTYPE html>
<html class="loading" data-textdirection="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <!-- BEGIN: Head-->
  @include('layouts.head_links')
  <!-- END: Head-->
  <body class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-dark-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    @include('layouts.header')
    <!-- END: Header-->
    
    <!-- BEGIN: SideNav-->
    @if (Auth::user()->role=="vendor")
      @include('layouts.vendor_left_side')
    @else
      @include('layouts.left_side')
    @endif
    <!-- END: SideNav-->

    <!-- BEGIN: Page Main-->
    <main class="py-4" style="min-height: 800px">
        @yield('content')
    </main>
   <!--end container-->


  @include('layouts.footer')
  </body>
</html>
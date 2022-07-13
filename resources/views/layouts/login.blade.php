<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
    @include('layouts.head_links')
    <link rel="stylesheet" type="text/css" href="css/pages/login.css">

  <!-- END: Head-->
  <body class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu preload-transitions 1-column login-bg   blank-page blank-page" data-open="click" data-menu="vertical-dark-menu" data-col="1-column">
    <div class="row">
      <div class="col s12">
        @yield('content')

        
        <div class="content-overlay"></div>
      </div>
    </div>

    @include('layouts.footer_links')
  </body>
</html>
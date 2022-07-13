<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-dark sidenav-active-rounded">
      <div class="brand-sidebar">
        <h1 class="logo-wrapper">
          <a class="brand-logo darken-1" href="/">
            <img class="hide-on-med-and-down " src="/images/logo/materialize-logo.png" alt="materialize logo"><img class="show-on-med-and-down hide-on-med-and-up" src="/images/logo/materialize-logo-color.png" alt="materialize logo">
            <span class="logo-text hide-on-med-and-down">Insurance</span>
          </a>
          <a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
      </div>
      
      <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="accordion">
        <div style="height: 100px;" class="hide-on-med-and-up pl-9 pt-9">
          <a class="brand-logo darken-1" href="/">
            <img  src="/images/logo/materialize-logo-color.png" alt="materialize logo">
          </a>
        </div>

        <li class="navigation-header"><a class="navigation-header-text">Main Navigation </a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>

        <li class="bold"><a class="waves-effect waves-cyan {{ '/' == request()->path() || 'vendor/dashboard' == request()->path() ? 'active' : '' }}" href="/vendor/dashboard"><i class="material-icons">dashboard</i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
        </li>
        
        <li class="navigation-header"><a class="navigation-header-text">Collections</a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan {{ request()->is('collection/new-collection*') ? 'active' : '' }}" href="collection/new-collection/create"><i class="material-icons">create</i><span class="menu-title" data-i18n="Mail">Buy Insurance</span><span class="badge new badge pill pink accent-2 float-right mr-2">5</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan {{ request()->is('collection/renew*') ? 'active' : '' }}" href="collection/renew"><i class="material-icons">update</i><span class="menu-title" data-i18n="ToDo">Renew Insurance</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan {{ request()->is('collection/vendor-collection*') ? 'active' : '' }}" href="collection/vendor-collection"><i class="material-icons">person_outline</i><span class="menu-title" data-i18n="Chat">Vendor Collection</span></a>
      
        <li class="navigation-header"><a class="navigation-header-text">Vendor</a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>

        <li class="bold"><a class="waves-effect waves-cyan {{ request()->is('vendor/profile*') ? 'active' : '' }}" href="vendor/profile"><i class="material-icons">people</i><span class="menu-title" data-i18n="User Profile">Profile</span></a>
        </li>
       
        <li class="bold"><a class="waves-effect waves-cyan "href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();"><i class="material-icons">logout</i><span class="menu-title" data-i18n="File Manager">Logout</span></a>
        </li>

        
 
      </ul>
      <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>
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

        <li class="bold"><a class="waves-effect waves-cyan {{ '/' == request()->path() || 'dashboard' == request()->path() ? 'active' : '' }}" href="/"><i class="material-icons">dashboard</i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
        </li>
        
        <li class="navigation-header"><a class="navigation-header-text">Collections</a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan {{ request()->is('collection/new-collection*') ? 'active' : '' }}" href="collection/new-collection/create"><i class="material-icons">create</i><span class="menu-title" data-i18n="Mail">Buy Insurance</span><span class="badge new badge pill pink accent-2 float-right mr-2">5</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan {{ request()->is('collection/renew*') ? 'active' : '' }}" href="collection/renew"><i class="material-icons">update</i><span class="menu-title" data-i18n="ToDo">Renew Insurance</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan {{ request()->is('collection/vendor-collection*') ? 'active' : '' }}" href="collection/vendor-collection"><i class="material-icons">person_outline</i><span class="menu-title" data-i18n="Chat">Vendor Collection</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan {{ request()->is('collection/pending*') ? 'active' : '' }}" href="collection/pending"><i class="material-icons">format_list_bulleted</i><span class="menu-title" data-i18n="Kanban">Pending Bills</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan {{ request()->is('collection/total-collection*') ? 'active' : '' }}" href="collection/total-collection"><i class="material-icons">folder</i><span class="menu-title" data-i18n="File Manager">Total Collection</span></a>
        </li>
      
        <li class="navigation-header"><a class="navigation-header-text">Vendors </a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>

        <li class="bold"><a class="waves-effect waves-cyan {{ request()->is('vendor*') ? 'active' : '' }}" href="vendor"><i class="material-icons">people</i><span class="menu-title" data-i18n="User Profile">Vendors</span></a>
        </li>
        {{-- <li class="bold"><a class="waves-effect waves-cyan {{ request()->is('vendor/fund') ? 'active' : '' }}" href="vendor/fund"><i class="material-icons">account_balance_wallet</i><span class="menu-title" data-i18n="File Manager">Fund Vendors</span></a> --}}
        </li>
        {{-- <li class="bold"><a class="waves-effect waves-cyan {{ request()->is('vendor/wallets') ? 'active' : '' }}" href="vendor/wallets"><i class="material-icons">account_balance_wallet</i><span class="menu-title" data-i18n="File Manager">All Wallets</span></a> --}}
        </li>
        <li class="bold"><a class="waves-effect waves-cyan "href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();"><i class="material-icons">logout</i><span class="menu-title" data-i18n="File Manager">Logout</span></a>
        </li>

        <li class="navigation-header"><a class="navigation-header-text">Configuration </a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>

        {{-- <li class="bold"><a class="waves-effect waves-cyan {{ request()->is('settings/agency*') ? 'active' : '' }}" href="settings/agency"><i class="material-icons">people</i><span class="menu-title" data-i18n="User Profile">Agencies</span></a> --}}
        {{-- </li>
        <li class="bold"><a class="waves-effect waves-cyan {{ request()->is('settings/revenue-items*') ? 'active' : '' }}" href="settings/revenue-items"><i class="material-icons">list</i><span class="menu-title" data-i18n="File Manager">Insurance Items</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan {{ request()->is('settings/settings*') ? 'active' : '' }}" href="settings/settings"><i class="material-icons">settings</i><span class="menu-title" data-i18n="File Manager">General Settings</span></a>
        </li> --}}
        
        
        {{-- <li class="navigation-header"><a class="navigation-header-text">Misc </a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">photo_filter</i><span class="menu-title" data-i18n="Menu levels">Menu levels</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a href="JavaScript:void(0)"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Second level">Second level</span></a>
              </li>
              <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Second level child">Second level child</span></a>
                <div class="collapsible-body">
                  <ul class="collapsible" data-collapsible="accordion">
                    <li><a href="JavaScript:void(0)"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Third level">Third level</span></a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="https://pixinvent.com/materialize-material-design-admin-template/documentation/index.html" target="_blank"><i class="material-icons">import_contacts</i><span class="menu-title" data-i18n="Documentation">Documentation</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="../../../../index.htm" target="_blank"><i class="material-icons">help_outline</i><span class="menu-title" data-i18n="Support">Support</span></a>
        </li> --}}
      </ul>
      <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>
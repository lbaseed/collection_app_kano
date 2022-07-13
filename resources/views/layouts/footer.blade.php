        </div>
          <div class="content-overlay"></div>
        </div>
      </div>
    </div>
    <!-- END: Page Main-->
    
    <!-- BEGIN: Footer-->

    <footer class="page-footer footer footer-static footer-light navbar-border navbar-shadow">
      <div class="footer-copyright">
        <div class="container"><span>&copy; 
          @php
            echo date("Y");
          @endphp          
        <a href="https://aws.com.ng" target="_blank">Ashalt WW Solution Ltd</a> All rights reserved.</span><span class="right hide-on-small-only">Designed, Developed and Managed by <a href="https://aws.com.ng/">Ashalt</a></span></div>
      </div>
    </footer>

    <!-- END: Footer-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    

    <!-- BEGIN VENDOR JS-->
      {{-- java scripts here --}}
    

    @include('layouts.footer_links')
    @yield('scripts');
    <script type="text/javascript">
                $(document).ready(function(){
                    $('.datepicker').datepicker({
                    format: "yyyy-mm-dd"
                    });
                });
          
      function run_waitMe(el, num, effect) {
					text = 'Please wait, \n Processing...';
					fontSize = '';
					switch (num) {
						case 1:
							maxSize = '';
							textPos = 'vertical';
							break;
						case 2:
							text = '';
							maxSize = 30;
							textPos = 'vertical';
							break;
						case 3:
							maxSize = 30;
							textPos = 'horizontal';
							fontSize = '18px';
							break;
					}
					el.waitMe({
						effect: effect,
						text: text,
						bg: 'rgba(255,255,255,0.7)',
						color: '#000',
						maxSize: maxSize,
						waitTime: -1,
						source: 'img.svg',
						textPos: textPos,
						fontSize: fontSize,
						onClose: function (el) { }
					});
				}
    </script>
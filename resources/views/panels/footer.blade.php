<!-- BEGIN: Footer-->
@if($configData["mainLayoutType"] == 'horizontal')
  <footer class="footer {{ $configData['footerType'] }} footer-light navbar-shadow">
    @else
      <footer class="footer {{ $configData['footerType'] }} footer-light">
        @endif
        <p class="clearfix blue-grey lighten-2 mb-0">
          <span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2020
            <a
              class="text-bold-800 grey darken-2" href="https://www.google.com/" target="_blank">HR Management,
            </a>All rights Reserved
          </span>
          <span
            class="float-md-right d-none d-md-block">Hand-crafted & Made with HR Management<i
              class="feather icon-heart pink"></i>
          </span>
          <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i>
          </button>
        </p>
      </footer>
  </footer>
      <!-- END: Footer-->

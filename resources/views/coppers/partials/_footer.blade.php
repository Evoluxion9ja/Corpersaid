        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2019 <a href="https://www.corpersaid.com/" target="_blank">Corper's Aid</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Developed with <i class="mdi mdi-heart text-danger"></i></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
  
    <!-- plugins:js -->
    <script src="{{asset('js/dashboard/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('js/dashboard/vendor.bundle.addons.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{asset('js/dashboard/off-canvas.js')}}"></script>
    <script src="{{asset('js/dashboard/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('js/dashboard/dashboard.js')}}"></script>
    <!-- End custom js for this page-->
    <!--Parsley validation js-->
    {{Html::script('js/dashboard/parsley.min.js')}}
  </body>
  
  </html>
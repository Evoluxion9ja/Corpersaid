
<!--Footer-part-->

<div class="row-fluid">
        <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
      </div>
      
      <!--end-Footer-part-->
      <script src="{{asset('js/backend_js/jquery.min.js')}}"></script> 
      <script src="{{asset('js/backend_js/jquery.ui.custom.js')}}"></script> 
      <script src="{{asset('js/backend_js/bootstrap.min.js')}}"></script> 
      <script src="{{asset('js/backend_js/jquery.uniform.js')}}"></script> 
      <script src="{{asset('js/backend_js/select2.min.js')}}"></script> 
      <script src="{{asset('js/backend_js/jquery.validate.js')}}"></script> 
      <script src="{{asset('js/backend_js/matrix.js')}}"></script> 
      <script src="{{asset('js/backend_js/matrix.form_validation.js')}}"></script>
      {{Html::script('js/backend_js/parsley.min.js')}}
      
      <script type="text/javascript">
        // This function is called from the pop-up menus to transfer to
        // a different page. Ignore if the value returned is a null string:
        function goPage (newURL) {
      
            // if url is empty, skip the menu dividers and reset the menu selection to default
            if (newURL != "") {
            
                // if url is "-", it is this page -- reset the menu:
                if (newURL == "-" ) {
                    resetMenu();            
                } 
                // else, send page to designated URL            
                else {  
                  document.location.href = newURL;
                }
            }
        }
      
      // resets the menu selection upon entry to this page:
      function resetMenu() {
         document.gomenu.selector.selectedIndex = 2;
      }
      </script>
      </body>
      </html>
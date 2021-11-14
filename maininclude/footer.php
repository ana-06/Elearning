<!-- Start of Footer -->
<footer class="container-fluid bg-dark text-center p-2">
    <small class="text-white">Copyright &copy; 2021 || Designed By SLCK || <a href="#login" data-bs-toggle="modal" data-bs-target="#adminLoginModalCenter" > Admin Login </a></small>
  </footer>
  <!-- End of Footer -->

  <!-- Start student registration modal(basically to get a popup) -->
  
  <!-- Modal -->
  <div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="stuRegModalCenterLabel">Student Registration Form</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- bootstrap code to get the sign up form -->
          <form> 
            <!-- Using font awesome and getting the symbol next to name,email and password -->
          <div class="mb-3">
            <i class="fas fa-user"></i> <label for="stuname" class="pl-2 font-weight-bold">Name</label><input type="text"
            class="form-control" placeholder="Name" name="stuname" id="stuname">
          </div>
          <div class="mb-3">
            <i class="fas fa-envelope"></i> <label for="stuemail" class="pl-2 font-weight-bold">Email</label><input type="email"
            class="form-control" placeholder="Email" name="stuemail" id="stuemail">
            <small class="form-text">We'll never share your email with anyone else</small>
          </div>
          <div class="mb-3">
            <i class="fas fa-key"></i><label for="stupass" class="pl-2 font-weight-bold"> New Password</label><input type="password"
            class="form-control" placeholder="Password" name="stupass" id="stupass">
          </div>
          </form>
         <!-- End of bootstrap code to get the sign up form -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" onclick="addStu()">Sign Up</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          
        </div>
      </div>
    </div>
  </div>

  <!-- End of Student registration modal -->

  
  <!-- Start student login modal(basically to get a popup) -->
  
  <!-- Modal -->
  <div class="modal fade" id="stuLoginModalCenter" tabindex="-1" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="stuLoginModalCenterLabel">Student Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- bootstrap code to get the login form -->
          <form id ="stuLoginForm"> 
            <!-- Using font awesome and getting the symbol next to email and password -->
          
          <div class="mb-3">
            <i class="fas fa-envelope"></i> <label for="stuLogemail" class="pl-2 font-weight-bold">Email</label><input type="email"
            class="form-control" placeholder="Email" name="stuLogemail" id="stuLogemail">
            
          </div>
          <div class="mb-3">
            <i class="fas fa-key"></i><label for="stuLogpass" class="pl-2 font-weight-bold"> Password</label><input type="password"
            class="form-control" placeholder="Password" name="stuLogpass" id="stuLogpass">
          </div>
          </form>
         <!-- End of bootstrap code to get the login form -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" id="stuLoginBtn">Login</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          
        </div>
      </div>
    </div>
  </div>

  <!-- End of Student Login modal -->

  <!-- Start Admin login modal(basically to get a popup) -->
  
  <!-- Modal -->
  <div class="modal fade" id="adminLoginModalCenter" tabindex="-1" aria-labelledby="adminLoginModalCenterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="adminLoginModalCenterLabel">Admin Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- bootstrap code to get the login form -->
          <form id ="adminLoginForm"> 
            <!-- Using font awesome and getting the symbol next to email and password -->
          
          <div class="mb-3">
            <i class="fas fa-envelope"></i> <label for="adminLogemail" class="pl-2 font-weight-bold">Email</label><input type="email"
            class="form-control" placeholder="Email" name="adminLogemail" id="adminLogemail">
            
          </div>
          <div class="mb-3">
            <i class="fas fa-key"></i><label for="adminLogpass" class="pl-2 font-weight-bold"> Password</label><input type="password"
            class="form-control" placeholder="Password" name="adminLogpass" id="adminLogpass">
          </div>
          </form>
         <!-- End of bootstrap code to get the login form -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" id="adminLoginBtn">Login</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          
        </div>
      </div>
    </div>
  </div>

  <!-- End of Admin Login modal -->

    <!-- Jquery and Bootstrap Javascript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>  
    <!-- Font Awesome JS -->
    <script src="js/all.min.js"></script>
    <!-- Student Ajax call Javascript -->
    <script type="text/javascript" src="js/ajaxrequest.js"></script>

</body>
</html>

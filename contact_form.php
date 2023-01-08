<?php
session_start();
require_once("includes/Backend/auth_cheacking.php");
   require_once("includes/Backend/header.php");
   require_once("includes/Backend/sidebar.php");
?>
 
 <div class="content-wrapper">
   <div class="row">
    <!-- menus bar -->
   <div class="col-md-8 offset-2">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="collapse navbar-collapse" id="navbarText">
           <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="contact_show.php">contact_show </a>
            </li>
          </ul>
        </div>
     </nav>
    </div>
    <!-- menu bar end  -->
     <div class="col-md-8 offset-2"> 
      <div class="card mt-5 ">
       <div class="card-header text-center bg-info">Contact form </div>
        <div class="card-body">
        <h5 class="card-title text-center"> Information Input Form </h5>
        <!--  Contact Input form  -->
          <form action="contact_post.php" method="POST">
            <div class="mt-3">
              <label for=""> First Name </label>
              <input type="text" name="fName" class="form-control" placeholder="Write your first name ">
            </div>
            <div class="mt-3">
              <label for=""> Last Name </label>
              <input type="text" name="lName" class="form-control" placeholder="Write your Last name ">
            </div>
            <div class="mt-3">
              <label for=""> Email </label>
              <input type="text" name="email" class="form-control" placeholder="Write your Email ">
            </div>
            <div class="mt-3">
              <label for=""> Country  </label>
              <select name="country" class="form-control" id="">
                <option value="0"> Select country </option>
                <option value="1"> Bangladesh  </option>
                <option value="2"> India  </option>
                <option value="3"> Pakistan </option>
                <option value="4"> Nepal </option>
                <option value="5"> USA </option>
              </select>
            </div>
            <div class="mt-3">
              <label for=""> Message </label>
             <textarea name="message" rows="4" class="form-control" placeholder="write something  ">  </textarea>
            </div>
            <button  type="submit" class="form-control bg-info mt-5"> Save data  </button>
          </form>
          
      </div>
     </div>
    </div>
   </div>
 </div>
<?php
  require_once("includes/Backend/footer.php");
?>
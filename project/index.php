<!-- Including header -->
 
<?php
include("theme/header.php");
?>


<body>
    
<!-- including sidebar -->
         <?php
         include("theme/sidebar.php");
         ?>
       
       <div class="content">
           
       <!-- including sidebar -->
       <?php
         include("theme/nav.php");
         ?>
      



        <div class="main-content mt-2">
         <h2>
          Basic Information
         </h2>
         <h3>
          Basic Information
         </h3>
         <div class="form-group">
          <label for="company-logo">
           Company Logo
          </label>
          <div class="upload-box" id="company-logo">
           Drop files here to Upload
          </div>
         </div>
         <div class="form-group">
          <label for="company-name">
           Company Name
          </label>
          <input id="company-name" name="company-name" type="text"/>
         </div>
         <div class="form-group">
          <label for="company-email">
           Company Email
          </label>
          <input id="company-email" name="company-email" type="email"/>
         </div>
         <div class="form-group">
          <label>
           Select a cover image and cover layout
          </label>
          <div class="cover-images">
           <div class="add-cover">
            +
           </div>
           <img alt="Cover image 1" class="selected" height="100" src="assets/img/img2.jpg" width="100"/>
           <img alt="Cover image 2" height="100" src="assets/img/img1.jpg" width="100"/>
          </div>
         </div>
         <button class="save-button">
          Save
         </button>
        </div>
       </div>






<!-- Including footer -->

      <?php
      include("theme/footer.php");
      ?>
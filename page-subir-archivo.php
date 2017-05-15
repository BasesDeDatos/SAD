<!DOCTYPE html>
<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 2.1
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->


    <!-- Mirrored from demo.geekslabs.com/materialize/v2.1/layout01/table-data.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 May 2017 03:38:17 GMT -->
    <?php require_once("header.php")?>

  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

      <!-- START LEFT SIDEBAR NAV-->
          
          <?php require_once("sidebar.php")?>

      <!-- END LEFT SIDEBAR NAV-->

      <!-- //////////////////////////////////////////////////////////////////////////// -->

      <!-- START CONTENT -->
      <section id="content">
        
        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper" class=" grey lighten-3">
            <!-- Search for small screen -->
            <div class="header-search-wrapper grey hide-on-large-only">
                <i class="mdi-action-search active"></i>
                <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
            </div>
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Upload Document</h5>
                <ol class="breadcrumb">
                    <li><a href="index.php">SAD</a></li>
                    <li class="active">Upload Document</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
        

        <!--start container-->
        <div class="container">
          <div class="section">

            <!--<p class="caption">A Simple Blank Page to use it for your custome design and elements.</p>-->
            
            
            
          <div id="basic-card" class="section">
            <!--<h4 class="header">Basic Card</h4>-->
            <div class="row">
              <div class="col s12 m4 l3">
                <p></p>
              </div>
              <div class="col s12 m8 l9">
                <div class="row">
                  <div class="col s12 m8 l9">
                    <div class="card">
                      <div class="card-content">
                        <!--<span class="card-title">Upload Document</span>-->
    					          <input type="file" name="archivo" id="input-documento" accept="*"/>
                      </div>
                      <form>
                        
                        <div class="card-action">
                          <!--<a href="#" class="lime-text text-accent-1">This is a link</a>-->
                          <!--<a href="#" class="lime-text text-accent-1">This is a link</a>-->
                           <div class="input-field col s12">
                            <input id="last_name" type="text" class="validate" data-cip-id="last_name">
                            <label for="last_name" class="">Document Name</label>
                          </div>
                          
           

                            <div class="input-field col s12">
                              <select class="browser-default" data-cip-id="cIPJQ342845642">
                                <option value="" disabled="" selected="">Choose your category</option>
                                <option value="1">Personal assistant</option>
                                <option value="2">Businessman</option>
                                <option value="3">General Manager</option>
                                <option value="4">Executive</option>
                                <option value="5">Technical</option>
                                <option value="6">Seller</option>
                              </select>
                                                            <!--<label>Browser Select</label>-->

                            </div>
                          
                          <div class="input-field col s12">
                            <textarea id="textarea1" class="materialize-textarea"></textarea>
                            <label for="textarea1" class="">Description</label>
                          </div>
                          
                          <div class="input-field col s12 center-align">
                            <button class="btn waves-effect waves-light indigo " type="reset" name="action" id="upload_file" onclick="send()">Send
                              <i class="mdi-content-send right"></i>
                            </button>
                          </div>
  
                          <div class="input-field col s12">
         
                          </div>
                        </div>
                      </form>
                      
                      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
            
            
            <div class="divider"></div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          </div>
        </div>
        <!--end container-->
      </section>
      <!-- END CONTENT -->


    </div>
    <!-- END WRAPPER -->

  </div>
  <!-- END MAIN -->



  <!-- //////////////////////////////////////////////////////////////////////////// -->



    <?php require_once("footer.php"); ?>

</body>


<!-- Mirrored from demo.geekslabs.com/materialize/v2.1/layout01/page-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 May 2017 03:38:39 GMT -->
</html>
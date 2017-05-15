
  <?php require_once("header.php"); ?>

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

      <?php require_once("sidebar.php"); ?>

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
                <h5 class="breadcrumbs-title">Basic Tables</h5>
                <ol class="breadcrumb">
                    <li><a href="index-2.html">Dashboard</a></li>
                    <li><a href="#">Tables</a></li>
                    <li class="active">Basic Tables</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
        

        <!--start container-->
        <div class="container">
          <div class="section">

            <p class="caption">Tables are a nice way to organize a lot of data. We provide a few utility classes to help you style your table as easily as possible. In addition, to improve mobile experience, all tables on mobile-screen widths are centered automatically.</p>
            <div class="divider"></div>
            
            <!--Borderless Table-->
            <div id="borderless-table">
              <h4 class="header">Borderless Table</h4>
              <div class="row">
                <div class="col s12 m4 l3">
                  <p>Tables are borderless by default.</p>
                </div>
                <div class="col s12 m8 l9">
                  <table>
                    <thead>
                      <tr>
                        <th data-field="id">Name</th>
                        <th data-field="name">Item Name</th>
                        <th data-field="price">Item Price</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td>Alvin</td>
                        <td>Eclair</td>
                        <td>$0.87</td>
                      </tr>
                      <tr>
                        <td>Alan</td>
                        <td>Jellybean</td>
                        <td>$3.76</td>
                      </tr>
                      <tr>
                        <td>Jonathan</td>
                        <td>Lollipop</td>
                        <td>$7.00</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            
            <div class="divider"></div>
            
            <!--Bordered Table-->
            <div id="bordered-table">
              <h4 class="header">Headers</h4>
              <div class="row">
                <div class="col s12 m4 l3">
                  <p>Add <code class=" language-markup">class="bordered"</code> to the table tag for a bordered table</p>
                </div>
                <div class="col s12 m8 l9">
                  <table class="bordered">
                    <thead>
                      <tr>
                        <th data-field="id">Name</th>
                        <th data-field="name">Item Name</th>
                        <th data-field="price">Item Price</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Alvin</td>
                        <td>Eclair</td>
                        <td>$0.87</td>
                      </tr>
                      <tr>
                        <td>Alan</td>
                        <td>Jellybean</td>
                        <td>$3.76</td>
                      </tr>
                      <tr>
                        <td>Jonathan</td>
                        <td>Lollipop</td>
                        <td>$7.00</td>
                      </tr>
                      <tr>
                        <td>Shannon</td>
                        <td>KitKat</td>
                        <td>$9.99</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <!--Striped Table-->
            <div class="divider"></div>
            <div id="striped-table">
              <h4 class="header">Striped Table</h4>
              <div class="row">
                <div class="col s12 m4 l3">
                  <p>Add <code class=" language-markup">class="striped"</code> to the table tag for a striped table</p>
                </div>
                <div class="col s12 m8 l9">
                  <table class="striped">
                    <thead>
                      <tr>
                        <th data-field="id">Name</th>
                        <th data-field="name">Item Name</th>
                        <th data-field="price">Item Price</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Alvin</td>
                        <td>Eclair</td>
                        <td>$0.87</td>
                      </tr>
                      <tr>
                        <td>Alan</td>
                        <td>Jellybean</td>
                        <td>$3.76</td>
                      </tr>
                      <tr>
                        <td>Jonathan</td>
                        <td>Lollipop</td>
                        <td>$7.00</td>
                      </tr>
                      <tr>
                        <td>Shannon</td>
                        <td>KitKat</td>
                        <td>$9.99</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <!--Hoverable Table-->
            <div class="divider"></div>
            <div id="hoverable-table">
              <h4 class="header">Hoverable Table</h4>
              <div class="row">
                <div class="col s12 m4 l3">
                  <p>Add <code class=" language-markup">class="hoverable"</code> to the table tag for a hoverable table</p>
                </div>
                <div class="col s12 m8 l9">
                  <table class="hoverable">
                    <thead>
                      <tr>
                        <th data-field="id">Name</th>
                        <th data-field="name">Item Name</th>
                        <th data-field="price">Item Price</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Alvin</td>
                        <td>Eclair</td>
                        <td>$0.87</td>
                      </tr>
                      <tr>
                        <td>Alan</td>
                        <td>Jellybean</td>
                        <td>$3.76</td>
                      </tr>
                      <tr>
                        <td>Jonathan</td>
                        <td>Lollipop</td>
                        <td>$7.00</td>
                      </tr>
                      <tr>
                        <td>Shannon</td>
                        <td>KitKat</td>
                        <td>$9.99</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <!--Centered Table-->
            <div class="divider"></div>
            <div id="centered-table">
              <h4 class="header">Centered Table</h4>
              <div class="row">
                <div class="col s12 m4 l3">
                  <p>Add <code class=" language-markup">class="centered"</code> to the table tag to center align all the text in the table</p>
                </div>
                <div class="col s12 m8 l9">
                  <table class="centered">
                    <thead>
                      <tr>
                        <th data-field="id">Name</th>
                        <th data-field="name">Item Name</th>
                        <th data-field="price">Item Price</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Alvin</td>
                        <td>Eclair</td>
                        <td>$0.87</td>
                      </tr>
                      <tr>
                        <td>Alan</td>
                        <td>Jellybean</td>
                        <td>$3.76</td>
                      </tr>
                      <tr>
                        <td>Jonathan</td>
                        <td>Lollipop</td>
                        <td>$7.00</td>
                      </tr>
                      <tr>
                        <td>Shannon</td>
                        <td>KitKat</td>
                        <td>$9.99</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <!--Responsive Table-->
            <div class="divider"></div>
            <div id="responsive-table">
              <h4 class="header">Responsive Table</h4>
              <div class="row">
                <div class="col s12 m4 l3">
                  <p>Add <code class=" language-markup">class="responsive-table"</code> to the table tag to make the table horizontally scrollable on smaller screen widths.</p>
                </div>
                <div class="col s12 m8 l9">
                  <table class="responsive-table">
                  <thead>
                    <tr>
                        <th data-field="id">Name</th>
                        <th data-field="name">Item Name</th>
                        <th data-field="price">Item Price</th>
                        <th data-field="total">Total</th>
                        <th data-field="status">Status</th>
                    </tr>
                  </thead>
                    <tbody><tr>
                      <td>Alvin</td>
                      <td>Eclair</td>
                      <td>$0.87</td>
                      <td>$1.87</td>
                      <td>Yes</td>
                    </tr>
                    <tr>
                      <td>Alan</td>
                      <td>Jellybean</td>
                      <td>$3.76</td>
                      <td>$10.87</td>
                      <td>No</td>
                    </tr>
                    <tr>
                      <td>Jonathan</td>
                      <td>Lollipop</td>
                      <td>$7.00</td>
                      <td>$12.87</td>
                      <td>Yes</td>
                    </tr>
                    <tr>
                      <td>Shannon</td>
                      <td>KitKat</td>
                      <td>$9.99</td>
                      <td>$14.87</td>
                      <td>No</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </div>
            </div>


          </div>


          <!-- Floating Action Button -->
            <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
                <a class="btn-floating btn-large red">
                  <i class="large mdi-editor-mode-edit"></i>
                </a>
                <ul>
                  <li><a href="css-helpers.html" class="btn-floating red"><i class="large mdi-communication-live-help"></i></a></li>
                  <li><a href="app-widget.html" class="btn-floating yellow darken-1"><i class="large mdi-device-now-widgets"></i></a></li>
                  <li><a href="app-calendar.html" class="btn-floating green"><i class="large mdi-editor-insert-invitation"></i></a></li>
                  <li><a href="app-email.html" class="btn-floating blue"><i class="large mdi-communication-email"></i></a></li>
                </ul>
            </div>
            <!-- Floating Action Button -->
        </div>
        <!--end container-->

      </section>
      <!-- END CONTENT -->

      <!-- //////////////////////////////////////////////////////////////////////////// -->
      <!-- START RIGHT SIDEBAR NAV-->
      <!--<aside id="right-sidebar-nav">-->
      <!--  <ul id="chat-out" class="side-nav rightside-navigation">-->
      <!--      <li class="li-hover">-->
      <!--      <a href="#" data-activates="chat-out" class="chat-close-collapse right"><i class="mdi-navigation-close"></i></a>-->
      <!--      <div id="right-search" class="row">-->
      <!--          <form class="col s12">-->
      <!--              <div class="input-field">-->
      <!--                  <i class="mdi-action-search prefix"></i>-->
      <!--                  <input id="icon_prefix" type="text" class="validate">-->
      <!--                  <label for="icon_prefix">Search</label>-->
      <!--              </div>-->
      <!--          </form>-->
      <!--      </div>-->
      <!--      </li>-->
      <!--      <li class="li-hover">-->
      <!--          <ul class="chat-collapsible" data-collapsible="expandable">-->
      <!--          <li>-->
      <!--              <div class="collapsible-header teal white-text active"><i class="mdi-social-whatshot"></i>Recent Activity</div>-->
      <!--              <div class="collapsible-body recent-activity">-->
      <!--                  <div class="recent-activity-list chat-out-list row">-->
      <!--                      <div class="col s3 recent-activity-list-icon"><i class="mdi-action-add-shopping-cart"></i>-->
      <!--                      </div>-->
      <!--                      <div class="col s9 recent-activity-list-text">-->
      <!--                          <a href="#">just now</a>-->
      <!--                          <p>Jim Doe Purchased new equipments for zonal office.</p>-->
      <!--                      </div>-->
      <!--                  </div>-->
      <!--                  <div class="recent-activity-list chat-out-list row">-->
      <!--                      <div class="col s3 recent-activity-list-icon"><i class="mdi-device-airplanemode-on"></i>-->
      <!--                      </div>-->
      <!--                      <div class="col s9 recent-activity-list-text">-->
      <!--                          <a href="#">Yesterday</a>-->
      <!--                          <p>Your Next flight for USA will be on 15th August 2015.</p>-->
      <!--                      </div>-->
      <!--                  </div>-->
      <!--                  <div class="recent-activity-list chat-out-list row">-->
      <!--                      <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>-->
      <!--                      </div>-->
      <!--                      <div class="col s9 recent-activity-list-text">-->
      <!--                          <a href="#">5 Days Ago</a>-->
      <!--                          <p>Natalya Parker Send you a voice mail for next conference.</p>-->
      <!--                      </div>-->
      <!--                  </div>-->
      <!--                  <div class="recent-activity-list chat-out-list row">-->
      <!--                      <div class="col s3 recent-activity-list-icon"><i class="mdi-action-store"></i>-->
      <!--                      </div>-->
      <!--                      <div class="col s9 recent-activity-list-text">-->
      <!--                          <a href="#">Last Week</a>-->
      <!--                          <p>Jessy Jay open a new store at S.G Road.</p>-->
      <!--                      </div>-->
      <!--                  </div>-->
      <!--                  <div class="recent-activity-list chat-out-list row">-->
      <!--                      <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>-->
      <!--                      </div>-->
      <!--                      <div class="col s9 recent-activity-list-text">-->
      <!--                          <a href="#">5 Days Ago</a>-->
      <!--                          <p>Natalya Parker Send you a voice mail for next conference.</p>-->
      <!--                      </div>-->
      <!--                  </div>-->
      <!--              </div>-->
      <!--          </li>-->
      <!--          <li>-->
      <!--              <div class="collapsible-header light-blue white-text active"><i class="mdi-editor-attach-money"></i>Sales Repoart</div>-->
      <!--              <div class="collapsible-body sales-repoart">-->
      <!--                  <div class="sales-repoart-list  chat-out-list row">-->
      <!--                      <div class="col s8">Target Salse</div>-->
      <!--                      <div class="col s4"><span id="sales-line-1"></span>-->
      <!--                      </div>-->
      <!--                  </div>-->
      <!--                  <div class="sales-repoart-list chat-out-list row">-->
      <!--                      <div class="col s8">Payment Due</div>-->
      <!--                      <div class="col s4"><span id="sales-bar-1"></span>-->
      <!--                      </div>-->
      <!--                  </div>-->
      <!--                  <div class="sales-repoart-list chat-out-list row">-->
      <!--                      <div class="col s8">Total Delivery</div>-->
      <!--                      <div class="col s4"><span id="sales-line-2"></span>-->
      <!--                      </div>-->
      <!--                  </div>-->
      <!--                  <div class="sales-repoart-list chat-out-list row">-->
      <!--                      <div class="col s8">Total Progress</div>-->
      <!--                      <div class="col s4"><span id="sales-bar-2"></span>-->
      <!--                      </div>-->
      <!--                  </div>-->
      <!--              </div>-->
      <!--          </li>-->
      <!--          <li>-->
      <!--              <div class="collapsible-header red white-text"><i class="mdi-action-stars"></i>Favorite Associates</div>-->
      <!--              <div class="collapsible-body favorite-associates">-->
      <!--                  <div class="favorite-associate-list chat-out-list row">-->
      <!--                      <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">-->
      <!--                      </div>-->
      <!--                      <div class="col s8">-->
      <!--                          <p>Eileen Sideways</p>-->
      <!--                          <p class="place">Los Angeles, CA</p>-->
      <!--                      </div>-->
      <!--                  </div>-->
      <!--                  <div class="favorite-associate-list chat-out-list row">-->
      <!--                      <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">-->
      <!--                      </div>-->
      <!--                      <div class="col s8">-->
      <!--                          <p>Zaham Sindil</p>-->
      <!--                          <p class="place">San Francisco, CA</p>-->
      <!--                      </div>-->
      <!--                  </div>-->
      <!--                  <div class="favorite-associate-list chat-out-list row">-->
      <!--                      <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">-->
      <!--                      </div>-->
      <!--                      <div class="col s8">-->
      <!--                          <p>Renov Leongal</p>-->
      <!--                          <p class="place">Cebu City, Philippines</p>-->
      <!--                      </div>-->
      <!--                  </div>-->
      <!--                  <div class="favorite-associate-list chat-out-list row">-->
      <!--                      <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">-->
      <!--                      </div>-->
      <!--                      <div class="col s8">-->
      <!--                          <p>Weno Carasbong</p>-->
      <!--                          <p>Tokyo, Japan</p>-->
      <!--                      </div>-->
      <!--                  </div>-->
      <!--                  <div class="favorite-associate-list chat-out-list row">-->
      <!--                      <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">-->
      <!--                      </div>-->
      <!--                      <div class="col s8">-->
      <!--                          <p>Nusja Nawancali</p>-->
      <!--                          <p class="place">Bangkok, Thailand</p>-->
      <!--                      </div>-->
      <!--                  </div>-->
      <!--              </div>-->
      <!--          </li>-->
      <!--          </ul>-->
      <!--      </li>-->
      <!--  </ul>-->
      <!--</aside>-->
      <!-- LEFT RIGHT SIDEBAR NAV-->

    </div>
    <!-- END WRAPPER -->

  </div>
  <!-- END MAIN -->



  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <?php require_once("footer.php"); ?>
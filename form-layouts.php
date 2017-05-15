
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
                <h5 class="breadcrumbs-title">Forms</h5>
                <ol class="breadcrumb">
                  <li><a href="index-2.html">Dashboard</a>
                  </li>
                  <li><a href="#">Forms</a>
                  </li>
                  <li class="active">Forms Layouts</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->


        <!--start container-->
        <div class="container">
          <div class="section">

            <p class="caption">Includes predefined classes for easy layout options.</p>

            <div class="divider"></div>
            <!--Basic Form-->
            <div id="basic-form" class="section">
              <div class="row">
                <div class="col s12 m12 l6">
                  <div class="card-panel">
                    <h4 class="header2">Basic Form</h4>
                    <div class="row">
                      <form class="col s12">
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="name" type="text">
                            <label for="first_name">Name</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="email" type="email">
                            <label for="email">Email</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="password" type="password">
                            <label for="password">Password</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <textarea id="message" class="materialize-textarea"></textarea>
                            <label for="message">Message</label>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                                <i class="mdi-content-send right"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- Form with placeholder -->
                <div class="col s12 m12 l6">
                  <div class="card-panel">
                    <h4 class="header2">Form with placeholder</h4>
                    <div class="row">
                      <form class="col s12">
                        <div class="row">
                          <div class="input-field col s12">
                            <input placeholder="John Doe" id="name2" type="text">
                            <label for="first_name">Name</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input placeholder="john@domainname.com" id="email2" type="email">
                            <label for="email">Email</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input placeholder="YourPassword" id="password2" type="password">
                            <label for="password">Password</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <textarea placeholder="Oh WoW! Let me check this one too." id="message2" class="materialize-textarea"></textarea>
                            <label for="message">Message</label>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                                <i class="mdi-content-send right"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Form with icon prefixes -->
            <div class="row">
              <div class="col s12 m12 l6">
                <div class="card-panel">
                  <h4 class="header2">Form with icon prefixes</h4>
                  <div class="row">
                    <form class="col s12">
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-action-account-circle prefix"></i>
                          <input id="name3" type="text">
                          <label for="first_name">Name</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-communication-email prefix"></i>
                          <input id="email3" type="email">
                          <label for="email">Email</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-action-lock-outline prefix"></i>
                          <input id="password3" type="password">
                          <label for="password">Password</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-action-question-answer prefix"></i>
                          <textarea id="message3" class="materialize-textarea"></textarea>
                          <label for="message">Message</label>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                              <i class="mdi-content-send right"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- Form with validation -->
              <div class="col s12 m12 l6">
                <div class="card-panel">
                  <h4 class="header2">Form with validation</h4>
                  <div class="row">
                    <form class="col s12">
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-action-account-circle prefix"></i>
                          <input id="name4" type="text" class="validate">
                          <label for="first_name">Name</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-communication-email prefix"></i>
                          <input id="email4" type="email" class="validate">
                          <label for="email">Email</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-action-lock-outline prefix"></i>
                          <input id="password5" type="password" class="validate">
                          <label for="password">Password</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-action-question-answer prefix"></i>
                          <textarea id="message4" class="materialize-textarea validate" length="120"></textarea>
                          <label for="message">Message</label>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                              <i class="mdi-content-send right"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Inline Form -->
          <div class="row">
            <div class="col s12 m12 l12">
              <div class="card-panel">
                <div class="row">
                <form class="col s12">
                  <h4 class="header2">Inline form</h4>
                  <div class="row">
                    <div class="input-field col s4">
                      <i class="mdi-action-account-circle prefix"></i>
                      <input id="icon_prefix" type="text" class="validate">
                      <label for="icon_prefix">First Name</label>
                    </div>
                    <div class="input-field col s4">
                      <i class="mdi-action-lock-outline prefix"></i>
                      <input id="icon_password" type="password" class="validate">
                      <label for="icon_password">Password</label>
                    </div>
                    <div class="input-field col s4">
                      <div class="input-field col s12">
                        <button class="btn cyan waves-effect waves-light" type="submit" name="action"><i class="mdi-action-lock-open"></i> Login</button>
                      </div>
                    </div>
                  </div>
                </form>
                </div>
              </div>
            </div>
          </div>
          <!-- Inline form with placeholder -->
          <div class="row">
            <div class="col s12 m12 l12">
              <div class="card-panel">
                <div class="row">
                <form class="col s12">
                  <h4 class="header2">Inline form with placeholder</h4>
                  <div class="row">
                    <div class="input-field col s4">
                      <i class="mdi-action-account-circle prefix"></i>
                      <input placeholder="John Doe" id="icon_prefix2" type="text" class="validate">
                      <label for="icon_prefix">First Name</label>
                    </div>
                    <div class="input-field col s4">
                      <i class="mdi-communication-email prefix"></i>
                      <input placeholder="john@mydomain.com" id="icon_email" type="email" class="validate">
                      <label for="icon_email">Email</label>
                    </div>
                    <div class="input-field col s4">
                      <div class="input-field col s12">
                        <button class="btn cyan waves-effect waves-light" type="submit" name="action"><i class="mdi-action-perm-identity"></i> Register</button>
                      </div>
                    </div>
                  </div>
                </form>
                </div>
              </div>
            </div>
          </div>

          <!--Form Advance-->          
          <div class="row">
            <div class="col s12 m12 l12">
              <div class="card-panel">
                <h4 class="header2">Form Advance</h4>
                <div class="row">
                  <form class="col s12">
                    <div class="row">
                      <div class="input-field col s6">
                        <input id="first_name" type="text">
                        <label for="first_name">First Name</label>
                      </div>
                    
                      <div class="input-field col s6">
                        <input id="last_name" type="text">
                        <label for="last_name">Last Name</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="email5" type="email">
                        <label for="email">Email</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="password6" type="password">
                        <label for="password">Password</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s6">
                        <select>
                          <option value="" disabled selected>Choose your profile</option>
                          <option value="1">Manager</option>
                          <option value="2">Developer</option>
                          <option value="3">Business</option>
                        </select>
                        <label>Select Profile</label>
                      </div>                        
                      <div class="input-field col s6">
                        <input type="date" class="datepicker">
                        <label for="dob">DOB</label>
                      </div>
                      
                    </div>
                    
                    <div class="row">
                      <div class="file-field input-field col s6">
                        <input class="file-path validate" type="text"/>
                        <div class="btn">
                          <span>Age</span>
                          <input type="file" />
                        </div>
                      </div>
                      <div class="input-field col s6">                          
                         <span>Image</span>
                         <p class="range-field">
                          <input type="range" id="test5" min="0" max="100" />
                        </p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <textarea id="message5" class="materialize-textarea" length="120"></textarea>
                        <label for="message">Message</label>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                            <i class="mdi-content-send right"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
      </div>
  </section>
  <!-- END CONTENT -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->
  <!-- START RIGHT SIDEBAR NAV-->
  <!--<aside id="right-sidebar-nav">-->
  <!--      <ul id="chat-out" class="side-nav rightside-navigation">-->
  <!--          <li class="li-hover">-->
  <!--          <a href="#" data-activates="chat-out" class="chat-close-collapse right"><i class="mdi-navigation-close"></i></a>-->
  <!--          <div id="right-search" class="row">-->
  <!--              <form class="col s12">-->
  <!--                  <div class="input-field">-->
  <!--                      <i class="mdi-action-search prefix"></i>-->
  <!--                      <input id="icon_prefix3" type="text" class="validate">-->
  <!--                      <label for="icon_prefix">Search</label>-->
  <!--                  </div>-->
  <!--              </form>-->
  <!--          </div>-->
  <!--          </li>-->
  <!--          <li class="li-hover">-->
  <!--              <ul class="chat-collapsible" data-collapsible="expandable">-->
  <!--              <li>-->
  <!--                  <div class="collapsible-header teal white-text active"><i class="mdi-social-whatshot"></i>Recent Activity</div>-->
  <!--                  <div class="collapsible-body recent-activity">-->
  <!--                      <div class="recent-activity-list chat-out-list row">-->
  <!--                          <div class="col s3 recent-activity-list-icon"><i class="mdi-action-add-shopping-cart"></i>-->
  <!--                          </div>-->
  <!--                          <div class="col s9 recent-activity-list-text">-->
  <!--                              <a href="#">just now</a>-->
  <!--                              <p>Jim Doe Purchased new equipments for zonal office.</p>-->
  <!--                          </div>-->
  <!--                      </div>-->
  <!--                      <div class="recent-activity-list chat-out-list row">-->
  <!--                          <div class="col s3 recent-activity-list-icon"><i class="mdi-device-airplanemode-on"></i>-->
  <!--                          </div>-->
  <!--                          <div class="col s9 recent-activity-list-text">-->
  <!--                              <a href="#">Yesterday</a>-->
  <!--                              <p>Your Next flight for USA will be on 15th August 2015.</p>-->
  <!--                          </div>-->
  <!--                      </div>-->
  <!--                      <div class="recent-activity-list chat-out-list row">-->
  <!--                          <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>-->
  <!--                          </div>-->
  <!--                          <div class="col s9 recent-activity-list-text">-->
  <!--                              <a href="#">5 Days Ago</a>-->
  <!--                              <p>Natalya Parker Send you a voice mail for next conference.</p>-->
  <!--                          </div>-->
  <!--                      </div>-->
  <!--                      <div class="recent-activity-list chat-out-list row">-->
  <!--                          <div class="col s3 recent-activity-list-icon"><i class="mdi-action-store"></i>-->
  <!--                          </div>-->
  <!--                          <div class="col s9 recent-activity-list-text">-->
  <!--                              <a href="#">Last Week</a>-->
  <!--                              <p>Jessy Jay open a new store at S.G Road.</p>-->
  <!--                          </div>-->
  <!--                      </div>-->
  <!--                      <div class="recent-activity-list chat-out-list row">-->
  <!--                          <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>-->
  <!--                          </div>-->
  <!--                          <div class="col s9 recent-activity-list-text">-->
  <!--                              <a href="#">5 Days Ago</a>-->
  <!--                              <p>Natalya Parker Send you a voice mail for next conference.</p>-->
  <!--                          </div>-->
  <!--                      </div>-->
  <!--                  </div>-->
  <!--              </li>-->
  <!--              <li>-->
  <!--                  <div class="collapsible-header light-blue white-text active"><i class="mdi-editor-attach-money"></i>Sales Repoart</div>-->
  <!--                  <div class="collapsible-body sales-repoart">-->
  <!--                      <div class="sales-repoart-list  chat-out-list row">-->
  <!--                          <div class="col s8">Target Salse</div>-->
  <!--                          <div class="col s4"><span id="sales-line-1"></span>-->
  <!--                          </div>-->
  <!--                      </div>-->
  <!--                      <div class="sales-repoart-list chat-out-list row">-->
  <!--                          <div class="col s8">Payment Due</div>-->
  <!--                          <div class="col s4"><span id="sales-bar-1"></span>-->
  <!--                          </div>-->
  <!--                      </div>-->
  <!--                      <div class="sales-repoart-list chat-out-list row">-->
  <!--                          <div class="col s8">Total Delivery</div>-->
  <!--                          <div class="col s4"><span id="sales-line-2"></span>-->
  <!--                          </div>-->
  <!--                      </div>-->
  <!--                      <div class="sales-repoart-list chat-out-list row">-->
  <!--                          <div class="col s8">Total Progress</div>-->
  <!--                          <div class="col s4"><span id="sales-bar-2"></span>-->
  <!--                          </div>-->
  <!--                      </div>-->
  <!--                  </div>-->
  <!--              </li>-->
  <!--              <li>-->
  <!--                  <div class="collapsible-header red white-text"><i class="mdi-action-stars"></i>Favorite Associates</div>-->
  <!--                  <div class="collapsible-body favorite-associates">-->
  <!--                      <div class="favorite-associate-list chat-out-list row">-->
  <!--                          <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">-->
  <!--                          </div>-->
  <!--                          <div class="col s8">-->
  <!--                              <p>Eileen Sideways</p>-->
  <!--                              <p class="place">Los Angeles, CA</p>-->
  <!--                          </div>-->
  <!--                      </div>-->
  <!--                      <div class="favorite-associate-list chat-out-list row">-->
  <!--                          <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">-->
  <!--                          </div>-->
  <!--                          <div class="col s8">-->
  <!--                              <p>Zaham Sindil</p>-->
  <!--                              <p class="place">San Francisco, CA</p>-->
  <!--                          </div>-->
  <!--                      </div>-->
  <!--                      <div class="favorite-associate-list chat-out-list row">-->
  <!--                          <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">-->
  <!--                          </div>-->
  <!--                          <div class="col s8">-->
  <!--                              <p>Renov Leongal</p>-->
  <!--                              <p class="place">Cebu City, Philippines</p>-->
  <!--                          </div>-->
  <!--                      </div>-->
  <!--                      <div class="favorite-associate-list chat-out-list row">-->
  <!--                          <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">-->
  <!--                          </div>-->
  <!--                          <div class="col s8">-->
  <!--                              <p>Weno Carasbong</p>-->
  <!--                              <p>Tokyo, Japan</p>-->
  <!--                          </div>-->
  <!--                      </div>-->
  <!--                      <div class="favorite-associate-list chat-out-list row">-->
  <!--                          <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">-->
  <!--                          </div>-->
  <!--                          <div class="col s8">-->
  <!--                              <p>Nusja Nawancali</p>-->
  <!--                              <p class="place">Bangkok, Thailand</p>-->
  <!--                          </div>-->
  <!--                      </div>-->
  <!--                  </div>-->
  <!--              </li>-->
  <!--              </ul>-->
  <!--          </li>-->
  <!--      </ul>-->
  <!--    </aside>-->
  <!-- LEFT RIGHT SIDEBAR NAV-->

  </div>
  <!-- END WRAPPER -->

  </div>
  <!-- END MAIN -->



  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START FOOTER -->
  <footer class="page-footer">
    <div class="footer-copyright">
      <div class="container">
        <span>Copyright © 2015 <a class="grey-text text-lighten-4" href="http://themeforest.net/user/geekslabs/portfolio?ref=geekslabs" target="_blank">GeeksLabs</a> All rights reserved.</span>
        <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="http://geekslabs.com/">GeeksLabs</a></span>
        </div>
    </div>
  </footer>
  <!-- END FOOTER -->



    <?php require_once("footer.php"); ?>
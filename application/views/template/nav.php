<div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                    <a class="navbar-brand" href="<?php echo site_url('home')?>">ELSE<span>Web</span></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="<?php echo isActive($pageName,"home")?>"><a href="<?php echo site_url('home') ?>">Home</a></li>
                        <li class="<?php echo isActive($pageName,"linkeddata")?>"><a href="<?php echo site_url('linkeddata') ?>">Linked Data</a></li>
                        <li class="<?php echo isActive($pageName,"demo")?>"><a href="<?php echo site_url('demo') ?>">Demo</a></li>
                        <li class="<?php echo isActive($pageName,"experiments")?>"><a href="<?php echo site_url('experiments') ?>">Experiments</a></li>
                        <li class="<?php echo isActive($pageName,"ontologies")?>"><a href="<?php echo site_url('ontologies') ?>">Ontologies</a></li>
                        <li class="<?php echo isActive($pageName,"services")?>"><a href="<?php echo site_url('services') ?>">Services</a></li>
                        <li class="<?php echo isActive($pageName,"team")?>"><a href="<?php echo site_url('team') ?>">Team</a></li>          
                        <li class="<?php echo isActive($pageName,"publications")?>"><a href="<?php echo site_url('publications') ?>">Publications</a></li>

                       <?php if(!$this->session->userdata('is_logged_in')) { ?>
                        <li class="dropdown <?php echo isActive($pageName,"login/new_user")?>" id="menuLogin">
                          <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="navLogin">Login <b class="caret"></b></a>
                          <div class="dropdown-menu pull-right" style="padding:10px;">
                            <form  role="form" method="post" id="loginForm" name="loginForm" onsubmit="userLogin('<?php echo site_url('login')?>'); return false">
                             <fieldset>
                             <div class="form-group">
                                <input type="text" placeholder="Username" style="margin-top: 4px" id="username" name="username"/>
                             </div>
                             <div class="form-group">
                                 <input type="password" placeholder="Password"  style="margin-top: 4px" id="password" name="password"/><br/>
                             </div>
                             </fieldset>
                             <hr/>
                             <input type="submit" value="Login"  class="btn-small btn-default pull-right"/>                    
                            </form>
                              
                              <a href="<?php echo site_url('register')?>">
                                  <input type="button" style="margin-right: 10px;" value="Register"  class="btn-small btn-default pull-right"/>
                              </a>
                          </div>
                        </li>
                       <?php } else {?>
                       <li class="dropdown" id="userMenu">  
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="userName"><?php echo $this->session->userdata('username') ?> <b class="caret"></b></a>    
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url('history') ?>">Experiment History</a></li>
                                <li><a href="<?php echo site_url('login/logout_ci') ?>">Logout</a></li>                             
                            </ul>
                       </li> 
                       <?php } ?> 
                        
                        <!--
                        <li class="<?php echo isActive($pageName,"contacts")?>"><a href="<?php echo site_url('contacts') ?>">Contacts</a></li>
                       
                        <li class="<?php echo isActive($pageName,"login")?>"><a href="<?php echo site_url('dashboard/login') ?>">Login</a></li>
                        <li><input type="text" placeholder=" Search" class="form-control search"></li>-->
                    </ul>
                </div>
            </div>

<div id="wt-sidebarwrapper" class="wt-sidebarwrapper">
					<div id="wt-btnmenutoggle" class="wt-btnmenutoggle">
						<span class="menu-icon">
							<em></em>
							<em></em>
							<em></em>
						</span>
					</div>
					<div id="wt-verticalscrollbar" class="wt-verticalscrollbar">
						<div class="wt-companysdetails wt-usersidebar">
							<figure class="wt-companysimg">
								<img src="images/sidebar/img-01.jpg" alt="img description">
							</figure>
							<?php 
							$sql="select *from `register_user` where username='".$_SESSION["serviceusr"]."'  "; 
                            $result=mysqli_query($con,$sql);
							$row=mysqli_fetch_assoc($result);
							?>
							<div class="wt-companysinfo">
								<figure><?php if($row["profile_img"]==""){?><img src="images/<?php echo $row["no_image"]; ?>" alt="img description"><?php }else{  ?> <img src="<?php echo $row["profile_img"]; ?>" alt="img description"> <?php } ?> </figure>
								<div class="wt-title">
									<h2><a href="javascript:void(0);"><?php echo $row["mname"]." ".$row["lname"]; ?> </a></h2>
									<!--<span>Amento Tech</span>-->
								</div>
								
								<?php if($_SESSION["serviceusrtyp"]=="c"){ ?>
								<div class="wt-btnarea"><a href="post-job.php" class="wt-btn">Post a Job</a></div>
								<?php }else{ ?>
                                <div class="wt-btnarea"><a href="my-job.php" class="wt-btn">My Job</a></div>
                                <?php } ?>								
								
							</div>
						</div>
						<nav id="wt-navdashboard" class="wt-navdashboard">
							<ul>
								<li class="menu-item-has-children">
									<a href="dashboard.php">
										<i class="ti-dashboard"></i>
										<span>Dashboard</span>
									</a>
									<!--<ul class="sub-menu">
										<li><hr><a href="dashboard-insights.html">Insights</a></li>
										<li><hr><a href="dashboard-insightsuser.html">Insights User</a></li>
									</ul>-->
								</li>
								
								<?php if($_SESSION["serviceusrtyp"]=="c"){ ?>								
								<li class="wt-active">
									<a href="update-profile.php">
										<i class="ti-briefcase"></i>
										<span>My Profile</span>
									</a>
								</li>
								<?php }else{?>
								
								<li class="wt-active">
									<a href="update-profile2.php">
										<i class="ti-briefcase"></i>
										<span>My Profile</span>
									</a>
								</li>
								
								
								<?php } ?>	
								
								
								<?php if($_SESSION["serviceusrtyp"]=="c"){ ?>
								
								<li class="menu-item-has-children">
									<a href="javascript:void(0);">
										<i class="ti-package"></i>
										<span>All Jobs</span>
									</a>
									<ul class="sub-menu">
										<li><hr><a href="my-posted-job.php">Viw all Jobs</a></li>
										<li><hr><a href="post-job.php">Post a Job</a></li>										
									</ul>
								</li>
								<?php } ?>
								
								<?php if($_SESSION["serviceusrtyp"]=="f"){ ?>
								
								<li class="menu-item-has-children">
									<a href="javascript:void(0);">
										<i class="ti-package"></i>
										<span>All Jobs</span>
									</a>
									<ul class="sub-menu">
										<li><hr><a href="my-job.php">My Applied Jobs</a></li>
										<li><hr><a href="index.php">Brows Jobs</a></li>	
                                        <li><hr><a href="my-favorite-job.php">Favorite Jobs</a></li>											
									</ul>
								</li>
								<?php } ?>
								
								<li>
									<a href="message-admin.php">
										<i class="ti-anchor"></i>
										<span>Message Admin</span>
									</a>
								</li>
								
								<?php if($_SESSION["serviceusrtyp"]=="f"){ ?>
								
								<li class="menu-item-has-children">
									<a href="javascript:void(0);">
										<i class="ti-package"></i>
										<span>Wallet</span>
									</a>
									<ul class="sub-menu">
										<li><hr><a href="add-credit.php">Add Credit</a></li>
										<li><hr><a href="view-transaction.php">Transaction Histry</a></li>	
                                        <li><hr><a href="my-wallet-balance.php">View Balance</a></li>											
									</ul>
								</li>
								<?php } ?>
								
								<li>
									<a href="reset-password.php">
										<i class="ti-anchor"></i>
										<span>Password Settings</span>
									</a>
								</li>
								
								<li>
									<a href="support.php">
										<i class="ti-tag"></i>
										<span>Help &amp; Support</span>
									</a>
								</li>
								<li>
									<a href="logout.php">
										<i class="ti-shift-right"></i>
										<span>Logout</span>
									</a>
								</li>
								
								
							</ul>
						</nav>
						<div class="wt-navdashboard-footer">
							<span>vshopi5 © <?php echo date('yy'); ?> All Rights Reserved.</span>
						</div>
					</div>
				</div>
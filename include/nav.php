<!doctype html>
<html lang="en">

 <div class="app-header header-shadow bg-primary header-text-light">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
			
			
			
            <div class="app-header__mobile-menu ">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
			
			
			
            <div class="app-header__menu" >
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    
			
			<!--Header-->
			
			<!--Icons Left-->
			<div class="app-header__content">
               <div class="widget-content-left  ml-3 " >
                                 
								
								 
                                </div>
				
				<!--Dropdown Account-->
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                               <?php echo date("l M/d/Y")?> 
											 
										
											
											<img width="42" class="rounded-circle" src="assets/images/logo_1.png" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                    
                                            
											
											
											<!--Logout-->
				
											
											
                                           <a href="logout.php"><button type="button" tabindex="0" class="dropdown-item">Logout</button></a>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>       
				</div>
            </div>
        </div>   
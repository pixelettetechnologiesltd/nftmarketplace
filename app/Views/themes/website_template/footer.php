<!-- Start footer -->
        <footer class="main-footer position-relative" style="background-image: url(<?php echo base_url().$settings->footer_bg_img; ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-xl-3 mb-5">
                        <div class="footer-about">
                            <!-- Footer logo -->
                            <div class="footer-logo mb-4">
                                <a href="<?php echo base_url(); ?>">
                                     <img src="<?php echo base_url().$settings->logo; ?>">
                                </a>
                            </div>
                            <p><?php echo esc($settings->description); ?></p>
                            <a class="email-link d-inline" href="mailto:bdtask@gmail.com"><?php echo esc($settings->email); ?></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-xl-8 offset-xl-1">
                        <div class="row">
                            <div class="col-6 col-md-3 mb-3 mb-lg-0">
                                <h3 class="link-title fs-18 mb-3 font-weight-600 position-relative text-white">
                                   <?php echo display('Search'); ?> 
                                </h3>
                                <!-- Footer nav link -->
                                <ul class="footer-link list-unstyled menu">
                                    <li><a href="<?php echo base_url('all'); ?>" class="link d-block font-weight-500"><?php echo display('All_NFTs'); ?></a></li>
                                     <?php foreach ($categories as $key => $category) {  
                                         echo '<li><a href="'.base_url("category").'/'.esc($category->slug).'" class="link d-block font-weight-500">'.esc($category->cat_name).'</a></li>';
                                         if($key == 3){
                                            break;
                                         }
                                    } ?>
                                </ul>
                            </div>
                            <div class="col-6 col-md-3 mb-3 mb-sm-0">
                                <h3 class="link-title fs-18 mb-3 font-weight-600 position-relative text-white"><?php echo display('About_Us'); ?></h3>
                                <!-- Footer nav link -->
                                <ul class="footer-link list-unstyled menu">
                                    <li><a href="<?php echo base_url('about') ?>" class="link d-block font-weight-500"><?php echo display('About'); ?></a></li>
                                    <li><a href="<?php echo base_url('contact') ?>" class="link d-block font-weight-500"><?php echo display('Contact'); ?></a></li>
                                    <li><a href="<?php echo base_url('faq') ?>" class="link d-block font-weight-500"><?php echo display('FAQ'); ?></a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-md-6 mt-5 mt-md-0">
                                 
                                <h3 class="link-title fs-18 mb-3 font-weight-600 position-relative text-white"><?php echo display('Join_our_community'); ?>
                                </h3>
                                <!-- Social link -->
                                <ul class="d-flex list-unstyled social-link">
                                    <?php foreach($social_link as $value){ ?>
                                    <li>
                                        <a href="<?php echo esc($value->link) ?>">
                                            <i class="fab fa-<?php echo esc($value->icon) ?>"></i>
                                        </a>
                                    </li>
                                    <?php } ?>
                                </ul>
                                <div class="language-inner mt-4">
                                    <h3 class="link-title fs-18 mb-3 font-weight-600 position-relative text-white"><?php echo display('Change Language'); ?>
                                    </h3>
                                     
                                    <select class="form-select" id="language">
                                        <?php foreach($languages as $key => $language){
                                                $url        = base_url('home/langChange'); 
                                                $selected   = ($lang == $key) ? "selected" : ""; 
                                                echo "<option value='$key' data-url='$url' $selected > $language </option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Sub footer -->
        <div class="mt-0 py-3 sub-footer">
                <div class="container">
                <div class="d-sm-flex flex-wrap justify-content-sm-between">
                    <ul class="nav footer-sub-nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('terms') ?>"><?php echo display('Terms'); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('privacy-policy') ?>"><?php echo display('Privacy_policy'); ?></a>
                        </li>
                       
                    </ul>
                    <div class="copy mb-2 mb-sm-0"><?php echo esc($settings->footer_text); ?></div>
                </div>
            </div>
        </div>
    </div>
    <!-- offcanvas -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel"><?php echo display('Connect wallet'); ?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <p> <?php echo display('Please connect your metamask. If you don\'t have a metamask yet, you can install now.'); ?></p>
            <button type="button" class="align-items-center btn btn-wallet d-flex fw-semi-bold mb-1 px-4 py-2 w-100" id="connect_wallet">
                <img src="<?php echo base_url('/public/assets/images/metamsak.svg'); ?>" alt="">
                <span class="ms-2"><?php echo display('Connect MetaMask'); ?></span>
            </button>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <script src="<?php echo base_url(); ?>/public/assets/plugins/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="<?php echo esc($frontendAssets); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo esc($frontendAssets); ?>/plugins/smooth-scrollbar/dist/smooth-scrollbar.js"></script>
    <script src="<?php echo esc($frontendAssets); ?>/plugins/smooth-scrollbar/dist/plugins/overscroll.js"></script>
    <script src="<?php echo esc($frontendAssets); ?>/plugins/OwlCarousel2/owl.carousel.min.js"></script> 
    <script src="<?php echo esc($frontendAssets); ?>/plugins/Magnific-Popup/jquery.magnific-popup.min.js"></script>  
 
    <script src="<?php echo esc($frontendAssets); ?>/js/detect-provider.min.js"></script>
    <script src="<?php echo esc($frontendAssets); ?>/js/ethers-5.2.umd.min.js"></script> 
    
    <script src="<?php echo esc($frontendAssets); ?>/js/abi.js"></script>
    <script src="<?php echo esc($frontendAssets); ?>/js/custom.js"></script>  
    <script src="<?php echo esc($frontendAssets); ?>/js/wallet.js"></script>
    
</body>

</html>



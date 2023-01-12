<?php

if(!isset($routes))
{ 
    $routes = \Config\Services::routes(true);
}

$routes->group('/', ['namespace' => 'App\Modules\Website\Controllers'], function($subroutes){

    /*** Route for Website ***/
        $subroutes->add('', 'Home::index');
        $subroutes->add('home', 'Home::index');
       
        $subroutes->add('signup', 'Home::register');
        $subroutes->add('user/signin', 'Home::login');
        $subroutes->add('home/forgotPassword', 'Home::forgotPassword');
        
        $subroutes->add('about', 'Home::about');
       
        $subroutes->add('faq', 'Home::faq');
        $subroutes->add('terms', 'Home::terms');
        $subroutes->add('privacy-policy', 'Home::privacy');
       
        $subroutes->add('contact', 'Home::contact');
        $subroutes->add('contactMsg', 'Home::contactMsg');
        $subroutes->add('internal_api/getStream', 'Internal_api::getStream');
        $subroutes->add('nfts/Request', 'Home::request_NFT');
        $subroutes->add('nfts/hire_designer','Home::hire_designer');
        $subroutes->add('nft/request_Designer','Home::designer_req');
        $subroutes->add('nft/req_form', 'Home::req_form');
        $subroutes->add('resetPassword', 'Home::resetPassword');
        $subroutes->add('logout', 'Home::logout');
        $subroutes->add('logout-action', 'Home::logout_action');
        $subroutes->add('internal_api/settings', 'Internal_api::settings');
        $subroutes->add('home/langChange', 'Home::langChange');
        $subroutes->add('home/activeAcc/(:any)', 'Home::activeAcc/$1'); 
        $subroutes->add('nft/asset/details/(:any)', 'Home::nft_details/$1'); 
        $subroutes->add('nft/sale/confirm/(:any)', 'Home::saleConfirm/$1'); 
        $subroutes->add('nft/today_auction_close', 'Home::todayBidAcceptation/$1'); 
        $subroutes->add('user/checkemail/(:any)', 'Home::checkEmail/$1'); 
        $subroutes->add('user/check_username/(:any)', 'Home::checkUsername/$1'); 
        $subroutes->add('user/stack-nft', 'Home::stackNFT');
        $subroutes->add('user/nft_stack/(:any)', 'Home::nft_stack/$1');
        $subroutes->add('favourite_items/(:any)', 'Home::favouriteItems/$1'); 
        $subroutes->add('collection/(:any)', 'Home::collectionWiseNfts/$1'); 
        
        $subroutes->add('category/(:any)', 'Home::categoryWiseNfts/$1'); 

        $subroutes->add('nft/(:any)', 'Home::userWiseNfts/$1'); 
        $subroutes->add('all/', 'Home::all_nfts');

        $subroutes->add('ajax_coll_nfts/(:any)', 'Home::ajax_coll_nfts/$1'); 
        $subroutes->add('ajax_cat_nfts/(:any)', 'Home::ajax_cat_nfts/$1'); 

        $subroutes->add('ajax_user_nfts/(:any)', 'Home::ajax_user_nfts/$1'); 
        $subroutes->add('ajax_all_nfts/(:any)', 'Home::ajax_all_nfts/$1'); 
        $subroutes->add('search/(:any)', 'Home::autocomplete_search/$1'); 
        $subroutes->add('activity', 'Home::get_nft_activity/$1'); 
        $subroutes->add('rtanking', 'Home::get_nft_rtankings/$1');  
        $subroutes->add('get_token_info', 'Home::get_trx_info/$1');  
        $subroutes->add('login-action', 'Home::login_action');  
        $subroutes->add('network-update', 'Home::network_update');
        $subroutes->add('save-auction-tnx', 'Home::saveAuctionTnxInfo');
    
});

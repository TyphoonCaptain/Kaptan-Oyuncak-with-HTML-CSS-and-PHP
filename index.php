<?php

require_once 'helper/config.php';
$meta = array(
	"title" => settings("baslik"),
	"description" => settings("description"),
	"keywords" => settings("keywords"),
	"image" => URL."/inc/images/OnlyLogoDesign.jpg",
	"url" => URL
	);
require_once 'inc/header.php';

?>

<header>
    <div class="container-fluid">
        <div class="top_box">
            <div class="row">
                
                <div class="col-md-3">
                    <div class="head_logo">
                        <a href="#"><img src="inc/images/KOLogo.png"></a>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="head_search">
                        <input type="text" placeholder="Search...">
                        <a href="#"><i class='bx bx-search'></i></a>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="head_right">
                        <div class="head_uye">
                            <a href="#">Üye Girişi</a>
                            <a href="#">Üye Ol</a>
                        </div>
                        <div id="header_card" class="head_cart">
                            <a href="#"><i class='bx bx-cart-alt'></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-12">
                    <div class="head_menu">
                        <ul class="main_ul">
                            <li id="popup_menu" class="main_li">
                                <a href="#">Kategoriler <i class='bx bx-menu-alt-right' ></i></a>
                            
                                <ul class="li_ul">
                                   <li class="ul_li">
                                       <a href="#">Oyuncak Setleri <i class='bx bxs-chevron-right'></i></a>
                                       <ul class="sub_ul">
                                            <li><a href="#"><i class='bx bxs-up-arrow'></i>Erkek Oyun Setleri</a></li>
                                            <li><a href="#"><i class='bx bxs-down-arrow'></i>Kız Oyun Setleri</a></li>
                                       </ul>
                                    </li>
                                   <li class="ul_li">
                                       <a href="#">Açık Hava, Deniz ve Spor <i class='bx bxs-chevron-right'></i></a>
                                       <ul class="sub_ul">
                                            <li><a href="#"><i class='bx bxs-up-arrow'></i>Açık Hava Oyuncakları</a></li>
                                            <li><a href="#"><i class='bx bxs-down-arrow'></i>Spor Oyuncakları</a></li>
                                            <li><a href="#"><i class='bx bxs-up-arrow'></i>Deniz ve Kum Oyuncakları</a></li>
                                            <li><a href="#"><i class='bx bxs-down-arrow'></i>Aktivite Oyuncakları</a></li>
                                       </ul>
                                    </li>
                                   <li class="ul_li"><a href="#">Hareketli Oyuncaklar</a></li>
                                   <li class="ul_li"><a href="#">Figür Oyuncaklar</a></li>
                                   <li class="ul_li">
                                       <a href="#">Eğitici Oyuncaklar <i class='bx bxs-chevron-right'></i></a>
                                       <ul class="sub_ul">
                                            <li><a href="#"><i class='bx bxs-up-arrow'></i>Eğitici Oyuncaklar</a></li>
                                            <li><a href="#"><i class='bx bxs-down-arrow'></i>Oyuncak Müzik Aletleri</a></li>
                                            <li><a href="#"><i class='bx bxs-up-arrow'></i>Oyun Kumu</a></li>
                                            <li><a href="#"><i class='bx bxs-down-arrow'></i>Temizlik ve Mutfak Oyuncakları</a></li>
                                       </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="main_li"><a href="#">En Çok Satanlar</a></li>
                            <li class="main_li"><a href="#">Sizden Gelenler</a></li>
                            <li class="main_li"><a href="#">Hakkımızda</a></li>
                            <li class="main_li"><a href="#">İletişim</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="slider_box">
        <img src="https://static.ticimax.cloud/35140/uploads/sayfatasarim/sayfa9/polesie-8a97.jpg">
    </div>
</div>

<div class="full_box">
    
</div>

<?php

    require_once 'inc/footer.php';

?>


  <div class="preloader">
    <div class="loading">
      <div class="bar bar1"></div>
      <div class="bar bar2"></div>
      <div class="bar bar3"></div>
      <div class="bar bar4"></div>
      <div class="bar bar5"></div>
      <div class="bar bar6"></div>
      <div class="bar bar7"></div>
      <div class="bar bar8"></div>
    </div>
  </div>
   <header>
    <div class="header__area">
      <div class="header__info">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8">
              <div class="header__info-left d-none d-sm-block">
                <ul class="header__address">
                  <li><span><i class="fa-solid fa-location-dot"></i></span> <?php echo $ayarlar["strAddress"]; ?></li>
                  <li><a href="mailto:<?php echo $ayarlar["strMail"]; ?>"><span><i class="fa-solid fa-envelope"></i></span>
                      <?php echo $ayarlar["strMail"]; ?></a></li>
                </ul>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
              <div class="header__info-right">
                <ul class="header__links">
                  <li><span><i style="color: #666666; margin-right:5px;" class="fa-solid fa-phone-volume"></i></span> <a href="tel:<?php echo $ayarlar["strPhone"]; ?>"><?php echo $ayarlar["strPhone"]; ?></a></li>
                 </ul>
                <ul class="header__social">
                  <li><a href="<?php echo $ayarlar["strFacebook"]; ?>"><span><i class="fa-brands fa-facebook-f"></i></span></a></li>
                  <li><a href="<?php echo $ayarlar["strTwitter"]; ?>"><span><i class="fa-brands fa-twitter"></i></span></a></li>
                  <li><a href="<?php echo $ayarlar["strInstagram"]; ?>"><span><i class="fa-brands fa-instagram"></i></span></a></li>
                  <li><a href="<?php echo $ayarlar["strYoutube"]; ?>"><span><i class="fa-brands fa-youtube"></i></span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header__menu-area" id="header_menu">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xxxl-2 col-xxl-2 col-xl-2 col-lg-4 col-md-4 col-5">
              <div class="header__logo">
                <a href="<?php echo $ayarlar["strURL"]; ?>/index">
                  <img class="logo-1" src="<?php echo $ayarlar["strURL"]; ?>/assets/imgs/icon/logo.png" alt="<?php echo $ayarlar["strTitle"]; ?> Logo">
                  <img style="    width: 150px;" class="logo-2" src="<?php echo $ayarlar["strURL"]; ?>/assets/imgs/icon/logo-2.png" alt="<?php echo $ayarlar["strTitle"]; ?> Logo">
                </a>
              </div>
            </div>
            <div class="col-xxxl-8 col-xxl-8 col-xl-8 col-lg-3 col-md-3 col-2">
              <nav class="header__nav b-right">
                <ul>
                 <li><a href="<?php echo $ayarlar["strURL"]; ?>/index"> <?php echo LANG("Anasayfa",$lang); ?></a></li>
                 <li><a href="<?php echo $ayarlar["strURL"]; ?>/hakkimizda"> <?php echo LANG("Hakkımızda",$lang); ?></a></li>
                  <li><a href="<?php echo $ayarlar["strURL"]; ?>/hizmetlerimiz"> <?php echo LANG("Hizmetlerimiz",$lang); ?></a>
                    <ul class="main-dropdown">
                      <?php
                          $veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id ASC LIMIT 99");
                          if ($veri_cek->rowCount()){
                          foreach($veri_cek as $veri_listele){
                  ?>
                     <li><a href="<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></li>
                     <?php
                               }
                             }else{
                               "Listelenecek veri bulunamadı.";
                             }
                     ?>
                    </ul>
                  </li>
                  <li><a href="<?php echo $ayarlar["strURL"]; ?>/urunlerimiz"><?php echo LANG("Ürünlerimiz",$lang); ?> </a>
                    <ul class="main-dropdown">
                      <?php
                          $veri_cek = $db->query("SELECT * FROM urunlerimiz WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id ASC LIMIT 99");
                          if ($veri_cek->rowCount()){
                          foreach($veri_cek as $veri_listele){
                  ?>
                     <li><a href="<?php echo $ayarlar["strURL"]; ?>/urun/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></li>
                     <?php
                               }
                             }else{
                               "Listelenecek veri bulunamadı.";
                             }
                     ?>
                    </ul>
                  </li>
                   <li><a href="<?php echo $ayarlar["strURL"]; ?>/referanslar"><?php echo LANG("Referanslar",$lang); ?></a></li>
                   <li><a href="<?php echo $ayarlar["strURL"]; ?>/haberler"><?php echo LANG("Haberler",$lang); ?></a></li>
                  <li><a href="<?php echo $ayarlar["strURL"]; ?>/iletisim"> <?php echo LANG("İletişim",$lang); ?></a></li>
                 </ul>
              </nav>
            </div>
            <div class="col-xxxl-2 col-xxl-2 col-xl-2 col-lg-5 col-md-5 col-5">
              <div class="header__others">
                <div class="header__lang">
                  <button class="dropdown-toggle lang" data-bs-toggle="dropdown"><i style="margin-right: 3px;" class="flag-icon flag-icon-<?php echo $lang?> icon-2x"></i></button>
                  <ul class="dropdown-menu">
                    <?php
                     $dilq = $db->query("select * from dil where dil_kod != '".$secili_dil["dil_kod"]."' and dil_durum = '1' order by dil_id ASC");
                     if ($dilq->rowCount() > 0) {
                     ?>
                     <?php
                     foreach ($dilq AS $dil) {
                     ?>
                     <li ><a style="color:#171818" href="<?php echo $ayarlar["strURL"]; ?>/lang.php?l=<?php echo $dil["dil_kod"]; ?>&return=<?php echo @$_SERVER["SCRIPT_URL"];?>"><i class="flag-icon flag-icon-<?php echo $dil["dil_kod"]; ?> icon-2x iconduzenle"></i> <?php echo $dil["dil_baslik"]; ?></a></li>
                     <?php
                     }  }
                     ?>
                  </ul>
                </div>
                <div class="header__offcanvas" id="open_offcanvas">
                  <span><i class="flaticon-align-left"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
   <section class="offcanvas__area">
    <div class="close_offcanvas" id="close_offcanvas"><i class="fa-solid fa-xmark"></i></div>
    <div class="offcanvas__inner">
      <div class="offcanvas__left ">
        <div class="side__navbar-wrapper">
          <nav class="side__navbar">
            <ul>
              <li><a href="<?php echo $ayarlar["strURL"]; ?>/index"> <?php echo LANG("Anasayfa",$lang); ?>  </a></li>
              <li><a href="<?php echo $ayarlar["strURL"]; ?>/hakkimizda"> <?php echo LANG("Hakkımızda",$lang); ?>  </a></li>
               <li><a href="<?php echo $ayarlar["strURL"]; ?>/hizmetlerimiz"> <?php echo LANG("Hizmetlerimiz",$lang); ?>  </a>
                 <ul class="main-dropdown">
                   <?php
                       $veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id ASC LIMIT 99");
                       if ($veri_cek->rowCount()){
                       foreach($veri_cek as $veri_listele){
               ?>
                  <li><a href="<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></li>
                  <?php
                            }
                          }else{
                            "Listelenecek veri bulunamadı.";
                          }
                  ?>
                 </ul>
               </li>
               <li><a href="<?php echo $ayarlar["strURL"]; ?>/urunlerimiz"> <?php echo LANG("Ürünlerimiz",$lang); ?>  </a>
                 <ul class="main-dropdown">
                   <?php
                       $veri_cek = $db->query("SELECT * FROM urunlerimiz WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id ASC LIMIT 99");
                       if ($veri_cek->rowCount()){
                       foreach($veri_cek as $veri_listele){
               ?>
                  <li><a href="<?php echo $ayarlar["strURL"]; ?>/urun/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></li>
                  <?php
                            }
                          }else{
                            "Listelenecek veri bulunamadı.";
                          }
                  ?>
                 </ul>
               </li>
               <li><a href="<?php echo $ayarlar["strURL"]; ?>/referanslar"><?php echo LANG("Referanslar",$lang); ?> </a></li>
                <li><a href="<?php echo $ayarlar["strURL"]; ?>/haberler"> <?php echo LANG("Haberler",$lang); ?>  </a></li>
               <li><a href="<?php echo $ayarlar["strURL"]; ?>/iletisim"> <?php echo LANG("İletişim",$lang); ?>  </a></li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="offcanvas__right">
        <div class="offcanvas__logo">
            <a href="<?php echo $ayarlar["strURL"]; ?>/index"><img style="width: 300px;" src="<?php echo $ayarlar["strURL"]; ?>/assets/imgs/icon/logo-2.png" alt="Site Logo"></a>
        </div>
        <div class="offcanvas__contact">
          <ul>
            <li>
              <span><?php echo LANG("Adres",$lang); ?></span>
              <a><?php echo $ayarlar["strAddress"]; ?></a>
            </li>
            <li>
              <span><?php echo LANG("Telefon",$lang); ?></span>
              <a href="tel:<?php echo $ayarlar["strPhone"]; ?>"><?php echo $ayarlar["strPhone"]; ?></a>
            </li>
            <li>
              <span><?php echo LANG("Eposta",$lang); ?></span>
              <a href="mailto:<?php echo $ayarlar["strMail"]; ?>"><?php echo $ayarlar["strMail"]; ?></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
<div class="cursor1"></div>
<div class="cursor2"></div>

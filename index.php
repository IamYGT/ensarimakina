<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<head>
<title><?php echo LANG("Anasayfa",$lang); ?> - <?php echo $ayarlar["strTitle"]; ?></title>
<?php include 'css.php'; ?>
</head>
<body>
<?php include 'ust.php'; ?>
  <main>
     <section class="hero__area">
      <div class="swiper hero__slider">
        <div class="swiper-wrapper">

          <?php
      				$veri_cek = $db->query("SELECT * FROM slayt WHERE slayt_durum = 1 AND dil_id = '{$lang}' ORDER BY slayt_ust_id ASC LIMIT 99");
       				if ($veri_cek->rowCount()){
      				foreach($veri_cek as $veri_listele){
      ?>
          <div class="swiper-slide hero__slide" style="background-image: url(<?php echo $ayarlar["strURL"]; ?>/uploads/sliders/<?php echo $veri_listele["slayt_resim"]; ?>);">
            <div class="container">
              <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                  <div class="hero__slide-left">
                    <h1><?php echo 	$veri_listele["slayt_baslik"]; ?></h1>
                    <p><?php echo 	$veri_listele["slayt_aciklama"]; ?></p>
                    <a class="wc-btn-primary btn-hover" href="<?php echo 	$veri_listele["slayt_butonlink"]; ?>"><span></span> <?php echo 	$veri_listele["slayt_buton"]; ?></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php
                    }
                  }else{
                    "Listelenecek veri bulunamadı.";
                  }
          ?>
        </div>
        <div class="hero__slider-pagination">
          <div class="swiper-button-next"><span><img src="<?php echo $ayarlar["strURL"]; ?>/assets/imgs/icon/long-arrow-left.png" alt=""></span> <?php echo LANG("İleri",$lang); ?>
          </div>
          <div class="swiper-button-prev"><?php echo LANG("Geri",$lang); ?> <span><img src="<?php echo $ayarlar["strURL"]; ?>/assets/imgs/icon/long-arrow-right.png" alt=""></span>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>
    <section class="about__area-4">
      <div class="container line">
         <div class="row">
          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
            <div class="about__right-4">
              <h2 class="section-sub-title"><?php echo LANG("Şirket Hakkında",$lang); ?></h2>
              <h3 class="section-title"><?php echo LANG("Hakkımızda",$lang); ?></h3>
             <?php echo  $ayarlar["hakkimizda_".$lang];  ?>
              <div class="about__counter-3">
                <div class="about__content-3">
                  <h4 class="about__number about__number-3 wow wcfadeUp" data-wow-delay="0.75s"><?php echo $ayarlar["muhendis"]; ?>+</h4>
                  <h5 class="about__counter-title-3"><?php echo LANG("yillik",$lang); ?></h5>
                </div>
                <div class="about__content-3 wow wcfadeUp" data-wow-delay="0.9s">
                  <a href="<?php echo $ayarlar["strURL"]; ?>/referanslar"  ><i class="fa-solid fa-play"></i></a>
                  <p><?php echo LANG("Referanslar",$lang); ?></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
            <div class="about__left-4 zi-9">
              <div class="about__left-4-img">
                <img class="about__img4-1" src="<?php echo $ayarlar["strURL"]; ?>/assets/imgs/about/4/1.jpg" alt="About Image">
                <img class="about__img4-2" src="<?php echo $ayarlar["strURL"]; ?>/assets/imgs/about/4/3.jpg" alt="About Image">
              </div>
              <div class="about__left-4-img-2">
                <img class="about__img4-3" src="<?php echo $ayarlar["strURL"]; ?>/assets/imgs/about/4/2.jpg" alt="About Image">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="case-study__area-4">
      <div class="container line">
         <div class="cursor" id="portfolio_cursor2"><?php echo LANG("Kaydır",$lang); ?></div>

        <div class="case-study__title-wrapper-3">
          <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-5">
              <h2 class="section-sub-title-2 wcfadeUp3"><?php echo $ayarlar["strTitle"]; ?></h2>
              <h3 class="section-title wcfadeUp3"><?php echo LANG("Ürünlerimiz",$lang); ?></h3>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-7">
              <div class="case-study__text wcfadeUp4">
                <p><?php echo LANG("Ensari Mühendislik & Makina yapmış olduğu makinalarla bu sektördeki yerini referanslarıyla almıştır.",$lang); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper case-study__slider-2">
        <div class="swiper-wrapper">
          <?php
              $veri_cek = $db->query("SELECT * FROM urunlerimiz WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id ASC LIMIT 999");
              if ($veri_cek->rowCount()){
              foreach($veri_cek as $veri_listele){
        ?>
          <div class="swiper-slide case-study__slide-2 wow wcfadeUp" data-wow-delay="0.25s">
            <a href="<?php echo $ayarlar["strURL"]; ?>/urun/<?php echo $veri_listele["haber_seo"]; ?>">
              <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/news/<?php echo $veri_listele["haber_resim"]; ?>" alt="<?php echo 	$veri_listele["haber_baslik"]; ?>">
              <div class="case-study__info-2">
                <h4><?php echo 	$veri_listele["haber_baslik"]; ?></h4>
                <p><span><?php echo $ayarlar["strTitle"]; ?></span></p>
              </div>
            </a>
          </div>
          <?php
                  }
                }else{
                  "Listelenecek veri bulunamadı.";
                }
          ?>
        </div>
      </div>
      <div class="container line remove-pb">
        <span class="line-3"></span>
        <span class="line-4"></span>
        <span class="line-5"> </span>
      </div>
    </section>
    <section class="counter__area-2" style="margin-top:50px;">
      <div class="container line">
         <div class="row">
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-6">
            <div class="counter__content-2 wow wcfadeUp" data-wow-delay="0.15s">
              <h2 class="counter__number"><?php echo $ayarlar["dosyasayisi"]; ?>+</h2>
              <p><?php echo LANG("Müşteri Sayısı",$lang); ?></p>
            </div>
          </div>
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-6">
            <div class="counter__content-2 wow wcfadeUp" data-wow-delay="0.3s">
              <h2 class="counter__number"><?php echo $ayarlar["mutlumusteri"]; ?>%</h2>
              <p><?php echo LANG("Müşteri Memnuniyeti",$lang); ?></p>
            </div>
          </div>
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-6">
            <div class="counter__content-2 wow wcfadeUp" data-wow-delay="0.45s">
              <h2 class="counter__number"><?php echo $ayarlar["tecrube"]; ?>+</h2>
              <p><?php echo LANG("Proje Sayısı",$lang); ?></p>
            </div>
          </div>
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-6">
            <div class="counter__content-2 wow wcfadeUp" data-wow-delay="0.6s">
              <h2 class="counter__number"><?php echo $ayarlar["muhendis"]; ?></h2>
              <p><?php echo LANG("Yıllık Tecrübe",$lang); ?></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="service__area">
     <div class="container line">
       <span class="line-3"></span>
       <span class="line-4"></span>
       <span class="line-5"> </span>
       <div class="row">
         <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-5">
           <div class="service__title">
             <h2 class="section-sub-title wow wcfadeUp" data-wow-delay="0.15s"><?php echo $ayarlar["strTitle"]; ?></h2>
             <h3 class="section-title wow wcfadeUp" data-wow-delay="0.3s"><?php echo LANG("Hizmetlerimiz",$lang); ?></h3>
           </div>
         </div>
         <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-7">
           <div class="service__text wow wcfadeUp" data-wow-delay="0.6s">
             <p><?php echo LANG("Ensari Mühendislik & Makina yapmış olduğu makinalarla bu sektördeki yerini referanslarıyla almıştır.",$lang); ?></p>
           </div>
         </div>
       </div>
       <div class="service__slider-wrapper">
         <div class="swiper service__slider">
           <div class="swiper-wrapper">

             <?php
                 $veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id ASC LIMIT 234");
                 if ($veri_cek->rowCount()){
                 foreach($veri_cek as $veri_listele){
         ?>
             <div class="swiper-slide service__slide wow wcfadeUp" data-wow-delay="0.45s">
               <a href="<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["haber_seo"]; ?>">
                 <div class="service__thumb-wrapper">
                   <img class="service__thumb" src="<?php echo $ayarlar["strURL"]; ?>/uploads/services/<?php echo $veri_listele["haber_resim"]; ?>" alt="<?php echo 	$veri_listele["haber_baslik"]; ?>">
                 </div>
                 <div class="service__slide-title">
                    <h4><?php echo 	$veri_listele["haber_baslik"]; ?></h4>
                 </div>
               </a>
             </div>
             <?php
                       }
                     }else{
                       "Listelenecek veri bulunamadı.";
                     }
             ?>
           </div>
         </div>
         <div class="service__btn-next wow wcfadeUp" data-wow-delay="0.75s"><span><i class="fa-solid fa-arrow-left"></i></span></div>
         <div class="service__btn-prev wow wcfadeUp" data-wow-delay="0.75s"><span><i class="fa-solid fa-arrow-right"></i></span></div>
       </div>
       <div class="row">
         <div class="col-xxl-12">
           <div class="service__btm wow wcfadeUp" data-wow-delay="0.9s">
             <p><?php echo LANG("Daha fazla bilgiye mi ihtiyacınız var?",$lang); ?> <a href="<?php echo $ayarlar["strURL"]; ?>/iletisim"><?php echo LANG("İletişim",$lang); ?> <i class="fa-solid fa-arrow-left"></i></a>
             </p>
           </div>
         </div>
       </div>
     </div>
    </section>
    <section class="team__area-5">
      <div class="container">
        <div class="row">
          <div class="col-xxl-12">
            <div class="section-title-wrapper">
              <h2 class="section-title wow wcfadeUp" data-wow-delay="0.3s"><?php echo LANG("Referanslar",$lang); ?></h2>
            </div>
          </div>
        </div>
        <div class="row g-0">

          <?php
              $veri_cek = $db->query("SELECT * FROM referanslar WHERE referans_durum = 1 AND dil_id = '{$lang}' ORDER BY referans_ust_id ASC LIMIT 99");
              if ($veri_cek->rowCount()){
              foreach($veri_cek as $veri_listele){
          ?>
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
            <div style="border-right: 2px solid;" class="team__member-4 wcfadeUp">
              <div class="team__img-4">
                <a href="#"><img src="<?php echo $ayarlar["strURL"]; ?>/uploads/references/<?php echo $veri_listele["referans_resim"]; ?>" alt="<?php echo 	$veri_listele["referans_baslik"]; ?>" class="br-left"></a>
              </div>
              <div class="team__info">
                <a href="#"><?php echo 	$veri_listele["referans_baslik"]; ?></a>
                <p><?php echo 	$veri_listele["referans_aciklama"]; ?></p>
              </div>
            </div>
          </div>
          <?php
                }
              }else{
                "Listelenecek veri bulunamadı.";
              }
          ?>
        </div>
      </div>
    </section>
    <section class="blog__area-2">
   <div class="container line">
     <span class="line-3"></span>
     <span class="line-4"></span>
     <span class="line-5"> </span>

     <div class="blog__top">
       <div class="row">
         <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
           <div class="blog__title-wrapper">
             <h2 class="section-sub-title-2 wow wcfadeUp" data-wow-delay="0.15s"><?php echo $ayarlar["strTitle"]; ?></h2>
             <h3 class="section-title wow wcfadeUp" data-wow-delay="0.3s"><?php echo LANG("Haberler",$lang); ?></h3>
           </div>
         </div>
         <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
           <div class="blog__btn wow wcfadeUp" data-wow-delay="0.75s">
             <a href="<?php echo $ayarlar["strURL"]; ?>/haberler"><?php echo LANG("Hepsini Görüntüle",$lang); ?> <i class="fa-solid fa-arrow-right-long"></i></a>
           </div>
         </div>
       </div>
     </div>

     <div class="blog__btm">
       <div class="row">

         <?php
     				$veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id ASC LIMIT 3");
      				if ($veri_cek->rowCount()){
     				foreach($veri_cek as $veri_listele){
     ?>

         <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
           <div class="blog__item-wrapper-2 wow wcfadeUp" data-wow-delay="0.6s">
             <article>
               <div class="blog__img">
                 <a href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $veri_listele["haber_seo"]; ?>"><img src="<?php echo $ayarlar["strURL"]; ?>/uploads/news/<?php echo $veri_listele["haber_resim"]; ?>" alt="<?php echo 	$veri_listele["haber_baslik"]; ?>"></a>
               </div>
               <div class="blog__content-2">
                 <h4 class="blog__meta"> <strong><a href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $veri_listele["haber_seo"]; ?>"></strong>
  <?php  echo turkcetarih_formati('j F Y', ($veri_listele["haber_tarih"])); ?>
                   </a>
                 </h4>
                 <a href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $veri_listele["haber_seo"]; ?>">
                   <h5 class="blog__title-2"> <?php echo 	$veri_listele["haber_baslik"]; ?></h5>
                 </a>
                  <a style="margin-top: 0;" class="blog__btn-rm" href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo LANG("Devamını Oku",$lang); ?> <i class="fa-solid fa-arrow-right"></i></a>
               </div>
             </article>
           </div>
         </div>
         <?php
                  }
                }else{
                  "Listelenecek veri bulunamadı.";
                }
         ?>

       </div>
     </div>
   </div>
 </section>
 <section class="testimonial__area-4">
        <div class="container">
          <div class="row">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12">
              <div class="testimonial__left-4">
                <div class="testimonial__icon-4">
                  <i class="fa-solid fa-quote-left"></i>
                </div>
              </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
              <div class="swiper testimonial__slider-4">
                <div class="swiper-wrapper">
                  <?php
                      $veri_cek = $db->query("SELECT * FROM nedenildi WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id ASC LIMIT 99");
                      if ($veri_cek->rowCount()){
                      foreach($veri_cek as $veri_listele){
              ?>
                  <div class="swiper-slide testimonial__slide-4">
                    <div class="testimonial__content-4">
                      <p class="wow wcfadeUp" data-wow-delay="0.15s"><?php echo 	$veri_listele["haber_aciklama"]; ?>  </p>
                      <h3 class="wow wcfadeUp" data-wow-delay="0.3s"><?php echo 	$veri_listele["haber_baslik"]; ?> <span><?php echo LANG("Müşteri",$lang); ?></span> </h3>

                    </div>
                  </div>
                  <?php
                            }
                          }else{
                            "Listelenecek veri bulunamadı.";
                          }
                  ?>
                </div>
              </div>
            </div>
            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-12">
              <div class="testimonial__btn-4">
                <div class="swiper-btn-prev wow wcfadeUp" data-wow-delay="0.5s"><img src="<?php echo $ayarlar["strURL"]; ?>/assets/imgs/icon/long-arrow-r-black.png" alt="Prev Icon"></div>
                <div class="swiper-btn-next wow wcfadeUp" data-wow-delay="0.5s"><img src="<?php echo $ayarlar["strURL"]; ?>/assets/imgs/icon/long-arrow-l-black.png" alt="Next Icon"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
  </main>
<?php include 'alt.php'; ?>
</body>
</html>

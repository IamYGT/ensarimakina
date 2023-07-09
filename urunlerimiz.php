<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<head>
<title><?php echo LANG("Ürünlerimiz",$lang); ?> - <?php echo $ayarlar["strTitle"]; ?></title>
<?php include 'css.php'; ?>
</head>
<body>
<?php include 'ust.php'; ?>
  <main>
     <section class="breadcrumb__area">
      <div class="container">
        <div class="row">
          <div class="col-xxl-12">
            <div class="breadcrumb__content">
              <h1 class="breadcrumb__title"><?php echo LANG("Ürünlerimiz",$lang); ?></h1>
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
  </main>
<?php include 'alt.php'; ?>
</body>
</html>

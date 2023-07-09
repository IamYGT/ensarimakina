<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<head>
<title><?php echo LANG("Hizmetlerimiz",$lang); ?> - <?php echo $ayarlar["strTitle"]; ?></title>
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
              <h1 class="breadcrumb__title"><?php echo LANG("Hizmetlerimiz",$lang); ?></h1>
             </div>
          </div>
        </div>
      </div>
    </section>
    <section class="service__area">
      <div class="container line">
        <div class="row">
          <?php
      				$veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id ASC LIMIT 99");
       				if ($veri_cek->rowCount()){
      				foreach($veri_cek as $veri_listele){
      ?>   <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
            <div class="service__slide-4 wcfadeUp2">
              <a href="<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["haber_seo"]; ?>">
                <div class="service__thumb-wrapper">
                  <img class="service__thumb" src="<?php echo $ayarlar["strURL"]; ?>/uploads/services/<?php echo $veri_listele["haber_resim"]; ?>" alt="<?php echo 	$veri_listele["haber_baslik"]; ?>">
                </div>
                <div class="service__slide-title rounded">
                   <h4><?php echo 	$veri_listele["haber_baslik"]; ?></h4>
                </div>
              </a>
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
   </main>
<?php include 'alt.php'; ?>
</body>
</html>

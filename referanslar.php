<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<head>
<title><?php echo LANG("Referanslar",$lang); ?> - <?php echo $ayarlar["strTitle"]; ?></title>
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
              <h1 class="breadcrumb__title"><?php echo LANG("Referanslar",$lang); ?></h1>
             </div>
          </div>
        </div>
      </div>
    </section>
    <section class="team__area-4">
      <div class="container line">
        <div class="row g-0">
          <?php
              $veri_cek = $db->query("SELECT * FROM referanslar WHERE referans_durum = 1 AND dil_id = '{$lang}' ORDER BY referans_ust_id ASC LIMIT 99");
              if ($veri_cek->rowCount()){
              foreach($veri_cek as $veri_listele){
          ?>
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
            <div class="team__member-4 wcfadeUp">
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
   </main>
<?php include 'alt.php'; ?>
</body>
</html>

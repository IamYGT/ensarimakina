<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php");
$tekil_veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 AND haber_seo = '{$_GET["url"]}' AND dil_id = '{$lang}' ")->fetch(PDO::FETCH_ASSOC);?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<head>
<title><?php echo $tekil_veri_cek["haber_baslik"]; ?> - <?php echo $ayarlar["strTitle"]; ?></title>
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
              <h1 class="breadcrumb__title"><?php echo $tekil_veri_cek["haber_baslik"]; ?></h1>
             </div>
          </div>
        </div>
      </div>
    </section>
    <section class="service__detail">
      <div class="container line">
        <div class="row g-0">
          <div class="col-xxl-3 col-xl-4 col-lg-3 col-md-4">
            <div class="service__sidebar">
              <div class="widget__service wcfadeUp3">
                <h2 class="widget__title"><?php echo LANG("Hizmetlerimiz",$lang); ?></h2>
                <ul>
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
              </div>

              <div class="widget__contact wow wcfadeUp" data-wow-delay="0.15s">
                <p><?php echo LANG("İletişime Geçin",$lang); ?></p>
                <h3><?php echo LANG("Sormak istediğiniz bir soru mu var?",$lang); ?></h3>
                <a class="btn-hover" href="<?php echo $ayarlar["strURL"]; ?>/iletisim"><span></span> <?php echo LANG("İletişim",$lang); ?></a>
              </div>

            </div>
          </div>
          <div class="col-xxl-9 col-xl-8 col-lg-9 col-md-8">
            <div class="service__detail-content wcfadeUp4">
              <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/services/<?php echo $tekil_veri_cek["haber_resim"]; ?>" alt="<?php echo $tekil_veri_cek["haber_baslik"]; ?>" class="service__detail-thumb">
              <h2 class="service__detail-title"><?php echo $tekil_veri_cek["haber_baslik"]; ?></h2>
             <?php echo $tekil_veri_cek["haber_aciklama"]; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
   </main>
<?php include 'alt.php'; ?>
</body>
</html>

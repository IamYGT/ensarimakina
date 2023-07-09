<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php");
$tekil_veri_cek = $db->query("SELECT * FROM urunlerimiz WHERE haber_durum = 1 AND haber_seo = '{$_GET["url"]}' AND dil_id = '{$lang}' ")->fetch(PDO::FETCH_ASSOC);?>
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
          <div class="col-xxl-12">
            <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/news/<?php echo $tekil_veri_cek["haber_resim"]; ?>" alt="<?php echo $tekil_veri_cek["haber_baslik"]; ?>" class="service__detail-thumb wcfadeUp3">
          </div>
           <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
            <div style="padding-left: 0;" class="service__detail-content wow wcfadeUp" data-wow-delay="0.15s">
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

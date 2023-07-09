<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php");
$tekil_veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1 AND haber_seo = '{$_GET["url"]}' AND dil_id = '{$lang}' ")->fetch(PDO::FETCH_ASSOC);?>
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
    <section class="blog__detail">
      <div class="container line">
        <div class="row g-0">
          <div class="col-xxl-12">
            <h2 class="blog__detail-title wcfadeUp3"><?php echo $tekil_veri_cek["haber_baslik"]; ?></h2>
          </div>
          <div class="col-xxl-12">
            <div class="blog__detail-meta wow wcfadeUp" data-wow-delay="0.15s">
              <ul>
                <li><span><?php echo LANG("Yazan",$lang); ?>:</span> <a href="#"><?php echo $ayarlar["strTitle"]; ?></a></li>
                 <li><span><?php echo LANG("Tarih",$lang); ?>:</span> <?php  echo turkcetarih_formati('j F Y', ($tekil_veri_cek["haber_tarih"])); ?></li>
               </ul>
            </div>
            <img class="blog__detail-thumb wow wcfadeUp" data-wow-delay="0.3s" src="<?php echo $ayarlar["strURL"]; ?>/uploads/news/<?php echo $tekil_veri_cek["haber_resim"]; ?>" alt="<?php echo $tekil_veri_cek["haber_baslik"]; ?>">
          </div>
          <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
            <div class="blog__detail-content wow wcfadeUp" data-wow-delay="0.45s">
           <?php echo $tekil_veri_cek["haber_aciklama"]; ?>
            </div>
            <div class="blog__detail-btm wow wcfadeUp" data-wow-delay="0.15s">
              <ul class="blog__detail-share">
                <li><?php echo LANG("Paylaş",$lang); ?> :</li>
                <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $tekil_veri_cek["haber_seo"]; ?>"><span><i class="fa-brands fa-facebook-f"></i></span></a></li>
                <li><a href="https://twitter.com/intent/tweet?url=<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $tekil_veri_cek["haber_seo"]; ?>&text=<?php echo $tekil_veri_cek["haber_baslik"]; ?>"><span><i class="fa-brands fa-twitter"></i></span></a></li>
                <li><a href="https://pinterest.com/pin/create/button/?url=<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $tekil_veri_cek["haber_seo"]; ?>&media=&description=<?php echo $tekil_veri_cek["haber_baslik"]; ?>"><span><i class="fa-brands fa-pinterest"></i></span></a></li>
                <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $tekil_veri_cek["haber_seo"]; ?>"><span><i class="fa-brands fa-linkedin"></i></span></a></li>
              </ul>
            </div>
           </div>
        </div>
      </div>
    </section>
   </main>
<?php include 'alt.php'; ?>
</body>
</html>

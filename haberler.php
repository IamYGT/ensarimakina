<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php");
$sayfa = (isset($q) ? $q : 1);
$toplam_veri_sayisi = $db->query("SELECT COUNT(*) FROM haberler WHERE dil_id = '{$lang}' ")->fetchColumn();
$limit = 6; //gösterilecek veri sayısı
$sonSayfa = ceil($toplam_veri_sayisi/$limit);
$baslangic = ($sayfa-1)*$limit;
 ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">

<head>
  <title><?php echo LANG("Haberler",$lang); ?> - <?php echo $ayarlar["strTitle"]; ?></title>
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
              <h1 class="breadcrumb__title"><?php echo LANG("Haberler",$lang); ?></h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section  class="blog__area-4">
      <div class="container line">
        <div class="blog__top">
          <div class="blog__btm">
            <div class="row">
              <?php
                		$list = $db->query("SELECT * FROM haberler WHERE  dil_id = '{$lang}' ORDER BY haber_ust_id DESC LIMIT $baslangic,$limit");
              			if ($list->rowCount()){
          				foreach($list as $row){
                ?>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4" style="margin-bottom:20px;">
                <div class="blog__item-wrapper-2 wow wcfadeUp" data-wow-delay="0.6s">
                  <article>
                    <div class="blog__img">
                      <a href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $row["haber_seo"]; ?>"><img src="<?php echo $ayarlar["strURL"]; ?>/uploads/news/<?php echo $row["haber_resim"]; ?>" alt="<?php echo $row["haber_baslik"]; ?>"></a>
                    </div>
                    <div class="blog__content-2">
                      <h4 class="blog__meta"> <strong><a href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $row["haber_seo"]; ?>">Ensari Mühendislik</a></strong>,
                        <?php  echo turkcetarih_formati('j F Y', ($row["haber_tarih"])); ?>
                      </h4>
                      <a href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $row["haber_seo"]; ?>">
                        <h5 class="blog__title-2"><?php echo $row["haber_baslik"]; ?></h5>
                      </a>
                      <a class="blog__btn-rm" href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $row["haber_seo"]; ?>"> <?php echo LANG("Devamını Oku",$lang); ?> <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                  </article>
                </div>
              </div>
              <?php
                        }
                      }else{
                        echo 'Listelenecek veri bulunamadı.';
                      }
                ?>
              <?php if($toplam_veri_sayisi > $limit){ ?>
              <div class="blog__pagination">
                <ul>
                  <?php
                       $x = 2;
                       if($sayfa > 1){
                         $onceki = $sayfa-1;
                         echo '<li><a href="?q='.$onceki.'" ><i class="fa-solid fa-angle-left"></i></a></li>';
                       }
                       if($sayfa==1){
                         echo '<li ><a  class="active" >1</a></li>';
                       } else {
                         echo '<li><a href="?q=1" class="">1</a></li>';
                       }
                       if($sayfa-$x > 2){
                         echo '...';
                         $i = $sayfa-$x;
                       } else {
                         $i = 2;
                       }
                       for($i; $i<=$sayfa+$x; $i++) {
                         if($i==$sayfa){
                           echo '<li  ><a class="active" href="#">'.$i.'</a></li>';
                         } else {
                           echo '<li><a href="?q='.$i.'" class=" ">'.$i.'</a></li>';
                         }
                         if($i==$sonSayfa) break;
                       }
                       if($sayfa < $sonSayfa){
                         $sonraki = $sayfa+1;
                         echo '<li><a href="?q='.$sonraki.'"  ><i class="fa-solid fa-angle-right"></i></a> </li>';
                       }
                   ?>
                </ul>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
  <?php include 'alt.php'; ?>
</body>

</html>

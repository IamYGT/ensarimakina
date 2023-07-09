<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<head>
<title><?php echo LANG("İletişim",$lang); ?> - <?php echo $ayarlar["strTitle"]; ?></title>
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
              <h1 class="breadcrumb__title"><?php echo LANG("İletişim",$lang); ?></h1>
             </div>
          </div>
        </div>
      </div>
    </section>
     <section class="contact__area">
      <div class="container">
         <div class="row">
          <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
            <div class="contact__content">
              <h2 class="contact__title"><?php echo LANG("İletişime Geçin",$lang); ?></h2>
              <p><?php echo LANG("İletişim formuyla bizimle iletişime geçebilir veya numaramızdan bizlere ulaşabilirsiniz.",$lang); ?>
              </p>
              <div class="contact__form wow wcfadeUp" data-wow-delay="0.75s">
                <form action="#" class="row">
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                     <input type="text" id="name" placeholder="<?php echo LANG("İsminiz",$lang); ?>">
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                     <input type="email" id="email" placeholder="<?php echo LANG("Eposta",$lang); ?>">
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                     <input type="tel" id="phone" placeholder="<?php echo LANG("Telefon",$lang); ?>">
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                     <input type="text" id="subject" placeholder="<?php echo LANG("Konu",$lang); ?>">
                  </div>
                  <div class="col-xxl-12">
                     <textarea name="Message" id="message" placeholder="<?php echo LANG("Mesajınız",$lang); ?>..."></textarea>
                  </div>
                  <div class="col-xxl-12">
                    <button class="submit wc-btn-primary btn-hover" type="submit"><span></span> <?php echo LANG("Gönder",$lang); ?></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
      <div class="row">
      <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12" style="padding: 0; margin:0;">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6365.448329206755!2d37.439161000000006!3d37.087876!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1531e5a429891c8b%3A0x32531a6914cc22a9!2sSanayi%2C%20Nolu%20Cd%20No%3A13%2C%2027110%20%C5%9Eehitkamil%2FGaziantep!5e0!3m2!1str!2str!4v1668636922199!5m2!1str!2str" allowfullscreen="" width="100%" height="450px;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       </div>
      </div>
      </div>
    </section>
   </main>
<?php include 'alt.php'; ?>
</body>
</html>

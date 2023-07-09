<?php  include("include/baglan.php");  include("include/fonksiyon.php");  ?>
<?php header('Content-type: Application/xml; charset="utf8"', true); ?>
		<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
				xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
				xmlns:xhtml="http://www.w3.org/1999/xhtml"
				xsi:schemaLocation="
					http://www.sitemaps.org/schemas/sitemap/0.9
					http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

			<url>
				<loc><?php echo $ayarlar["strURL"]; ?></loc>
				<changefreq>always</changefreq>
				<lastmod><?php echo date('c', strtotime(date("Y-m-d H:i:s"))); ?></lastmod>
				<priority>1</priority>
			</url>

			<url>
				<loc><?php echo $ayarlar["strURL"]; ?>/about-us</loc>
				<changefreq>always</changefreq>
				<lastmod><?php echo date('c', strtotime(date("Y-m-d H:i:s"))); ?></lastmod>
				<priority>1</priority>
			</url>
				<url>
				<loc><?php echo $ayarlar["strURL"]; ?>/chip-tuning</loc>
				<changefreq>always</changefreq>
				<lastmod><?php echo date('c', strtotime(date("Y-m-d H:i:s"))); ?></lastmod>
				<priority>1</priority>
			</url>

				<url>
				<loc><?php echo $ayarlar["strURL"]; ?>/our-dealers</loc>
				<changefreq>always</changefreq>
				<lastmod><?php echo date('c', strtotime(date("Y-m-d H:i:s"))); ?></lastmod>
				<priority>1</priority>
			</url>

				<url>
				<loc><?php echo $ayarlar["strURL"]; ?>/services</loc>
				<changefreq>always</changefreq>
				<lastmod><?php echo date('c', strtotime(date("Y-m-d H:i:s"))); ?></lastmod>
				<priority>1</priority>
			</url>

				<url>
				<loc><?php echo $ayarlar["strURL"]; ?>/sss</loc>
				<changefreq>always</changefreq>
				<lastmod><?php echo date('c', strtotime(date("Y-m-d H:i:s"))); ?></lastmod>
				<priority>1</priority>
			</url>

				<url>
				<loc><?php echo $ayarlar["strURL"]; ?>/faq</loc>
				<changefreq>always</changefreq>
				<lastmod><?php echo date('c', strtotime(date("Y-m-d H:i:s"))); ?></lastmod>
				<priority>1</priority>
			</url>


							<url>
							<loc><?php echo $ayarlar["strURL"]; ?>/blog</loc>
							<changefreq>always</changefreq>
							<lastmod><?php echo date('c', strtotime(date("Y-m-d H:i:s"))); ?></lastmod>
							<priority>1</priority>
						</url>


										<url>
										<loc><?php echo $ayarlar["strURL"]; ?>/contact-us</loc>
										<changefreq>always</changefreq>
										<lastmod><?php echo date('c', strtotime(date("Y-m-d H:i:s"))); ?></lastmod>
										<priority>1</priority>
									</url>



<?php
 		$list = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 ORDER BY haber_tarih ASC");
		foreach($list as $row){
			$strURL = $ayarlar["strURL"].'/service/'.$row["haber_seo"];
?>
			<url>
				<loc><?php echo $strURL ?></loc>
				<lastmod><?php echo date('c', strtotime(date("Y-m-d H:i:s"))); ?></lastmod>
				<changefreq>always</changefreq>
				<priority>1.00</priority>
			</url>
<?php
			}
?>



		</urlset>

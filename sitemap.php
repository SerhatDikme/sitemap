<?php header('Content-type: application/xml; charset="utf8"',true); ?>



<urlset 



xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"

xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd"

xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"

xmlns:example="http://www.example.com/schemas/example_schema">



<!-- namespace extension -->

<?php 
// Use your php files



// include "nedmin/production/fonksiyon.php";

// include "nedmin/netting/baglan.php";





?>



<!-- Tekli Linkler -->



<url>

	<loc>http://<?php echo $_SERVER['HTTP_HOST'];?>/kategoriler</loc>

	<lastmod><?php echo date("Y-m-d"); ?></lastmod>

	<changefreq>daily</changefreq>

	<priority>1.00</priority>

</url>





<!-- Ürünlerin Linkler -->



<?php 

// USE your tables

// $urunsor=$db->prepare("SELECT * FROM urun where urun_durum=:durum");

// $urunsor->execute(array(

// 	'durum' => 1

// ));



// while($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC)) {?>



<url>

	<loc>http://<?php echo $_SERVER['HTTP_HOST'];?>/urun-<?php echo seo($uruncek['urun_ad']); ?>-<?php echo $uruncek['urun_id']; ?></loc>

	<lastmod><?php echo date("Y-m-d"); ?></lastmod>

	<changefreq>daily</changefreq>

	<priority>0.9</priority>

</url>



<?php } ?>



</urlset>
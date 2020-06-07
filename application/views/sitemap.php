<?php echo '<?xml version="1.0" encoding="UTF-8"?>';
    $mod=date('Y-m-d');  
?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 
        http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

        <url>
            <loc><?=base_url()?></loc>
            <lastmod><?=$mod?></lastmod>
            <priority>1.00</priority>
        </url>
        <url>
            <loc><?=base_url()?>About</loc>
            <lastmod><?=$mod?></lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=base_url()?>Admissions</loc>
            <lastmod><?=$mod?></lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=base_url()?>News</loc>
            <lastmod><?=$mod?></lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=base_url()?>TC</loc>
            <lastmod><?=$mod?></lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=base_url()?>Gallery</loc>
            <lastmod><?=$mod?></lastmod>
            <priority>0.80</priority>
        </url>
        <url>
            <loc><?=base_url()?>Notice</loc>
            <lastmod><?=$mod?></lastmod>
            <priority>0.64</priority>
        </url>
        <url>
            <loc><?=base_url()?>Legal</loc>
            <lastmod><?=$mod?></lastmod>
            <priority>0.64</priority>
        </url>
        <url>
            <loc><?=base_url()?>Contact</loc>
            <lastmod><?=$mod?></lastmod>
            <priority>0.64</priority>
        </url>
        <url>
            <loc><?=base_url()?>Facilities</loc>
            <lastmod><?=$mod?></lastmod>
            <priority>0.51</priority>
        </url>
        <url>
            <loc><?=base_url()?>Policy</loc>
            <lastmod><?=$mod?></lastmod>
            <priority>0.51</priority>
        </url>
        <url>
            <loc><?=base_url()?>Achievers</loc>
            <lastmod><?=$mod?></lastmod>
            <priority>0.51</priority>
        </url>

    <?php foreach($data as $d){?>
        <url>
            <loc><?=base_url('News/').$d->id.'/'.$d->slug?>/</loc>
            <priority>0.80</priority>
            <changefreq>daily</changefreq>
        </url>
    <?php }?>

</urlset>



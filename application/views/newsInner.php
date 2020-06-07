
    <div class="subheader" style="background:linear-gradient(to right,rgba(0,0,0,0.85) 40%,rgba(0,0,0,0.3)), url('<?=base_url()?>assets/news/<?=$n->img_src?>') no-repeat">
        <div class="wrapper">
            <h2 class="subheader-head serif wow fadeInUp" data-wow-delay="1s">News</h2>
            <p class="subheader-txt wow fadeInUp" data-wow-delay="1.2s"><?=$n->heading?></p>
        </div>
    </div>

    <a onclick="window.history.back()" class="back-link wow fadeInUp" data-wow-delay="1.6s">← &nbsp; Go back</a>

<section class="project-main">
    <div class="wrapper">
        <main>
            <article class="wow fadeInUp" data-wow-delay="1.8s">
                <img class="proj-img" src="<?=base_url('assets/news/').$n->img_src?>" alt="<?=$n->heading?>">
                <!-- AddToAny BEGIN -->
                    <div style="margin-top:10px" class="a2a_kit a2a_kit_size_32 a2a_default_style" data-a2a-url="<?=current_url()?>" data-a2a-title="<?=$n->heading?>">
                        <a class="a2a_button_facebook"></a>
                        <a class="a2a_button_twitter"></a>
                        <a class="a2a_button_linkedin"></a>
                        <a class="a2a_button_whatsapp"></a>
                        <a class="a2a_button_telegram"></a>
                        <a class="a2a_button_copy_link"></a>
                    </div>
                    <script>
                        var a2a_config = a2a_config || {};
                        a2a_config.onclick = 1;
                        </script>
                    <script async src="https://static.addtoany.com/menu/page.js"></script>
                <!-- AddToAny END -->
                <h1><?=$n->heading?></h1>
                <small>Uploaded on: <?=date('d/m/Y',strtotime($n->date))?></small>
                <p class="proj-descr"><?=$n->content?></p>
                <a onclick="window.history.back()" class="back-link">← &nbsp; Go back</a>
            </article>
            <aside class="wow fadeInUp" data-wow-delay="2s">
                <strong>Recent news:</strong>
                <?php foreach($recents as $r){?>
                <a href="<?=base_url('news/'.$r->id.'/'.$r->slug)?>" class="recent">
                    <img class="recent-img lazyload" data-src="<?=base_url('assets/news/').$r->img_src?>" alt="GGEA news">   
                    <p class="recent-descr"><?=strlen($r->heading)>80?substr($r->heading,0,80)." . . .":$r->heading?></p>
                </a>
                <?php }?>
            </aside>
        </main>
    </div>
</section>

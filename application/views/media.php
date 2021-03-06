
    <div class="subheader" style="background:linear-gradient(to right,rgba(0,0,0,0.85) 40%,rgba(0,0,0,0.3)), url('<?=base_url()?>assets/images/header-media.jpg') no-repeat">
        <div class="wrapper">
            <h2 class="subheader-head serif wow fadeInUp" data-wow-delay="1s">Album</h2>
            <p class="subheader-txt wow fadeInUp" data-wow-delay="1.2s" style="font-size:3rem;">( <?=$category?> )</p>
        </div>
    </div>

    <a onclick="window.history.back()" class="back-link">← &nbsp; Go back</a>

    <section class="media wow fadeInUp" data-wow-delay="2s">
        <div class="wrapper">
            <?php foreach($images as $i){?>
            <a href="<?=base_url('assets/images/').$i->img_src?>" class="spotlight">
                <img class='lazyload' data-src="<?=base_url('assets/images/').$i->img_src?>" alt="GGEA">
            </a>
            <?php }?>
        </div>
    </section>

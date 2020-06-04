
    <div class="subheader" style="background:linear-gradient(to right,rgba(0,0,0,0.85) 40%,rgba(0,0,0,0.3)), url('<?=base_url()?>assets/images/header-media.jpg') no-repeat">
        <div class="wrapper">
            <h2 class="subheader-head serif">Gallery</h2>
            <p class="subheader-txt">See our latest albums of the image gallery.</p>
        </div>
    </div>

    <section class="album">
        <div class="wrapper">
            <?php foreach($categories as $g){?>
            <a href="<?=base_url('Gallery/Album/').$g->id?>">
                <img src="<?=base_url('assets/images/').$g->thumb?>" alt="GGEA">
                <p class="caption"><?=$g->name?></p>
            </a>
            <?php }?>
        </div>
    </section>
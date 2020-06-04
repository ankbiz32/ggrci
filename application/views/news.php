
    <div class="subheader" style="background:linear-gradient(to right,rgba(0,0,0,0.85) 40%,rgba(0,0,0,0.3)), url('<?=base_url()?>assets/images/header-news.jpg') no-repeat">
        <div class="wrapper">
            <h2 class="subheader-head serif">News</h2>
            <p class="subheader-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
        </div>
    </div>

    <a class="back-link"  onclick="window.history.back()">← &nbsp; Go back</a>

<section class="projects-list">
    <div class="wrapper wow fadeInUp" data-wow-delay="0.4s">
    <?php foreach($news as $p){?>
        <a class="project" href="<?=base_url('news/'.$p->id.'/'.$p->slug)?>">
            <img src="<?=base_url('assets/news/').$p->img_src?>" alt="GGEA news>">
            <div class="content">
                <h3><?=$p->heading?></h3>
                <p><?=substr($p->content,0,105)?> . . .</p>
                <small>Read more &nbsp;<i class="fa fa-caret-right fa-sm"></i></small>
            </div>
        </a>
    <?php }?>
    </div>
</section>

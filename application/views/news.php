
    <div class="subheader" style="background:linear-gradient(to right,rgba(0,0,0,0.85) 40%,rgba(0,0,0,0.3)), url('<?=base_url()?>assets/images/header-news.jpg') no-repeat">
        <div class="wrapper">
            <h2 class="subheader-head serif wow fadeInUp" data-wow-delay="1s">News</h2>
            <!-- <p class="subheader-txt wow fadeInUp" data-wow-delay="1.2s">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p> -->
        </div>
    </div>

    <a class="back-link wow fadeInUp" data-wow-delay="1.6s"  onclick="window.history.back()">← &nbsp; Go back</a>

<section class="projects-list">
    <div class="wrapper wow fadeInUp" data-wow-delay="1.8s">
    <?php
    if(empty($news)){
        echo'<p style="margin-bottom:1rem; font-style:italic">No news to show right now !</p>';
    }
    else{ foreach($news as $p){?>
        <a class="project" href="<?=base_url('news/'.$p->id.'/'.$p->slug)?>">
            <img class='lazyload' data-src="<?=base_url('assets/news/').$p->img_src?>" alt="GGEA news>">
            <div class="content">
                <h3><?=strlen($p->heading)>80?substr($p->heading,0,80)." . . .":$p->heading?></h3>
                <p>(<?=date('d/m/Y',strtotime($p->date))?>)</p>
                <small>Read more &nbsp;<i class="fa fa-caret-right fa-sm"></i></small>
            </div>
        </a>
    <?php } }?>
    </div>
    <div class="pagination_wrapper">
        <?php if($links){?>
            <p class="page-no">Go to page  : &emsp; <?php echo $links ?></p>
        <?php }?>
    </div>
</section>

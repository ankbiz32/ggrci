
    <div class="subheader" style="background:linear-gradient(to right,rgba(0,0,0,0.85) 40%,rgba(0,0,0,0.3)), url('<?=base_url()?>assets/images/header-notice.jpg') no-repeat">
        <div class="wrapper">
            <h2 class="subheader-head serif">Notice</h2>
            <p class="subheader-txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, ut facere! Perferendis voluptatibus praesentium veritatis facere culpa neque alias autem.</p>
        </div>
    </div>

    <a class="back-link"  onclick="window.history.back()">← &nbsp; Go back</a>

    <section class="all-news">
        <div class="wrapper">
            <?php foreach($notice as $n){?>
            <div class="news-txt">
                <a href="<?=base_url('assets/notice/').$n->file_src?>" target="_blank"><?=$n->content?></a><br>
                <small><em>Uploaded on: <?=date('d/m/Y',strtotime($n->date))?></em></small>
            </div>
            <?php }?>
        </div>
    </section>

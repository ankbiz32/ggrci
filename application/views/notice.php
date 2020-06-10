
    <div class="subheader" style="background:linear-gradient(to right,rgba(0,0,0,0.85) 40%,rgba(0,0,0,0.3)), url('<?=base_url()?>assets/images/header-notice.jpg') no-repeat">
        <div class="wrapper">
            <h2 class="subheader-head serif wow fadeInUp" data-wow-delay="1s">Notice</h2>
            <!-- <p class="subheader-txt wow fadeInUp" data-wow-delay="1.2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, ut facere! Perferendis voluptatibus praesentium veritatis facere culpa neque alias autem.</p> -->
        </div>
    </div>

    <a class="back-link wow fadeInUp" data-wow-delay="1.6s"  onclick="window.history.back()">← &nbsp; Go back</a>

    <section class="all-news notice-all wow fadeInUp" data-wow-delay="1.8s">
        <div class="wrapper" <?php if(empty($notice)){echo 'style="border:none;"';}?>>
            <?php
            if(empty($notice)){
                echo'<p style="margin-bottom:1rem; font-style:italic">No notice to show right now !</p>';
            }
            else{ foreach($notice as $n){?>
            <div class="news-txt">
                <div class="txt">
                <?php if($n->file_src!=''){ ?>
                    <a href="<?=base_url('assets/notice/').$n->file_src?>" target="_blank"><?=$n->content?></a>
                <?php }else{?>
                    <a><?=$n->content?></a>
                <?php }?>
                    <br>
                    <small><em>Uploaded on: <?=date('d/m/Y',strtotime($n->date))?></em></small>
                    <?php if($n->status=='new'){?>
                        <span class="new-tag">New</span>
                    <?php }?>
                </div>
                <a <?=$n->file_src==''?'style="visibility:hidden"':''?> href="<?=base_url('assets/notice/').$n->file_src?>" target="_blank">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 477.867 477.867" style="enable-background:new 0 0 477.867 477.867;" xml:space="preserve" >
                        <g>
                            <g>
                                <path d="M443.733,307.2c-9.426,0-17.067,7.641-17.067,17.067v102.4c0,9.426-7.641,17.067-17.067,17.067H68.267
                                    c-9.426,0-17.067-7.641-17.067-17.067v-102.4c0-9.426-7.641-17.067-17.067-17.067s-17.067,7.641-17.067,17.067v102.4
                                    c0,28.277,22.923,51.2,51.2,51.2H409.6c28.277,0,51.2-22.923,51.2-51.2v-102.4C460.8,314.841,453.159,307.2,443.733,307.2z"/>
                            </g>
                        </g>
                        <g class="svg-arrow">
                            <g>
                                <path d="M335.947,295.134c-6.614-6.387-17.099-6.387-23.712,0L256,351.334V17.067C256,7.641,248.359,0,238.933,0
                                    s-17.067,7.641-17.067,17.067v334.268l-56.201-56.201c-6.78-6.548-17.584-6.36-24.132,0.419c-6.388,6.614-6.388,17.099,0,23.713
                                    l85.333,85.333c6.657,6.673,17.463,6.687,24.136,0.031c0.01-0.01,0.02-0.02,0.031-0.031l85.333-85.333
                                    C342.915,312.486,342.727,301.682,335.947,295.134z"/>
                            </g>
                        </g>
                    </svg>
                </a>
            </div>
            <?php }} ?>
        </div>
        <div class="pagination_wrapper">
            <?php if($links){?>
                <p class="page-no">Go to page  : &emsp; <?php echo $links ?></p>
            <?php }?>
        </div>
    </section>

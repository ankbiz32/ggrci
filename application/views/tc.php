
    <div class="subheader" style="background:linear-gradient(to right,rgba(0,0,0,0.85) 40%,rgba(0,0,0,0.3)), url('<?=base_url()?>assets/images/header-tc.jpg') no-repeat">
        <div class="wrapper">
            <h2 class="subheader-head serif">Transfer certificates</h2>
            <p class="subheader-txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, ut facere! Perferendis voluptatibus praesentium veritatis facere culpa neque alias autem.</p>
        </div>
    </div>

    <section class="tc-page">
        <div class="wrapper">
            <h3>List of transfer certificates :</h3>
            <table>
                <thead>
                    <tr>
                        <th>Student's name</th>
                        <th>D.O.B</th>
                        <th>Father's name</th>
                        <th>Download</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($tc as $t){?>
                        <tr>
                        <td><?=$t->name?></td>
                        <td><?=date('d/m/Y',strtotime($t->dob))?></td>
                        <td><?=$t->fname?></td>
                        <td>
                            <a href="<?=base_url('assets/tc/').$t->img_src?>" target="_blank" download>
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 477.867 477.867" style="enable-background:new 0 0 477.867 477.867;" xml:space="preserve">
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
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </section>

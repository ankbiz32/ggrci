
    <section class="contact" style="background: linear-gradient(to right, rgba(0,0,0,0.8), rgba(0,0,0,0.8)),url('assets/images/ggr-drone.jpg') no-repeat;">
        <div class="wrapper wow fadeInUp" data-wow-offset="100">
        <h2 class="serif heading">
            Connect with us
        </h2>
        <div class="content">
            <form action="<?=base_url('Home/Mail')?>" method="POST">
                <div class="form-group">
                    <input type="text" maxlength="20" name="name" id="name" x-moz-errormessage="Enter name here" oninvalid="this.setCustomValidity('Enter name here')" oninput="this.setCustomValidity('')" required>
                    <label for="name">Name* :</label>
                </div>
                <div class="form-group">
                    <input type="email" maxlength="30" name="email" id="email" x-moz-errormessage="Enter e-mail here" oninvalid="this.setCustomValidity('Enter e-mail here')" oninput="this.setCustomValidity('')">
                    <label for="email">E-mail :</label>
                </div>
                <div class="form-group">
                    <input type="text" x-moz-errormessage="Enter Contact no. here"  name="phone" pattern="[6-9]{1}[0-9]{9}" oninvalid="this.setCustomValidity('')" oninput="this.setCustomValidity('')" maxlength="10" title="Enter 10 digit mobile no. starting with 6,7,8, or 9" required>
                    <label for="phone">Phone* :</label>
                </div>
                <div class="form-group remarker">
                    <textarea name="message" rows="3" maxlength="200" id="message"></textarea>
                    <label for="message">Message :</label>
                </div>
                <button type="submit" class="btn"> Send message &nbsp;<i class="fa fa-caret-right"></i></button>
            </form>
            <div class="map-social">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12504.243146400868!2d81.72878186919894!3d21.28991672284088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a28e834bcf78343%3A0x20841ab1597abf82!2sGyan%20Ganga%20Educational%20Academy!5e0!3m2!1sen!2sin!4v1590737904697!5m2!1sen!2sin" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                <div class="social-links">
                    <h3>Follow us:</h3>
                    <a href="<?=$web->fblink?>" target="_blank" class="fblink">
                        <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="m437 0h-362c-41.351562 0-75 33.648438-75 75v362c0 41.351562 33.648438 75 75 75h151v-181h-60v-90h60v-61c0-49.628906 40.371094-90 90-90h91v90h-91v61h91l-15 90h-76v181h121c41.351562 0 75-33.648438 75-75v-362c0-41.351562-33.648438-75-75-75zm0 0"/>
                        </svg>
                    </a>
                    <a href="<?=$web->instalink?>" target="_blank" class="instalink">
                        <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="m437 0h-362c-41.351562 0-75 33.648438-75 75v362c0 41.351562 33.648438 75 75 75h362c41.351562 0 75-33.648438 75-75v-362c0-41.351562-33.648438-75-75-75zm-180 390c-74.441406 0-135-60.558594-135-135s60.558594-135 135-135 135 60.558594 135 135-60.558594 135-135 135zm150-240c-24.8125 0-45-20.1875-45-45s20.1875-45 45-45 45 20.1875 45 45-20.1875 45-45 45zm0 0"/><path d="m407 90c-8.277344 0-15 6.722656-15 15s6.722656 15 15 15 15-6.722656 15-15-6.722656-15-15-15zm0 0"/><path d="m257 150c-57.890625 0-105 47.109375-105 105s47.109375 105 105 105 105-47.109375 105-105-47.109375-105-105-105zm0 0"/>
                        </svg>
                    </a>
                    <a href="<?=$web->youtubelink?>" target="_blank" class="ytlink">
                        <svg id="Bold" enable-background="new 0 0 24 24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="m23.469 5.929.03.196c-.29-1.029-1.073-1.823-2.068-2.112l-.021-.005c-1.871-.508-9.4-.508-9.4-.508s-7.51-.01-9.4.508c-1.014.294-1.798 1.088-2.083 2.096l-.005.021c-.699 3.651-.704 8.038.031 11.947l-.031-.198c.29 1.029 1.073 1.823 2.068 2.112l.021.005c1.869.509 9.4.509 9.4.509s7.509 0 9.4-.509c1.015-.294 1.799-1.088 2.084-2.096l.005-.021c.318-1.698.5-3.652.5-5.648 0-.073 0-.147-.001-.221.001-.068.001-.149.001-.23 0-1.997-.182-3.951-.531-5.846zm-13.861 9.722v-7.293l6.266 3.652z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        </div>
    </section>

    <footer>
        <div class="ufooter">
            <div class="emblem">
                <img class='lazyload' data-src="<?=base_url()?>assets/images/footer-logo.PNG" alt="Gyan Ganga emblem">
                <div class="address">
                    <div class="footer-head">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 97.713 97.713" style="enable-background:new 0 0 97.713 97.713;" xml:space="preserve">
                            <g>
                                <path d="M48.855,0C29.021,0,12.883,16.138,12.883,35.974c0,5.174,1.059,10.114,3.146,14.684
                                    c8.994,19.681,26.238,40.46,31.31,46.359c0.38,0.441,0.934,0.695,1.517,0.695s1.137-0.254,1.517-0.695
                                    c5.07-5.898,22.314-26.676,31.311-46.359c2.088-4.57,3.146-9.51,3.146-14.684C84.828,16.138,68.69,0,48.855,0z M48.855,54.659
                                    c-10.303,0-18.686-8.383-18.686-18.686c0-10.304,8.383-18.687,18.686-18.687s18.686,8.383,18.686,18.687
                                    C67.542,46.276,59.159,54.659,48.855,54.659z"/>
                            </g>
                        </svg>
                        <h4>Address :</h4>
                    </div>
                    <p><?=$web->address_line1?></p>
                    <p><?=$web->address_line2?></p>
                    <p><?=$web->address_line3?></p>
                </div>
            </div>
            <div class="info">
                <div class="timings">
                    <div class="footer-head">
                        <svg enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <g><path d="m256 90c-91.533 0-166 74.467-166 166s74.467 166 166 166 166-74.467 166-166-74.467-166-166-166zm-15 30h30v30h-30zm-91 151h-30v-30h30zm121 121h-30v-30h30zm6.213-93.574-21.213-21.213-21.213 21.213-21.213-21.213 21.213-21.213-85.206-85.206 21.213-21.213 85.206 85.206 85.561-85.561 21.213 21.213-85.561 85.561 21.213 21.213zm84.787-27.426v-30h30v30z"/><path d="m256 0c-141.385 0-256 114.615-256 256s114.615 256 256 256 256-114.615 256-256-114.615-256-256-256zm0 452c-108.075 0-196-87.925-196-196s87.925-196 196-196 196 87.925 196 196-87.925 196-196 196z"/></g>
                        </svg>
                        <h4>Office timings :</h4>
                    </div>
                    <p><?=$web->timing_1?></p>
                    <p><?=$web->timing_2?></p>
                </div>
                <div class="footer-contact">
                    <div class="footer-head">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <g>
                                <g>
                                    <g>
                                        <path d="M503.28,129.021C437.251,59.583,349.428,21.333,256,21.333S74.749,59.583,8.72,129.021
                                            c-11.626,12.229-11.626,32.115,0,44.344l49.194,51.729c11.585,12.146,32.046,12.146,43.63,0
                                            c16.481-17.323,35.171-31.583,55.507-42.333c10.189-5.26,16.773-16.313,16.69-26.75l7.418-56.062
                                            c54.423-17.396,95.824-17.385,149.706-0.01l7.334,54.667c0,11.823,6.272,22.615,16.523,28.25
                                            c20.419,10.802,39.13,25.063,55.611,42.375c5.772,6.094,13.523,9.438,21.815,9.438c8.293,0,16.044-3.344,21.815-9.427
                                            l49.319-51.875C514.907,161.135,514.907,141.25,503.28,129.021z"/>
                                        <path d="M394.792,220.229C385.5,202.813,367.458,192,347.729,192H164.271c-19.729,0-37.771,10.813-47.063,28.229L48.938,348.24
                                            c-4.104,7.708-6.271,16.385-6.271,25.094V448c0,23.531,19.146,42.667,42.667,42.667h341.333
                                            c23.521,0,42.667-19.135,42.667-42.667v-74.667c0-8.708-2.167-17.385-6.271-25.104L394.792,220.229z M191.979,426.667
                                            c-11.771,0-21.333-9.573-21.333-21.333c0-11.76,9.563-21.333,21.333-21.333c11.771,0,21.333,9.573,21.333,21.333
                                            C213.313,417.094,203.75,426.667,191.979,426.667z M191.979,362.667c-11.771,0-21.333-9.573-21.333-21.333
                                            c0-11.76,9.563-21.333,21.333-21.333c11.771,0,21.333,9.573,21.333,21.333C213.313,353.094,203.75,362.667,191.979,362.667z
                                            M191.979,298.667c-11.771,0-21.333-9.573-21.333-21.333c0-11.76,9.563-21.333,21.333-21.333
                                            c11.771,0,21.333,9.573,21.333,21.333C213.313,289.094,203.75,298.667,191.979,298.667z M256,426.667
                                            c-11.771,0-21.333-9.573-21.333-21.333c0-11.76,9.563-21.333,21.333-21.333s21.333,9.573,21.333,21.333
                                            C277.333,417.094,267.771,426.667,256,426.667z M256,362.667c-11.771,0-21.333-9.573-21.333-21.333
                                            c0-11.76,9.563-21.333,21.333-21.333s21.333,9.573,21.333,21.333C277.333,353.094,267.771,362.667,256,362.667z M256,298.667
                                            c-11.771,0-21.333-9.573-21.333-21.333c0-11.76,9.563-21.333,21.333-21.333s21.333,9.573,21.333,21.333
                                            C277.333,289.094,267.771,298.667,256,298.667z M319.979,426.667c-11.771,0-21.333-9.573-21.333-21.333
                                            c0-11.76,9.563-21.333,21.333-21.333c11.771,0,21.333,9.573,21.333,21.333C341.313,417.094,331.75,426.667,319.979,426.667z
                                            M319.979,362.667c-11.771,0-21.333-9.573-21.333-21.333c0-11.76,9.563-21.333,21.333-21.333
                                            c11.771,0,21.333,9.573,21.333,21.333C341.313,353.094,331.75,362.667,319.979,362.667z M319.979,298.667
                                            c-11.771,0-21.333-9.573-21.333-21.333c0-11.76,9.563-21.333,21.333-21.333c11.771,0,21.333,9.573,21.333,21.333
                                            C341.313,289.094,331.75,298.667,319.979,298.667z"/>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <h4>Contact no. :</h4>
                    </div>
                    <p><?=$web->phone1?></p>
                    <p><?=$web->phone2?></p>
                </div>
                <div class="email">
                    <div class="footer-head">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  viewBox="0 0 550.795 550.795" style="enable-background:new 0 0 550.795 550.795;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M501.613,491.782c12.381,0,23.109-4.088,32.229-12.16L377.793,323.567c-3.744,2.681-7.373,5.288-10.801,7.767
                                        c-11.678,8.604-21.156,15.318-28.434,20.129c-7.277,4.822-16.959,9.737-29.045,14.755c-12.094,5.024-23.361,7.528-33.813,7.528
                                        h-0.306h-0.306c-10.453,0-21.72-2.503-33.813-7.528c-12.093-5.018-21.775-9.933-29.045-14.755
                                        c-7.277-4.811-16.75-11.524-28.434-20.129c-3.256-2.387-6.867-5.006-10.771-7.809L16.946,479.622
                                        c9.119,8.072,19.854,12.16,32.234,12.16H501.613z"/>
                                    <path d="M31.047,225.299C19.37,217.514,9.015,208.598,0,198.555V435.98l137.541-137.541
                                        C110.025,279.229,74.572,254.877,31.047,225.299z"/>
                                    <path d="M520.059,225.299c-41.865,28.336-77.447,52.73-106.75,73.195l137.486,137.492V198.555
                                        C541.98,208.396,531.736,217.306,520.059,225.299z"/>
                                    <path d="M501.613,59.013H49.181c-15.784,0-27.919,5.33-36.42,15.979C4.253,85.646,0.006,98.97,0.006,114.949
                                        c0,12.907,5.636,26.892,16.903,41.959c11.267,15.061,23.256,26.891,35.961,35.496c6.965,4.921,27.969,19.523,63.012,43.801
                                        c18.917,13.109,35.368,24.535,49.505,34.395c12.05,8.396,22.442,15.667,31.022,21.701c0.985,0.691,2.534,1.799,4.59,3.269
                                        c2.215,1.591,5.018,3.61,8.476,6.107c6.659,4.816,12.191,8.709,16.597,11.683c4.4,2.975,9.731,6.298,15.985,9.988
                                        c6.249,3.685,12.143,6.456,17.675,8.299c5.533,1.842,10.655,2.766,15.367,2.766h0.306h0.306c4.711,0,9.834-0.924,15.368-2.766
                                        c5.531-1.843,11.42-4.608,17.674-8.299c6.248-3.69,11.572-7.02,15.986-9.988c4.406-2.974,9.938-6.866,16.598-11.683
                                        c3.451-2.497,6.254-4.517,8.469-6.102c2.057-1.476,3.605-2.577,4.596-3.274c6.684-4.651,17.1-11.892,31.104-21.616
                                        c25.482-17.705,63.01-43.764,112.742-78.281c14.957-10.447,27.453-23.054,37.496-37.803c10.025-14.749,15.051-30.22,15.051-46.408
                                        c0-13.525-4.873-25.098-14.598-34.737C526.461,63.829,514.932,59.013,501.613,59.013z"/>
                                </g>
                            </g>
                        </svg>
                        <h4>E-mail :</h4>
                    </div>
                    <p><?=$web->email?></p>
                </div>
            </div>
            <div class="newsletter">
                <div class="sign-up">
                    <div class="footer-head">
                        <h4>Sign up for newsletter</h4>
                    </div>
                    <p>Get latest news & updates.</p>
                    <form action="<?=base_url('Home/Subscribe')?>" method="POST">
                        <div class="field">
                            <input type="email" name="email" placeholder="Enter email id" required>
                            <button type="submit" class="signup-btn">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 484.5 484.5" style="enable-background:new 0 0 484.5 484.5;" xml:space="preserve">
                                    <g>
                                        <g id="keyboard-return">
                                            <polygon points="433.5,114.75 433.5,216.75 96.9,216.75 188.7,124.95 153,89.25 0,242.25 153,395.25 188.7,359.55 96.9,267.75 
                                                484.5,267.75 484.5,114.75 		"/>
                                        </g>
                                    </g>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="quick-links">
                    <div class="footer-head">
                        <h4>Quick Links :</h4>
                    </div>
                    <div class="links">
                        <p><a href="<?=base_url('About')?>">About</a></p>
                        <p><a href="<?=base_url('Legal')?>">Legal</a></p>
                        <p><a href="<?=base_url('Policy')?>">Privacy policy</a></p>
                        <p><a href="<?=base_url('Contact')?>">Contact</a></p>
                        <p><a href="<?=base_url('Admissions')?>">Admissions</a></p>
                        <p><a href="<?=base_url('Facilities')?>">Facilities</a></p>
                        <p><a href="<?=base_url('TC')?>">TC</a></p>
                        <p><a href="<?=base_url('sitemap.xml')?>" target="_blank">Sitemap</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="lfooter">
            <p class="cpy">
                <span>Copyright </span> &copy; 2020 | All rights reserved with<strong> Gyan Ganga Educational Academy</strong>
             </p>
             <p class="powered">
                 Powered by : 
                 <strong><a href="https://cluebix.com" target="_blank">Cluebix Software</a></strong>
             </p>
        </div>
    </footer>

    <script src="<?=base_url()?>assets/js/spotlight.bundle.js"></script>
    <script src="<?=base_url()?>assets/js/lazy.js"></script>
    <script src="<?=base_url()?>assets/js/wow.min.js"></script>
    <script src="<?=base_url()?>assets/js/float_label.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="<?=base_url()?>assets/js/app.js"></script>
    <script>
        // On-scroll nav fiexd on top
        $(function () {
            new WOW().init();

            $(document).scroll(function () {
                var $nav = $("nav");
                var $bar = $(".logo-bar");
                var $links = $(".left-links");
                var $logo = $(".scroll-logo-link");
                var $scrollHeight= 400 ;
                $nav.toggleClass('fixed', $(this).scrollTop() > $scrollHeight);
                $bar.toggleClass('fix-bar', $(this).scrollTop() > $scrollHeight);
                $links.toggleClass('dnone', $(this).scrollTop() > $scrollHeight);
                $logo.toggleClass('float', $(this).scrollTop() > $scrollHeight);
            });
        });

        //  Sweet alert for normal response
        var base_url = '<?=base_url()?>';
        $(document).ready(function(){
            const Toast = Swal.mixin({
                showConfirmButton: true,
                timer: 3000
            });

            <?php if($this->session->flashdata('success') || $message = $this->session->flashdata('failed')):
                $class = $this->session->flashdata('success') ? 'success' : 'error';
            ?>
                
                Toast.fire({
                    icon: '<?=$class?>',
                    title: '<?= $this->session->flashdata('success'); ?>
                            <?= $this->session->flashdata('failed'); ?>'
                });
            <?php 
                endif;
            ?>
        });

    </script>
    
</body>
</html>
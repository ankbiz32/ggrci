<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gyan Ganga Educational Academy, Vidhan sabha road, Raipur (C.G.) | <?=isset($title)?$title:''?></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url('assets/images/')?>favicon32x32.ico">
    <meta name="theme-color" content="#1B5794">
    <meta name="msapplication-navbutton-color" content="#1B5794">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/float_label.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/animate.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/style.css">
    <script src="<?=base_url('assets/')?>js/jquery.min.js"></script>
</head>
<body>
    <a href="<?=base_url('Login')?>" accesskey="l" style="opacity:0; visibility:hidden;"></a>
    <div class="logo-bar wow fadeInDown">
        <div class="wrapper">
            <a href="<?=base_url()?>"><img src="<?=base_url('assets/')?>images/logo.png" alt="GGR Logo" class="logo"></a>
            <div class="address-bar">
                <div class="top-address">
                    <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="m372.710938 377h-116.710938l-100 67.5 100 67.5h256zm0 0" fill="#4ba6a7"/>
                        <path d="m139.289062 377-139.289062 135h256v-135zm0 0" fill="#59d1cc"/>
                        <path d="m256 0-100 180 100 279.5 137.746094-163.644531c27.246094-32.359375 42.253906-73.503907 42.253906-115.855469 0-99.253906-80.746094-180-180-180zm0 0" fill="#e00016"/>
                        <path d="m76 180c0 42.351562 15.007812 83.496094 42.253906 115.859375 0-.003906 137.746094 163.640625 137.746094 163.640625v-459.5c-99.253906 0-180 80.746094-180 180zm0 0" fill="#ff4547"/>
                        <path d="m256 60-60 120 60 120c66.273438 0 120-53.726562 120-120s-53.726562-120-120-120zm0 0" fill="#fff9e8"/>
                        <path d="m136 180c0 66.273438 53.726562 120 120 120v-240c-66.273438 0-120 53.726562-120 120zm0 0" fill="#fff"/>
                    </svg>
                    <p><?=$web->address_line1?> <br> <?=$web->address_line2?> <?=$web->address_line3?></p>
                </div>
                <div class="top-phone">
                    <img src="<?=base_url('assets/')?>images/phone-icon-red.png" alt="Phone">
                    <p><?=$web->phone1?> <br> <?=$web->phone2?></p>
                </div>
            </div>
        </div>
    </div>

    <nav class="wow fadeInDown" data-wow-delay="0.5s">
        <div class="wrapper">
            <a href="" class="scroll-logo-link"><img src="<?=base_url('assets/')?>images/footer-logo.PNG" class="scroll-logo" alt="Gyang Ganga Logo"></a>
            <div class="left-links">
                <a href="<?=$web->fblink?>" target="_blank" class="fblink">
                    <svg viewBox="-21 -21 682.66669 682.66669" xmlns="http://www.w3.org/2000/svg">
                        <path d="m604.671875 0h-569.375c-19.496094.0117188-35.30078125 15.824219-35.296875 35.328125v569.375c.0117188 19.496094 15.824219 35.300781 35.328125 35.296875h306.546875v-247.5h-83.125v-96.875h83.125v-71.292969c0-82.675781 50.472656-127.675781 124.222656-127.675781 35.324219 0 65.679688 2.632812 74.527344 3.808594v86.410156h-50.855469c-40.125 0-47.894531 19.066406-47.894531 47.050781v61.699219h95.9375l-12.5 96.875h-83.4375v247.5h162.796875c19.507813.003906 35.324219-15.804688 35.328125-35.3125 0-.003906 0-.007812 0-.015625v-569.375c-.007812-19.496094-15.824219-35.30078125-35.328125-35.296875zm0 0"/>
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
            <ul class="menu">
                <li><a href="<?=base_url()?>" class="active">Home</a></li>
                <li><a href="<?=base_url('About')?>">About</a></li>
                <li class="dropdown sm-hide nowrap">
                    <a>Admissions <i class="fa fa-caret-down fa-sm"></i></a>
                    <div class="submenu">
                        <a href="<?=base_url('Admissions')?>">Admission Procedure</a>
                        <a href="<?=base_url('TC')?>">Transfer certificates</a>
                    </div>
                </li>
                <li class="sm-show"><a href="<?=base_url('Admissions')?>">Admissions</a></li>
                <li class="sm-show nowrap"><a href="<?=base_url('TC')?>">Transfer Certificate</a></li>
                <li><a href="<?=base_url('Facilities')?>">Facilities</a></li>
                <li><a href="<?=base_url('Gallery')?>">Gallery</a></li>
                <li><a href="<?=base_url('Legal')?>">Legal</a></li>
                <li><a href="<?=base_url('Contact')?>">Contact</a></li>
            </ul>
        </div>
    </nav>

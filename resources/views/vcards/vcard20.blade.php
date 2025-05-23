<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Culinary and Food Services</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ getFaviconUrl() }}" type="image/png">

    {{-- css link --}}
    <link rel="stylesheet" href="{{ asset('assets/css/vcard20.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slider/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slider/css/slick-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/new_vcard/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/new_vcard/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/new_vcard/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/third-party.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-vcard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.css') }}">
</head>

<body>
    <div class="container p-0">
        <div class="main-content mx-auto w-100 overflow-hidden bg-gray-300">
            <div class="banner-section position-absolute w-100">
                <div class="banner-img">
                    <img src="{{ asset('assets/img/vcard20/banner-img.png') }}" class="object-fit-cover w-100 h-100" loading="lazy"/>
                    <div class="d-flex justify-content-end position-absolute top-0 end-0 me-3 z-index-9">
                        <div class="language pt-3 me-2">
                            <ul class="text-decoration-none">
                                <li class="dropdown1 dropdown lang-list">
                                    <a class="dropdown-toggle lang-head text-decoration-none" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa-solid fa-language me-2"></i>Language</a>
                                    <ul class="dropdown-menu start-0 lang-hover-list top-100 mt-0">
                                        <li>
                                            <img src="{{ asset('assets/img/vcard1/english.png') }}" width="25px"
                                                height="20px" class="me-3" loading="lazy"><a href="#">English</a>
                                        </li>
                                        <li>
                                            <img src="{{ asset('assets/img/vcard1/spain.png') }}" width="25px"
                                                height="20px" class="me-3" loading="lazy"><a href="#">Spanish</a>
                                        </li>
                                        <li>
                                            <img src="{{ asset('assets/img/vcard1/france.png') }}" width="25px"
                                                height="20px" class="me-3" loading="lazy"><a href="#">Franch</a>
                                        </li>
                                        <li>
                                            <img src="{{ asset('assets/img/vcard1/arabic.svg') }}" width="25px"
                                                height="20px" class="me-3" loading="lazy"><a href="#">Arabic</a>
                                        </li>
                                        <li>
                                            <img src="{{ asset('assets/img/vcard1/german.png') }}" width="25px"
                                                height="20px" class="me-3" loading="lazy"><a href="#">German</a>
                                        </li>
                                        <li>
                                            <img src="{{ asset('assets/img/vcard1/russian.jpeg') }}" width="25px"
                                                height="20px" class="me-3" loading="lazy"><a href="#">russian</a>
                                        </li>
                                        <li>
                                            <img src="{{ asset('assets/img/vcard1/turkish.png') }}" width="25px"
                                                height="20px" class="me-3" loading="lazy"><a href="#">Turkish</a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>
            <div class="profile-section pb-30 px-40">
                <div class="card flex-sm-row align-items-center">
                    <div class="card-img d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/img/vcard20/profile-img.png') }}"
                            class="w-100 h-100 object-fit-cover" loading="lazy"/>
                    </div>
                    <div class="card-body pt-sm-0 px-0 text-sm-start text-center">
                        <div class="profile-name">
                            <h2 class="text-white fs-28 mb-0">
                                Olivia Murray
                            </h2>
                            <p class="fs-18 text-primary fw-5 mb-0">Executive Chef</p>
                        </div>

                    </div>
                </div>
                <div class="social-media pt-30 d-flex flex-wrap justify-content-center">
                    <a href="" class="social-icon d-flex justify-content-center align-items-center">
                        <svg width="13" height="25" viewBox="0 0 13 25" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3.48824 14.1111C2.93372 14.1111 2.42459 14.1111 1.91547 14.1111C1.48123 14.1111 1.047 14.1193 0.613524 14.1079C0.159622 14.0964 0.0113476 13.9495 0.00756504 13.4638C-0.00226951 12.1912 -0.00302602 10.9179 0.00832154 9.64528C0.0128606 9.16368 0.171726 9.01103 0.619577 9.00777C1.4593 9.00205 2.29901 9.00613 3.13949 9.00613C3.24237 9.00613 3.34526 9.00613 3.48824 9.00613C3.48824 8.86818 3.48673 8.74982 3.48824 8.63228C3.50791 7.47235 3.46706 6.30752 3.55935 5.15412C3.79311 2.21633 5.87123 0.1185 8.60372 0.0229951C9.71578 -0.0161863 10.8309 0.00585325 11.9437 0.00911836C12.3356 0.00993464 12.4944 0.182986 12.4959 0.60745C12.5012 1.7984 12.5012 2.99016 12.4967 4.18111C12.4952 4.63741 12.3469 4.80312 11.9119 4.81373C11.1478 4.83332 10.3838 4.83332 9.61895 4.84638C8.76183 4.86026 8.40173 5.22187 8.38357 6.13528C8.36542 7.05849 8.37979 7.98334 8.37979 8.94246C8.50915 8.94246 8.60977 8.94246 8.71038 8.94246C9.68249 8.94246 10.6546 8.94083 11.6267 8.94328C12.2395 8.9441 12.3832 9.09756 12.384 9.74731C12.3847 10.9587 12.3862 12.1708 12.3832 13.3822C12.3817 13.9242 12.2493 14.0703 11.744 14.0728C10.6402 14.0777 9.53649 14.0744 8.38055 14.0744C8.38055 14.2164 8.38055 14.343 8.38055 14.4687C8.38055 17.6554 8.38055 20.843 8.38055 24.0297C8.38055 24.908 8.29431 24.9995 7.46669 24.9995C6.38111 24.9995 5.29628 25.0011 4.2107 24.9986C3.6297 24.9978 3.48824 24.8468 3.48824 24.2264C3.48748 20.9883 3.48748 17.7501 3.48748 14.5127C3.48824 14.3927 3.48824 14.2728 3.48824 14.1111Z"
                                fill="white" />
                        </svg>
                    </a>
                    <a href="" class="social-icon d-flex justify-content-center align-items-center">
                        <svg width="26" height="25" viewBox="0 0 26 25" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M25.5 11.2256C25.5 11.7143 25.5 12.2024 25.5 12.6912C25.4608 13.0129 25.4289 13.3352 25.3818 13.6557C25.0001 16.2479 23.901 18.4908 22.0606 20.3588C20.0879 22.3613 17.6968 23.5418 14.9032 23.8654C12.4606 24.1486 10.135 23.7204 7.94909 22.5821C7.79838 22.5039 7.67034 22.4733 7.49451 22.5363C6.20062 22.9999 4.90059 23.4458 3.60363 23.9015C2.56827 24.2648 1.53475 24.6336 0.5 25C0.521442 24.8979 0.531245 24.792 0.565552 24.6942C1.33135 22.5008 2.09593 20.3062 2.87398 18.1171C2.96526 17.8608 2.95852 17.662 2.83109 17.4137C1.65666 15.1286 1.27009 12.7022 1.64686 10.1693C2.02547 7.62363 3.12516 5.4119 4.94715 3.58796C7.64951 0.883244 10.9339 -0.285619 14.7347 0.0587402C17.045 0.267925 19.1224 1.12056 20.9358 2.57323C23.2976 4.46446 24.7746 6.89393 25.3101 9.87878C25.3897 10.3247 25.4375 10.7767 25.5 11.2256ZM10.7899 9.86716C10.8052 9.84025 10.8077 9.83169 10.8132 9.82618C11.1287 9.50812 11.446 9.19251 11.7591 8.87262C12.1267 8.49645 12.1267 8.09215 11.7554 7.71721C11.2224 7.17957 10.687 6.64377 10.1479 6.11163C9.76802 5.73669 9.36796 5.73669 8.98935 6.10918C8.59481 6.49758 8.21498 6.90127 7.81063 7.27927C7.35299 7.70743 7.21698 8.23161 7.27886 8.8298C7.3824 9.82435 7.79287 10.7082 8.30013 11.5468C9.61915 13.7267 11.3688 15.4986 13.4929 16.9005C14.3518 17.4675 15.264 17.9324 16.2871 18.1391C17.0737 18.2981 17.7673 18.185 18.326 17.5391C18.6446 17.1709 19.014 16.8461 19.3583 16.4993C19.7528 16.1011 19.7522 15.7072 19.3546 15.3066C18.8498 14.7983 18.3413 14.2931 17.834 13.7872C17.3684 13.323 17.0008 13.3218 16.5377 13.7836C16.2338 14.0869 15.9312 14.3915 15.631 14.6925C13.4506 13.6251 11.8485 12.0251 10.7899 9.86716Z"
                                fill="white" />
                        </svg>
                    </a>

                    <a href="" class="social-icon d-flex justify-content-center align-items-center">
                        <svg width="26" height="25" viewBox="0 0 26 25" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_94_543)">
                                <path
                                    d="M25.4829 15.1365C25.4747 13.9763 25.359 12.8225 25.0217 11.7014C24.5996 10.2974 23.8345 9.16808 22.4696 8.52394C21.4152 8.02657 20.2908 7.88714 19.1418 7.92139C17.1308 7.98173 15.5036 8.75795 14.4158 10.5126C14.4036 10.5322 14.371 10.5395 14.3025 10.5787C14.3025 9.80814 14.3025 9.07187 14.3025 8.33478C12.6297 8.33478 10.9975 8.33478 9.36951 8.33478C9.36951 13.9037 9.36951 19.4506 9.36951 25C11.0929 25 12.7886 25 14.5282 25C14.5282 24.8475 14.5282 24.7269 14.5282 24.6054C14.5282 22.0011 14.5209 19.396 14.5339 16.7917C14.5364 16.2136 14.5739 15.6315 14.6562 15.0599C14.8811 13.4928 15.678 12.6456 17.1251 12.4744C18.7149 12.2868 19.8247 12.8666 20.1392 14.5731C20.2508 15.1798 20.2997 15.8051 20.3038 16.4224C20.3217 19.149 20.3136 21.8755 20.3144 24.6021C20.3144 24.7195 20.3144 24.8361 20.3144 24.9478C22.0663 24.9478 23.7693 24.9478 25.4878 24.9478C25.4927 24.8793 25.5 24.8304 25.5 24.7807C25.4959 21.5665 25.5041 18.3515 25.4829 15.1365Z"
                                    fill="white" />
                                <path
                                    d="M0.929749 24.9886C2.65639 24.9886 4.36673 24.9886 6.08277 24.9886C6.08277 19.427 6.08277 13.8882 6.08277 8.33069C4.36265 8.33069 2.65965 8.33069 0.929749 8.33069C0.929749 13.8988 0.929749 19.4384 0.929749 24.9886Z"
                                    fill="white" />
                                <path
                                    d="M3.48067 0.000119092C1.84204 0.0147956 0.499186 1.3683 0.5 3.00392C0.500815 4.66726 1.87381 6.0436 3.52223 6.03381C5.16168 6.02403 6.50616 4.65014 6.49638 2.99251C6.48742 1.32916 5.13316 -0.0145575 3.48067 0.000119092Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_94_543">
                                    <rect width="25" height="25" fill="white" transform="translate(0.5)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>

                    <a href="" class="social-icon d-flex justify-content-center align-items-center">
                        <svg width="26" height="25" viewBox="0 0 26 25" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_94_546)">
                                <path
                                    d="M25.4972 5.76124C25.4972 10.253 25.4972 14.744 25.4972 19.2357C25.3986 19.7027 25.3405 20.1834 25.1945 20.6351C24.3431 23.262 21.9807 24.9855 19.2086 24.9931C15.0676 25.0046 10.9267 24.9993 6.78576 24.9947C5.45589 24.9931 4.22997 24.6255 3.15308 23.8383C1.37381 22.5375 0.500986 20.7681 0.500986 18.5662C0.500221 14.5391 0.497928 10.5121 0.504807 6.48502C0.505571 6.07231 0.524679 5.65194 0.598815 5.24687C1.01841 2.93718 2.3307 1.32605 4.49824 0.444054C5.05388 0.217823 5.67219 0.143687 6.26146 0C10.7532 0 15.2442 0 19.7359 0C19.911 0.031336 20.0867 0.0603791 20.261 0.0932437C22.5554 0.526598 24.162 1.8259 25.0455 3.97738C25.2771 4.53913 25.3512 5.16509 25.4972 5.76124ZM23.3992 12.4985C23.4022 12.4985 23.4053 12.4985 23.4084 12.4985C23.4084 10.4647 23.4045 8.43091 23.4107 6.39637C23.4122 5.74442 23.3251 5.11159 23.0339 4.52538C22.2451 2.93641 20.9588 2.09645 19.1803 2.09034C15.0554 2.07582 10.9305 2.08499 6.80563 2.08805C6.56259 2.08805 6.31802 2.11098 6.07803 2.14537C4.18488 2.41211 2.61731 4.12412 2.60508 6.04097C2.5768 10.2958 2.59362 14.5506 2.59133 18.8054C2.59133 19.3832 2.70444 19.9412 2.95895 20.4578C3.7584 22.0774 5.06916 22.9043 6.87824 22.9066C10.9542 22.9127 15.0302 22.9097 19.1062 22.9059C19.3813 22.9059 19.6587 22.8845 19.9316 22.847C21.7881 22.5925 23.3671 20.8614 23.3923 18.9896C23.4221 16.8267 23.3992 14.663 23.3992 12.4985Z"
                                    fill="white" />
                                <path
                                    d="M19.2468 12.529C19.214 15.9898 16.3792 18.7909 12.9552 18.7458C9.49829 18.7007 6.71779 15.8874 6.75065 12.4664C6.78352 9.00413 9.61599 6.20606 13.0415 6.24962C16.4992 6.29471 19.2797 9.10808 19.2468 12.529ZM13.0026 8.33767C10.7036 8.33385 8.84787 10.1834 8.8387 12.4885C8.82877 14.7845 10.6768 16.644 12.9835 16.6593C15.2863 16.6738 17.1618 14.8043 17.1596 12.4962C17.1573 10.1941 15.3046 8.34149 13.0026 8.33767Z"
                                    fill="white" />
                                <path
                                    d="M19.7812 7.28218C18.9114 7.28829 18.2144 6.59661 18.2144 5.72761C18.2151 4.87237 18.8992 4.18068 19.7575 4.16692C20.6051 4.15317 21.3327 4.87466 21.3319 5.72837C21.3319 6.57903 20.6356 7.27607 19.7812 7.28218Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_94_546">
                                    <rect width="25" height="25" fill="white" transform="translate(0.5)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                    <a href="" class="social-icon d-flex justify-content-center align-items-center">
                        <svg width="26" height="22" viewBox="0 0 26 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.88939 16.6214C5.54282 16.3168 3.98596 15.2112 3.106 13C3.86186 13 4.52748 13 5.18181 13C2.80139 12.0636 1.45888 10.4278 1.28966 7.83304C2.01168 8.03611 2.6773 8.22789 3.34291 8.4084C3.37675 8.36327 3.4106 8.31815 3.44444 8.27302C2.45166 7.47203 1.74092 6.47925 1.49273 5.21571C1.24453 3.95217 1.35735 2.73376 2.04553 1.48151C4.88849 4.71932 8.36321 6.60335 12.6389 6.8741C12.6389 6.40028 12.6277 5.99414 12.6389 5.588C12.7066 3.43322 13.7671 1.86508 15.6962 0.996397C17.5803 0.150278 19.4305 0.37591 21.055 1.70714C21.5063 2.07943 21.9124 2.1584 22.4201 1.95533C23.1985 1.65073 23.9769 1.34613 24.8231 1.03024C24.462 2.1584 23.7175 2.92555 22.939 3.76039C23.7513 3.54604 24.5636 3.3204 25.3758 3.10605C25.4097 3.1399 25.4548 3.17374 25.4887 3.20759C24.8456 3.8732 24.2364 4.59522 23.5369 5.19315C23.1534 5.52031 23.0067 5.84748 22.9954 6.33259C22.9277 9.72835 21.9124 12.8082 19.814 15.4932C16.9936 19.1146 13.2481 20.9422 8.63397 21.0325C5.99408 21.0889 3.52341 20.5361 1.19941 19.2839C0.973776 19.1598 0.748144 19.0244 0.51123 18.8326C3.18497 18.9567 5.62179 18.3249 7.88939 16.6214Z"
                                fill="white" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="desc px-40">
                <p class="text-gray-100 fs-14 fw-5 text-center mb-0">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book.
                </p>
            </div>
            <div class="contact-section position-relative px-40 pt-30">
                <div class="contact-bg-img">
                    <img src="{{ asset('assets/img/vcard20/contact-bg-img.png') }}" loading="lazy"/>
                </div>

                <div class="section-heading text-center overflow-hidden mb-40">
                    <h2 class="font-DancingScript text-white mb-1 d-inline-block">
                        Contact
                    </h2>
                </div>

                <div class="">
                    <div class="row">
                        <div class="col-sm-6 mb-30">
                            <div class="contact-box">
                                <div class="contact-icon d-flex justify-content-center align-items-center">
                                    <svg width="21" height="16" viewBox="0 0 21 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_94_624)">
                                            <path
                                                d="M20.4 2.83808C20.4 2.70366 20.4 2.57287 20.4 2.43845C20.3727 2.31493 20.3531 2.19141 20.3141 2.07152C20.1344 1.48662 19.8063 1.01797 19.1305 0.865381C18.9078 0.81452 18.6656 0.803621 18.4352 0.803621C13.0797 0.799988 7.72424 0.799988 2.36877 0.799988C2.25159 0.799988 2.1344 0.799988 2.01721 0.810887C1.66565 0.83995 1.35315 0.963471 1.07581 1.17055C0.696899 1.45392 0.493774 1.82448 0.396118 2.2568C0.396118 2.40212 0.396118 2.54744 0.396118 2.69276C0.474243 3.05969 0.567993 3.42298 0.767212 3.75358C1.17346 4.42205 1.74377 4.94156 2.41565 5.37388C4.40002 6.65995 6.3844 7.94965 8.37268 9.23208C8.70862 9.45006 9.06018 9.64624 9.41565 9.83515C10.068 10.1803 10.7321 10.1766 11.3844 9.83152C11.6735 9.67893 11.9625 9.52635 12.236 9.35197C14.3063 8.01867 16.3766 6.68538 18.4274 5.33028C19.3727 4.70542 20.1461 3.94613 20.4 2.83808Z"
                                                fill="#C9A664" />
                                            <path
                                                d="M20.4 5.52649C19.1852 6.62364 17.693 7.36113 16.3414 8.2839C16.0446 8.48735 15.7321 8.67626 15.4156 8.87608C15.4508 8.91604 15.4781 8.94874 15.5055 8.9778C17.1149 10.4746 18.7203 11.9677 20.3258 13.4609C20.3492 13.4827 20.3766 13.5008 20.4 13.519C20.4 10.856 20.4 8.18945 20.4 5.52649Z"
                                                fill="#C9A664" />
                                            <path
                                                d="M0.400015 13.519C0.458609 13.4681 0.517203 13.4209 0.57189 13.37C2.12658 11.9241 3.68518 10.4782 5.23987 9.02866C5.28674 8.98507 5.32971 8.94147 5.3844 8.88698C5.3219 8.84338 5.26721 8.80342 5.21252 8.76709C4.10315 8.05866 2.98205 7.36477 1.88439 6.63818C1.36877 6.29668 0.89611 5.89705 0.400015 5.52286C0.400015 8.18945 0.400015 10.856 0.400015 13.519Z"
                                                fill="#C9A664" />
                                            <path
                                                d="M6.69299 9.74072C4.80237 11.4991 2.92346 13.2465 1.03284 15.0049C1.29456 15.2374 1.61877 15.3609 1.98206 15.4009C2.08362 15.4118 2.18909 15.4118 2.29456 15.4118C7.6969 15.4118 13.0992 15.4118 18.5016 15.4154C18.9742 15.4154 19.4 15.3137 19.7438 15.0303C17.8571 13.2756 15.9742 11.5245 14.0797 9.76252C13.6735 10.0314 13.2477 10.3256 12.8063 10.6017C12.2594 10.9469 11.6696 11.2121 11.025 11.3574C10.3531 11.51 9.71643 11.3865 9.08362 11.143C8.33362 10.856 7.70081 10.4019 7.04846 9.97323C6.92737 9.90057 6.81409 9.82065 6.69299 9.74072Z"
                                                fill="#C9A664" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_94_624">
                                                <rect width="20" height="14.6154" fill="white"
                                                    transform="matrix(-1 0 0 1 20.4 0.799988)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="contact-desc">
                                    <p class="text-gray-100 mb-0 fs-14 fw-5">E-mail address</p>
                                    <a href="braxtonreyes@gmail.com"
                                        class="text-white fw-5">braxtonreyes@gmail.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-30">
                            <div class="contact-box">
                                <div class="contact-icon d-flex justify-content-center align-items-center">
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.99956 0.199959C3.61112 0.199959 4.21669 0.193958 4.82825 0.199959C5.45181 0.205957 5.79956 0.529958 5.80556 1.15996C5.81755 2.32996 5.81155 3.49996 5.79956 4.66996C5.79956 4.78995 5.72161 4.93996 5.63767 5.02996C4.96016 5.71996 4.27665 6.40995 3.58114 7.08195C3.38329 7.26795 3.34731 7.44795 3.47922 7.65796C3.76102 8.11395 4.01883 8.59395 4.35459 9.01395C5.56573 10.55 6.94474 11.924 8.51562 13.1C8.83939 13.346 9.21112 13.532 9.56487 13.736C9.76872 13.85 9.9366 13.814 10.1165 13.628C10.782 12.938 11.4655 12.26 12.149 11.594C12.2569 11.492 12.4368 11.408 12.5867 11.402C13.7079 11.384 14.8231 11.39 15.9443 11.396C16.6878 11.396 16.9996 11.72 16.9996 12.458C16.9996 13.628 16.9996 14.798 16.9996 15.968C16.9996 16.658 16.6638 17 15.9683 16.994C14.8231 16.988 13.6719 17.066 12.5387 16.796C10.5182 16.316 8.73746 15.344 7.09463 14.114C4.70234 12.32 2.72975 10.154 1.38072 7.46595C0.595278 5.90596 0.15759 4.26196 0.217548 2.49796C0.229539 2.05996 0.217548 1.61596 0.223543 1.17796C0.217547 0.541958 0.559303 0.205957 1.20085 0.199959C1.80042 0.193958 2.39999 0.199959 2.99956 0.199959Z"
                                            fill="#C9A664" />
                                    </svg>
                                </div>
                                <div class="contact-desc">
                                    <p class="text-gray-100 mb-0 fs-14 fw-5">Mobile Number</p>
                                    <a href="tel:+49 95864 12484" class="text-white fw-5">+49 95864 12484</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-30">
                            <div class="contact-box">
                                <div class="contact-icon d-flex justify-content-center align-items-center">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_94_700)">
                                            <path
                                                d="M0.827951 9.35231C1.66633 9.47548 2.47564 9.61343 3.28979 9.7169C4.38017 9.84993 5.4657 9.98788 6.56093 10.0618C7.87908 10.1505 9.20207 10.2145 10.5251 10.2195C12.6283 10.2293 14.717 10.0618 16.7572 9.5149C16.9559 9.4607 17.1546 9.39172 17.3436 9.30304C16.9704 9.35231 16.5973 9.42621 16.2241 9.45084C15.0998 9.52475 13.9755 9.59865 12.8512 9.63314C11.126 9.68734 9.40077 9.59865 7.67554 9.48041C5.58686 9.3326 3.50302 9.1503 1.44341 8.75122C1.24472 8.7118 1.04603 8.6576 0.852182 8.60341C0.764952 8.57877 0.682567 8.5295 0.595337 8.49009C0.595337 8.47038 0.595337 8.44574 0.595337 8.42604C0.682567 8.4014 0.774644 8.36199 0.86672 8.34721C1.68572 8.23881 2.50956 8.15013 3.32856 8.02695C4.83571 7.80524 6.32347 7.47021 7.79185 7.06127C7.92269 7.02678 8.00023 7.04156 8.09716 7.14996C8.59631 7.73134 9.25538 8.03188 9.97746 8.17969C11.3635 8.46545 12.5653 8.11071 13.5394 7.04649C13.6217 6.9578 13.6847 6.85434 13.7623 6.7558C14.1936 6.89375 14.6249 7.04156 15.0611 7.17459C16.3792 7.56875 17.7264 7.82495 19.0882 8.02203C19.316 8.05652 19.5486 8.11564 19.7666 8.19447C20.324 8.4014 20.6147 8.79063 20.5953 9.38679C20.5808 9.82529 20.5178 10.2736 20.416 10.7023C19.8587 13.0377 19.4904 15.4026 19.0882 17.7676C19.0688 17.8957 19.0397 18.0188 19.0203 18.1469C18.9428 18.615 18.6617 18.8761 18.211 18.95C17.6295 19.0436 17.048 19.1372 16.4664 19.2062C13.7332 19.5265 10.9951 19.5117 8.25708 19.3097C6.17324 19.152 4.10879 18.881 2.05402 18.482C1.8941 18.4524 1.82626 18.3982 1.82141 18.2208C1.74872 16.4028 1.58879 14.5897 1.34649 12.7815C1.2011 11.7074 1.0218 10.6382 0.857028 9.56909C0.857028 9.50011 0.84249 9.43114 0.827951 9.35231ZM1.78264 15.0528C1.85533 16.0136 1.92802 16.9398 1.99587 17.871C2.06372 17.8858 2.13156 17.9006 2.19456 17.9055C4.50132 18.1962 6.81778 18.4228 9.14392 18.5066C11.3489 18.5904 13.5539 18.5657 15.754 18.3194C16.321 18.2553 16.5246 18.0779 16.6409 17.5409C16.7378 17.0876 16.8347 16.6393 16.9365 16.1909C17.0722 15.5898 16.8784 15.378 16.2677 15.442C15.2258 15.5455 14.1791 15.6687 13.1323 15.713C9.72546 15.8559 6.33801 15.6046 2.96025 15.2006C2.57741 15.1513 2.18972 15.1021 1.78264 15.0528ZM1.36103 11.5251C1.36103 11.5744 1.35618 11.599 1.36103 11.6236C1.45795 12.3775 1.55487 13.1313 1.6421 13.89C1.65664 14.0083 1.7051 14.0378 1.81172 14.0526C3.67263 14.2349 5.53355 14.4566 7.39446 14.6044C10.055 14.8114 12.7155 14.8262 15.3712 14.5552C15.7734 14.5158 16.1757 14.4271 16.573 14.3384C16.8105 14.2842 17.0431 14.1462 17.1158 13.8999C17.2806 13.3481 17.4211 12.7913 17.5423 12.2247C17.5859 12.0178 17.4696 11.9094 17.2515 11.8946C17.0916 11.8848 16.9268 11.8897 16.7669 11.9143C15.5457 12.1065 14.3147 12.2099 13.079 12.2543C9.57038 12.3824 6.08116 12.1213 2.60164 11.6877C2.19941 11.6335 1.79233 11.5793 1.36103 11.5251Z"
                                                fill="#C9A664" />
                                            <path
                                                d="M12.4489 4.14449C11.9885 4.11493 11.6735 3.8538 11.3295 3.64194C11.2374 3.58282 11.2131 3.51384 11.2131 3.40545C11.2083 3.11475 11.2131 2.81914 11.1598 2.53337C11.0338 1.87316 10.6171 1.45437 10.0113 1.21788C9.45884 1.00109 8.87731 0.961674 8.29577 1.00109C8.17946 1.01094 8.06316 1.06021 7.95654 1.11441C7.82085 1.18339 7.72877 1.12919 7.70454 1.01094C7.67546 0.843427 7.68031 0.666057 7.69485 0.493613C7.6997 0.454198 7.79177 0.390147 7.84023 0.395074C8.35877 0.429563 8.88215 0.449271 9.391 0.533029C9.7593 0.592153 10.1325 0.705473 10.4668 0.868062C11.2519 1.25236 11.6348 1.93228 11.722 2.79943C11.7414 3.02607 11.7511 3.25764 11.7656 3.47442C12.0079 3.4892 12.2211 3.4892 12.4344 3.52369C13.2146 3.65179 13.6217 4.20854 13.5296 5.00671C13.3988 6.13005 12.541 7.17949 11.4991 7.47511C9.96769 7.90376 8.29092 6.91837 8.17462 5.00178C8.10677 3.88336 8.97423 3.19359 10.0743 3.4695C10.3651 3.5434 10.6365 3.69614 10.9078 3.83409C11.1792 3.97204 11.4312 4.15434 11.7074 4.28737C11.9449 4.41054 12.1969 4.37606 12.4489 4.14449Z"
                                                fill="#C9A664" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_94_700">
                                                <rect width="20" height="19.0476" fill="white"
                                                    transform="translate(0.599976 0.399994)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="contact-desc">
                                    <p class="text-gray-100 mb-0 fs-14 fw-5">Date of Birth</p>
                                    <p class="mb-0 text-white fw-5">4 December 1995</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-30">
                            <div class="contact-box">
                                <div class="contact-icon d-flex justify-content-center align-items-center">
                                    <svg width="16" height="21" viewBox="0 0 16 21" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_94_705)">
                                            <path
                                                d="M8.00266 16.8233C7.41579 16.1353 6.86628 15.5103 6.33277 14.8643C4.97231 13.2046 3.67588 11.4977 2.66754 9.60168C2.25141 8.81912 1.87261 8.01554 1.74457 7.13319C1.56851 5.9147 1.85127 4.76975 2.42213 3.69307C3.61719 1.45042 6.05534 0.184663 8.67488 0.431512C11.1504 0.662604 13.3164 2.45357 14.0473 4.82752C14.5115 6.35063 14.2554 7.7687 13.5565 9.1605C12.6282 10.9935 11.4385 12.6531 10.158 14.255C9.46981 15.1059 8.74957 15.9357 8.00266 16.8233ZM11.145 6.06702C11.129 4.31281 9.71523 2.94202 7.94397 2.96302C6.23673 2.98403 4.82293 4.39685 4.84427 6.06702C4.86561 7.80546 6.26874 9.16575 8.03467 9.1605C9.73657 9.15 11.161 7.73193 11.145 6.06702Z"
                                                fill="#C9A664" />
                                            <path
                                                d="M5.50584 14.6857C5.02034 14.7698 4.52418 14.838 4.04401 14.9378C3.1904 15.1164 2.34745 15.3422 1.60053 15.8044C1.37646 15.941 1.17372 16.1196 1.003 16.3139C0.757586 16.5975 0.757586 16.9441 1.003 17.2277C1.18439 17.4326 1.40847 17.6217 1.64855 17.7635C2.46482 18.2362 3.37179 18.4672 4.29476 18.6196C7.12237 19.0922 9.94465 19.0922 12.7349 18.378C13.3271 18.2256 13.8873 17.9315 14.4582 17.7004C14.5062 17.6794 14.5489 17.6427 14.5915 17.6112C15.3598 17.0807 15.3705 16.4819 14.6075 15.9357C13.898 15.4263 13.0657 15.1847 12.2227 14.9956C11.6519 14.8696 11.0757 14.7803 10.4088 14.6542C10.5422 14.5807 10.6169 14.4914 10.6916 14.4967C12.068 14.5964 13.4445 14.7015 14.7196 15.274C15.029 15.4105 15.3224 15.6206 15.5625 15.8569C16.0427 16.3244 16.1227 16.9809 15.8186 17.5744C15.6052 17.9998 15.2744 18.3254 14.8903 18.6038C13.8019 19.3811 12.5589 19.796 11.2624 20.0534C8.54685 20.5943 5.85262 20.4998 3.21174 19.6385C2.36345 19.3601 1.54718 19.0082 0.880293 18.4042C0.592197 18.1469 0.330777 17.8265 0.154718 17.4851C-0.160053 16.8601 0.0213404 16.1983 0.554852 15.7309C1.09903 15.2582 1.76059 15.0166 2.45415 14.8906C3.37179 14.7225 4.3001 14.6227 5.22307 14.5019C5.31911 14.4914 5.42581 14.5544 5.53251 14.5859C5.52184 14.6227 5.51117 14.6542 5.50584 14.6857Z"
                                                fill="#C9A664" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_94_705">
                                                <rect width="16" height="20" fill="white"
                                                    transform="translate(0 0.399994)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="contact-desc">
                                    <p class="text-gray-100 mb-0 fs-14 fw-5">Location</p>
                                    <p class="text-white mb-0 fw-5">Berlin - Germany</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-section pt-30 px-40">
                <div class="gallery-bg-img">
                    <img src="{{ asset('assets/img/vcard20/gallery-bg-img.png') }}" loading="lazy"/>
                </div>
                <div class="section-heading text-center mb-40 overflow-hidden">
                    <h2 class="font-DancingScript text-white mb-1 d-inline-block">
                        Gallery
                    </h2>
                </div>
                <div class="gallery-slider">
                    <div class="slide px-2">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/vcard20/gallery-img.png') }}" loading="lazy"/>
                        </div>
                    </div>
                    <div class="slide px-2">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/vcard20/gallery-img.png') }}" loading="lazy"/>
                        </div>
                    </div>
                    <div class="slide px-2">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/vcard20/gallery-img.png') }}" loading="lazy"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="our-services-section px-40 pt-60 ">
                <div class="services-bg-img">
                    <img src="{{ asset('assets/img/vcard20/services-bg-img.png') }}" loading="lazy"/>
                </div>
                <div class="section-heading text-center mb-40 overflow-hidden">
                    <h2 class="font-DancingScript text-white mb-1 d-inline-block">
                        Our Services
                    </h2>
                </div>
                <div class="services">
                    <div class="row">
                        <div class="col-sm-6 mb-sm-0 mb-40">
                            <div class="service-card card h-100">
                                <div class="card-img mb-3">
                                    <img src="{{ asset('assets/img/vcard20/cooking-img.png') }}" alt="cooking"
                                        class="w-100 h-100 object-fit-cover" loading="lazy"/>
                                </div>
                                <div class="card-body p-0 text-center">
                                    <h3 class="fs-18 fw-6 text-white mb-2">Cooking</h3>
                                    <p class="card-desc mb-0 fs-14 text-gray-100">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="service-card card h-100">
                                <div class="card-img mb-3">
                                    <img src="{{ asset('assets/img/vcard20/catering-img.png') }}" alt="catering"
                                        class="w-100 h-100 object-fit-cover" loading="lazy"/>
                                </div>
                                <div class="card-body p-0 text-center">
                                    <h3 class="fs-18 fw-6 text-white mb-2">Catering</h3>
                                    <p class="card-desc mb-0 fs-14 text-gray-100">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-section pt-60">
                <div class="testimonial-bg-img">
                    <img src="{{ asset('assets/img/vcard20/testimonial-bg-img.png') }}" loading="lazy"/>
                </div>
                <div class="section-heading text-center mb-3 px-40 overflow-hidden">
                    <h2 class="font-DancingScript text-white mb-1 d-inline-block">
                        Testimonial
                    </h2>
                </div>
                <div class="position-relative">
                    <div class="bg-img">
                        <img src="{{ asset('assets/img/vcard20/testimonial-bg.png') }}" loading="lazy">
                    </div>
                    <div class="testimonial-slider pt-60 pb-60 ">
                        <div class="px-3">
                            <div class="testimonial-card">
                                <div class="card-img">
                                    <img src="{{ asset('assets/img/vcard20/testimonial-profile-img.png') }}"
                                        class="w-100 h-100 object-fit-cover" loading="lazy">
                                </div>
                                <div class="card-body p-0  text-center text-white">
                                    <h6 class="name fw-bold  ">Shane Watson</h6>
                                    <p class=" fs-14 mb-0">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text. </p>
                                </div>
                            </div>
                        </div>
                        <div class="px-3">
                            <div class="testimonial-card">
                                <div class="card-img">
                                    <img src="{{ asset('assets/img/vcard20/testimonial-profile-img.png') }}"
                                        class="w-100 h-100 object-fit-cover" loading="lazy">
                                </div>
                                <div class="card-body p-0  text-center text-white">
                                    <h6 class="name fw-bold">Shane Watson</h6>
                                    <p class="fs-14 mb-0">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-section bg-gray pt-60">
                <div class="product-bg-img">
                    <img src="{{ asset('assets/img/vcard20/product-bg-img.png') }}" loading="lazy"/>
                </div>
                <div class="section-heading text-center overflow-hidden mb-40">
                    <h2 class="font-DancingScript text-white mb-1 d-inline-block">
                        Products
                    </h2>
                </div>
                <div class="product-slider">
                    <div class="px-2">
                        <div class="product-card card">
                            <div class="product-img card-img">
                                <img src="{{ asset('assets/img/vcard20/schezwan-noodles.png') }}"
                                    class="w-100 h-100 object-fit-cover" loading="lazy"/>
                            </div>
                            <div class="product-desc card-body text-center p-0">
                                <h3 class="text-white fs-18 fw-6 mb-1">Schezwan Noodles</h3>
                                <p class="fs-14 text-gray-100 mb-1">Chilli Garlic Cuisine</p>
                                <div class="product-amount text-primary fw-bold fs-6">$25.00</div>
                            </div>
                        </div>
                    </div>
                    <div class="px-2">
                        <div class="product-card card">
                            <div class="product-img card-img">
                                <img src="{{ asset('assets/img/vcard20/red-sauce-pasta.png') }}"
                                    class="w-100 h-100 object-fit-cover" loading="lazy"/>
                            </div>
                            <div class="product-desc card-body text-center p-0">
                                <h3 class="text-white fs-18 fw-6 mb-1">Red Sauce Pasta</h3>
                                <p class="fs-14 text-gray-100 mb-1">Spicy & Tangy Tomato</p>
                                <div class="product-amount text-primary fw-bold fs-6">$25.00</div>
                            </div>
                        </div>
                    </div>
                    <div class="px-2">
                        <div class="product-card card">
                            <div class="product-img card-img">
                                <img src="{{ asset('assets/img/vcard20/schezwan-noodles.png') }}"
                                    class="w-100 h-100 object-fit-cover" loading="lazy"/>
                            </div>
                            <div class="product-desc card-body text-center p-0">
                                <h3 class="text-white fs-18 fw-6 mb-1">Schezwan Noodles</h3>
                                <p class="fs-14 text-gray-100 mb-1">Chilli Garlic Cuisine</p>
                                <div class="product-amount text-primary fw-bold fs-6">$25.00</div>
                            </div>
                        </div>
                    </div>
                    <div class="px-2">
                        <div class="product-card card">
                            <div class="product-img card-img">
                                <img src="{{ asset('assets/img/vcard20/red-sauce-pasta.png') }}"
                                    class="w-100 h-100 object-fit-cover" loading="lazy"/>
                            </div>
                            <div class="product-desc card-body text-center p-0">
                                <h3 class="text-white fs-18 fw-6 mb-1">Red Sauce Pasta</h3>
                                <p class="fs-14 text-gray-100 mb-1">Spicy & Tangy Tomato</p>
                                <div class="product-amount text-primary fw-bold fs-6">$25.00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="appointment-section pt-60 px-40">
                <div class="appointment-bg-img">
                    <img src="{{ asset('assets/img/vcard20/appointment-bg-img.png') }}" loading="lazy"/>
                </div>
                <div class="section-heading text-center mb-40">
                    <h2 class="font-DancingScript text-white mb-1 d-inline-block">
                        Make an Appointment
                    </h2>
                </div>
                <div class="appointment">
                    <form action="">
                        <div class="row">
                            <div class="col-sm-2">
                                <label class="text-white mt-sm-3 mb-2">Date:</label>
                            </div>
                            <div class="col-sm-10 mb-20">

                                <div class="position-relative">
                                    <input type="text" class="form-control appointment-input"
                                        placeholder="Pick a Date" />
                                    <span class="calendar-icon">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_102_145)">
                                                <path
                                                    d="M14.25 1.5H13.5V0.75C13.5 0.551088 13.421 0.360322 13.2803 0.21967C13.1397 0.0790176 12.9489 0 12.75 0C12.5511 0 12.3603 0.0790176 12.2197 0.21967C12.079 0.360322 12 0.551088 12 0.75V1.5H6V0.75C6 0.551088 5.92098 0.360322 5.78033 0.21967C5.63968 0.0790176 5.44891 0 5.25 0C5.05109 0 4.86032 0.0790176 4.71967 0.21967C4.57902 0.360322 4.5 0.551088 4.5 0.75V1.5H3.75C2.7558 1.50119 1.80267 1.89666 1.09966 2.59966C0.396661 3.30267 0.00119089 4.2558 0 5.25L0 14.25C0.00119089 15.2442 0.396661 16.1973 1.09966 16.9003C1.80267 17.6033 2.7558 17.9988 3.75 18H14.25C15.2442 17.9988 16.1973 17.6033 16.9003 16.9003C17.6033 16.1973 17.9988 15.2442 18 14.25V5.25C17.9988 4.2558 17.6033 3.30267 16.9003 2.59966C16.1973 1.89666 15.2442 1.50119 14.25 1.5ZM1.5 5.25C1.5 4.65326 1.73705 4.08097 2.15901 3.65901C2.58097 3.23705 3.15326 3 3.75 3H14.25C14.8467 3 15.419 3.23705 15.841 3.65901C16.2629 4.08097 16.5 4.65326 16.5 5.25V6H1.5V5.25ZM14.25 16.5H3.75C3.15326 16.5 2.58097 16.2629 2.15901 15.841C1.73705 15.419 1.5 14.8467 1.5 14.25V7.5H16.5V14.25C16.5 14.8467 16.2629 15.419 15.841 15.841C15.419 16.2629 14.8467 16.5 14.25 16.5Z"
                                                    fill="#C9A664" />
                                                <path
                                                    d="M9 12.375C9.62132 12.375 10.125 11.8713 10.125 11.25C10.125 10.6287 9.62132 10.125 9 10.125C8.37868 10.125 7.875 10.6287 7.875 11.25C7.875 11.8713 8.37868 12.375 9 12.375Z"
                                                    fill="#C9A664" />
                                                <path
                                                    d="M5.25 12.375C5.87132 12.375 6.375 11.8713 6.375 11.25C6.375 10.6287 5.87132 10.125 5.25 10.125C4.62868 10.125 4.125 10.6287 4.125 11.25C4.125 11.8713 4.62868 12.375 5.25 12.375Z"
                                                    fill="#C9A664" />
                                                <path
                                                    d="M12.75 12.375C13.3713 12.375 13.875 11.8713 13.875 11.25C13.875 10.6287 13.3713 10.125 12.75 10.125C12.1287 10.125 11.625 10.6287 11.625 11.25C11.625 11.8713 12.1287 12.375 12.75 12.375Z"
                                                    fill="#C9A664" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_102_145">
                                                    <rect width="18" height="18" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                    </span>
                                </div>

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <label class="text-white  mt-sm-3 mb-2">Hour:</label>
                            </div>
                            <div class="col-sm-10">

                                <div class="row">
                                    <div class="col-sm-6 pe-sm-1 mb-10">
                                        <div class="hour-input d-flex justify-content-center align-items-center">
                                            <span class="text-primary">8:10 - 20:00</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 ps-sm-1 mb-10">
                                        <div class="hour-input d-flex justify-content-center align-items-center">
                                            <span class="text-primary">8:10 - 20:00</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6  pe-sm-1 mb-10">
                                        <div class="hour-input d-flex justify-content-center align-items-center">
                                            <span class="text-primary">8:10 - 20:00</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 ps-sm-1 mb-10">
                                        <div class="hour-input d-flex justify-content-center align-items-center">
                                            <span class="text-primary">8:10 - 20:00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-primary w-100">Make an Appointment</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
            <div class="blog-section pt-60 px-40">
                <div class="section-heading text-center mx-30 mb-40 overflow-hidden">
                    <h2 class="font-DancingScript text-white mb-1 d-inline-block">
                        Blog
                    </h2>
                </div>
                <div class="blog-slider ">
                    <div class="">
                        <div class="blog-card  card">
                            <div class="card-img">
                                <img src="{{ asset('assets/img/vcard20/blog-img1.png') }}"
                                    class="w-100 h-100 object-fit-cover" loading="lazy"/>
                            </div>
                            <div class="card-body p-0 pt-3">
                                <h6 class="card-title text-white fw-bold fs-18">Burger</h6>
                                <p class="mb-0 fw-5 fs-14 text-gray-100">
                                    Lorem Ipsum is simply dummy text of the printing and type setting industry.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="blog-card  card">
                            <div class="card-img">
                                <img src="{{ asset('assets/img/vcard20/blog-img2.png') }}"
                                    class="w-100 h-100 object-fit-cover" loading="lazy"/>
                            </div>
                            <div class="card-body p-0 pt-3">
                                <h6 class="card-title text-white fw-bold fs-18">Burger</h6>
                                <p class="mb-0 fw-5 fs-14 text-gray-100">
                                    Lorem Ipsum is simply dummy text of the printing and type setting industry.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="blog-card  card">
                            <div class="card-img">
                                <img src="{{ asset('assets/img/vcard20/blog-img1.png') }}"
                                    class="w-100 h-100 object-fit-cover" loading="lazy"/>
                            </div>
                            <div class="card-body p-0 pt-3">
                                <h6 class="card-title text-white fw-bold fs-18">Burger</h6>
                                <p class="mb-0 fw-5 fs-14 text-gray-100">
                                    Lorem Ipsum is simply dummy text of the printing and type setting industry.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="blog-card  card">
                            <div class="card-img">
                                <img src="{{ asset('assets/img/vcard20/blog-img2.png') }}"
                                    class="w-100 h-100 object-fit-cover" loading="lazy"/>
                            </div>
                            <div class="card-body p-0 pt-3">
                                <h6 class="card-title text-white fw-bold fs-18">Burger</h6>
                                <p class="mb-0 fw-5 fs-14 text-gray-100">
                                    Lorem Ipsum is simply dummy text of the printing and type setting industry.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="business-hour-section pt-60  px-40">
                <div class="hour-bg-img">
                    <img src="{{ asset('assets/img/vcard20/hour-bg-img.png') }}" loading="lazy"/>
                </div>
                <div class="section-heading text-center mb-40 overflow-hidden">
                    <h2 class="font-DancingScript text-white mb-1 d-inline-block">
                        Business Hours
                    </h2>
                </div>
                <div class="business-hours">
                    <div class="row m-0 justify-content-center">
                        <div class="col-sm-6">
                            <div
                                class="mb-10 d-flex align-items-center justify-content-sm-start justify-content-center">
                                <span class="me-2">Sunday:</span>
                                <span>08:10 - 20:00</span>
                            </div>
                            <div
                                class="mb-10 d-flex align-items-center justify-content-sm-start justify-content-center">
                                <span class="me-2">Monday:</span>
                                <span>08:10 - 20:00</span>
                            </div>
                            <div
                                class="mb-10 d-flex align-items-center justify-content-sm-start justify-content-center">
                                <span class="me-2">Tuesday:</span>
                                <span>08:10 - 20:00</span>
                            </div>
                            <div
                                class="mb-10 d-flex align-items-center justify-content-sm-start justify-content-center">
                                <span class="me-2">Wednesday:</span>
                                <span>08:10 - 20:00</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div
                                class="mb-10 d-flex align-items-center justify-content-sm-start justify-content-center">
                                <span class="me-2">Thursday:</span>
                                <span>08:10 - 20:00</span>
                            </div>
                            <div
                                class="mb-10 d-flex align-items-center justify-content-sm-start justify-content-center">
                                <span class="me-2">Friday:</span>
                                <span>08:10 - 20:00</span>
                            </div>
                            <div
                                class="mb-10 d-flex align-items-center justify-content-sm-start justify-content-center">
                                <span class="me-2">Saturday:</span>
                                <span class="text-primary">Closed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="qr-code-section pt-60 px-40">
                <div class="qr-code-bg-img">
                    <img src="{{ asset('assets/img/vcard20/qr-code-bg-img.png') }}" loading="lazy"/>
                </div>
                <div class="section-heading text-center mb-40 overflow-hidden">
                    <h2 class="font-DancingScript text-white mb-1 d-inline-block">
                        QR Code
                    </h2>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="qr-code  d-flex justify-content-center align-items-center mb-40 mx-auto">
                            <div class="qr-code-img d-flex justify-content-center align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="130" height="130"
                                    viewBox="0 0 130 130">
                                    <rect x="0" y="0" width="130" height="130" fill="#ffffff"></rect>
                                    <g transform="scale(4.483)">
                                        <g transform="translate(0,0)">
                                            <path fill-rule="evenodd"
                                                d="M8 0L8 1L10 1L10 0ZM13 0L13 1L14 1L14 2L11 2L11 4L10 4L10 3L9 3L9 2L8 2L8 5L9 5L9 6L8 6L8 7L9 7L9 8L8 8L8 9L7 9L7 8L6 8L6 9L7 9L7 10L5 10L5 9L4 9L4 8L0 8L0 9L3 9L3 15L2 15L2 13L1 13L1 12L2 12L2 11L1 11L1 10L0 10L0 14L1 14L1 15L0 15L0 16L1 16L1 15L2 15L2 17L1 17L1 18L0 18L0 19L1 19L1 18L2 18L2 17L3 17L3 15L7 15L7 16L4 16L4 17L8 17L8 19L7 19L7 18L3 18L3 20L1 20L1 21L3 21L3 20L4 20L4 21L7 21L7 20L8 20L8 19L10 19L10 20L11 20L11 21L8 21L8 22L10 22L10 23L14 23L14 22L15 22L15 21L14 21L14 20L13 20L13 18L14 18L14 17L12 17L12 16L14 16L14 15L15 15L15 20L16 20L16 24L14 24L14 26L13 26L13 24L12 24L12 25L11 25L11 26L10 26L10 25L8 25L8 29L10 29L10 27L11 27L11 28L12 28L12 29L13 29L13 28L12 28L12 26L13 26L13 27L14 27L14 29L15 29L15 28L17 28L17 27L18 27L18 29L23 29L23 28L24 28L24 29L25 29L25 27L24 27L24 26L27 26L27 24L28 24L28 22L29 22L29 21L27 21L27 18L28 18L28 15L29 15L29 13L27 13L27 12L26 12L26 11L28 11L28 12L29 12L29 11L28 11L28 10L29 10L29 8L28 8L28 10L26 10L26 11L25 11L25 9L27 9L27 8L24 8L24 9L22 9L22 8L21 8L21 9L22 9L22 11L21 11L21 12L20 12L20 13L19 13L19 12L17 12L17 13L13 13L13 14L12 14L12 12L15 12L15 9L14 9L14 11L11 11L11 13L10 13L10 12L8 12L8 11L7 11L7 10L10 10L10 9L9 9L9 8L10 8L10 7L11 7L11 8L12 8L12 7L13 7L13 5L14 5L14 7L15 7L15 8L16 8L16 11L19 11L19 10L20 10L20 9L19 9L19 8L20 8L20 7L21 7L21 6L20 6L20 4L21 4L21 0L18 0L18 1L17 1L17 0L16 0L16 1L17 1L17 2L15 2L15 1L14 1L14 0ZM19 1L19 2L20 2L20 1ZM17 2L17 3L16 3L16 4L17 4L17 3L18 3L18 4L20 4L20 3L18 3L18 2ZM12 3L12 5L10 5L10 6L9 6L9 7L10 7L10 6L11 6L11 7L12 7L12 5L13 5L13 3ZM15 5L15 7L16 7L16 6L17 6L17 7L18 7L18 6L19 6L19 7L20 7L20 6L19 6L19 5L18 5L18 6L17 6L17 5ZM17 9L17 10L19 10L19 9ZM4 10L4 11L5 11L5 12L4 12L4 13L5 13L5 14L9 14L9 15L8 15L8 16L9 16L9 18L10 18L10 19L11 19L11 20L12 20L12 19L11 19L11 18L12 18L12 17L11 17L11 16L12 16L12 14L10 14L10 13L8 13L8 12L7 12L7 11L5 11L5 10ZM24 11L24 12L22 12L22 13L20 13L20 15L16 15L16 14L15 14L15 15L16 15L16 19L17 19L17 18L19 18L19 19L18 19L18 20L19 20L19 19L21 19L21 20L22 20L22 19L23 19L23 15L24 15L24 16L25 16L25 17L24 17L24 18L26 18L26 17L27 17L27 15L24 15L24 14L27 14L27 13L25 13L25 11ZM6 12L6 13L7 13L7 12ZM17 13L17 14L19 14L19 13ZM22 13L22 14L21 14L21 15L20 15L20 18L22 18L22 16L21 16L21 15L22 15L22 14L23 14L23 13ZM13 14L13 15L14 15L14 14ZM9 15L9 16L11 16L11 15ZM18 16L18 17L19 17L19 16ZM10 17L10 18L11 18L11 17ZM5 19L5 20L7 20L7 19ZM25 19L25 20L26 20L26 19ZM11 21L11 22L12 22L12 21ZM17 21L17 22L19 22L19 21ZM21 21L21 24L24 24L24 21ZM22 22L22 23L23 23L23 22ZM26 22L26 23L25 23L25 25L26 25L26 24L27 24L27 22ZM17 23L17 24L16 24L16 25L17 25L17 26L14 26L14 27L17 27L17 26L19 26L19 25L20 25L20 23L19 23L19 24L18 24L18 23ZM17 24L17 25L18 25L18 24ZM22 25L22 26L20 26L20 27L19 27L19 28L20 28L20 27L22 27L22 28L23 28L23 25ZM28 25L28 27L27 27L27 29L28 29L28 27L29 27L29 25ZM9 26L9 27L10 27L10 26ZM0 0L0 7L7 7L7 0ZM1 1L1 6L6 6L6 1ZM2 2L2 5L5 5L5 2ZM22 0L22 7L29 7L29 0ZM23 1L23 6L28 6L28 1ZM24 2L24 5L27 5L27 2ZM0 22L0 29L7 29L7 22ZM1 23L1 28L6 28L6 23ZM2 24L2 27L5 27L5 24Z"
                                                fill="#000000"></path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-us-section pt-60 px-40">
                <div class="contact-us-bg-img">
                    <img src="{{ asset('assets/img/vcard20/contact-us-bg-img.png') }}" loading="lazy"/>
                </div>
                <div class="section-heading text-center overflow-hidden">
                    <h2 class="font-DancingScript text-white mb-1 d-inline-block">
                        Inquiries
                    </h2>
                </div>
                <div class="contact-form pt-3 mt-3 position-relative">
                    <form action="">
                        <div class="row">
                            <div class="col-sm-6 mb-sm-4 mb-3">
                                <input type="text" class="form-control" placeholder="Full Name" />
                            </div>
                            <div class="col-sm-6 mb-sm-4 mb-3">
                                <input type="email" class="form-control" placeholder="Email Address" />
                            </div>
                            <div class="col-12 mb-sm-4 mb-3">
                                <input type="tel" class="form-control" placeholder="Phone Number" />
                            </div>
                            <div class="col-12 mb-40">
                                <textarea class="form-control h-100" placeholder="Your Message" rows="4"></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <button class="send-btn btn btn-primary" type="submit">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="create-vcard-section pt-60 pb-60 mb-5 px-40">
                <div class="section-heading overflow-hidden mb-40 text-center">
                    <h2 class="font-DancingScript text-white mb-1 d-inline-block">
                        Create Your VCard
                    </h2>
                </div>
                <div class="vcard-link-card card mx-sm-3">
                    <div class="d-flex justify-content-center align-items-center">
                        <a href="https://vcards.infyom.com/marlonbrasil"
                            class="fw-6 text-white link-text">https://vcards.infyom.com/marlonbrasil</a>
                        <i class="icon fa-solid fa-arrow-up-right-from-square ms-3 text-white"></i>
                    </div>
                </div>
            </div>
            <div class="add-to-contact-section pb-3">
                <div class="text-center">
                    <button class="btn add-contact-btn  h-40  btn-primary"><i
                        class="fas fa-download fa-address-book"></i>
                    &nbsp; Add to Contact</button>
                </div>
            </div>
            <div class="btn-section cursor-pointer">
                <div class="fixed-btn-section">
                    {{-- <div class="bars-btn food-services-bars-btn">
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15.4134 0.540771H22.489C23.572 0.540771 24.4601 1.42891 24.4601 2.51188V9.5875C24.4601 10.6776 23.5731 11.5586 22.489 11.5586H15.4134C14.3222 11.5586 13.4423 10.6787 13.4423 9.5875V2.51188C13.4423 1.42783 14.3233 0.540771 15.4134 0.540771Z"
                                stroke="white" />
                            <path
                                d="M2.97143 0.5H8.74589C10.1129 0.5 11.2173 1.6122 11.2173 2.97143V8.74589C11.2173 10.1139 10.1139 11.2173 8.74589 11.2173H2.97143C1.6122 11.2173 0.5 10.1129 0.5 8.74589V2.97143C0.5 1.61328 1.61328 0.5 2.97143 0.5Z"
                                stroke="white" />
                            <path
                                d="M2.97143 13.783H8.74589C10.1139 13.783 11.2173 14.8863 11.2173 16.2544V22.0289C11.2173 23.3881 10.1129 24.5003 8.74589 24.5003H2.97143C1.61328 24.5003 0.5 23.387 0.5 22.0289V16.2544C0.5 14.8874 1.6122 13.783 2.97143 13.783Z"
                                stroke="white" />
                            <path
                                d="M16.2537 13.783H22.0282C23.3874 13.783 24.4996 14.8874 24.4996 16.2544V22.0289C24.4996 23.387 23.3863 24.5003 22.0282 24.5003H16.2537C14.8867 24.5003 13.7823 23.3881 13.7823 22.0289V16.2544C13.7823 14.8863 14.8856 13.783 16.2537 13.783Z"
                                stroke="white" />
                        </svg>
                    </div>
                    <div class="sub-btn">
                        <div class="social-btn food-services-sub-btn wp-btn">
                            <i class="fa-brands fa-whatsapp"></i>
                        </div>
                        <div class="social-btn food-services-sub-btn  mt-3">
                            <i class="fa-solid fa-share-nodes"></i>
                        </div>
                    </div>
                </div> --}}
                </div>
            </div>
        </div>
</body>
@include('vcardTemplates.template.templates')
<script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript" src="{{ asset('assets/js/front-third-party.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/slider/js/slick.min.js') }}" type="text/javascript"></script>

<script>
    $().ready(function() {
        $(".gallery-slider").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
            speed: 300,
            infinite: true,
            autoplaySpeed: 5000,
            autoplay: true,
            responsive: [{
                    breakpoint: 575,
                    settings: {
                        centerPadding: '125px',
                        dots: true,
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        centerPadding: '0',
                        dots: true,
                    },
                },
            ],
        });
        $(".product-slider").slick({
            arrows: false,
            infinite: true,
            dots: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: true,
            responsive: [{
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                },
            }, ],
        });
        $(".testimonial-slider").slick({
            arrows: true,
            infinite: true,
            dots: false,
            slidesToShow: 1,
            autoplay: true,
            responsive: [{
                breakpoint: 575,
                settings: {
                    arrows: false,
                    dots: true,
                },
            }, ],
        });
        $(".blog-slider").slick({
            arrows: false,
            infinite: true,
            dots: false,
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: true,
            responsive: [{
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                    dots: true,
                },
            }, ],
        });
    });
</script>
<script>
    $("#myID").flatpickr();
</script>

<script>
    $(document).ready(function() {
        $('.dropdown1').hover(function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(100);
        }, function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(100);
        });
    });
</script>

</html>

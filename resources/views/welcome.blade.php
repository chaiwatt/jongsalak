@extends('layouts.landing')
@section('content')
<!--== Start: Hero Section Wrapper ==-->
<div class="hero-slider-section position-relative">
    <div class="swiper hero-slider-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide hero-slide-item" data-bg-img="assets/images/slider/slider1.webp">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-lg-6">
                            <div class="hero-slide-content">
                                <h1 class="hero-slide-title"><span>JONG</span> SALAK</h1>
                                <p class="hero-slide-desc">โปรแกรมกดจองซื้อสลากแอพเป๋าตังค์ (สลาก 80 บาท) รองรับโทรศัพท์ iOS ทุกเวอร์ชั่น และโทรศัพท์แอนดรอยด์ทุกรุ่นไม่ต้องรูทเครื่อง</p>
                                <div class="hero-slide-info">
                                    <a class="hero-slide-btn mr-4" href="product.html">สั่งซื้อ</a>
                                    <div class="hero-slide-video-btn">
                                        <a class="hero-slide-video-popup" data-fancybox data-type="iframe" href="https://www.youtube.com/watch?v=_9VUPq3SxOc" aria-label="play popup video"><i class="icofont-play"></i></a>
                                        {{-- <span>Watch Video</span> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
        <!--== Add Pagination ==-->
        <div class="hero-slider-pagination"></div>
    </div>
</div>
<!--== End: Hero Section Wrapper ==-->


<!--== Start: Feature About Section Wrapper ==-->
<div class="feature-about-section section-padding pt-0">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6 mb-8 text-center text-lg-start">
                <a href="product.html"><img src="assets/images/photos/about1.webp" width="555" height="611" alt="Image"></a>
            </div>
            <div class="col-lg-6 mb-8">
                <!--== Start: Section Title ==-->
                <div class="section-title mb-5">
                    <h6 class="sub-title">JONGSALAK</h6>
                    <h2 class="title">ฟังก์ชั่นทำงาน</h2>
                    <div class="line"></div>
                </div>
                <!--== End: Section Title ==-->
                <div class="mb-4">



                    <!--== Start: Feature Box Item ==-->
                    <div class="feature-box3-item">
                       

                        <div class="feature-box3-icon">
                            <img class="feature-box3-icon-img" src="assets/images/icons/1.webp"  alt="Mobile Device Supported">
                        </div>
                        <div class="feature-box3-content">
                            <h4 class="feature-box3-title">กดหน้าจอเหมือนคนจริง</h4>
                            <p class="feature-box3-desc">โปรแกรมควบคุมด้วยไมโครคอนโทรลเลอร์ เชื่อมต่อกับตัวกดจำนวน 4 ตัว สามารถกดหน้าจอได้เหมือนการกดด้วยคนจริง</p>
                        </div>
                    </div>
                    <!--== End: Feature Box Item ==-->

                </div>
                <div class="mb-4">



                    <!--== Start: Feature Box Item ==-->
                    <div class="feature-box3-item">
                        <div class="feature-box3-icon">
                            <img class="feature-box3-icon-img" src="assets/images/icons/2.webp" alt="Easy integrative control">
                        </div>
                        <div class="feature-box3-content">
                            <h4 class="feature-box3-title">ตั้งเวลากดจองได้</h4>
                            <p class="feature-box3-desc">สามารถตั้งเวลาให้กดจองได้โดยอัตโนมัติ โดยโปรแกรมจะเทียบเวลาเดียวกันกับแอพเป๋าตังค์</p>
                        </div>
                    </div>
                    <!--== End: Feature Box Item ==-->

                </div>

                <div class="mb-4">


                    <div class="feature-box3-item">
                        <div class="feature-box3-icon">
                            <img class="feature-box3-icon-img" src="assets/images/icons/3.webp" alt="Customized Commands">
                        </div>
                        <div class="feature-box3-content">
                            <h4 class="feature-box3-title">ไม่ต้องติดตั้งแอพ</h4>
                            <p class="feature-box3-desc">ไม่ต้องติดตั้งแอพลิเคชั่นในโทรศัพท์ เสียบสาย USB เข้าแหล่งจ่ายไฟ และกดปุ่มให้ทำงานได้เลย</p>
                        </div>
                    </div>

                </div>



                <!--== Start: Feature Box Item ==-->
                <div class="feature-box3-item">
                    <div class="feature-box3-icon">
                        <img class="feature-box3-icon-img" src="assets/images/icons/4.webp" alt="Customized Commands">
                    </div>
                    <div class="feature-box3-content">
                        <h4 class="feature-box3-title">รองรับ Android &iOS</h4>
                        <p class="feature-box3-desc">รองรับการทำงานบนโทรศัพท์แอนดรอยด์ทุกเครื่องโดยไม่ต้องรูท และโทรศัพท์ในระบบ iOS ทุกเวอร์ชั่น</p>
                    </div>
                </div>

                <!--== End: Feature Box Item ==-->

                <a class="btn btn-primary btn-radius mt-5 mt-xl-10" href="product.html">สั่งซื้อ</a>
            </div>
        </div>
    </div>
</div>
<!--== End: Feature About Section Wrapper ==-->


<!--== Start: Features Section Wrapper ==-->
<div class="features-section bgc-fb section-padding" data-bg-img="assets/images/photos/bg1.webp">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <!--== Start: Section Title ==-->
                <div class="section-title3">
                    <h2 class="title">คุณสมบัติ</h2>
                    <p class="desc">A 5.5in 1080p screen integrated with the Phantom 4 Pro + offers 1000 cd/m2 of brightness, more than twice as bright as conve ntional smart devices. It makes bright, vivid colors easily visible in direct sunlight.</p>
                </div>
                <!--== End: Section Title ==-->

                <div class="drone-all-feature">
                    <div class="feature-box4-item pe-4 mb-4">
                        <div class="feature-box4-icon">
                            <img class="feature-box4-icon-img" src="assets/images/icons/1.webp" width="45" height="45" alt="Image">
                        </div>
                        <div class="feature-box4-content">
                            <h4 class="feature-box4-title">หัวคลิกไฟฟ้า</h4>
                            <p class="feature-box4-desc">หัวคลิกไฟฟ้า 4 ตัว</p>
                        </div>
                    </div>
                    <div class="feature-box4-item pe-4 mb-4">
                        <div class="feature-box4-icon">
                            <img class="feature-box4-icon-img" src="assets/images/icons/2.webp" width="45" height="45" alt="Image">
                        </div>
                        <div class="feature-box4-content">
                            <h4 class="feature-box4-title">เซนเซอร์หน้าจอ</h4>
                            <p class="feature-box4-desc">เซนเซอร์ตรวจจับหน้าจอ 1 ตัว</p>
                        </div>
                    </div>
                    <div class="feature-box4-item pe-4 mb-4">
                        <div class="feature-box4-icon">
                            <img class="feature-box4-icon-img" src="assets/images/icons/3.webp" width="45" height="45" alt="Image">
                        </div>

                        <div class="feature-box4-content">
                            <h4 class="feature-box4-title">ขนาดกล่อง</h4>
                            <p class="feature-box4-desc">ขนาด 8x9x4 ซม.</p>
                        </div>
                    </div>
                    <div class="feature-box4-item pe-4 mb-4">
                        <div class="feature-box4-icon">
                            <img class="feature-box4-icon-img" src="assets/images/icons/4.webp" width="45" height="45" alt="Image">
                        </div>
                        <div class="feature-box4-content">
                            <h4 class="feature-box4-title">แหล่งจ่ายไฟ</h4>
                            <p class="feature-box4-desc">รองรับ USB Adaper</p>
                        </div>
                    </div>
                    <div class="feature-box4-item pe-4 mb-4">
                        <div class="feature-box4-icon">
                            <img class="feature-box4-icon-img" src="assets/images/icons/5.webp" width="45" height="45" alt="Image">
                        </div>
                        <div class="feature-box4-content">
                            <h4 class="feature-box4-title">อัพเดท</h4>
                            <p class="feature-box4-desc">อัพเดทโปรแกรมออนไลน์</p>
                        </div>
                    </div>
                    <div class="feature-box4-item pe-4 mb-4">
                        <div class="feature-box4-icon">
                            <img class="feature-box4-icon-img" src="assets/images/icons/6.webp" width="45" height="45" alt="Image">
                        </div>
                        <div class="feature-box4-content">
                            <h4 class="feature-box4-title">รับประกัน</h4>
                            <p class="feature-box4-desc">รับประกันเครื่อง 6 เดือน</p>
                        </div>
                    </div>
                </div>
                <a class="btn btn-primary btn-radius btn-border mt-4" href="product.html">เพิ่มเติม</a>
            </div>
            <div class="col-lg-6">
                <a href="product.html"><img src="assets/images/photos/photos2.webp" width="590" height="650" alt="Image"></a>
            </div>
        </div>
    </div>
</div>
<!--== End: Features Section Wrapper ==-->


<!--== Start: Features Section Wrapper ==-->
{{-- <div class="features-section section-padding pt-4">
    <div class="container">
        <!--== Start: Section Title ==-->
        <div class="section-title2 text-center mt-n2">
            <h6 class="sub-title">Popular Item</h6>
            <h2 class="title">Valueable Features</h2>
        </div>
        <!--== End: Section Title ==-->
        <div class="row mb-n9">
            <div class="col-lg-3 mb-5">
                <div class="mb-4 text-center text-lg-end">

                    <!--== Start: Feature Box Item ==-->
                    <div class="feature-box-item">
                        <div class="feature-box-icon">
                            <img class="feature-box-icon-img" src="assets/images/icons/feature-1.png" width="70" height="70" alt="Smart Control">
                        </div>
                        <h4 class="feature-box-title">Smart Control</h4>
                        <p class="feature-box-desc">This is the perfect place to find a nice and cozy.</p>
                    </div>
                    <!--== End: Feature Box Item ==-->



                </div>
                <div class="mb-4 text-center text-lg-end">

                    <!--== Start: Feature Box Item ==-->
                    <div class="feature-box-item">
                        <div class="feature-box-icon">
                            <img class="feature-box-icon-img" src="assets/images/icons/feature-2.png" width="70" height="70" alt="Wifi Connectivity">
                        </div>
                        <h4 class="feature-box-title">Wifi Connectivity</h4>
                        <p class="feature-box-desc">This is the perfect place to find a nice and cozy.</p>
                    </div>
                    <!--== End: Feature Box Item ==-->



                </div>
                <div class="text-center text-lg-end">

                    <!--== Start: Feature Box Item ==-->
                    <div class="feature-box-item">
                        <div class="feature-box-icon">
                            <img class="feature-box-icon-img" src="assets/images/icons/feature-3.png" width="70" height="70" alt="Online Storage">
                        </div>
                        <h4 class="feature-box-title">Online Storage</h4>
                        <p class="feature-box-desc">This is the perfect place to find a nice and cozy.</p>
                    </div>
                    <!--== End: Feature Box Item ==-->



                </div>
            </div>
            <div class="col-lg-6 mb-9">
                <a href="product.html">
                    <img class="w-100" src="assets/images/photos/photos1.webp" alt="Image">
                </a>
            </div>
            <div class="col-lg-3 mb-5">
                <div class="mb-4 text-center text-lg-start">

                    <!--== Start: Feature Box Item ==-->
                    <div class="feature-box-item">
                        <div class="feature-box-icon">
                            <img class="feature-box-icon-img" src="assets/images/icons/feature-4.png" width="70" height="70" alt="Portable Charge">
                        </div>
                        <h4 class="feature-box-title">Portable Charge</h4>
                        <p class="feature-box-desc">This is the perfect place to find a nice and cozy.</p>
                    </div>
                    <!--== End: Feature Box Item ==-->



                </div>
                <div class="mb-4 text-center text-lg-start">

                    <!--== Start: Feature Box Item ==-->
                    <div class="feature-box-item">
                        <div class="feature-box-icon">
                            <img class="feature-box-icon-img" src="assets/images/icons/feature-5.png" width="70" height="70" alt="Voice Control">
                        </div>
                        <h4 class="feature-box-title">Voice Control</h4>
                        <p class="feature-box-desc">This is the perfect place to find a nice and cozy.</p>
                    </div>
                    <!--== End: Feature Box Item ==-->



                </div>
                <div class="text-center text-lg-start">

                    <!--== Start: Feature Box Item ==-->
                    <div class="feature-box-item">
                        <div class="feature-box-icon">
                            <img class="feature-box-icon-img" src="assets/images/icons/feature-6.png" width="70" height="70" alt="Stainless Blade">
                        </div>
                        <h4 class="feature-box-title">Stainless Blade</h4>
                        <p class="feature-box-desc">This is the perfect place to find a nice and cozy.</p>
                    </div>
                    <!--== End: Feature Box Item ==-->



                </div>
            </div>
        </div>
    </div>
</div> --}}
<!--== End: Features Section Wrapper ==-->

<!--== Start: Gallery Section Wrapper ==-->
<div class="gallery-section section-padding-b">
    <div class="container-fluid container-1733">
        <!--== Start: Section Title ==-->
        <div class="section-title2 mb-12 text-center mt-n2">
            <h6 class="sub-title">JONGSALAK</h6>
            <h2 class="title">เสียงตอบรับ</h2>
        </div>
        <!--== End: Section Title ==-->
        <div class="row mb-n6">
            <div class="col-12 swiper-button-wrap">
                <div class="swiper gallery-slider-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">

                            <!--== Start: Gallery Item ==-->
                            <div class="gallery-item">
                                {{-- <a href="product.html" class="gallery-image"> --}}
                                    <img class="w-100" src="assets/images/gallery/testimonial.webp" width="500" height="600" alt="Single Gallery Name">
                                {{-- </a> --}}
                            </div>
                            <!--== End: Gallery Item ==-->

                        </div>
                        <div class="swiper-slide">

                            <!--== Start: Gallery Item ==-->
                            <div class="gallery-item">
                                {{-- <a href="product.html" class="gallery-image"> --}}
                                    <img class="w-100" src="assets/images/gallery/testimonial.webp" width="500" height="600" alt="Single Gallery Name">
                                {{-- </a> --}}
                            </div>
                            <!--== End: Gallery Item ==-->

                        </div>
                        <div class="swiper-slide">

                            <!--== Start: Gallery Item ==-->
                            <div class="gallery-item">
                                {{-- <a href="product.html" class="gallery-image"> --}}
                                    <img class="w-100" src="assets/images/gallery/testimonial.webp" width="500" height="600" alt="Single Gallery Name">
                                {{-- </a> --}}
                            </div>
                            <!--== End: Gallery Item ==-->

                        </div>
                        <div class="swiper-slide">

                            <!--== Start: Gallery Item ==-->
                            <div class="gallery-item">
                                {{-- <a href="product.html" class="gallery-image"> --}}
                                    <img class="w-100" src="assets/images/gallery/testimonial.webp" width="500" height="600" alt="Single Gallery Name">
                                {{-- </a> --}}
                            </div>
                            <!--== End: Gallery Item ==-->

                        </div>
                        <div class="swiper-slide">

                            <!--== Start: Gallery Item ==-->
                            <div class="gallery-item">
                                {{-- <a href="product.html" class="gallery-image"> --}}
                                    <img class="w-100" src="assets/images/gallery/testimonial.webp" width="500" height="600" alt="Single Gallery Name">
                                {{-- </a> --}}
                            </div>
                            <!--== End: Gallery Item ==-->

                        </div>
                        <div class="swiper-slide">

                            <!--== Start: Gallery Item ==-->
                            <div class="gallery-item">
                                {{-- <a href="product.html" class="gallery-image"> --}}
                                    <img class="w-100" src="assets/images/gallery/testimonial.webp" width="500" height="600" alt="Single Gallery Name">
                                {{-- </a> --}}
                            </div>
                            <!--== End: Gallery Item ==-->

                        </div>
                        <div class="swiper-slide">

                            <!--== Start: Gallery Item ==-->
                            <div class="gallery-item">
                                {{-- <a href="product.html" class="gallery-image"> --}}
                                    <img class="w-100" src="assets/images/gallery/testimonial.webp" width="500" height="600" alt="Single Gallery Name">
                                {{-- </a> --}}
                            </div>
                            <!--== End: Gallery Item ==-->

                        </div>
                        <div class="swiper-slide">

                            <!--== Start: Gallery Item ==-->
                            <div class="gallery-item">
                                {{-- <a href="product.html" class="gallery-image"> --}}
                                    <img class="w-100" src="assets/images/gallery/testimonial.webp" width="500" height="600" alt="Single Gallery Name">
                                {{-- </a> --}}
                    
                            </div>
                            <!--== End: Gallery Item ==-->

                        </div>
                    </div>
                </div>
                <!--== Add Arrows ==-->
                <div class="swiper-button-st2 prev gallery-swiper-button-prev"><i class="icofont-thin-left"></i></div>
                <div class="swiper-button-st2 next gallery-swiper-button-next"><i class="icofont-thin-right"></i></div>
            </div>
        </div>
    </div>
</div>
<!--== End: Gallery Section Wrapper ==-->

<!--== Start: Blog Section Wrapper ==-->
<div class="blog-section section-padding-b" >
    <div class="container">
        <!--== Start: Section Title ==-->
        <div class="section-title2 mb-12 text-center mt-n2">
            <h6 class="sub-title">Latest Blog</h6>
            <h2 class="title">Featured Blog</h2>
        </div>
        <!--== End: Section Title ==-->
        <div class="row">
            <div class="col-12 swiper-button-wrap">
                <div class="swiper blog-post-slider-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!--== Start: News Post Item ==-->
                            <div class="post-item">
                                <a href="blog-details.html" class="image mb-4">
                                    <img src="assets/images/blog/image-1.webp" width="600" height="400" alt="Image">
                                </a>
                                <div class="content">
                                    <h4 class="title line-bottom"><a href="blog-details.html">Drone Photography Tips</a></h4>
                                    <ul class="post-meta">
                                        <li class="post-date">26 December, 2023</li>
                                        <li class="post-comment"><a href="blog.html">0 comments</a></li>
                                    </ul>
                                    <p class="desc">The summer holidays are wonderful. Dressing for them can be significantly less so: Packing light...</p>
                                    <a class="btn btn-border-grey btn-radius btn-light" href="blog.html">เพิ่มเติม</a>
                                </div>
                            </div>
                            <!--== End: News Post Item ==-->
                        </div>
                        <div class="swiper-slide">
                            <!--== Start: News Post Item ==-->
                            <div class="post-item">
                                <a href="blog-details.html" class="image mb-4">
                                    <img src="assets/images/blog/image-2.webp" width="600" height="400" alt="Image">
                                </a>
                                <div class="content">
                                    <h4 class="title line-bottom"><a href="blog-details.html">Photography Tips From Wai Su</a></h4>
                                    <ul class="post-meta">
                                        <li class="post-date">26 December, 2023</li>
                                        <li class="post-comment"><a href="blog.html">1 comments</a></li>
                                    </ul>
                                    <p class="desc">The summer holidays are wonderful. Dressing for them can be significantly less so: Packing light...</p>
                                    <a class="btn btn-border-grey btn-radius btn-light" href="blog.html">เพิ่มเติม</a>
                                </div>
                            </div>
                            <!--== End: News Post Item ==-->
                        </div>
                        <div class="swiper-slide">
                            <!--== Start: News Post Item ==-->
                            <div class="post-item">
                                <a href="blog-details.html" class="image mb-4">
                                    <img src="assets/images/blog/image-3.webp" width="600" height="400" alt="Image">
                                </a>
                                <div class="content">
                                    <h4 class="title line-bottom"><a href="blog-details.html">Photography Tips From Wai Su</a></h4>
                                    <ul class="post-meta">
                                        <li class="post-date">26 December, 2023</li>
                                        <li class="post-comment"><a href="blog.html">3 comments</a></li>
                                    </ul>
                                    <p class="desc">The summer holidays are wonderful. Dressing for them can be significantly less so: Packing light...</p>
                                    <a class="btn btn-border-grey btn-radius btn-light" href="blog.html">เพิ่มเติม</a>
                                </div>
                            </div>
                            <!--== End: News Post Item ==-->
                        </div>
                    </div>
                </div>
                <!--== Add Arrows ==-->
                <div class="swiper-button-st2 prev blog-post-swiper-button-prev"><i class="icofont-thin-left"></i></div>
                <div class="swiper-button-st2 next blog-post-swiper-button-next"><i class="icofont-thin-right"></i></div>
            </div>
        </div>
    </div>
</div>
<!--== End: Blog Section Wrapper ==-->
@endsection
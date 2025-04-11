<?php
defined('C5_EXECUTE') or die('Access Denied.');
use Concrete\Core\Block\View\BlockView;

if(!is_array($this->controller->get('items')) || $this->controller->get('items') === 0) {
    return;
}
?>
<section class="wrapper !bg-[#ffffff]">
    <div class="container">

        <div class="flex flex-wrap mx-[-15px] !mb-3">
            <div class="md:w-10/12 lg:w-full xl:w-10/12 xxl:w-9/12 w-full flex-[0_0_auto] !px-[15px] max-w-full !mx-auto !text-center">

                <?php if($this->controller->get('subTitle')) : ?>
                    <h4 class="font-bold !mb-7 lg:!px-36 xl:!px-32"><?php echo $this->controller->get('subTitle'); ?></h4>
                <?php endif; ?>

                <?php if($this->controller->get('title')) : ?>
                    <h2 class="!mb-3 text-[1.8rem]">
                        <?php echo $this->controller->get('title'); ?>
                    </h2>
                <?php endif; ?>

            </div>
        </div>

        <div class="flex flex-wrap mx-[-15px] grid-view md:mx-[-20px] lg:mx-[-20px] xl:mx-[-25px] !mt-[-40px] justify-center xl:!mt-0 lg:!mt-0">
            <?php foreach($this->controller->get('items') as $key=>$item) : ?>
                <?php $this->inc('elements/view/' . $item['type'] . '.php', ['item' => $item, 'index'=>$key]); ?>
            <?php endforeach; ?>
        </div>

</section>





<section id="snippet-2" class="wrapper !bg-[#ffffff]  border-b-[rgba(164,174,198,0.2)] border-b border-solid">
    <div class="container pt-20 xl:pt-28 lg:pt-28 md:pt-28 pb-16 xl:pb-20 lg:pb-20 md:pb-20">
        <div class="flex flex-wrap mx-[-15px]">
            <div class="lg:w-9/12 xl:w-8/12 xxl:w-7/12 w-full flex-[0_0_auto] !px-[15px] max-w-full !mx-auto !text-center">
                <?php if($this->controller->get('subTitle')) : ?>
                <h2 class="!text-[.75rem] uppercase !text-[#aab0bc] !mb-3 !tracking-[0.02rem] !leading-[1.35]">
                    <?php echo $this->controller->get('subTitle'); ?>
                </h2>
                <?php endif; ?>
                <?php if($this->controller->get('title')) : ?>
                <h3 class="!text-[calc(1.305rem_+_0.66vw)] font-bold xl:!text-[1.8rem] !leading-[1.3] !mb-10">
                    <?php echo $this->controller->get('title'); ?>
                </h3>
                <?php endif; ?>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="swiper-container grid-view !mb-6 swiper-container-0" data-margin="30" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
            <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                <div class="swiper-wrapper" id="swiper-wrapper-e65cb65d28e56563" aria-live="off" style="cursor: grab; transform: translate3d(-1320px, 0px, 0px); transition-duration: 0ms;">

                    <!--/.swiper-slide -->
                    <div class="swiper-slide group" role="group" aria-label="2 / 6" style="width: 410px; margin-right: 30px;">
                        <figure class="!rounded-[.4rem] !mb-6"><img class="!rounded-[.4rem]" src="../../assets/img/photos/pd8.jpg" srcset="../../assets/img/photos/pd8@2x.jpg 2x" alt="image"><a class="item-link absolute w-[2.2rem] h-[2.2rem] !leading-[2.2rem] z-[1] transition-all duration-[0.3s] ease-in-out opacity-0 !text-[#343f52] shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.02)] text-[1rem] flex items-center justify-center rounded-[100%] right-0 bottom-4 bg-[rgba(255,255,255,.7)] hover:bg-[rgba(255,255,255,.9)] hover:!text-[#343f52] group-hover:opacity-100 group-hover:right-[1rem]" href="../../assets/img/photos/pd8-full.jpg" data-glightbox="" data-gallery="projects-group"><i class="uil uil-focus-add before:content-['\eb22']"></i></a></figure>
                        <div class="project-details flex justify-center flex-col">
                            <div class="post-header">
                                <h2 class="post-title h3"><a class="!text-[#343f52] hover:!text-[#3f78e0]" href="/single-project2">Mollis Ipsum Mattis</a></h2>
                                <div class="uppercase !tracking-[0.02rem] text-[0.7rem] font-bold !mb-[0.4rem] !text-[#9499a3]">Magazine, Book</div>
                            </div>
                            <!-- /.post-header -->
                        </div>
                        <!-- /.project-details -->
                    </div>
                    <!--/.swiper-slide -->
                    <div class="swiper-slide group swiper-slide-prev" role="group" aria-label="3 / 6" style="width: 410px; margin-right: 30px;">
                        <figure class="!rounded-[.4rem] !mb-6"><img class="!rounded-[.4rem]" src="../../assets/img/photos/pd9.jpg" srcset="../../assets/img/photos/pd9@2x.jpg 2x" alt="image"><a class="item-link absolute w-[2.2rem] h-[2.2rem] !leading-[2.2rem] z-[1] transition-all duration-[0.3s] ease-in-out opacity-0 !text-[#343f52] shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.02)] text-[1rem] flex items-center justify-center rounded-[100%] right-0 bottom-4 bg-[rgba(255,255,255,.7)] hover:bg-[rgba(255,255,255,.9)] hover:!text-[#343f52] group-hover:opacity-100 group-hover:right-[1rem]" href="../../assets/img/photos/pd9-full.jpg" data-glightbox="" data-gallery="projects-group"><i class="uil uil-focus-add before:content-['\eb22']"></i></a></figure>
                        <div class="project-details flex justify-center flex-col">
                            <div class="post-header">
                                <h2 class="post-title h3"><a class="!text-[#343f52] hover:!text-[#3f78e0]" href="/single-project3">Ipsum Ultricies Cursus</a></h2>
                                <div class="uppercase !tracking-[0.02rem] text-[0.7rem] font-bold !mb-[0.4rem] !text-[#9499a3]">Packaging</div>
                            </div>
                            <!-- /.post-header -->
                        </div>
                        <!-- /.project-details -->
                    </div>
                    <!--/.swiper-slide -->
                    <div class="swiper-slide group swiper-slide-active" role="group" aria-label="4 / 6" style="width: 410px; margin-right: 30px;">
                        <figure class="!rounded-[.4rem] !mb-6"><img class="!rounded-[.4rem]" src="../../assets/img/photos/pd10.jpg" srcset="../../assets/img/photos/pd10@2x.jpg 2x" alt="image"><a class="item-link absolute w-[2.2rem] h-[2.2rem] !leading-[2.2rem] z-[1] transition-all duration-[0.3s] ease-in-out opacity-0 !text-[#343f52] shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.02)] text-[1rem] flex items-center justify-center rounded-[100%] right-0 bottom-4 bg-[rgba(255,255,255,.7)] hover:bg-[rgba(255,255,255,.9)] hover:!text-[#343f52] group-hover:opacity-100 group-hover:right-[1rem]" href="../../assets/img/photos/pd10-full.jpg" data-glightbox="" data-gallery="projects-group"><i class="uil uil-focus-add before:content-['\eb22']"></i></a></figure>
                        <div class="project-details flex justify-center flex-col">
                            <div class="post-header">
                                <h2 class="post-title h3"><a class="!text-[#343f52] hover:!text-[#3f78e0]" href="/single-project">Inceptos Euismod Egestas</a></h2>
                                <div class="uppercase !tracking-[0.02rem] text-[0.7rem] font-bold !mb-[0.4rem] !text-[#9499a3]">Stationary, Branding</div>
                            </div>
                            <!-- /.post-header -->
                        </div>
                        <!-- /.project-details -->
                    </div>
                    <!--/.swiper-slide -->
                    <div class="swiper-slide group swiper-slide-next" role="group" aria-label="5 / 6" style="width: 410px; margin-right: 30px;">
                        <figure class="!rounded-[.4rem] !mb-6"><img class="!rounded-[.4rem]" src="../../assets/img/photos/pd11.jpg" srcset="../../assets/img/photos/pd11@2x.jpg 2x" alt="image"><a class="item-link absolute w-[2.2rem] h-[2.2rem] !leading-[2.2rem] z-[1] transition-all duration-[0.3s] ease-in-out opacity-0 !text-[#343f52] shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.02)] text-[1rem] flex items-center justify-center rounded-[100%] right-0 bottom-4 bg-[rgba(255,255,255,.7)] hover:bg-[rgba(255,255,255,.9)] hover:!text-[#343f52] group-hover:opacity-100 group-hover:right-[1rem]" href="../../assets/img/photos/pd11-full.jpg" data-glightbox="" data-gallery="projects-group"><i class="uil uil-focus-add before:content-['\eb22']"></i></a></figure>
                        <div class="project-details flex justify-center flex-col">
                            <div class="post-header">
                                <h2 class="post-title h3"><a class="!text-[#343f52] hover:!text-[#3f78e0]" href="/single-project2">Ipsum Mollis Vulputate</a></h2>
                                <div class="uppercase !tracking-[0.02rem] text-[0.7rem] font-bold !mb-[0.4rem] !text-[#9499a3]">Packaging</div>
                            </div>
                            <!-- /.post-header -->
                        </div>
                        <!-- /.project-details -->
                    </div>
                    <!--/.swiper-slide -->
                    <div class="swiper-slide group" role="group" aria-label="6 / 6" style="width: 410px; margin-right: 30px;">
                        <figure class="!rounded-[.4rem] !mb-6"><img class="!rounded-[.4rem]" src="../../assets/img/photos/pd12.jpg" srcset="../../assets/img/photos/pd12@2x.jpg 2x" alt="image"><a class="item-link absolute w-[2.2rem] h-[2.2rem] !leading-[2.2rem] z-[1] transition-all duration-[0.3s] ease-in-out opacity-0 !text-[#343f52] shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.02)] text-[1rem] flex items-center justify-center rounded-[100%] right-0 bottom-4 bg-[rgba(255,255,255,.7)] hover:bg-[rgba(255,255,255,.9)] hover:!text-[#343f52] group-hover:opacity-100 group-hover:right-[1rem]" href="../../assets/img/photos/pd12-full.jpg" data-glightbox="" data-gallery="projects-group"><i class="uil uil-focus-add before:content-['\eb22']"></i></a></figure>
                        <div class="project-details flex justify-center flex-col">
                            <div class="post-header">
                                <h2 class="post-title h3"><a class="!text-[#343f52] hover:!text-[#3f78e0]" href="/single-project3">Porta Ornare Cras</a></h2>
                                <div class="uppercase !tracking-[0.02rem] text-[0.7rem] font-bold !mb-[0.4rem] !text-[#9499a3]">Branding</div>
                            </div>
                            <!-- /.post-header -->
                        </div>
                        <!-- /.project-details -->
                    </div>
                    <!--/.swiper-slide -->
                </div>
                <!--/.swiper-wrapper -->
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            <!-- /.swiper -->
            <div class="swiper-controls">
                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                    <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span>
                    <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span>
                    <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span>
                    <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 4" aria-current="true"></span></div></div></div>
        <!-- /.swiper-container -->
    </div>
</section>
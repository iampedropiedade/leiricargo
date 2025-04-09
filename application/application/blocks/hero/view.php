<?php
defined('C5_EXECUTE') or die('Access Denied.');
?>
<section class="wrapper !bg-[#ffffff]">
    <div class="container pt-8 xl:pt-[4.5rem] lg:pt-[4.5rem] md:pt-[4.5rem]">
        <div
            class="flex flex-wrap mx-[-15px] lg:mx-0 xl:mx-[-20px] !mb-7 md:!mb-10 lg:!mb-[6rem] xl:!mb-[6rem] items-center">
            <div class="md:w-8/12 md:!ml-[16.66666667%] lg:w-6/12 lg:!ml-[8.33333333%] xl:w-6/12 xl:!ml-[8.33333333%] w-full flex-[0_0_auto] !px-[15px] lg:px-0 xl:!px-[20px] max-w-full !relative lg:!order-2 xl:!order-2"
                data-cue="zoomIn" data-show="true"
                style="animation-name: zoomIn; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                <div class="shape bg-dot primary rellax !w-[7rem] !h-[9rem] absolute z-[1] opacity-50 !bg-[radial-gradient(#3f78e0_2px,transparent_2.5px)]"
                    data-rellax-speed="1" style="top: -1.7rem; left: -1.5rem; transform: translate3d(0px, -2px, 0px);">
                </div>
                <div class="shape rounded !bg-[#edf2fc] rellax xl:block lg:block md:block absolute z-[1]"
                    data-rellax-speed="0"
                    style="bottom: -1.8rem; right: -0.8rem; width: 85%; height: 90%; transform: translate3d(0px, 0px, 0px);">
                </div>
                <figure class="rounded-[0.4rem] relative z-[2]">
                    <!-- IMAGE -->
                    <?php if ($backgroundImageId): ?>
                        <?php $file = File::getByID($backgroundImageId); ?>
                        <?php if ($file): ?>
                            <img class="rounded-[0.4rem]" src="<?php echo $file->getURL(); ?>" alt="image">
                        <?php endif; ?>
                    <?php endif; ?>
                </figure>
                <!-- /IMAGE -->
            </div>
            <div class="xl:w-5/12 lg:w-5/12 w-full flex-[0_0_auto] !px-[15px] lg:px-0 xl:!px-[20px] max-w-full xl:!mt-[-2.5rem] lg:!mt-[-2.5rem] !mt-[4rem] text-center lg:text-left xl:text-left"
                data-cues="slideInDown" data-group="page-title" data-delay="600" data-disabled="true">
                <!-- TITLE -->
                <h1 class="!text-[calc(1.385rem_+_1.62vw)]  !font-normal !tracking-[normal] font-DMSerif !leading-[1.1] xl:!text-[2.6rem] !mb-5"
                    data-cue="slideInDown" data-group="page-title" data-delay="600" data-show="true"
                    style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 600ms; animation-direction: normal; animation-fill-mode: both;">
                    <?php echo h($title); ?>
                </h1>
                <!-- /TITLE -->
                 <!-- CONTENT -->
                <p class="lead text-[1.25rem] leading-normal !mb-7 md:!px-10 lg:!px-0" data-cue="slideInDown"
                    data-group="page-title" data-delay="600" data-show="true"
                    style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">
                    <?php echo ($content); ?>
                </p>
                <!-- /CONTENT -->
                <div class="flex justify-center lg:!justify-start xl:!justify-start" data-cues="slideInDown"
                    data-group="page-title-buttons" data-delay="900" data-cue="slideInDown" data-disabled="true"
                    data-show="true"
                    style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">
                    <span data-cue="slideInDown" data-group="page-title-buttons" data-delay="900" data-show="true"
                        style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 1200ms; animation-direction: normal; animation-fill-mode: both;">
                        <!-- BUTTON LINK E BUTTON TEXT -->
                        <a href="<?php echo h($buttonLink1); ?>"
                            class="btn btn-lg btn-primary !text-white !bg-[#3f78e0] border-[#3f78e0] hover:text-white hover:bg-[#3f78e0] hover:!border-[#3f78e0]   active:text-white active:bg-[#3f78e0] active:border-[#3f78e0] disabled:text-white disabled:bg-[#3f78e0] disabled:border-[#3f78e0] !rounded-[50rem] !mr-2">
                            <?php echo h($buttonText1); ?>
                        </a>
                        
                    </span>
                    <span data-cue="slideInDown" data-group="page-title-buttons" data-delay="900" data-show="true"
                        style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 1500ms; animation-direction: normal; animation-fill-mode: both;">
                        <a href="<?php echo h($buttonLink2); ?>"
                            class="btn btn-lg btn-outline-primary !rounded-[50rem]">
                            <?php echo h($buttonText1); ?>
                        </a>
                    </span>
                    <!-- /BUTTON LINK E BUTTON TEXT -->
                </div>
            </div>
        </div>
    </div>
</section>
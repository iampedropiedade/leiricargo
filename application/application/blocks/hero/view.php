<?php
defined('C5_EXECUTE') or die('Access Denied.');
?>
<section class="wrapper !bg-[#ffffff] ">
    <div class="container pt-8 xl:pt-[4.5rem] lg:pt-[4.5rem] md:pt-[4.5rem]">
        <div
            class="row xl:mx-0 lg:mx-0 xl:mx-[-20px] !mt-[-50px] xl:!mt-[-80px] lg:!mt-[-80px] md:!mt-[-80px] xl:!mt-0 lg:!mt-0 !mb-7 md:!mb-10 lg:!mb-24 items-center">
            <div class="md:w-8/12 flex-[0_0_auto] !px-[15px] max-w-full md:!ml-[16.66666667%] lg:w-6/12 flex-[0_0_auto] !px-[15px] max-w-full lg:!ml-[8.33333333%] !relative lg:!order-2"
                data-cue="zoomIn">
                <div class="shape bg-dot primary rellax !w-[7rem] !h-[9rem]" data-rellax-speed="1"
                    style="top: -1.7rem; left: -1.5rem;"></div>
                <div class="shape rounded !bg-[#edf2fc] rellax md:block" data-rellax-speed="0"
                    style="bottom: -1.8rem; right: -0.8rem; width: 85%; height: 90%;"></div>
                    <?php if ($backgroundImageId): ?>
                    <?php
                    $file = File::getByID($backgroundImageId);
                    if ($file):
                        ?>
                        <figure class="rounded "><img src="<?php echo $file->getURL(); ?>" srcset="<?php echo $file->getURL(); ?> 2x" alt="" /></figure>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
            <!--/column -->
            <div class="lg:w-5/12 flex-[0_0_auto] !px-[15px] max-w-full xl:!mt-[-2.5rem] lg:!mt-[-2.5rem] text-center lg:text-left xl:text-left"
                data-cues="slideInDown" data-group="page-title" data-delay="600">
                <h1 class="text-[calc(1.365rem_+_1.38vw)] font-bold !leading-[1.2] xl:!text-[2.4rem] !mb-5">
                    <?php echo $title; ?>
                </h1>
                <p class="lead text-[20px] leading-normal !mb-7 md:!px-10 lg:!px-0"><?php echo $content; ?></p>
                <div class="flex justify-center lg:!justify-start" data-cues="slideInDown"
                    data-group="page-title-buttons" data-delay="900">
                    <span><a href="<?php echo h($buttonLink1); ?>"
                            class="btn btn-lg btn-primary !text-white !bg-[#3f78e0] border-[#3f78e0] hover:text-white hover:bg-[#3f78e0] hover:!border-[#3f78e0]   active:text-white active:bg-[#3f78e0] active:border-[#3f78e0] disabled:text-white disabled:bg-[#3f78e0] disabled:border-[#3f78e0] !rounded-[50rem] me-2"><?php echo h($buttonText1); ?></a></span>
                    <span><a href="<?php echo h($buttonLink2); ?>"
                            class="btn btn-lg btn-outline-primary !rounded-[50rem]"><?php echo h($buttonText2); ?></a></span>
                </div>
            </div>
            <!--/column -->
        </div>
        <!-- /.row -->
</section>
<!-- /section -->
<?php
defined('C5_EXECUTE') or die('Access Denied.');
?>


<section class="wrapper image-wrapper bg-image bg-overlay !bg-fixed bg-no-repeat bg-[center_center] bg-cover relative z-0
        before:content-[''] before:block before:absolute before:z-[1] before:w-full before:h-full before:left-0 before:top-0
        before:bg-[rgba(30,34,40,.5)]"
    <?php if ($backgroundImageId): ?>
    <?php
    $file = File::getByID($backgroundImageId);
    if ($file):
    ?>
         data-image-src="<?= $file->getURL(); ?>"
         style="background-image: url('<?= $file->getURL(); ?>');">
    <?php endif; ?>
    <?php endif; ?>

    <div class="container py-[8rem]">
        <div class="flex flex-wrap mx-[-15px]">
            <div class="xl:w-8/12 lg:w-8/12 w-full flex-[0_0_auto] !px-[15px] max-w-full">
                <h2 class="!text-[0.8rem] uppercase inline-flex !leading-[1.35] text-line relative align-top !pl-[1.4rem]
                !tracking-[0.02rem] before:content-[''] before:absolute before:inline-block before:translate-y-[-60%] before:w-3
                before:h-[0.05rem] before:left-0 before:top-2/4 before:bg-[#ffffff] !text-white !mb-3">
                    <?php echo h($title); ?>
                </h2>
                <h3 class="!text-[calc(1.315rem_+_0.78vw)] font-bold xl:!text-[1.9rem] !leading-[1.25] !mb-6 !text-white xxl:!pr-32">
                    <?php echo h($subTitle); ?>
                </h3>
                <a href="#"
                   class="btn btn-white !rounded-[.4rem] !text-[.85rem] !mb-0 whitespace-nowrap">
                    <?php echo h($buttonText); ?>
                </a>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
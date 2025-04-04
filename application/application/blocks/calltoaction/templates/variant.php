<?php
defined('C5_EXECUTE') or die('Access Denied.');
?>
<?php if ($backgroundImageId): ?>
    <?php
    $file = File::getByID($backgroundImageId);
    if ($file):
        ?>
        <section
            class="wrapper image-wrapper bg-auto no-overlay bg-image !text-center py-[4.5rem] xl:!py-24 lg:!py-24 md:!py-24 bg-map"
            data-image-src="<?php echo $file->getURL(); ?>">
        <?php endif; ?>
    <?php endif; ?>
    <div class="container py-0 xl:!py-[8rem] lg:!py-[8rem] md:!py-[8rem]">
        <div class="row">
            <div
                class="lg:w-6/12 flex-[0_0_auto] !px-[15px] max-w-full xl:w-5/12 flex-[0_0_auto] !px-[15px] max-w-full !mx-auto">
                <h2
                    class="text-[calc(1.305rem_+_0.66vw)] font-bold xl:!text-[1.8rem] !leading-[1.3] !mb-3 !text-center">
                    <?php echo $title; ?></h2>
                <p class="lead !mb-5 md:!px-24 lg:!px-3"><?php echo $content; ?>
                </p>
                <a href="<?php echo h($buttonLink); ?>"
                    class="btn btn-primary !text-white !bg-[#3f78e0] border-[#3f78e0] hover:text-white hover:bg-[#3f78e0] hover:!border-[#3f78e0]   active:text-white active:bg-[#3f78e0] active:border-[#3f78e0] disabled:text-white disabled:bg-[#3f78e0] disabled:border-[#3f78e0] !rounded-[50rem]">
                    <?php echo h($buttonText); ?></a>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
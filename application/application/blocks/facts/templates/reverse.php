<?php
defined('C5_EXECUTE') or die('Access Denied.');
?>
<section class="wrapper !bg-[#ffffff] ">
    <div class="container pt-20 xl:pt-28 lg:pt-28 md:pt-28 pb-16 xl:pb-20 lg:pb-20 md:pb-20">
        <div class="flex flex-wrap mx-[-15px] xl:mx-[-35px] lg:mx-[-20px] !mt-[-50px] items-center">
            <div class="xl:w-7/12 lg:w-7/12 w-full flex-[0_0_auto] xl:!px-[35px] lg:!px-[20px] !px-[15px] !mt-[50px] max-w-full">
                <figure class="m-0 p-0">
                    <?php if ($backgroundImageId) : ?>
                        <?php
                        $file = File::getByID($backgroundImageId);
                        if ($file) :
                        ?>
                            <img class="w-auto" src="<?php echo $file->getURL(); ?>" alt="image">
                        <?php endif; ?>
                    <?php endif; ?>
                </figure>
            </div>
            <!--/column -->
            <div class="xl:w-5/12 lg:w-5/12 w-full flex-[0_0_auto] xl:!px-[35px] lg:!px-[20px] !px-[15px] !mt-[50px] max-w-full">
                <h3 class="!text-[calc(1.305rem_+_0.66vw)] font-bold xl:!text-[1.8rem] !leading-[1.3] !mb-6 xxl:!pr-6">
                    <?php echo h($title); ?>
                </h3>
                <div class="lead !text-[1.05rem] !leading-[1.6] font-medium">
                    <?php echo h($subTitle); ?>
                </div>
                <div class="!mb-6">
                    <?php echo $content; ?>
                </div>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>

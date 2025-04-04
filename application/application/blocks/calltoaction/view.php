<?php
defined('C5_EXECUTE') or die('Access Denied.');
?>
<section class="wrapper !bg-[#ffffff] ">
                  <div class="container pt-20 xl:pt-28 lg:pt-28 md:pt-28 pb-16 xl:pb-20 lg:pb-20 md:pb-20">
                    <div class="flex flex-wrap mx-[-15px]">
                      <div class="xl:w-10/12 w-full flex-[0_0_auto] !px-[15px] max-w-full !mx-auto">
                                <?php if ($backgroundImageId): ?>
                                <?php
                                $file = File::getByID($backgroundImageId);
                                if ($file):
                                    ?>
                        <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-400 !text-white !mt-[-1.25rem] xl:!mt-0 lg:!mt-0  xl:-translate-y-2/4 lg:-translate-y-2/4 bg-cover [background-size:100%] bg-[center_center] bg-no-repeat !bg-scroll !relative z-0 before:rounded-[0.4rem] before:bg-[rgba(30,34,40,.4)] before:content-[''] before:block before:absolute before:z-[1] before:w-full before:h-full before:left-0 before:top-0" data-image-src="<?php echo $file->getURL(); ?>">
                            <?php endif; ?>
              <?php endif; ?>
                          <div class="card-body p-6 flex-row text-center xl:!justify-between lg:!justify-between md:!justify-between xl:!flex xl:!items-center lg:!flex lg:!items-center xl:!p-12 lg:!p-12 md:!p-12 xl:!text-left lg:!text-left">
                            <h3 class="!text-[calc(1.265rem_+_0.18vw)] font-bold xl:!text-[1.4rem] !leading-[1.35] !mb-6 xl:!mb-0 lg:!mb-0 lg:!pr-10 xl:!pr-5 xxl:!pr-32 !text-white"><?php echo $content; ?></h3>
                            <a href="<?php echo h($buttonLink); ?>" class="btn btn-white !rounded-[50rem]  !mb-0 whitespace-nowrap"><?php echo h($buttonText); ?></a>
                          </div>
                          <!--/.card-body -->
                        </div>
                        <!--/.card -->
                      </div>
                      <!-- /column -->
                    </div>
                    <!-- /.row -->
                  </div>
</section>
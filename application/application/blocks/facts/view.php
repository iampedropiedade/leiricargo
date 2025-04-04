<?php
defined('C5_EXECUTE') or die('Access Denied.');
?>
<section class="wrapper !bg-[#ffffff] ">
  <div class="container pt-20 xl:pt-28 lg:pt-28 md:pt-28 pb-16 xl:pb-20 lg:pb-20 md:pb-20">
    <div class="flex flex-wrap mx-[-15px] xl:mx-[-35px] lg:mx-[-20px] !mt-[-50px] items-center">
      <div
        class="xl:w-6/12 lg:w-6/12 w-full flex-[0_0_auto] xl:!px-[35px] lg:!px-[20px] !px-[15px] !mt-[50px] max-w-full !relative xl:!order-2 lg:!order-2">
        <div
          class="shape bg-dot primary bg-[radial-gradient(#3f78e0_2px,transparent_2.5px)] rellax !w-[6rem] !h-[10rem] absolute z-[1] opacity-50"
          data-rellax-speed="1" style="top: 3rem; left: 5.5rem"></div>
        <div class="flex flex-wrap !relative overlap-grid-2">
          <div
            class="item xl:w-[70%] xl:z-[3] xl:ml-[30%] xl:!mt-0 lg:w-[70%] lg:z-[3] lg:ml-[30%] lg:!mt-0 md:w-[70%] md:z-[3] md:ml-[30%] md:!mt-0">
            <figure class="!rounded-[.4rem] shadow-[0_0_1.25rem_rgba(30,34,40,0.04)] relative">
              <?php if ($backgroundImageId): ?>
                <?php
                $file = File::getByID($backgroundImageId);
                if ($file):
                  ?>
                  <img class="!rounded-[.4rem] " src="<?php echo $file->getURL(); ?>" alt="image">
                <?php endif; ?>
              <?php endif; ?>
            </figure>
          </div>
        </div>
      </div>
      <!--/column -->
      <div
        class="xl:w-6/12 lg:w-6/12 w-full flex-[0_0_auto] xl:!px-[35px] lg:!px-[20px] !px-[15px] !mt-[50px] max-w-full">

        <h2 class="!text-[calc(1.305rem_+_0.66vw)] font-bold xl:!text-[1.8rem] !leading-[1.3] !mb-3">
          <?php echo h($title); ?>
        </h2>
        <p class="lead !text-[1.05rem] !leading-[1.6] font-medium">
          <?php echo h($subTitle); ?>
        </p>
        <div class="!mb-6">
          <?php echo $content; ?>
        </div>
      </div>
      <!--/.row -->
    </div>
    <!--/column -->
  </div>
  <!--/.row -->
  </div>
  <!-- /.container -->
</section>
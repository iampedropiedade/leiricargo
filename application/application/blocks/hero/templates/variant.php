<section
  class="wrapper  bg-[#262b32] opacity-100  angled lower-start relative border-0
     before:content-[''] before:block before:absolute before:z-0 before:border-y-transparent before:border-[#262b32] before:border-0 before:border-solid before:right-0 after:bottom-[-4rem] after:content-[''] after:block after:absolute after:z-0 after:border-l-[100vw] after:border-r-transparent after:border-b-[4rem] after:border-y-transparent after:border-[#262b32] after:border-0 after:border-solid after:right-0">
  <div class="container pt-7 xl:pt-12 lg:pt-12 md:pt-12 pb-8">
    <div class="flex flex-wrap mx-0 !mt-[-50px] items-center">
      <div class="lg:w-6/12 xl:w-6/12 w-full flex-[0_0_auto] max-w-full px-0 !mt-[50px]" data-cues="slideInDown"
        data-group="page-title" data-delay="600" data-disabled="true">
        <h1 class="!text-[calc(1.375rem_+_1.5vw)] font-bold !leading-[1.15] xl:!text-[2.5rem] !text-white !mb-4"
          data-cue="slideInDown" data-group="page-title" data-delay="600" data-show="true"
          style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 600ms; animation-direction: normal; animation-fill-mode: both;">
          <?php echo h($title); ?><br><span class="typer !text-[#54a8c7]  whitespace-nowrap" data-delay="100"
            data-words="<?php echo h($subTitle); ?>" style="color: black;">
          </span><span class="cursor !text-[#54a8c7] " data-owner="typer"
            style="transition: 0.1s; opacity: 0;">|</span></h1>
        <p class="lead !text-[1.2rem] !leading-[1.5] !text-white !mb-7 md:!pr-32 xl:!pr-0 lg:!pr-0 xxl:!pr-20"
          data-cue="slideInDown" data-group="page-title" data-delay="600" data-show="true"
          style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">
          <?php echo $content; ?></p>
        <div data-cue="slideInDown" data-group="page-title" data-delay="600" data-show="true"
          style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 1200ms; animation-direction: normal; animation-fill-mode: both;">
          <a
            class="btn btn-lg btn-aqua !text-white !bg-[#54a8c7] border-[#54a8c7] hover:text-white hover:bg-[#54a8c7] hover:!border-[#54a8c7] focus:shadow-[rgba(79,152,181,1)] active:!text-[#343f52] 
            active:bg-[#54a8c7] active:border-[#54a8c7] disabled:!text-[#343f52] disabled:bg-[#54a8c7] disabled:border-[#54a8c7] rounded">
            <?php echo h($buttonText1); ?></a>
        </div>
      </div>
      <!-- /column -->
      <div
        class="lg:w-5/12 xl:w-5/12 w-full flex-[0_0_auto] max-w-full px-0 !mt-[50px] lg:!ml-[8.33333333%] xl:!ml-[8.33333333%] !mb-[-8rem] relative z-[3]"
        data-cues="slideInDown" data-disabled="true">
        <div class="!relative" data-cue="slideInDown" data-show="true"
          style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
          <?php if ($backgroundImageId): ?>
            <?php $file = File::getByID($backgroundImageId); ?>
            <?php if ($file): ?>
              <figure class="!rounded-[.4rem] !shadow-[0_0.25rem_1.75rem_rgba(30,34,40,0.07)]"><img class="!rounded-[.4rem]"
                  src="<?php echo $file->getURL(); ?>" alt="image"></figure>
            <?php endif; ?>
          <?php endif; ?>
        </div>
        <!-- /div -->
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
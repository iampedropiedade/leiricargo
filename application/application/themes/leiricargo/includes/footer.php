<?php
defined('C5_EXECUTE') or die("Access Denied.");
use Concrete\Core\Area\GlobalArea;
?>
</main>
<footer class="bg-[rgba(52,63,82)] opacity-100 !text-[#cacaca]">
    <div class="container py-16 xl:!py-20 lg:!py-20 md:!py-20">
      <div class="xl:!flex lg:!flex flex-row xl:!items-center lg:!items-center">
        <h3 class="!text-[calc(1.305rem_+_0.66vw)] font-bold xl:!text-[1.8rem] !leading-[1.3] !mb-6 xl:!mb-0 lg:!mb-0 lg:!pr-40 xl:!pr-60 xxl:!pr-[22.5rem] !text-white">
            <?php
            $a = new GlobalArea('Footer - Title');
            $a->display($c);
            ?>
        </h3>
        <a href="#" class="btn btn-purple !text-white !bg-[#747ed1] border-[#747ed1] hover:text-white hover:bg-[#747ed1] hover:!border-[#747ed1]   active:text-white active:bg-[#747ed1] active:border-[#747ed1] disabled:text-white disabled:bg-[#747ed1] disabled:border-[#747ed1] !rounded-[50rem]  !mb-0 whitespace-nowrap">Try It For Free</a>
      </div>
      <!--/div -->
      <hr class="!mt-[3rem] !mb-[3.5rem] opacity-100 m-[4.5rem_0] border-t border-solid border-[rgba(164,174,198,.2)]">
      <div class="flex flex-wrap mx-[-15px] !mt-[-30px] xl:!mt-0 lg:!mt-0">
        <div class="md:w-4/12 xl:w-3/12 lg:w-3/12 w-full flex-[0_0_auto] !px-[15px] max-w-full xl:!mt-0 lg:!mt-0 !mt-[30px]">
          <div class="widget !text-[#cacaca]">
            <img class="!mb-4" src="/app/img/brands/logo.png" alt="image">
            <p class="!mb-4">© 2024 Leiricargo. <br class="hidden xl:block lg:block !text-[#cacaca]">All rights reserved.</p>
            <nav class="nav social social-white">
              <a class="!text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]" href="#"><i class="uil uil-twitter before:content-['\ed59'] !text-white text-[1rem]"></i></a>
              <a class="!text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]" href="#"><i class="uil uil-facebook-f before:content-['\eae2'] !text-white text-[1rem]"></i></a>
              <a class="!text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]" href="#"><i class="uil uil-dribbble before:content-['\eaa2'] !text-white text-[1rem]"></i></a>
              <a class="!text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]" href="#"><i class="uil uil-instagram before:content-['\eb9c'] !text-white text-[1rem]"></i></a>
              <a class="!text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]" href="#"><i class="uil uil-youtube before:content-['\edb5'] !text-white text-[1rem]"></i></a>
            </nav>
            <!-- /.social -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="md:w-4/12 xl:w-3/12 lg:w-3/12 w-full flex-[0_0_auto] !px-[15px] max-w-full xl:!mt-0 lg:!mt-0 !mt-[30px]">
          <div class="widget !text-[#cacaca]">
<!--              <h4 class="widget-title !text-white !mb-3">Get in Touch</h4>-->

              <address class="xl:!pr-20 xxl:!pr-28 not-italic !leading-[inherit] block !mb-4">
                  <?php
                  $a = new GlobalArea('Footer - Column 1');
                  $a->display($c);
                  ?>
              </address>

<!--              <p><a class="!text-[#cacaca] hover:!text-[#747ed1]" href="mailto:first.last@email.com">info@email.com</a><br />-->
<!--                  00 (123) 456 78 90</p>-->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="md:w-4/12 xl:w-3/12 lg:w-3/12 w-full flex-[0_0_auto] !px-[15px] max-w-full xl:!mt-0 lg:!mt-0 !mt-[30px]">
          <div class="widget !text-[#cacaca]">
              <?php
              $a = new GlobalArea('Footer - Column 2');
              $a->display($c);
              ?>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->

        <!-- /column -->
      </div>

      <!--/.row -->
    </div>
    <!-- /.container -->
  </footer>
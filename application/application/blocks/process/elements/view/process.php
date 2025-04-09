<?php
defined('C5_EXECUTE') or die('Access Denied.');

use Concrete\Core\File\File;
use Application\Service\Picture;

assert(isset($item, $index));
?>
<div class="md:w-6/12 lg:w-3/12 xl:w-3/12 w-full flex-[0_0_auto] !px-[15px] xl:!px-[35px] lg:!px-[20px] !mt-[30px] max-w-full !relative
    max-lg:after:!hidden">
    <span class="icon btn btn-circle
          btn-lg btn-soft-primary pointer-events-none !mb-4 !relative z-[2] xl:!text-[1.3rem] w-12 h-12
          !text-[calc(1.255rem_+_0.06vw)] inline-flex items-center justify-center leading-none !p-0 !rounded-[100%]">
                    <span class="number table-cell text-center align-middle text-[1.1rem] font-bold mx-auto my-0 !leading-none">
                        <?php echo $item['number']; ?>
                    </span></span>
    <h4 class="!mb-1">
        <?php echo $item['circleTitle']; ?>
    </h4>
    <p class="!mb-0">
        <?php echo $item['circleContent']; ?>
    </p>
</div>








    <!--/column -->




<?php
defined('C5_EXECUTE') or die('Access Denied.');

use Concrete\Core\File\File;
use Application\Service\Picture;

assert(isset($item, $index));
if (isset($item['image_id']) && $item['image_id']) {
    $file = File::getByID($item['image_id']);
    $image = new Picture($file);
}
?>
<div class="md:w-6/12 lg:w-3/12 xl:w-3/12 w-full flex-[0_0_auto] xl:!px-[25px] lg:!px-[20px] md:!px-[20px] !px-[15px] max-w-full md:!mt-[40px] max-md:!mt-[40px]">
    <div class="!relative">
        <div class="shape !rounded-[.4rem] !bg-[#edf2fc] rellax xl:block lg:block md:block absolute"
             data-rellax-speed="0"
             style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index: 0; transform: translate3d(0px, 0px, 0px);"></div>
        <div class="card">
            <figure class="card-img-top">
                <?php if (isset($image)) : ?>
                    <img class="max-w-full h-auto" src="<?php echo $image->getSrc(600, 600, true) ?>" alt="image">
                <?php endif; ?>
            </figure>
            <div class="card-body px-6 py-5">
                <h4 class="!mb-1"><?php echo $item['name']; ?></h4>
                <p class="!mb-0 text-[.85rem]"><?php echo $item['jobTitle']; ?></p>
            </div>
        </div>
    </div>
</div>
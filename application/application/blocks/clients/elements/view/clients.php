<?php
defined('C5_EXECUTE') or die('Access Denied.');
use Concrete\Core\File\File;
use Application\Service\Picture;
assert(isset($item, $index));
if(isset($item['image_id']) && $item['image_id']) {
    $file = File::getByID($item['image_id']);
    $image = new Picture($file);
}
?>

<div class="xl:w-3/12 lg:w-3/12 md:w-3/12 w-6/12 flex-[0_0_auto] xl:!px-[35px] lg:!px-[20px] md:!px-[20px] !px-[15px] max-w-full !mt-[70px]"
     data-cue="fadeIn" data-group="clients" data-show="true" style="animation-name: fadeIn; animation-duration: 700ms; animation-timing-function:
     ease; animation-delay: 300ms; animation-direction: normal; animation-fill-mode: both;">
    <?php if(isset($image)) : ?>
    <figure class="px-3 xl:!px-0 lg:!px-0 md:!px-0 xxl:!px-2">
        <img src="<?php echo $image->getSrc(140,100, true) ?>" alt="image">
    </figure>
    <?php endif; ?>
</div>
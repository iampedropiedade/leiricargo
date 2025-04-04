<?php
defined('C5_EXECUTE') or die('Access Denied.');
use Concrete\Core\File\File;
use Concrete\Core\Page\Page;
use Application\Service\Picture;
assert(isset($item, $index));
if(isset($item['image_id']) && $item['image_id']) {
    $file = File::getByID($item['image_id']);
    $image = new Picture($file);
}
?>
<div class="w-full flex-[0_0_auto] !px-[15px] max-w-full !mt-[30px]">
    <div class="card">
        <div class="card-body flex-[1_1_auto] p-1">
            <div class="flex flex-col items-center">
                <div>
                    <h2 class="!mb-1 text-[3rem]"><?php echo $item['stat']; ?></h2>
                    <h5 class="!mb-2"><?php echo $item['title']; ?></h5>
                    <p><?php echo $item['subtitle']; ?></p>
                    <img class="max-w-full h-auto" src="<?php echo $image->getSrc(400, 400) ?>" alt="<?php echo $item['title']; ?>">
                </div>
            </div>
        </div>
    </div>
</div>
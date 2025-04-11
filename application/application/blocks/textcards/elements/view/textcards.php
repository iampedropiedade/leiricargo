<?php
defined('C5_EXECUTE') or die('Access Denied.');

use Concrete\Core\File\File;
use Application\Service\Picture;

assert(isset($item, $index));
?>
<article class="md:w-6/12 lg:w-4/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full mt-[30px]">
    class="card !shadow-[0_0.25rem_1.75rem_rgba(30,34,40,0.07)] lift !h-full">
    <div class="card-body p-5 flex flex-row h-full w-full">
        <div class="flex flex-col">
            <h4 class="!mb-1">
                <?php echo $item['title']; ?>
            </h4>
            <div class="mb-4 text-[#60697b] flex-grow">
                <?php echo $item['content']; ?>
            </div>
        </div>
    </div>
</article>
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

<div class="swiper-slide group" role="group" aria-label="1 / 6" style="width: 410px; margin-right: 30px;">
    <?php if (isset($image)) : ?>
    <figure class="!rounded-[.4rem] !mb-6"><img class="!rounded-[.4rem]" src="<?php echo $image->getSrc(600, 600, true) ?>" alt="image">
        <?php endif; ?>

        <a class="item-link absolute w-[2.2rem] h-[2.2rem] !leading-[2.2rem] z-[1] transition-all duration-[0.3s]
                ease-in-out opacity-0 !text-[#343f52] shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.02)] text-[1rem] flex
                items-center justify-center rounded-[100%] right-0 bottom-4 bg-[rgba(255,255,255,.7)] hover:bg-[rgba(255,255,255,.9)]
                hover:!text-[#343f52] group-hover:opacity-100 group-hover:right-[1rem]"
                href="../../assets/img/photos/pd7-full.jpg"
                data-glightbox="" data-gallery="projects-group">
            <i class="uil uil-focus-add before:content-['\eb22']">

            </i>
        </a>
    </figure>
    <div class="project-details flex justify-center flex-col">
        <div class="post-header">
            <h2 class="post-title h3"><a class="!text-[#343f52] hover:!text-[#3f78e0]" href="/single-project">
                    <?php echo $item['name']; ?>
                    </a>
            </h2>
            <div class="uppercase !tracking-[0.02rem] text-[0.7rem] font-bold !mb-[0.4rem] !text-[#9499a3]">
                <?php echo $item['class']; ?>
            </div>
        </div>
        <!-- /.post-header -->
    </div>
    <!-- /.project-details -->
</div>
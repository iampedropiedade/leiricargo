<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<section class="wrapper !bg-[#ffffff]">
    <div class="container py-[4.5rem] xl:!py-24 lg:!py-24 md:!py-24">
        <div class="flex flex-wrap mx-[-15px] mt-[-30px]">
            <?php foreach ($pages as $page): ?>
                <?php
                $title = $page->getCollectionName();
                $desc = $page->getCollectionDescription();
                $url = $page->getCollectionLink();
                ?>
                <article class="md:w-6/12 lg:w-4/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full mt-[30px]">
                    <a href="<?= h($url) ?>" class="card !shadow-[0_0.25rem_1.75rem_rgba(30,34,40,0.07)] lift !h-full">
                        <div class="card-body p-5 flex flex-row h-full w-full">
                            <div class="flex flex-col">
                                <h4 class="!mb-1"><?= h($title) ?></h4>
                                <div class="mb-4 text-[#60697b] flex-grow"><?= h($desc) ?></div>
                            </div>
                        </div>
                    </a>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

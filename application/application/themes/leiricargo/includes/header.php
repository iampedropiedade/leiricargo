<?php
defined('C5_EXECUTE') or die("Access Denied.");
use Application\Navigation\Navigation;

assert(isset($c));
$navigation = new Navigation();
$navigationPages = $navigation->getNavigation();
?>
<header class="relative wrapper">
    <nav class="navbar navbar-expand-lg classic navbar-dark !bg-black">
        <div class="container xl:!flex-row lg:!flex-row !flex-nowrap items-center">
            <div class="navbar-brand w-full">
                <a href="/">
                    <img class="logo-dark" src="<?php echo $this->getThemePath() ?>/app/img/brands/logo.png"
                         srcset="<?php echo $this->getThemePath() ?>/app/img/brands/logo.png 2x" alt="image">
                    <img class="logo-light" src="<?php echo $this->getThemePath() ?>/app/img/brands/logo.png"
                         srcset="<?php echo $this->getThemePath() ?>/app/img/brands/logo.png 2x" alt="image">
                </a>
            </div>
            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                <div class="offcanvas-header xl:!hidden lg:!hidden flex items-center justify-between flex-row p-6">
                    <h3 class="!text-white xl:!text-[1.5rem] !text-[calc(1.275rem_+_0.3vw)] !mb-0">Leiricargo</h3>
                    <button type="button"
                            class="btn-close btn-close-white !mr-[-0.75rem] m-0 p-0 leading-none !text-[#343f52]
                            transition-all duration-[0.2s] ease-in-out border-0 motion-reduce:transition-none
                            before:text-[1.05rem] before:text-white before:content-['\ed3b'] before:w-[1.8rem]
                            before:h-[1.8rem] before:leading-[1.8rem] before:shadow-none before:transition-[background]
                            before:duration-[0.2s] before:ease-in-out before:!flex before:justify-center before:items-center
                            before:m-0 before:p-0 before:rounded-[100%] hover:no-underline bg-inherit before:bg-[rgba(255,255,255,.08)]
                            before:font-Unicons hover:before:bg-[rgba(0,0,0,.11)]  "
                            data-bs-dismiss="offcanvas" aria-label="Close">
                    </button>
                </div>
                <div class="offcanvas-body xl:!ml-auto lg:!ml-auto flex  flex-col !h-full">
                    <ul class="navbar-nav">
                        <?php foreach ($navigationPages as $page) : ?>
                            <?php
                            $children = $navigation->getNavigation($page);
                            $hasChildren = count($children) > 0;
                            ?>
                            <li class="nav-item <?php if($hasChildren) : ?>dropdown<?php endif; ?>">
                                <a class="nav-link !flex items-center font-bold <?php if($hasChildren) : ?>dropdown-toggle<?php endif; ?>"
                                   href="<?php echo $page->getCollectionPath(); ?>"
                                    <?php if($hasChildren) : ?>
                                        data-bs-toggle="dropdown"
                                    <?php endif; ?>
                                >
                                    <div class="grow">
                                        <?php echo $page->getCollectionName(); ?>
                                    </div>
                                    <?php if($hasChildren) : ?>
                                        <i class="fa-solid fa-chevron-down text-[0.5rem] ml-1"></i>
                                    <?php endif; ?>
                                </a>
                                <?php if($hasChildren) : ?>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item mb-1 b">
                                            <a class="dropdown-item hover:!text-[#54a8c7] !font-bold" href="<?php echo $page->getCollectionPath(); ?>">Explorar: <?php echo $page->getCollectionName(); ?></a>
                                        </li>
                                        <?php foreach ($children as $child) : ?>
                                            <li class="nav-item">
                                                <a class="dropdown-item hover:!text-[#54a8c7] !font-medium" href="<?php echo $child->getCollectionPath(); ?>"><?php echo $child->getCollectionName(); ?></a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
<main class="pt-24">
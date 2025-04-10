<?php
defined('C5_EXECUTE') or die('Access Denied.');
use Concrete\Core\Block\View\BlockView;

if(!is_array($this->controller->get('items')) || $this->controller->get('items') === 0) {
    return;
}
?>
<section id="snippet-3" class="wrapper !bg-[#ffffff]  border-b-[rgba(164,174,198,0.2)] border-b border-solid">
    <div class="container pt-20 xl:pt-28 lg:pt-28 md:pt-28 pb-16 xl:pb-20 lg:pb-20 md:pb-20">
        <?php if($this->controller->get('title')) : ?>
        <h2 class="!text-[calc(1.305rem_+_0.66vw)] font-bold xl:!text-[1.8rem] !leading-[1.3] !mb-3 !text-center">
            <?php echo $this->controller->get('title'); ?>
        </h2>
        <?php endif; ?>
        <?php if($this->controller->get('subTitle')) : ?>
        <p class="lead text-[0.9rem] font-medium !leading-[1.65] !text-center !mb-10 md:!px-24 xl:!px-0 lg:!px-0">
            <?php echo $this->controller->get('subTitle'); ?>
        </p>
        <?php endif; ?>
        <div class="flex flex-wrap mx-[-15px]">
            <?php foreach($this->controller->get('items') as $key=>$item) : ?>
                <?php $this->inc('elements/view/' . $item['type'] . '.php', ['item' => $item, 'index'=>$key]); ?>
            <?php endforeach; ?>
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
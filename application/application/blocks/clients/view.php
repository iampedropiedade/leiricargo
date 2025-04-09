<?php
defined('C5_EXECUTE') or die('Access Denied.');
use Concrete\Core\Block\View\BlockView;

if(!is_array($this->controller->get('items')) || $this->controller->get('items') === 0) {
    return;
}
?>
<section class="wrapper  bg-[rgba(246,247,249,1)] ">
    <div class="container py-[4.5rem] xl:!py-24 lg:!py-24 md:!py-24">
        <div class="flex flex-wrap mx-[-15px] xl:mx-[-35px] lg:mx-[-20px] !mt-[-50px] xl:!mt-0 lg:!mt-0 !mb-10">
            <div class="xl:w-4/12 lg:w-4/12 w-full flex-[0_0_auto] xl:!px-[35px] lg:!px-[20px] !px-[15px] max-w-full xl:!mt-2 lg:!mt-2 !mt-[50px]">
                <?php if($this->controller->get('title')) : ?>
                <h3 class="!text-[calc(1.305rem_+_0.66vw)] font-bold xl:!text-[1.8rem] !leading-[1.3] !mb-3 xxl:!pr-5">
                    <?php echo $this->controller->get('title'); ?>
                </h3>
                <?php endif; ?>
                <?php if($this->controller->get('subTitle')) : ?>
                <p class="lead text-[1.05rem] !leading-[1.6]  !mb-0 xxl:!pr-5">
                    <?php echo $this->controller->get('subTitle'); ?>
                </p>
                <?php endif; ?>
            </div>
            <!-- /column -->
            <div class="xl:w-8/12 lg:w-8/12 w-full flex-[0_0_auto] xl:!px-[35px] lg:!px-[20px] !px-[15px] max-w-full xl:!mt-0 lg:!mt-0 !mt-[50px]">
                <div class="flex flex-wrap mx-[-15px] md:mx-[-20px] xl:mx-[-35px] !mt-[-70px]" data-cues="fadeIn" data-group="clients" data-disabled="true">
                    <?php foreach($this->controller->get('items') as $key=>$item) : ?>
                        <?php $this->inc('elements/view/' . $item['type'] . '.php', ['item' => $item, 'index'=>$key]); ?>
                    <?php endforeach; ?>
                </div>
                <!--/.row -->
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
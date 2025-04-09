<?php
defined('C5_EXECUTE') or die('Access Denied.');
?>
<?php if($this->controller->get('title')) : ?>
    <h2 class="xl:text-[2rem] text-[calc(1.325rem_+_0.9vw)] font-bold !leading-[1.25] tracking-[-0.03em] mb-7">
        <?php echo $this->controller->get('title'); ?>
    </h2>
<?php endif; ?>
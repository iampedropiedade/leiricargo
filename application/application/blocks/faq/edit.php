<?php
defined('C5_EXECUTE') or die('Access Denied.');
assert(isset($form, $controller, $view));
?>
<?php echo $this->controller->getEditAssets($view); ?>
<fieldset>
    <div class="form-group">
        <?php echo $form->label('cardTitle1', t('Left card title')); ?>
        <?php echo $form->text('cardTitle1', $controller->get('cardTitle1')); ?>
    </div>
    <div class="form-group">
        <?php echo $form->label('cardTitle2', t('Right card title')); ?>
        <?php echo $form->text('cardTitle2', $controller->get('cardTitle2')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->label('content1', t('Left card content')); ?>
        <?php echo $form->text('content1', $controller->get('content1')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->label('content2', t('Right card content')); ?>
        <?php echo $form->text('content2', $controller->get('content2')); ?>
    </div>

</fieldset>
<fieldset>
    <div class="form-group">
        <h4><?php echo t('Items'); ?></h4>
    </div>
    <div class="form-group" data-behaviour="item-list-block">
        <div class="card-item-list-block">
            <div data-target="list-container">
                <?php if ($controller->get('items')) : ?>
                    <?php foreach($controller->get('items') as $key => $value) : ?>
                        <?php echo $controller->action_load_list_item($value, false); ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
        <div>
            <?php echo $this->controller->getEditButtons(); ?>
        </div>
    </div>
</fieldset>
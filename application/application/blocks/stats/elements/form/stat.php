<?php
use Concrete\Core\Application\Service\FileManager;
use Concrete\Core\Form\Service\Widget\PageSelector;
assert(isset($data, $code, $controller, $type, $form));
$al = new FileManager();
$ps = new PageSelector();
?>
<div class="list_item sortable_item">
    <?php echo $controller->getItemTitle('Estatística', $code, $type); ?>
    <div class="list_item-main">
        <fieldset>
            <div class="form-group">
                <?php echo $form->label('items[' . $code . '][stat]', t('Estatística')); ?>
                <?php echo $form->text('items[' . $code . '][stat]', $data['stat'] ?? '', ['required'=>'required']); ?>
            </div>
            <div class="form-group">
                <?php echo $form->label('items[' . $code . '][title]', t('Título')); ?>
                <?php echo $form->text('items[' . $code . '][title]', $data['title'] ?? ''); ?>
            </div>
            <div class="form-group">
                <?php echo $form->label('items[' . $code . '][subtitle]', t('Subtítulo')); ?>
                <?php echo $form->text('items[' . $code . '][subtitle]', $data['subtitle'] ?? ''); ?>
            </div>
            <div class="form-group">
                <?php echo \Core::make('editor')->outputStandardEditor('items[' . $code . '][content]', $data['content'] ?? '', ['required'=>'required']); ?>
            </div>
            <div class="form-group">
                <?php echo $form->label('items_' . $code . 'icon', t('Ícone')); ?>
                <?php echo $al->image('items_' . $code . '_image_id', 'items[' . $code . '][image_id]', 'Select an image', $image ?? null); ?>
            </div>
        </fieldset>
    </div>
</div>
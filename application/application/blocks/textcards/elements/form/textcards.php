<?php

use Concrete\Core\Application\Service\FileManager;

assert(isset($data, $code, $controller, $type, $form));

$al = new FileManager();
?>
<div class="list_item sortable_item">
    <?php echo $controller->getItemTitle('Textcards', $code, $type); ?>
    <div class="list_item-main">
        <fieldset>
            <div class="form-group">
                <?php echo $form->label('items[' . $code . '][title]', t('Nome')); ?>
                <?php echo $form->text('items[' . $code . '][title]', $data['title'] ?? '', ['required' => 'required']); ?>
            </div>
            <div class="form-group">
                <?php echo $form->label('items[' . $code . '][content]', t('Título do trabalho')); ?>
                <?php echo $form->text('items[' . $code . '][content]', $data['content'] ?? ''); ?>
            </div>
        </fieldset>
    </div>
</div>
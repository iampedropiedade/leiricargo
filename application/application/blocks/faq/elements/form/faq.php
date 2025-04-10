<?php
use Concrete\Core\Application\Service\FileManager;
use Concrete\Core\File\File;
assert(isset($data, $code, $controller, $type, $form));

$al = new FileManager();


?>
<div class="list_item sortable_item">
    <?php echo $controller->getItemTitle('Process', $code, $type); ?>
    <div class="list_item-main">
        <fieldset>
            <div class="form-group">
                <?php echo $form->label('items[' . $code . '][cardTitle1]', t('Titulo do cartão da esquerda')); ?>
                <?php echo $form->text('items[' . $code . '][cardTitle1]', $data['cardTitle1'] ?? '', ['required'=>'required']); ?>
            </div>

            <div class="form-group">
                <?php echo $form->label('items[' . $code . '][cardTitle2]', t('Titulo do cartão da direita')); ?>
                <?php echo $form->text('items[' . $code . '][cardTitle2]', $data['cardTitle2'] ?? '', ['required'=>'required']); ?>
            </div>

            <div class="form-group">
                <?php echo $form->label('items[' . $code . '][content1]', t('Descrição do cartão da esquerda')); ?>
                <?php echo $form->text('items[' . $code . '][content1]', $data['content1'] ?? ''); ?>
            </div>

            <div class="form-group">
                <?php echo $form->label('items[' . $code . '][content2]', t('Descrição do cartão da direita')); ?>
                <?php echo $form->text('items[' . $code . '][content2]', $data['content2'] ?? ''); ?>
            </div>
        </fieldset>
    </div>
</div>
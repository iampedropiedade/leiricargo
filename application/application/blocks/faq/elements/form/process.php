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
                <?php echo $form->label('items[' . $code . '][number]', t('Numero')); ?>
                <?php echo $form->text('items[' . $code . '][number]', $data['number'] ?? '', ['required'=>'required']); ?>
            </div>
            <div class="form-group">
                <?php echo $form->label('items[' . $code . '][circleTitle]', t('Título do Passo')); ?>
                <?php echo $form->text('items[' . $code . '][circleTitle]', $data['circleTitle'] ?? ''); ?>
            </div>

            <div class="form-group">
                <?php echo $form->label('items[' . $code . '][circleContent]', t('Descrição do Passo')); ?>
                <?php echo $form->text('items[' . $code . '][circleContent]', $data['circleContent'] ?? ''); ?>
            </div>
        </fieldset>
    </div>
</div>
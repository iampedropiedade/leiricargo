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
                <?php echo $form->label('items[' . $code . '][question]', t('Question')); ?>
                <?php echo $form->text('items[' . $code . '][question]', $data['question'] ?? '', ['required'=>'required']); ?>
            </div>


            <div class="form-group">
                <?php echo $form->label('items[' . $code . '][answer]', t('Answer')); ?>
                <?php echo $form->text('items[' . $code . '][answer]', $data['answer'] ?? ''); ?>
            </div>

        </fieldset>
    </div>
</div>
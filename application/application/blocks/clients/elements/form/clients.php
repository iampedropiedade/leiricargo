<?php
use Concrete\Core\Application\Service\FileManager;
use Concrete\Core\File\File;
assert(isset($data, $code, $controller, $type, $form));

if($data && isset($data['image_id'])) {
    $image = File::getByID($data['image_id']);
}

$al = new FileManager();
?>
<div class="list_item sortable_item">
    <?php echo $controller->getItemTitle('Clients', $code, $type); ?>
    <div class="list_item-main">
        <fieldset>
            <div class="form-group">
                <?php echo $form->label('items_' . $code . '_image_id', t('Imagem')); ?>
                <?php echo $al->image('items_' . $code . '_image_id', 'items[' . $code . '][image_id]', 'Select an image', $image ?? null); ?>
            </div>
        </fieldset>
    </div>
</div>
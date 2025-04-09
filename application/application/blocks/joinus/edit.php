<?php
defined('C5_EXECUTE') or die('Access Denied.');
use Concrete\Core\Form\Service\Widget\PageSelector;
use Concrete\Core\Application\Service\FileManager;
assert(isset($form, $controller));

$ps = new PageSelector();
$al = new FileManager();
?>
<fieldset>

    <div class="form-group">
        <?php echo $form->label('title', t('Title')); ?>
        <?php echo $form->text('title', $controller->get('title')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->label('subTitle', t('Section Subtitle')); ?>
        <?php echo $form->text('subTitle', $controller->get('subTitle')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->label('buttonText', t('Button Text')); ?>
        <?php echo $form->text('buttonText', $controller->get('buttonText')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->label('buttonPageId', t('Button Page')); ?>
        <?php echo $ps->selectPage('buttonPageId', $controller->get('buttonPageId')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->label('backgroundImageId', t('Background Image')); ?>
        <?php echo $al->image('backgroundImageId', 'backgroundImageId', 'Select an image', $controller->get('backgroundImageId')); ?>
    </div>
</fieldset>
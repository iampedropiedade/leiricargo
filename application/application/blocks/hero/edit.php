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
        <?php echo $form->label('buttonText1', t('First Button Text')); ?>
        <?php echo $form->text('buttonText1', $controller->get('buttonText1')); ?>
    </div> 

    <div class="form-group">
        <?php echo $form->label('buttonText2', t('Second Button Text')); ?>
        <?php echo $form->text('buttonText2', $controller->get('buttonText2')); ?>
    </div> 

    <div class="form-group">
        <?php echo $form->label('buttonPageId1', t('First Button Page')); ?>
        <?php echo $ps->selectPage('buttonPageId1', $controller->get('buttonPageId1')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->label('buttonPageId2', t('Second Button Page')); ?>
        <?php echo $ps->selectPage('buttonPageId2', $controller->get('buttonPageId2')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->label('buttonLink1', t('First Button Link')); ?>
        <?php echo $form->text('buttonLink1', $controller->get('buttonLink1')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->label('buttonLink2', t('Second Button Link')); ?>
        <?php echo $form->text('buttonLink2', $controller->get('buttonLink2')); ?>
    </div>
    <div class="form-group">
        <?php echo $form->label('backgroundImageId', t('Background Image')); ?>
        <?php echo $al->image('backgroundImageId', 'backgroundImageId', 'Select an image', $controller->get('backgroundImageId')); ?>
    </div>
    <div class="form-group">
        <?php echo $form->label('content', t('Content')); ?>
        <?php echo \Core::make('editor')->outputStandardEditor('content', $controller->getContentEditMode('content')); ?>
    </div>
</fieldset>
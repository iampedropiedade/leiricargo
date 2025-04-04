<?php
defined('C5_EXECUTE') or die('Access Denied.');
use Concrete\Core\Area\Area;
use Concrete\Core\Page\Page;
/** @var Page $c */

$this->inc('includes/doc_header.php');
$this->inc('includes/header.php');
$this->inc('includes/title.php');
?>
<div class="mt-12">
    <?php
$a = new Area('Main');
$a->display($c);
?>
</div>
<?php
$this->inc('includes/footer.php');
$this->inc('includes/doc_footer.php');
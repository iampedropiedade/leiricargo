<?php
namespace Application\Block\PageSubpagesList;

use Concrete\Core\Block\BlockController;
use Concrete\Core\Page\Page;
use Concrete\Core\Page\PageList;

class Controller extends BlockController
{
    public function getBlockTypeName()
    {
        return t('Subpages List');
    }

    public function getBlockTypeDescription()
    {
        return t('Displays a list of subpages of the current page.');
    }

    public function view()
    {
        $currentPage = Page::getCurrentPage();
        $pl = new PageList();
        $pl->filterByParentID($currentPage->getCollectionID());
        $pl->sortByDisplayOrder();
        $pages = $pl->getResults();
        $this->set('pages', $pages);
    }
}

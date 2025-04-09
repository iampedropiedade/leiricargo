<?php
namespace Application\Block\Joinus;

use Concrete\Core\Block\BlockController;
use Concrete\Core\Editor\LinkAbstractor;
use Concrete\Core\Page\Page;

class Controller extends BlockController
{
    protected $btTable = 'btjoinus';
    protected $btInterfaceWidth = '900';
    protected $btInterfaceHeight = '600';

    public function getBlockTypeDescription()
    {
        return t('Join Us');
    }

    public function getContentEditMode(string $key): string
    {
        return LinkAbstractor::translateFromEditMode($this->get($key));
    }

    public function getBlockTypeName()
    {
        return t('Join Us');
    }

    public function add()
    {
        $this->edit();
    }

    public function edit()
    {
    }

    public function save($args)
    {
        $args['backgroundImageId']  = $args['backgroundImageId'] ?: 0;
        parent::save($args);
    }

    public function view()
    {
    }
}

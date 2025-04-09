<?php
namespace Application\Block\Hero;

use Concrete\Core\Block\BlockController;
use Concrete\Core\Editor\LinkAbstractor;
use Concrete\Core\Page\Page;
class Controller extends BlockController
{
    protected $btTable = 'btHero';
    protected $btInterfaceWidth = '900';
    protected $btInterfaceHeight = '600';

    public function getBlockTypeDescription()
    {
        return t('Hero');
    }

    public function getContentEditMode(string $key): string
    {
        return LinkAbstractor::translateFromEditMode($this->get($key));
    }

    public function getBlockTypeName()
    {
        return t('Hero');
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
        if (isset($args['content'])) {
            $args['content'] = LinkAbstractor::translateTo($args['content']);
        }
        parent::save($args);
    }

    public function view()
    {
        $this->set('content', LinkAbstractor::translateFrom($this->get('content')));
        if ($this->get('buttonPageId1')) {
            $page = Page::getByID($this->get('buttonPageId1'));
            if ($page && $page->isValid()) {
                // Definir a URL do botão
                $this->set('buttonLinkUrl1', $page->getCollectionLink());
            }
        }

        if ($this->get('buttonPageId2')) {
            $page = Page::getByID($this->get('buttonPageId2'));
            if ($page && $page->isValid()) {
                // Definir a URL do botão
                $this->set('buttonLinkUrl2', $page->getCollectionLink());
            }
        }
    }
}

<?php
namespace Application\Block\calltoaction;

use Concrete\Core\Block\BlockController;
use Concrete\Core\Editor\LinkAbstractor;
use Concrete\Core\Page\Page;

class Controller extends BlockController
{
    protected $btTable = 'btcalltoaction';
    protected $btInterfaceWidth = '900';
    protected $btInterfaceHeight = '600';

    public function getBlockTypeDescription()
    {
        return t('Call to Action block with title, subtitle, content, and a background image.');
    }

    public function getContentEditMode(string $key): string
    {
        return LinkAbstractor::translateFromEditMode($this->get($key));
    }

    public function getBlockTypeName()
    {
        return t('Call To Action');
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

        if ($this->get('buttonPageId')) {
            $page = Page::getByID($this->get('buttonPageId'));
            if ($page && $page->isValid()) {
                // Definir a URL do botão
                $this->set('buttonLinkUrl', $page->getCollectionLink());
            }
        }
    }
}

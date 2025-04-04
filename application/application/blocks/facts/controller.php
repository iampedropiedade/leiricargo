<?php
namespace Application\Block\Facts;

use Concrete\Core\Block\BlockController;
use Concrete\Core\Editor\LinkAbstractor;
class Controller extends BlockController
{
    protected $btTable = 'btFacts';
    protected $btInterfaceWidth = '900';
    protected $btInterfaceHeight = '600';

    public function getBlockTypeDescription()
    {
        return t('Facts');
    }

    public function getContentEditMode(string $key): string
    {
        return LinkAbstractor::translateFromEditMode($this->get($key));
    }

    public function getBlockTypeName()
    {
        return t('Facts');
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
    }
}

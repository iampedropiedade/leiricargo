<?php
namespace Application\Block\Exemplo;

use Concrete\Core\Block\BlockController;

class Controller extends BlockController
{
    protected $btTable = 'btExemplo';
    protected $btInterfaceWidth = '900';
    protected $btInterfaceHeight = '600';

    /**
     * @return string
     */
    public function getBlockTypeDescription()
    {
        return t('Bloco Exemplo');
    }

    /**
     * @return string
     */
    public function getBlockTypeName()
    {
        return t('Exemplo');
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

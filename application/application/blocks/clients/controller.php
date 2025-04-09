<?php
namespace Application\Block\Clients;

use Application\Blocks\Controller as BlockController;

class Controller extends BlockController
{
    public const string ITEM_TYPE_CARD = 'clients';

    protected $btCacheBlockOutput = false;
    protected $btTable = 'btClients';
    protected $btInterfaceWidth = '1280';
    protected $btInterfaceHeight = '1000';
    protected $btDefaultSet = 'application';
    protected $allowedSubItemTypes = [
        self::ITEM_TYPE_CARD,
    ];
    protected $searchableFields = ['title', 'subTitle'];
    protected $searchableSubFields = ['title', 'subtitle', 'stat'];

    /**
     * @return string
     */
    public function getBlockTypeDescription()
    {
        return t('Clients');
    }

    /**
     * @return string
     */
    public function getBlockTypeName()
    {
        return t('Clients');
    }

    public function on_start()
    {
        parent::on_start();
    }

    public function add()
    {
        $this->edit();
    }

    public function edit()
    {
        parent::edit();
    }

    public function view()
    {
        parent::view();
    }
}
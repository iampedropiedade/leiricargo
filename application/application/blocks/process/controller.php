<?php
namespace Application\Block\Process;

use Application\Blocks\Controller as BlockController;

class Controller extends BlockController
{
    public const string ITEM_TYPE_CARD = 'process';

    protected $btCacheBlockOutput = false;
    protected $btTable = 'btProcess';
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
        return t('Process');
    }

    /**
     * @return string
     */
    public function getBlockTypeName()
    {
        return t('Process');
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
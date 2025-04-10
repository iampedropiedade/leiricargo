<?php
namespace Application\Block\Faq;

use Application\Blocks\Controller as BlockController;

class Controller extends BlockController
{
    public const string ITEM_TYPE_CARD = 'faq';

    protected $btCacheBlockOutput = false;
    protected $btTable = 'btFaq';
    protected $btInterfaceWidth = '1280';
    protected $btInterfaceHeight = '1000';
    protected $btDefaultSet = 'application';
    protected $allowedSubItemTypes = [
        self::ITEM_TYPE_CARD,
    ];
//    apenas variaveis da view.php root
    protected $searchableFields = ['title', 'subTitle'];
    protected $searchableSubFields = ['title', 'subtitle', 'stat'];

    /**
     * @return string
     */
    public function getBlockTypeDescription()
    {
        return t('Faq');
    }

    /**
     * @return string
     */
    public function getBlockTypeName()
    {
        return t('Faq');
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
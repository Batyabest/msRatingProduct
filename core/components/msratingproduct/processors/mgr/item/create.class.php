<?php

class msRatingProductItemCreateProcessor extends modObjectCreateProcessor
{
    public $objectType = 'msRatingProductItem';
    public $classKey = 'msRatingProductItem';
    public $languageTopics = array('msratingproduct');
    //public $permission = 'create';


    /**
     * @return bool
     */
    public function beforeSet()
    {
        $name = trim($this->getProperty('name'));
        if (empty($name)) {
            $this->modx->error->addField('name', $this->modx->lexicon('msratingproduct_item_err_name'));
        } elseif ($this->modx->getCount($this->classKey, array('name' => $name))) {
            $this->modx->error->addField('name', $this->modx->lexicon('msratingproduct_item_err_ae'));
        }

        return parent::beforeSet();
    }

}

return 'msRatingProductItemCreateProcessor';
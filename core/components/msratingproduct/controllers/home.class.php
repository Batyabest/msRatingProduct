<?php

/**
 * The home manager controller for msRatingProduct.
 *
 */
class msRatingProductHomeManagerController extends modExtraManagerController
{
    /** @var msRatingProduct $msRatingProduct */
    public $msRatingProduct;


    /**
     *
     */
    public function initialize()
    {
        $path = $this->modx->getOption('msratingproduct_core_path', null,
                $this->modx->getOption('core_path') . 'components/msratingproduct/') . 'model/msratingproduct/';
        $this->msRatingProduct = $this->modx->getService('msratingproduct', 'msRatingProduct', $path);
        parent::initialize();
    }


    /**
     * @return array
     */
    public function getLanguageTopics()
    {
        return array('msratingproduct:default');
    }


    /**
     * @return bool
     */
    public function checkPermissions()
    {
        return true;
    }


    /**
     * @return null|string
     */
    public function getPageTitle()
    {
        return $this->modx->lexicon('msratingproduct');
    }


    /**
     * @return void
     */
    public function loadCustomCssJs()
    {
        $this->addCss($this->msRatingProduct->config['cssUrl'] . 'mgr/main.css');
        $this->addCss($this->msRatingProduct->config['cssUrl'] . 'mgr/bootstrap.buttons.css');
        $this->addJavascript($this->msRatingProduct->config['jsUrl'] . 'mgr/msratingproduct.js');
        $this->addJavascript($this->msRatingProduct->config['jsUrl'] . 'mgr/misc/utils.js');
        $this->addJavascript($this->msRatingProduct->config['jsUrl'] . 'mgr/misc/combo.js');
        $this->addJavascript($this->msRatingProduct->config['jsUrl'] . 'mgr/widgets/items.grid.js');
        $this->addJavascript($this->msRatingProduct->config['jsUrl'] . 'mgr/widgets/items.windows.js');
        $this->addJavascript($this->msRatingProduct->config['jsUrl'] . 'mgr/widgets/home.panel.js');
        $this->addJavascript($this->msRatingProduct->config['jsUrl'] . 'mgr/sections/home.js');

        $this->addHtml('<script type="text/javascript">
        msRatingProduct.config = ' . json_encode($this->msRatingProduct->config) . ';
        msRatingProduct.config.connector_url = "' . $this->msRatingProduct->config['connectorUrl'] . '";
        Ext.onReady(function() {
            MODx.load({ xtype: "msratingproduct-page-home"});
        });
        </script>
        ');
    }


    /**
     * @return string
     */
    public function getTemplateFile()
    {
        return $this->msRatingProduct->config['templatesPath'] . 'home.tpl';
    }
}
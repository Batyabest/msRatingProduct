<?php
if (file_exists(dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php')) {
    /** @noinspection PhpIncludeInspection */
    require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
}
else {
    require_once dirname(dirname(dirname(dirname(dirname(__FILE__))))) . '/config.core.php';
}
/** @noinspection PhpIncludeInspection */
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CONNECTORS_PATH . 'index.php';
/** @var msRatingProduct $msRatingProduct */
$msRatingProduct = $modx->getService('msratingproduct', 'msRatingProduct', $modx->getOption('msratingproduct_core_path', null,
        $modx->getOption('core_path') . 'components/msratingproduct/') . 'model/msratingproduct/'
);
$modx->lexicon->load('msratingproduct:default');

// handle request
$corePath = $modx->getOption('msratingproduct_core_path', null, $modx->getOption('core_path') . 'components/msratingproduct/');
$path = $modx->getOption('processorsPath', $msRatingProduct->config, $corePath . 'processors/');
$modx->getRequest();

/** @var modConnectorRequest $request */
$request = $modx->request;
$request->handleRequest(array(
    'processors_path' => $path,
    'location' => '',
));
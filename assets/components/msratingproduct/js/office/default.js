Ext.onReady(function () {
    msRatingProduct.config.connector_url = OfficeConfig.actionUrl;

    var grid = new msRatingProduct.panel.Home();
    grid.render('office-msratingproduct-wrapper');

    var preloader = document.getElementById('office-preloader');
    if (preloader) {
        preloader.parentNode.removeChild(preloader);
    }
});
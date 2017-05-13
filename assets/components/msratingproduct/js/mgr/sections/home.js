msRatingProduct.page.Home = function (config) {
    config = config || {};
    Ext.applyIf(config, {
        components: [{
            xtype: 'msratingproduct-panel-home',
            renderTo: 'msratingproduct-panel-home-div'
        }]
    });
    msRatingProduct.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(msRatingProduct.page.Home, MODx.Component);
Ext.reg('msratingproduct-page-home', msRatingProduct.page.Home);
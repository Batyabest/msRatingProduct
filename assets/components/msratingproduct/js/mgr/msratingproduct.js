var msRatingProduct = function (config) {
    config = config || {};
    msRatingProduct.superclass.constructor.call(this, config);
};
Ext.extend(msRatingProduct, Ext.Component, {
    page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, view: {}, utils: {}
});
Ext.reg('msratingproduct', msRatingProduct);

msRatingProduct = new msRatingProduct();
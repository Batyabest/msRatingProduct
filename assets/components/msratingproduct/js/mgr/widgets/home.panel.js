msRatingProduct.panel.Home = function (config) {
    config = config || {};
    Ext.apply(config, {
        baseCls: 'modx-formpanel',
        layout: 'anchor',
        /*
         stateful: true,
         stateId: 'msratingproduct-panel-home',
         stateEvents: ['tabchange'],
         getState:function() {return {activeTab:this.items.indexOf(this.getActiveTab())};},
         */
        hideMode: 'offsets',
        items: [{
            html: '<h2>' + _('msratingproduct') + '</h2>',
            cls: '',
            style: {margin: '15px 0'}
        }, {
            xtype: 'modx-tabs',
            defaults: {border: false, autoHeight: true},
            border: true,
            hideMode: 'offsets',
            items: [{
                title: _('msratingproduct_items'),
                layout: 'anchor',
                items: [{
                    html: _('msratingproduct_intro_msg'),
                    cls: 'panel-desc',
                }, {
                    xtype: 'msratingproduct-grid-items',
                    cls: 'main-wrapper',
                }]
            }]
        }]
    });
    msRatingProduct.panel.Home.superclass.constructor.call(this, config);
};
Ext.extend(msRatingProduct.panel.Home, MODx.Panel);
Ext.reg('msratingproduct-panel-home', msRatingProduct.panel.Home);

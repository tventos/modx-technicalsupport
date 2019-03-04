var Technicalsupport = function (config) {
    config = config || {};
    Technicalsupport.superclass.constructor.call(this, config);
};
Ext.extend(Technicalsupport, MODx.Component, {
    panel: {}, page: {}, window: {}, grid: {}, tree: {}, combo: {}, config: {}, view: {}, utils: {}
});
Ext.reg('technicalsupport', Technicalsupport);

Technicalsupport = new Technicalsupport();
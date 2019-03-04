Technicalsupport.panel.Home = function (config) {
    config = config || {};
    Ext.apply(config, {
       
        items: [{
            html: '<h2 class="technicalsupport-h2">'+_('technicalsupport')+'</h2>'
        }, {
            xtype: 'modx-tabs', 
            items: [{ 
                title: _('technicalsupport_history'), 
                items: [{ 
                    html: _('technicalsupport_history_desc'), 
                    cls: 'panel-desc',
                },{
                    xtype: 'panel',
                    cls: 'container',
                    items: [{
                        xtype: 'button',
                        text: '<i class="icon icon-plus"></i> '+ _('technicalsupport_history_add'),
                        cls: 'primary-button',
                        handler: function() {
                            var w = MODx.load({
                                xtype: 'technicalsupport-window-history',
                                id: Ext.id(),
                                listeners: {
                                    success: { 
                                        fn: function () {
                                            Ext.getCmp('technicalsupport-history-grid').refresh();
                                            Ext.MessageBox.alert(_('technicalsupport_history_window_success'),_('technicalsupport_history_window_success_text'));
                                        }
                                    }
                                }
                            });
                            w.reset();
                            w.show();
                        }
                    }]
                }, {
                    xtype: 'technicalsupport-grid-history',
                    cls: 'container',
                    id: 'technicalsupport-history-grid'
                }
            ]
            }]
        }]
    });
    
    Technicalsupport.panel.Home.superclass.constructor.call(this, config); 
};
Ext.extend(Technicalsupport.panel.Home, MODx.Panel);
Ext.reg('technicalsupport-panel-home', Technicalsupport.panel.Home);
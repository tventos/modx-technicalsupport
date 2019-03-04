Technicalsupport.window.History = function (config) {
    config = config || {};
    Ext.applyIf(config, {
        title: _('technicalsupport_history_add'),
        boxMinWidth:500,
        fields: [{
            xtype: 'textfield',
            width:'97%',
            name: 'subject',
            id: config.id + '-subject',
            allowBlank: false,
            fieldLabel: _('technicalsupport_history_subject')
        },{
            xtype: 'textarea',
            name: 'message',
            id: config.id + '-message',
            width:'97%',
            height:200,
            allowBlank: false,
            fieldLabel: _('technicalsupport_history_message')
        }],
        url: Technicalsupport.config.connector_url,
        action: 'mgr/technicalsupport/create',
        id: 'technicalsupport-history-window',
        saveBtnText:_('technicalsupport_history_add_button')
    });
    
    Technicalsupport.window.History.superclass.constructor.call(this, config);
};
Ext.extend(Technicalsupport.window.History, MODx.Window);
Ext.reg('technicalsupport-window-history', Technicalsupport.window.History);

Technicalsupport.window.UpdateItem = function (config) {
    config = config || {};
    if (!config.id) {
        config.id = 'technicalsupport-item-window-update';
    }
    Ext.applyIf(config, {
        title: _('view'),
        width: 550,
        autoHeight: true,
        fields: this.getFields(config),
        buttons: [{
            text: _('close'),
            id: 'window-close-btn',
            handler: function(){this.hide();},
            scope: this
        }]
    });
    Technicalsupport.window.UpdateItem.superclass.constructor.call(this, config);
};
Ext.extend(Technicalsupport.window.UpdateItem, MODx.Window, {
    getFields: function (config) {
        return [{
            xtype: 'hidden',
            name: 'id',
            id: config.id + '-id',
        }, {
            xtype: 'textfield',
            fieldLabel: _('technicalsupport_history_subject'),
            name: 'subject',
            id: config.id + '-subject',
            anchor: '99%',
            allowBlank: true,
            readOnly: true,
            cls: 'technicalsupport-view-textfield'
        }, {
            xtype: 'textarea',
            fieldLabel: _('technicalsupport_history_message'),
            name: 'message',
            id: config.id + '-message',
            anchor: '99%',
            height: 200,
            readOnly: true,
            cls: 'technicalsupport-view-textfield'
        }];
    },

    loadDropZones: function () {
    }

});
Ext.reg('technicalsupport-item-window-update', Technicalsupport.window.UpdateItem);
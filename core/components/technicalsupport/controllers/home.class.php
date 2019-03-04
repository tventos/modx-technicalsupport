<?php
/**
 * Home 
 */
class TechnicalsupportHomeManagerController extends modExtraManagerController {
    /** @var modExtra $technicalSupport */
    public $technicalSupport;


    /**
     *
     */
    public function initialize()
    {
        $this->technicalSupport = $this->modx->getService('technicalSupport', 'technicalSupport', MODX_CORE_PATH . 'components/technicalsupport/model/');
        parent::initialize();
    }
    
    /**
     * 
     * @return string
     */
    public function getPageTitle()
    {
        return $this->modx->lexicon('technicalsupport');
    }
    
    public function loadCustomCssJs() {
        $this->addCss($this->technicalSupport->config['cssUrl'] . 'mgr/technicalsupport.css?v='.$this->technicalSupport->config['version']);
        $this->addJavascript($this->technicalSupport->config['jsUrl'] . 'mgr/technicalsupport.js?v='.$this->technicalSupport->config['version']);
        $this->addJavascript($this->technicalSupport->config['jsUrl'] . 'mgr/home/home.panel.js?v='.$this->technicalSupport->config['version']);
        $this->addJavascript($this->technicalSupport->config['jsUrl'] . 'mgr/home/home.grid.js?v='.$this->technicalSupport->config['version']);
        $this->addJavascript($this->technicalSupport->config['jsUrl'] . 'mgr/home/home.window.js?v='.$this->technicalSupport->config['version']);
        
        $this->addHtml('<script>
            Ext.onReady(function() {
                Technicalsupport.config.connector_url = "' . $this->technicalSupport->config['connectorUrl'] . '";
                MODx.add({
                    xtype: "technicalsupport-panel-home"
                });
            });
        </script>');
    }
    
    public function getLanguageTopics()
    {
        return ['technicalsupport:default'];
    }
    
    public function getTemplateFile()
    {
        return '';
    }
}
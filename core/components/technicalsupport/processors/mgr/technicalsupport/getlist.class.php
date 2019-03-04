<?php

class TechnicalsupportHistoryGetListProcessor extends modObjectGetListProcessor {
    public $classKey = 'TechnicalsupportHistory';
    public $defaultSortField = 'id'; 
    public $defaultSortDirection = 'DESC';
    
     /**
     * @param xPDOObject $object
     *
     * @return array
     */
    public function prepareRow(xPDOObject $object) {
        $array = $object->toArray();
        $array['actions'] = [];

        // Edit
        $array['actions'][] = [
            'cls' => 'technicalsupport-view',
            'icon' => 'icon icon-eye',
            'title' => $this->modx->lexicon('view'),
            //'multiple' => $this->modx->lexicon('view'),
            'action' => 'updateItem',
            'button' => true,
            'menu' => true,
        ];

        // Remove
        $array['actions'][] = [
            'cls' => 'technicalsupport-remove',
            'icon' => 'icon icon-trash-o action-red',
            'title' => $this->modx->lexicon('remove'),
            'multiple' => $this->modx->lexicon('remove'),
            'action' => 'removeItem',
            'button' => true,
            'menu' => true,
        ];

        return $array;
    }
}

return "TechnicalsupportHistoryGetListProcessor";
<?php
$events = array();
$tmp = array(
    'technicalSupportOnBeforeSent',
);
foreach ($tmp as $k => $v) {
    /** @var modEvent $event */
    $event = $this->modx->newObject('modEvent');
    $event->fromArray(array(
        'name' => $v,
        'service' => 1,
        'groupname' => 'technicalsupport',
    ), '', true, true);
    $events[] = $event;
}
return $events;
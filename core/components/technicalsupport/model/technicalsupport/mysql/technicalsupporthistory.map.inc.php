<?php
$xpdo_meta_map['TechnicalsupportHistory']= array (
  'package' => 'technicalsupport',
  'version' => '1.1',
  'table' => 'technicalsupport_history',
  'extends' => 'xPDOSimpleObject',
  'tableMeta' => 
  array (
    'engine' => 'InnoDB',
  ),
  'fields' => 
  array (
    'subject' => '',
    'message' => '',
    'create_at' => '',
  ),
  'fieldMeta' => 
  array (
    'subject' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'message' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => true,
      'default' => '',
    ),
    'create_at' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
  ),
);

<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\express\entity$package][1]/ */
/* Type: array */
/* Expiration: 2025-04-08T17:18:55+00:00 */



$loaded = true;
$expiration = 1744132735;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => '\\Concrete\\Core\\Entity\\Package',
     'cascade' => 
    array (
      0 => 'persist',
    ),
     'fetch' => 'LAZY',
     'inversedBy' => NULL,
  )),
  1 => 
  \Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'pkgID',
     'referencedColumnName' => 'pkgID',
     'unique' => false,
     'nullable' => true,
     'onDelete' => NULL,
     'columnDefinition' => NULL,
     'fieldName' => NULL,
     'options' => 
    array (
    ),
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1743758328;

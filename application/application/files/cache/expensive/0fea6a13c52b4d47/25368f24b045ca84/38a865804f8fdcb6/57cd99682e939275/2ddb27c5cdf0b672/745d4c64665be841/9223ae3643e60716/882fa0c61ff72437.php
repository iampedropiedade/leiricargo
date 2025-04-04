<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\site\site$locales][1]/ */
/* Type: array */
/* Expiration: 2025-04-07T07:29:38+00:00 */



$loaded = true;
$expiration = 1744010978;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'site',
     'targetEntity' => 'Locale',
     'cascade' => 
    array (
      0 => 'all',
    ),
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
  1 => 
  \Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'siteLocaleID',
     'referencedColumnName' => 'siteLocaleID',
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
$data['createdOn'] = 1743593331;

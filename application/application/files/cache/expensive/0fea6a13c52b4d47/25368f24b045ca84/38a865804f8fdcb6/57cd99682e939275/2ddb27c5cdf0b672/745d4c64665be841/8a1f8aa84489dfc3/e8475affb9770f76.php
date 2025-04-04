<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\board$data_sources][1]/ */
/* Type: array */
/* Expiration: 2025-03-31T08:31:15+00:00 */



$loaded = true;
$expiration = 1743409875;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'board',
     'targetEntity' => 'Concrete\\Core\\Entity\\Board\\DataSource\\ConfiguredDataSource',
     'cascade' => 
    array (
      0 => 'remove',
    ),
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1743002037;

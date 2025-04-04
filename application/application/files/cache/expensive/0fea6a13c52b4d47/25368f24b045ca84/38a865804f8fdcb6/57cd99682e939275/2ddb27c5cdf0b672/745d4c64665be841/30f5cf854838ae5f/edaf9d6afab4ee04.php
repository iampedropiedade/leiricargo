<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\permission\ipaccesscontrolcategory$ranges][1]/ */
/* Type: array */
/* Expiration: 2025-04-06T19:04:40+00:00 */



$loaded = true;
$expiration = 1743966280;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'category',
     'targetEntity' => 'Concrete\\Core\\Entity\\Permission\\IpAccessControlRange',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1743593359;

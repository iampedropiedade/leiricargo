<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\permission\ipaccesscontrolcategory$events][1]/ */
/* Type: array */
/* Expiration: 2025-04-07T05:43:31+00:00 */



$loaded = true;
$expiration = 1744004611;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'category',
     'targetEntity' => 'Concrete\\Core\\Entity\\Permission\\IpAccessControlEvent',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1743593359;

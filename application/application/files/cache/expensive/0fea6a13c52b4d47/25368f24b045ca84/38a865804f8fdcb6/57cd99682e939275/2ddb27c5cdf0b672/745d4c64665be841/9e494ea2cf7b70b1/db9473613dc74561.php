<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\oauth\client][1]/ */
/* Type: array */
/* Expiration: 2025-04-07T00:09:05+00:00 */



$loaded = true;
$expiration = 1743984545;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  \Doctrine\ORM\Mapping\Entity::__set_state(array(
     'repositoryClass' => 'ClientRepository',
     'readOnly' => false,
  )),
  1 => 
  \Doctrine\ORM\Mapping\Table::__set_state(array(
     'name' => 'OAuth2Client',
     'schema' => NULL,
     'indexes' => NULL,
     'uniqueConstraints' => 
    array (
      0 => 
      \Doctrine\ORM\Mapping\UniqueConstraint::__set_state(array(
         'name' => 'client_idx',
         'columns' => 
        array (
          0 => 'clientKey',
          1 => 'clientSecret',
        ),
         'fields' => NULL,
         'options' => NULL,
      )),
    ),
     'options' => 
    array (
    ),
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1743593361;

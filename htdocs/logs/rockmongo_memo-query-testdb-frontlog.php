<?php exit("Permission Denied"); ?>
2016-08-16 02:25:19
array (
  'action' => 'collection.index',
  'db' => 'testdb',
  'collection' => 'frontlog',
  'field' => 
  array (
    0 => '_id',
  ),
  'order' => 
  array (
    0 => 'desc',
  ),
  'format' => 'array',
  'pagesize' => '10',
  'criteria' => 'array (
)',
  'command' => 'findAll',
)
================
2016-08-19 17:12:51
array (
  'db' => 'testdb',
  'collection' => 'frontlog',
  'action' => 'collection.index',
  'format' => 'json',
  'criteria' => '{
"OrderId":"00000000-0000-0000-0000-000000000003"
}',
  'newobj' => '{
	\'$set\': {
		//your attributes
	}
}',
  'field' => 
  array (
    0 => '_id',
    1 => '',
    2 => '',
    3 => '',
  ),
  'order' => 
  array (
    0 => 'desc',
    1 => 'asc',
    2 => 'asc',
    3 => 'asc',
  ),
  'limit' => '0',
  'pagesize' => '10',
  'command' => 'findAll',
)
================

<?php

/* Prevent Direct Access */
defined('ADAPT_STARTED') or die;

$adapt = $GLOBALS['adapt'];
$sql = $adapt->data_source->sql;


$sql->create_table('video')
    ->add('video_id', 'bigint')
    ->add('status', 'enum("Available", "Unavailable")', false, 'Unavailable')
    ->add('user_id', 'bigint')
    ->add('title', 'varchar(64)')
    ->add('description', 'text')
    
    

    




?>
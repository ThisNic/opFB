<?php 
/* 
 * This will be our config file
 * Here we will create constants for querying 
 * and deal with connecting to the Graph API 
 *
 */ 
 
$facebook = new Facebook(array(
  'appId'  => '[ENTER YOUR APP ID HERE]',
  'secret' => '[ENTER YOUR SECRET ID HERE] ',
));

/* 
 * Use below formatting for defining known constants
 * to check against when spidering 
 */

define( 'CONSTANT_1', 'known_user_id'); 

<?php

class Twitter_AccountsModel extends Model {

    public $_timestamps = true;

    public $_fields = array(
        'name' => array(
            'type' => 'varchar',
            'length' => 255,
            'not null' => true
        ),
    	'email' => array(
    			'type' => 'varchar',
    			'length' => 255,
    			'not null' => true
    	),
    	'subject' => array(
    			'type' => 'varchar',
    			'length' => 255,
    			'not null' => true
    	),
    	'tweet' => array(
    			'type' => 'varchar',
    			'length' => 255,
    			'not null' => true
    	),
    );

}
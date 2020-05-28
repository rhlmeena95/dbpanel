<?php

App::uses('AppController', 'Controller');

class PagesController extends AppController 
{
var $uses = array('');
public $components = array('Cookie');
    public $helpers= array('Html');


public function beforeFilter() {
    parent::beforeFilter();
date_default_timezone_set("Asia/Kolkata");

}

   public $paginate = array(
        'limit' => 2,
        'conditions' => array('status' => '1'),
        'order' => array('Categorie.title' => 'asc' )
    );



}?>
<?php
App::uses('AppController', 'Controller');
// App::uses('View', 'View/Adminpanel/Admins');
class AdminsController extends AppController
{
    var $uses = array('Adminlogin','Student','game');
    public $helpers = array('Html');

    public function beforeFilter()
    {
        parent::beforeFilter();

        if($this->action!='login')
        {
          date_default_timezone_set("Asia/Kolkata");
         $this->layout = 'adminpanel';
       }
    }
  public $paginate = array(
        'limit' => 2,
        'conditions' => array('status' => '1'),
        'order' => array('Categorie.title' => 'asc' )
    );



public function table()
{

// get list of tables
    $get_table=$this->uses;
    $this->set('get_table',$get_table);
      // pr($get_table);die;
    //used to get fields
    $getTable=$this->Student->schema();
    // pr($getTable);die;


    if(!empty($this->request->query('table_name')))
    {

        $table_name=$this->request->query('table_name');

      $vsdata=$this->$table_name->find('all'); 
      $this->set('vsdata',$vsdata);
      $search_col=$this->request->query('col_search');
      if(!empty($search_col))
      {
        // $this->$table_name->find('all',array('conditions'=>array('' =>)))
      }

      $getColumns=$this->$table_name->schema();
      $this->set('getColumns',$getColumns);

      $this->set('table_name',$table_name);


    }

 
}






}
?> 




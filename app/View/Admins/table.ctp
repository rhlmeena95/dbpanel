 <link href= 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css'
          rel='stylesheet'> 
      
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" > 
    </script> 
      
    <script src= "https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" > 
    </script> 

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">

                <h3 class="box-title">User Details </h3>
            </div>

<style>
table {
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
}
th{
  background-color: rgb(53,124,165);
}

.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/*.dropdown-content a:hover {background-color:#38e9e9;}*/

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>

<center>

<div style="color:green;font-size:15px;"><?php echo $this->Session->flash(); ?></div>



<center>
<div style="overflow-x:auto;">

<div  style="float: left;" >
<!-- tables selection -->
<select id="table_select"  onchange="get_table_data();" name="table_name">
  <?php if(!empty($get_table)){ foreach($get_table as $table_list){ ?>
  <option value="<?php echo $table_list; ?>"><?php echo $table_list; ?></option>
  <?php } } ?>
</select>
</div>


<table class="table">

<!-- search based on columns -->
<tr>
<?php if(!empty($getColumns)) { foreach($getColumns as $key => $value){  ?>

<th>
  <input id="col_search" type="text" onchange="search_column(<?php echo $key; ?>)"  placeholder="search" name="search">
</th>
<?php } } ?>
</tr>

<!-- options for export -->
<tr>
<?php if(!empty($getColumns)) { foreach($getColumns as $key => $value){  ?>

<th>
<select name="options_select">

<option value="">option</option>

</select>
</th>
<?php } } ?>
</tr>



<tr>
<!-- collumns name -->
<?php if(!empty($getColumns)) {  foreach($getColumns as $key => $value){  ?>
<th><?php echo $key; ?></th>  

<?php }} ?>

</tr>

<!-- data fields columns -->
<?php if(!empty($vsdata)) { if(!empty($vsdata)) { foreach($vsdata as $vs){

 ?>

<tr>
<?php if(!empty($vsdata)) {   foreach($getColumns as $key => $value){ ?>
<td><?php  echo $vs[$table_name][$key]; ?></td>

<?php }} ?>
</tr>
<?php } } } ?>

</table> 
</div>
 <div class="cakepagination">
                  <?php
                        echo $this->Paginator->prev('<< Previous', null, null, array('class' => 'disabled'));
                        echo $this->Paginator->numbers();
                        echo $this->Paginator->next(' Next >> ', null, null, array('class' => 'disabled'));
                    ?>
</div>  
</center>

    </div>
          </div>
         </div>
        </section>
       </div>
<script>

  function get_table_data()
  {
      var table_select=$("#table_select").val();

        location.replace("<?php echo $this->webroot.'admins/table?table_name='; ?>"+table_select);
  }

  function search_column()
  {

        var col_search=$("#col_search").val();

        location.replace("<?php echo $this->webroot.'admins/table?table_name='; ?>"+col_search);

  }






 </script> 


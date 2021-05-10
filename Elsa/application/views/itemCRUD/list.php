
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 class="jumbotron">TodoList Notes</h2>
        </div>
        <div class="pull-right" style="margin-right:200px;margin-top:100px">
            <a class="btn btn-primary" href="<?php echo base_url('itemCRUD/trash');?>"> View Trash</a>
        </div>
    </div>
</div>
<br>
<div class="container-fluid">
    <div class="row" style=" padding:10px;">

    <?php foreach ($data as $item) {     
    
       
        if($item->Status=="Not Done"){
        ?>
        <div class="card col-sm-4" style=" width:30rem;margin:20px;border:solid black 2px;height:40rem;font-size:20px; border-radius:10%;border:solid black 2px;color:black;padding:10px;border-radius: 10px;border:solid 2px black">
        <?php
            }else if($item->Status==="Done"){

        ?>
        <div class="card col-sm-4" style=" width:30rem;text-decoration:line-through;height:40rem;margin:20px;border:solid black 2px;font-size:20px; border-radius:10%;border:solid black 2px;color:black;padding:10px;border-radius: 10px;border:solid 2px black">
        <?php 
            }
    ?>  
        
          <label><strong>Title:</strong></label>
            <div class="container"><em><?php echo $item->Title; ?></em></div>
            <label><strong>Body:</strong></label>
            <div class="containers"><?php echo $item->Body; ?></div>
            <label><strong>Status:</strong></label>
            <span><?php echo $item->Status; ?></span><br>
            <label><strong>Date Created:</strong></label><br> 
             <span><?php echo $item->created_at; ?></span><br>
             <label><strong>Date Updated:</strong></label><br> 
             <span><?php echo $item->updated_at; ?></span><br>
        <form method="DELETE" action="<?php echo base_url('itemCRUD/delete/'.$item->noteId);?>" >
          <a class="btn btn-info" href="<?php echo base_url('itemCRUD/'.$item->noteId) ?>"> show</a>
         <a class="btn btn-primary" href="<?php echo base_url('itemCRUD/edit/'.$item->noteId) ?>"> Edit</a>
          <button type="submit" class="btn btn-danger"> Delete</button>
        </form>

    </div>
      <?php } ?>
        <div class="card col-sm-4"  style="width:30rem;margin:10px;border:solid black 2px;height:auto;font-size:20px; border-radius:10%;border:solid black 2px;color:black;padding:10px;border-radius: 10px;border:solid 2px black">
            <div class="container">
                <a class="btn btn-success" href="<?php echo base_url('itemCRUD/create') ?>"> Create New Item</a>
            </div>
        </div>
    </div>
</div>

    
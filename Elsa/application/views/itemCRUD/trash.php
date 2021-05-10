
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left" style="margin-left:200px">
            <h2 class="jumbotron"> TodoList Trash</h2>
        </div>
        <div class="pull-right" style="margin-right:200px;margin-top:100px">
            <a class="btn btn-primary" href="<?php echo base_url('itemCRUD');?>"> Back</a>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row" style=" padding:10px;">

    <?php foreach ($data as $item) {     
    
       
        if($item->status=="Not Done"){
        ?>
        <div class="card col-sm-4" style="width:30rem;margin:20px;border:solid black 2px;height:35rem;font-size:25px; border-radius:10%;border:solid black 2px;color:black;padding:10px;border-radius: 10px;border:solid 2px black">
        <?php
            }else if($item->status==="Done"){

        ?>
        <div class="card col-sm-4" style=" width:30rem;text-decoration:line-through;height:35rem;margin:20px;border:solid black 2px;font-size:25px; border-radius:10%;border:solid black 2px;color:black;padding:10px;border-radius: 10px;border:solid 2px black">
        <?php 
            }
    ?>  
   
   <label><strong>Title:</strong></label>
     <div><em><?php echo $item->title?></em></div>
     <label><strong>Body:</strong></label>
     <div class="container"><?php echo $item->body?></div>
     <label><strong>Status:&nbsp;</strong></label>
     <span><?php echo $item->status ?></span><br>
      <label><strong>Date Deleted:</strong></label><br> 
      <span><?php echo $item->date_deleted ?></span><br> 
</div>

<?php
    }
    ?>
    </div>
</div>
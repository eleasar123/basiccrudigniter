
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left" style="margin-left:200px">
            <h2> Show Item No.<?php echo $item->noteId; ?></h2>
        </div>
        <div class="pull-right" style="margin-right:200px;margin-top:100px">
            <a class="btn btn-primary" href="<?php echo base_url('itemCRUD');?>"> Back</a>
        </div>
    </div>
</div>

<?php
if($item->Status=="Not Done"){
        ?>
        <div class="card col-sm-4" style=" width:30rem;margin-left:200px;border:solid black 2px;height:auto;font-size:20px; border-radius:10%;border:solid black 2px;color:black;padding:10px;border-radius: 10px;border:solid 2px black">
        <?php
            }else if($item->Status==="Done"){

        ?>
     
<div class="card col-sm-4" style=" width:50rem;font-size:35px;font-family: Tahoma, Verdana, sans-serif;text-decoration:line-through;height:auto;margin-left:200px;border:solid black 2px; border-radius:10%;border:solid black 2px;color:black;padding:10px;border-radius: 10px;border:solid 2px black">
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

    </div>

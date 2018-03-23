<!DOCTYPE HTML>
<html>
<?php $id = $this->session->userdata('id');?>
  <head>
    <style>
      #pet, #item, #serv{
        display: none;
      }
    </style>
  </head>

<body>
  <h3>Edit Post</h3>
<?php foreach($dat as $post): ?>
  <div id="pet">
    <?php echo form_open('user/update_pet/'.$post['PetID']); ?>
    <form>
      <label>Status: </label><input type="text" name="ptstmt" value='<?php echo $post['PostComment'];?>'><br/>
      <label>Pet Name: </label><input type="text" name="ptnm" value='<?php echo $post['PetName'];?>'><br/>
      <label>Pet Type: </label><input type="text" name="pttyp" value='<?php echo $post['PetType'];?>'><br/>
      <label>Pet Age: </label><input type="text" name="ptage" value='<?php echo $post['PetAge'];?>'><br/>
      <label>Pet Breed: </label><input type="text" name="ptbrd" value='<?php echo $post['PetBreed'];?>'><br/>
      <label>Pet Gender: </label><input type="text" name="ptgndr" value='<?php echo $post['PetGender'];?>'><br/>
      <label>Pet Record: </label><input type="text" name="ptrcrd" value='<?php echo $post['PetRecord'];?>'><br/>
      <label>Pet Size: </label><input type="text" name="ptsz" value='<?php echo $post['PetSize'];?>'><br/>
      <button type="submit" class="btn btn-success">Update</button>
      <button class="btn btn-dark"><a href="<?php echo base_url('user');?>">Back</a></button>
    </form>
  </div>

  <div id='item'>
    <?php echo form_open('user/update_item/'.$post['ItemID']);?>
    <form>
      <label>Status: </label><input type="text" name="itmstmt" value='<?php echo $post['PostComment'];?>'></input><br/>
      <label>Item Type: </label><input type="text" name="itmtyp" value='<?php echo $post['ItemType'];?>'></input><br/>
      <label>Item Price: </label><input type="text" name="itmprc" value='<?php echo $post['ItemPrice'];?>'></input><br/>
      <label>Item Info: </label><input type="text" name="itminf" value='<?php echo $post['ItemInfo'];?>'></input><br/>
      <label>Item Contact: </label><input type="text" name="itmcntct" value='<?php echo $post['ItemContact'];?>'></input><br/>
      <label>Item Address: </label><input type="text" name="itmadd" value='<?php echo $post['ItemLocation'];?>'></input><br/>
      <button type="submit" class="btn btn-success">Update</button>
      <button class="btn btn-dark"><a href="<?php echo base_url('user');?>">Back</a></button>
    </form>
  </div>

  <div id='serv'>
    <?php echo form_open('user/update_serv/'.$post['ServiceID']);?>
    <form>
      <label>Status: </label><input type="text" name="srvcstmt" value='<?php echo $post['PostComment'];?>'></input><br/>
      <label>Service Name: </label><input type="text" name="srvcnm" value='<?php echo $post['ServName'];?>'></input><br/>
      <label>Service Type: </label><input type="text" name="srvctyp" value='<?php echo $post['ServType'];?>'></input><br/>
      <label>Service Contact: </label><input type="text" name="srvccntct" value='<?php echo $post['ServContact'];?>'></input><br/>
      <label>Service Address: </label><input type="text" name="srvcadd" value='<?php echo $post['ServAddress'];?>'></input><br/>
      <label>Service Info: </label><input type="text" name="srvcdsc" value='<?php echo $post['ServDesc'];?>'></input><br/>
      <button type="submit" class="btn btn-success">Update</button>
      <button class="btn btn-dark"><a href="<?php echo base_url('user');?>">Back</a></button>
    </form>
  </div>
<?php endforeach;?>
</body>
</html>
<?php
if($id != "PetID"){
    if($id != "ServID"){
      if($id == "ItemID"){
        echo "<script>
          document.getElementById('item').style.display = 'block';
          document.getElementById('pet').style.display = 'none';
          document.getElementById('serv').style.display = 'none';
        </script>";
      }
    }
    else{
      echo "<script>
        document.getElementById('serv').style.display = 'block';
        document.getElementById('item').style.display = 'none';
        document.getElementById('pet').style.display = 'none';
      </script>";
    }
}
else{
  echo "<script>
   document.getElementById('pet').style.display = 'block';
    document.getElementById('item').style.display = 'none';
    document.getElementById('serv').style.display = 'none';
  </script>";
}
?>

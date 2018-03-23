
<?php

class userpost_model extends CI_Model {
  public function _construct(){
    $this->load->database();
  }
  public function save_post(){
    $user = $this->session->userdata('username');
    $conn = new mysqli('localhost', 'root', '', 'plc_db');
		$query = 'Select AccountID from accbio where AccountName = "'.$user.'"';
		$result = $conn->query($query);
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
        $accid = $row['AccountID'];
      }
      $field = array(
        'AccountID' => $accid,
        'PostComment'=>$this->input->post('usrpst')
      );
      $this->db->insert('post', $field);
    }
  }

  public function disp_post(){
    $user = $this->session->userdata('username');
    $conn = new mysqli('localhost', 'root', '', 'plc_db');
		$query = 'Select AccountID from accbio where AccountName = "'.$user.'"';
		$result = $conn->query($query);
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
        $accid = $row['AccountID'];
      }
      $this->db->Select('PostDate, PostComment, PostID');
      $this->db->from('post');
      $this->db->where('AccountID', $accid);
      $this->db->order_by('PostDate', 'Desc');
      $query=$this->db->get();
      return $query->result_array();
    }
  }
  // public function save_pet(){
  //   $user = $this->session->userdata('username');
  //   $conn = new mysqli('localhost', 'root', '', 'plc_db');
	// 	$query = 'Select AccountID from accbio where AccountName = "'.$user.'"';
	// 	$result = $conn->query($query);
	// 	if($result->num_rows > 0){
	// 		while($row = $result->fetch_assoc()){
  //       $accid = $row['AccountID'];
  //     }
  //     $field = array(
  //       'AccountID' => $accid,
  //       'PetBreed' => $this->input->post('ptbrd'),
  //       'PetType' => $this->input->post('pttyp'),
  //       'PetName' => $this->input->post('ptnm'),
  //       'PetAge' => $this->input->post('ptage'),
  //       'PetGender' => $this->input->post('ptgndr')
  //     );
  //     $this->db->insert('pet', $field);
  //     return "true";
  // }
  // }
  public function save_post_pet(){
    // $file= base64_encode(file_get_contents(addslashes($_FILES['image']['tmp_name'])));
      $user = $this->session->userdata('username');
      $conn = new mysqli('localhost', 'root', '', 'plc_db');
  		$query = 'Select AccountID from accbio where AccountName = "'.$user.'"';
  		$result = $conn->query($query);
  		if($result->num_rows > 0){
  			while($row = $result->fetch_assoc()){
          $accid = $row['AccountID'];
        }
        $field = array(
          'AccountID' => $accid,
          'PetRecord' => $this->input->post('petrecord'),
          'PetSize' => $this->input->post('petsize'),
          'PetBreed' => $this->input->post('petbreed'),
          'PetType' => $this->input->post('petype'),
          'PetName' => $this->input->post('petname'),
          'PetAge' => $this->input->post('petage'),
          'PetGender' => $this->input->post('petgender')
        );
        $this->db->insert('pet', $field);
    }
    $conn = new mysqli('localhost', 'root', '', 'plc_db');
		$query = 'Select AccountID from accbio where AccountName = "'.$user.'"';
		$result = $conn->query($query);
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
        $accid = $row['AccountID'];
      }
        $conn = new mysqli('localhost', 'root', '', 'plc_db');
    		$query = 'Select PetID from pet where AccountID = "'.$accid.'"';
    		$result = $conn->query($query);
    		if($result->num_rows > 0){
    			while($row = $result->fetch_assoc()){
            $petid = $row['PetID'];
          }
          $field = array(
            'AccountID' => $accid,
            'PetID' => $petid,
            'PostComment' => $this->input->post('caption')
          );
          $this->db->insert('post', $field);
          return "true";
        }
    }
  }

  public function save_post_item()  {
    // $file= base64_encode(file_get_contents(addslashes($_FILES['mage']['tmp_name'])));
    $user = $this->session->userdata('username');
    $conn = new mysqli('localhost', 'root', '', 'plc_db');
    $query = 'Select AccountID from accbio where AccountName = "'.$user.'"';
    $result = $conn->query($query);
    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
        $accid = $row['AccountID'];
      }
          $field= array(
                    'AccountID ' => $accid,
                    'ItemType'=>$this->input->post('category'),
                    'ItemInfo'=>$this->input->post('description'),
                    'ItemPrice'=>$this->input->post('price'),
                    'ItemContact'=>$this->input->post('contact'),
                    'ItemLocation'=>$this->input->post('location')
          );
          $query=$this->db->insert('item',$field);
  }
  $conn = new mysqli('localhost', 'root', '', 'plc_db');
  $query = 'Select AccountID from accbio where AccountName = "'.$user.'"';
  $result = $conn->query($query);
  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      $accid = $row['AccountID'];
    }
      $conn = new mysqli('localhost', 'root', '', 'plc_db');
      $query = 'Select ItemID from item where AccountID = "'.$accid.'"';
      $result = $conn->query($query);
      if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
          $petid = $row['ItemID'];
        }
        $field = array(
          'AccountID' => $accid,
          'ItemID' => $petid,
          'PostComment' => $this->input->post('caption')
        );
        $this->db->insert('post', $field);
        return "true";
      }
  }
  }

  public function update_pet($id)
  {
    $field = array(
      'PetType' => $this->input->post('pttyp'),
      'PetName' => $this->input->post('ptnm'),
      'PetBreed' => $this->input->post('ptbrd'),
      'PetGender' => $this->input->post('ptgndr'),
      'PetAge' => $this->input->post('ptage'),
      'PetSize' => $this->input->post('ptsz'),
      'PetRecord' => $this->input->post('ptrcrd')
    );
    $this->db->where('PetID', $id);
    $this->db->update('pet', $field);

    $file = array(
        'PostComment' => $this->input->post('ptstmt')
    );
    $this->db->where('PetID', $id);
    $this->db->update('post', $file);
  }

  public function update_item($id)
  {
    $field = array(
      'ItemType' => $this->input->post('itmtyp'),
      'ItemPrice' => $this->input->post('itmprc'),
      'ItemInfo' => $this->input->post('itminf'),
      'ItemContact' => $this->input->post('itmcntct'),
      'ItemLocation' => $this->input->post('itmadd')
    );
    $this->db->where('ItemID', $id);
    $this->db->update('item', $field);

    $file = array(
        'PostComment' => $this->input->post('itmstmt')
    );
    $this->db->where('ItemID', $id);
    $this->db->update('post', $file);

    return true;
  }

  public function update_serv($id)
  {
    $field = array(
      'ServType' => $this->input->post('srvctyp'),
      'ServContact' => $this->input->post('srvccntct'),
      'ServAddress' => $this->input->post('srvcadd'),
      'ServName' => $this->input->post('srvcnm'),
      'ServDesc' => $this->input->post('srvcdsc')
    );
    $this->db->where('ServiceID', $id);
    $this->db->update('service', $field);

    $file = array(
        'PostComment' => $this->input->post('srvcstmt')
    );
    $this->db->where('ServiceID', $id);
    $this->db->update('post', $file);
  }

  public function save_post_serv()  {
    // $file= base64_encode(file_get_contents(addslashes($_FILES['image']['tmp_name'])));
    $user = $this->session->userdata('username');
    $conn = new mysqli('localhost', 'root', '', 'plc_db');
    $query = 'Select AccountID from accbio where AccountName = "'.$user.'"';
    $result = $conn->query($query);
    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
        $accid = $row['AccountID'];
      }
      $field = array(
        'AccountID' => $accid,
        'ServType' => $this->input->post('service'),
        'ServContact' => $this->input->post('contact'),
        'ServAddress' => $this->input->post('address'),
        'ServDesc'=> $this->input->post('description'),
        'ServName' => $this->input->post('name')
      );
      $this->db->insert('service', $field);
  }
  $conn = new mysqli('localhost', 'root', '', 'plc_db');
  $query = 'Select AccountID from accbio where AccountName = "'.$user.'"';
  $result = $conn->query($query);
  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      $accid = $row['AccountID'];
    }
      $conn = new mysqli('localhost', 'root', '', 'plc_db');
      $query = 'Select ServiceID from service where AccountID = "'.$accid.'"';
      $result = $conn->query($query);
      if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
          $petid = $row['ServiceID'];
        }
        $field = array(
          'AccountID' => $accid,
          'ServiceID' => $petid,
          'PostComment' => $this->input->post('caption')
        );
        $this->db->insert('post', $field);
        return "true";
      }
  }
  }
  public function get_delete($id){
    // $this->db->where('PostID', $id);
    // $this->db->delete('post');
    // return true;
    $conn = new mysqli('localhost','root','','plc_db');
    $query = 'Select PetID, ServiceID, ItemID from post where PostID = "'.$id.'"';
    $result = $conn->query($query);
    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
        $pet = $row['PetID'];
        $item = $row['ItemID'];
        $serv = $row['ServiceID'];
        if($pet == '0'){
          if($item == '0'){
            if($serv != '0'){
              $conn = new mysqli('localhost','root','','plc_db');
              $query = 'DELETE FROM service WHERE ServiceID = "'.$serv.'"';
              $conn->query($query);
            }
          }
          else{
            $conn = new mysqli('localhost','root','','plc_db');
            $query = 'DELETE FROM item WHERE ItemID = "'.$item.'"';
            $conn->query($query);
              // $this->db->where('PostID', $id);
              // $this->db->delete('post');
              // return true;
          }
        }
        else{
          $conn = new mysqli('localhost','root','','plc_db');
          $query = 'DELETE FROM pet WHERE PetID = "'.$pet.'"';
          $conn->query($query);
          // $this->db->where('PetID', $pet);
          // $$this->db->delete('pet');
          // $this->db->where('PostID', $id);
          // $this->db->delete('post');
          // return true;
        }
        $this->db->where('PostID', $id);
        $this->db->delete('post');
        return true;
      }
    }
  }

  public function read($id){
    $conn = new mysqli('localhost', 'root', '', 'plc_db');
    $query = 'Select PetID, ServiceID, ItemID from post where PostID = "'.$id.'"';
    $result = $conn->query($query);
    if($result->num_rows > 0){
      while($row=$result->fetch_assoc()){
        $petid = $row['PetID'];
        $servid = $row['ServiceID'];
        $itemid = $row['ItemID'];
        if($petid =='0'){
          if($servid == '0'){
            if($itemid != '0'){
              $this->db->select('item.*, post.*');
              $this->db->from('item');
              $this->db->join('post', 'item.ItemID = post.ItemID');
              $this->db->where('item.ItemID = '.$itemid.'');
              $query = $this->db->get();
              $this->session->set_userdata('id', 'ItemID');
              return $query->result_array();
            }
          }
          else{
            $this->db->select('service.*, post.*');
            $this->db->from('service');
            $this->db->join('post', 'service.ServiceID = post.ServiceID');
            $this->db->where('service.ServiceID = '.$servid.'');
            $query = $this->db->get();
            $this->session->set_userdata('id', 'ServID');
            return $query->result_array();
          }
        }
        else{
          $this->db->select('pet.*, post.*');
          $this->db->from('pet');
          $this->db->join('post', 'pet.PetID = post.PetID');
          $this->db->where('pet.PetID = '.$petid.'');
          $query = $this->db->get();
          $this->session->set_userdata('id', 'PetID');
          return $query->result_array();
        }
      }
    }
  }
}
?>




<?php 

// require('./conn.php');

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json;");
header("Access-Control-Allow-Methods: PUT");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
	
include ('./conn.php');
        $first_name = isset($_REQUEST['first_name'])?$_REQUEST['first_name']:"";
        $last_name = isset($_REQUEST['last_name'])?$_REQUEST['last_name']:"";
		$email = isset($_REQUEST['email'])?$_REQUEST['email']:"";
		$password = isset($_REQUEST['password'])?$_REQUEST['password']:"";
        $phone = isset($_REQUEST['phone'])?$_REQUEST['phone']:"";
        // $adress = isset($_REQUEST['adress'])?$_REQUEST['adress']:"";
        // $parth_in = isset($_REQUEST['parth_in'])?$_REQUEST['parth_in']:"";
        $id = isset($_REQUEST['id'])?$_REQUEST['id']:"";	
        // && $parth_in!="" && $adress!=""
        // , adress='$adress' , parth_in='$parth_in'
        if($first_name!="" && $last_name!=""&& $email!="" && $password!="" && $phone!=""){
            $sql = "UPDATE users SET first_name='$first_name' , last_name='$last_name' , email='$email' , password='$password' , phone='$phone' WHERE id='$id';";
            $res = mysqli_query($con, $sql);
            if($res){
                echo "Success!";
            }
            else{
                echo "Error!";
            }
            $con->close();
        }else{
            echo "data sent wrong";
        }


// $object = new crud;
// $conn = $object->connect();



// $post = json_decode(file_get_contents('php://input'));
// $sql = "UPDATE  users  SET   first_name = :first_name , last_name = :last_name , email=:email ,	password = :password , 	phone = :phone  WHERE id = :id";
// $stmt =$conn->prepare($sql);
// $stmt->bindParam(':id', $post->id);
// $stmt->bindParam(':first_name', $post->first_name);
// $stmt->bindParam(':last_name', $post->last_name);
// $stmt->bindParam(':email', $post->email);
// $stmt->bindParam(':password', $post->password);
// $stmt->bindParam(':phone', $post->phone);

// if($stmt->execute()){
//     $response = ['status'=>1,'message'=>'Record updated successfully.'];
// }else{
//     $response = ['status'=>0,'message'=>'Failed to update  record.'];

// }

// echo json_encode( $response);

?>
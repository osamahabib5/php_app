<?php

$conn = mysqli_connect( 'localhost','root',"",'contactsdb' );
extract($_POST);

if(isset($_POST['readrecords'])){

	$data =  '<table class="table table-bordered table-striped ">
						<tr class="bg-dark text-white">
							<th>ID</th>
							<th>Name</th>
							<th>Address</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>'; 

	$displayquery = " SELECT contactid,firstname,lastname FROM `contacts` "; 
	$result = mysqli_query($conn,$displayquery);

	if(mysqli_num_rows($result) > 0){

		//$number = 1;
		while ($row = mysqli_fetch_array($result)) {
			
			$data .= '<tr>  
				<td>'.$row['contactid'].'</td>
				<td>'.$row['firstname'].'</td>
				<td>'.$row['lastname'].'</td>
				<td>
					<button onclick="GetUserDetails('.$row['contactid'].')" class="btn btn-success">Edit</button>
				</td>
				<td>
					<button onclick="DeleteUser('.$row['contactid'].')" class="btn btn-danger">Delete</button>
				</td>
    		</tr>';
    		//$number++;

		}
	} 
	 $data .= '</table>';
    	echo $data;

}
//adding records in database
if(isset($_POST['name']) && isset($_POST['address']) )
{
	$query = " INSERT INTO contactid(vendorname,address) select '$name' from vendor where not exist(select vendorname from vendor where vendorname = '$name') limit 1";
	mysqli_query($conn,$query);

		if($result = mysqli_query($conn,$query)){
			exit(mysqli_error());
		}else{
			echo "1 record added";
		}


	}
	// pass id on modal
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    $user_id = $_POST['id'];
    $query = "SELECT * FROM Customers_13056 WHERE ID = '$user_id'";
    if (!$result = mysqli_query($conn,$query)) {
        exit(mysqli_error());
    }
    
    $response = array();

    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
       
            $response = $row;
        }
    }
  //  // agar ek bhi value nai milta hai tho data not found no. of rows 0 hai tho
    else
    {
        $response['status'] = 200;
        $response['message'] = "Data not found!";
    }
   //     PHP has some built-in functions to handle JSON.
// Objects in PHP can be converted into JSON by using the PHP function json_encode(): 

    echo json_encode($response);
}
// ye top wala id jo humhe mil raha hai uska hai jaha wo id check karega sahi hai ya nai agar nai tho invalid req boldega...
else
{
    $response['status'] = 200;
    $response['message'] = "Invalid Request!";
}
//////////////// update table//////////////

if(isset($_POST['hidden_user_id']))
{
    // get values
    $hidden_user_id = $_POST['hidden_user_id'];
    echo $hidden_user_id;
    $shopname = $_POST['updateshopname'];
    $customer = $_POST['updatecustomer'];
    $address = $_POST['updateaddress'];
    $contact = $_POST['updatecontact'];
    $city = $_POST['updatecity'];
    $gc = $_POST['updategc'];
    $query = "UPDATE Customers_13056 SET ShopName = '$shopname', CustomerName = '$customer', Address = '$address', ContactNo = '$contact', City = '$city', GeoCoordinates = '$gc'  WHERE ID = '$hidden_user_id'";
    if (!$result = mysqli_query($conn,$query)) {
        exit(mysqli_error());
    }
}
/////////////Delete user record /////////

if(isset($_POST['deleteid']))
{

	$user_id = $_POST['deleteid']; 

	$deletequery = " delete from vendor where vendorid ='$user_id' ";
	if (!$result = mysqli_query($conn,$deletequery)) {
        exit(mysqli_error());

}

}

?>












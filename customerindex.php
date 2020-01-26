	
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Cormorant+Unicase" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cormorant+Unicase|Eater" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Anton|Cormorant+Unicase" rel="stylesheet">
  <style type="text/css">
    * {
  margin: 0;
  padding: 0;
}
 
nav {
  margin: 50px;
}
 
ul {
  overflow: auto;
  list-style-type: none;
  padding-left: 11%;
}
 
li {
  height: 25px;
  float: left;
  margin-right: 0px;
  border-right: 1px solid #aaa;
  padding: 0 20px;
}
 
li:last-child {
  border-right: none;
}
 
li a {
  text-decoration: none;
  color: #ccc;
  font: 25px/1 Helvetica, Verdana, sans-serif;
  text-transform: uppercase;
 
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
 
li a:hover {
  color: #666;
}
 
li.active a {
  font-weight: bold;
  color: #333;
}

  </style>
</head>
<body>
  <nav>
  <ul>
    <li><a href="index.php">HomePage</a></li>
    <li><a href="customerindex.php">Customers</a></li>
    <li><a href="crudsales.php">SalesPerson</a></li>
    <li><a href="orderindex.php">Orders</a></li>
    <li><a href="productindex.php">Products</a></li>
    <li><a href="logoutpage.php">Logout</a></li>
  </ul></nav>
<h1 class="text-center text-uppercase display-4 font-weight-bold" style="background-color: white; color: #062f4f; font-family: 'Cormorant Unicase', serif; padding-top: 1%">Vendors Record</h1>

<div class="container">
	
  <div class="d-flex flex-row justify-content-end ">
		<button type="button" class="btn btn-warning text-white" id="btninsert" data-toggle="modal" data-target="#myModal">
		 Click To Insert
		</button>
	</div>

	<div >
		<h2 style="color: #062f4f; font-family: 'Cormorant Unicase', serif;" class="font-weight-bold mb-4"> All Records </h2>
		<div id="records_content">	</div>
	</div>
  

</div>

<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content" >

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Vendor</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body" id="mainbody">
       

       <div class="form-group">
          <label>  VendorID </label>
          <input type="text" name="firstname" id="id" placeholder="Name" class="form-control">
        </div>

      	<div class="form-group">
      		<label>  Name: </label>
      		<input type="text" name="firstname" id="name" placeholder="Name" class="form-control">
      	</div>

      	<!-- <div class="form-group">
      		<label> Last Name </label>
      		<input type="text" name="lastname" id="lastname" placeholder="Last Name" class="form-control">
      	</div> -->

      	<div class="form-group">
      		<label> Address: </label>
      		<input type="text" name="email" id="address" placeholder="Address" class="form-control">
      	</div>

      	<!-- <div class="form-group">
      		<label> Phone No: </label>
      		<input type="text" name="mobile" id="customer" placeholder="PhoneNo" class="form-control">
      	</div> -->

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="addRecord()">Save</button>

         <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>



    </div>
  </div>
</div>


<!-- //////////////// after update ////////////////// -->
<div class="modal fade" id="update_user_modal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Update Record</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
    
<div class="modal-body">
       
        <!--<div class="form-group">
          <label>  ID: </label>
          <input type="text" name="firstname" id="idindex" placeholder="ID" class="form-control">
        </div> -->

        <!-- <div class="form-group">
          <label> Last Name </label>
          <input type="text" name="lastname" id="lastname" placeholder="Last Name" class="form-control">
        </div> -->

        <div class="form-group">
          <label> ShopName: </label>
          <input type="text" name="email" id="updateshopname" placeholder="Shop Name" class="form-control">
        </div>

        <div class="form-group">
          <label> CustomerName: </label>
          <input type="text" name="mobile" id="updatecustomer" placeholder="Name" class="form-control">
        </div>

        <div class="form-group">
          <label> Address: </label>
          <input type="text" name="mobile" id="updateaddress" placeholder="Address" class="form-control">
        </div>

        <div class="form-group">
          <label> ContactNo: </label>
          <input type="text" name="mobile" id="updatecontact" placeholder="Mobile No." class="form-control">
        </div>

        <div class="form-group">
          <label> City: </label>
          <input type="text" name="mobile" id="updatecity" placeholder="City" class="form-control">
        </div>

        <div class="form-group">
          <label> GeoCoordinates: </label>
          <input type="text" name="mobile" id="updategc" placeholder="Geo Coordinates" class="form-control">
        </div>

      </div>      

      <!-- Modal footer -->
     <div class="modal-footer">
	                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	                <button type="button" class="btn btn-primary" onclick="UpdateUserDetails()" >Update</button>
	                <input type="hidden" id="hidden_user_id">
	 </div>



    </div>
  </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

<script>
	
$(document).ready(function () {
    readRecords(); 

    $("#btninsert").click(function(){
/* Single line Reset function executes on click of Reset Button */
$("#name")[0].reset();
$("#address")[0].reset();
});
	});

	function addRecord(){


		var address = $('#address').val();
  		var name = $('#name').val();
		$.ajax({

			url:"backend.php",
			type:'POST',
			data: {
				 address:address,
				 name:name
			},
			success:function(data, status){
				readRecords();
			},

		});

	}

//////////////////Display Records
	function readRecords(){
		
		var readrecords = "readrecords";
		$.ajax({
			url:"backend.php",
			type:"POST",
			data:{readrecords:readrecords},
			success:function(data,status){
				$('#records_content').html(data);
			},

		});
	}


/////////////delete userdetails ////////////
function DeleteUser(deleteid){

	var conf = confirm("Are you sure?");
	if(conf == true) {
	$.ajax({
		url:"backend.php",
		type:'POST',
		data: {  deleteid : deleteid},

		success:function(data, status){
			readRecords();
		}
	});
	}
}



function GetUserDetails(id){
	  $("#hidden_user_id").val(id);
    //alert(id);
	  $.post("backend.php", {
            id: id
        },
        function (data, status) {
            //alert(data);
            //JSON.parse() parses a string, written in JSON format, and returns a JavaScript object.
            var user = JSON.parse(data);
            alert(id);

            $("#updateshopname").val(user.ShopName);
            $("#updatecustomer").val(user.CustomerName);
            $("#updateaddress").val(user.Address);
            $("#updatecontact").val(user.ContactNo);
            $("#updatecity").val(user.City);
            $("#updategc").val(user.GeoCoordinates);
        }
    );
    $("#update_user_modal").modal("show");
}




function UpdateUserDetails() {
    var updateshopname = $('#updateshopname').val();
      var updatecustomer = $('#updatecustomer').val();
      var updateaddress = $('#updateaddress').val();
      var updatecontact = $('#updatecontact').val();
      var updatecity = $('#updatecity').val();
      var updategc = $('#updategc').val();
    var hidden_user_id = $("#hidden_user_id").val();
    //alert(hidden_user_id);

    

   $.post("backend.php", {
            hidden_user_id: hidden_user_id,
            updateshopname : updateshopname,
          updatecustomer : updatecustomer,
          updateaddress : updateaddress,
         updatecontact : updatecontact,
          updatecity : updatecity,
          updategc : updategc
        },
        function (data, status) {
            $("#update_user_modal").modal("hide");
            readRecords();
        }
    );
}

</script>

</body>
</html>
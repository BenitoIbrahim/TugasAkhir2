<?php 
session_start();
include("db_connect.php");

if(isset($_COOKIE['adminid'])&&$_COOKIE['adminemail']){
	
	$userid=$_COOKIE['adminid'];
$useremail=$_COOKIE['adminemail'];

$sqluser ="SELECT * FROM Administrator WHERE Password='$userid' && Email='$useremail'";

$retrieved = mysqli_query($db,$sqluser);
    while($found = mysqli_fetch_array($retrieved))
	     {
        $firstname = $found['Firstname'];
		    $nis= $found['NIS'];
			  $emails = $found['Email'];
			  $id= $found['id'];			  
   
  	     
}		 
		 
}else{
	 header('location:index.php');
      exit;
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Dasbor</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="icon" href="media/logoranca.ico" type="image/x-icon">

<!-- Bootstrap Core CSS -->
<link href="admin/css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="admin/css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="admin/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

<!-- side nav css file -->
<link href='admin/css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
<!-- //side nav css file -->
 
 <!-- js-->
<script src="admin/js/jquery-1.11.1.min.js"></script>
<script src="admin/js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="https://fonts.googleapis.com/css2?family=OCR+A+Extended&display=swap" rel="stylesheet">
<!--//webfonts-->

<!-- chart -->
<script src="admin/js/Chart.js"></script>
<!-- //chart -->

<!-- Metis Menu -->
<script src="admin/js/metisMenu.min.js"></script>
<script src="admin/js/custom.js"></script>
<link href="admin/css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
 <script src="script/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="script/sweetalert.css">
 
 <!-- <script src="jquery.js"></script> -->    
<link href="css/animate.min.css" rel="stylesheet"/>   
      <link rel="stylesheet" href="css/bootstrap-dropdownhover.css">

   
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"/>
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css"/>      

   
   <script src='https://code.jquery.com/jquery-1.12.4.js'></script>
   <script src='https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js'></script>
   <script src='https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js'></script>
   <script src='https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js'></script>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js'></script>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js'></script>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js'></script>
   <script src='https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js'></script>
   <script src='https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js'></script>
    
      <script>
      
      $(document).ready(function() {
    $('#example').DataTable( {
        
        
    } );
        } );
      
      </script>
<script type="text/javascript"> 
    $(document).on("click", ".open-Delete", function () {
        var myValue = $(this).data('id');
        swal({
            title: "Are you sure?",
            text: "You want to remove this staff from the database!",
            type: "warning",
            showCancelButton: true,
            cancelButtonColor: "red",
            confirmButtonColor: "green",
            confirmButtonText: "Yes, remove!",
            cancelButtonText: "No, cancel!",
            closeOnConfirm: false,
            closeOnCancel: false,
            buttonsStyling: false
        },
        function(isConfirm){
            if (isConfirm) {                                      	
                var vals=myValue;
                $.ajax ({
                    type : 'POST',
                    url: "upload.php",
                    data: { Valuedel: vals},
                    success: function(result) {
                        if(result=="not-okay"){
    
                        } else {
                            swal({title: "Deleted!",
                                text: "Staff has been deleted from the database.",
                                type: "success"},
                            function(){ 
                                location.reload();
                            });
                        }
                    }
                }); 
            } else {
                swal("Cancelled", "This user is safe :)", "error");
            }
        });
    });
</script>

<script type="text/javascript">
 $(document).on("click", ".open-Updatepicture", function () {
     var myTitle = $(this).data('id');
     $(".modal-body #bookId").val(myTitle);
     
}); 
 </script>
 	<!-- requried-jsfiles-for owl -->
									<!-- //requried-jsfiles-for owl -->
</head> 
<script type="text/javascript">
 $(document).on("click", ".open-Passwords", function () {
     
       var myT = $(this).data('id');
     var myTitle = $(this).data('ie');
       var myp = $(this).data('if');
       var mym = $(this).data('ig');
       var myn = $(this).data('ih');
       var myk = $(this).data('ij');
       var mykm = $(this).data('ik');
       
       
     $(".modal-title #oldname").val(myTitle);
       $(".modal-body #oldname").val(myTitle);
       $(".modal-body #oldpass").val(mykm);
     $(".modal-body #ss").val(myp);     
     $(".modal-body #bb").val(mym);
     $(".modal-body #cc").val(myn);
     $(".modal-body #dd").val(myk);
      $(".modal-body #tlahir").val(myT); 
}); 
 </script>

 <!-- Script block for handling action on checked rows -->
<script type="text/javascript"> 
    $(document).ready(function() {
        $("#perform-action-button").click(function() {
            var checkedRows = [];
            $("input[name='row-checkbox']:checked").each(function() {
                checkedRows.push($(this).val());
            });
            // Perform your desired action with the checked rows here
            console.log("Checked rows:", checkedRows);
            // Example action: alert the IDs of checked rows
            alert("Checked rows: " + checkedRows.join(", "));
        });
    });
</script>

<?php if(isset($_SESSION['memberadded'])){?>
 <script type="text/javascript"> 
 	          $(document).ready(function(){
 	          	                             swal({title: "Successful!", text: "Staff added successfully!!.", type: "success"});
                                  });
              </script>
            
           <?php 
	   session_destroy();		
		    }?>
		    <?php if(isset($_SESSION['memberexist'])){?>
                <script type="text/javascript"> 
            $(document).ready(function(){    	
    				              sweetAlert("Oops...", "There is arleady a staff with those details in the database", "error");     				              
                               });
                </script>
           <?php 
       	   session_destroy();}  
           ?>
            <?php if(isset($_SESSION['emptytextboxes'])){?>
                <script type="text/javascript"> 
            $(document).ready(function(){    	
    				              sweetAlert("Oops...", "You did not fill all the textboxes on the form", "error");     				              
                               });
                </script>
           <?php 
       	   session_destroy();}  
           ?>
           <?php if(isset($_SESSION['tutor'])){?>
                <script type="text/javascript"> 
            $(document).ready(function(){ 
                                    swal({
                                         title: "User removed successfully",
                                         text: "Do you want to remove another one?",
                                         type: "success",
                                         showCancelButton: true,
                                        confirmButtonColor: "green",
                                        confirmButtonText: "OK!",
                                        closeOnConfirm: true,
                                        closeOnCancel: true,
                                          buttonsStyling: false
                                        },
                     function(isConfirm){
                                      if (isConfirm) {                                      	
                                                         window.location ="administrator.php?id=2";
                                                     } 
                                           else {
                                                        window.location ="administrator.php";
                                                 }
                                         });
                                         
                                                    });
                </script>
           <?php 
       	   session_destroy();}  
           ?>
           <?php if(isset($_SESSION['cat'])){?>
                <script type="text/javascript"> 
            $(document).ready(function(){    	
    				              sweetAlert("Oops...", "This category arleady in the system", "error");     				              
                               });
                </script>
           <?php 
       	   session_destroy();}  
           ?>
           <?php if(isset($_SESSION['category'])){?>
                <script type="text/javascript"> 
            $(document).ready(function(){ 
                                    swal({
                                         title: "Category added successfully",
                                         text: "Do you want to add another one?",
                                         type: "success",
                                         showCancelButton: true,
                                        confirmButtonColor: "green",
                                        confirmButtonText: "OK!",
                                        closeOnConfirm: true,
                                        closeOnCancel: true,
                                          buttonsStyling: false
                                        },
                     function(isConfirm){
                                      if (isConfirm) {                                      	
                                                         window.location ="administrator.php?id=3";
                                                     } 
                                           else {
                                                        window.location ="administrator.php";
                                                 }
                                         });
                                         
                                                    });
       
                    </script>             
           <?php 
       	   session_destroy();}  
           ?>
           <?php if(isset($_SESSION['del'])){?>
                <script type="text/javascript"> 
            $(document).ready(function(){ 
                                    swal({
                                         title: "Category Deleted",
                                         text: "Do you want to delete another one?",
                                         type: "success",
                                         showCancelButton: true,
                                        confirmButtonColor: "green",
                                        confirmButtonText: "OK!",
                                        closeOnConfirm: true,
                                        closeOnCancel: true,
                                          buttonsStyling: false
                                        },
                     function(isConfirm){
                                      if (isConfirm) {                                      	
                                                         window.location ="admin.php";
                                                     } 
                                           else {
                                                        window.location ="administrator.php";
                                                 }
                                         });
                                         
                                                    });
       
                </script>
           <?php 
       	   session_destroy();}  
           ?>
 


 
 <?php if(isset($_SESSION['pass'])) {?>
<script type="text/javascript"> 

$(document).ready(function(){  
 		                           swal({title: "Successful!", text: "Staff details edited!!.", type: "success"});

                               });
       
                    </script>
      <?php  session_destroy(); }?>
      
      
      <?php   $sqlid ="SELECT * FROM Users Order BY id DESC";
			       $ret = mysqli_query($db,$sqlid);				                
                     while($found = mysqli_fetch_array($ret))
	                 {
                       $idsx=$found['id'];
                     }

                     $sqlnis ="SELECT * FROM Users Order BY id DESC";
			       $ret = mysqli_query($db,$sqlnis);				                
                     while($found = mysqli_fetch_array($ret))
	                 {
                       $nissx=$found['NIS'];
                     }
      
	  
	    

$sqluse ="SELECT * FROM Inorg ORDER BY id DESC ";
$retrieve = mysqli_query($db,$sqluse);
    while($foundk = mysqli_fetch_array($retrieve))
	     {
          $nama_kepsek = $foundk['Nama_kepsek'];
          $gelar= $foundk['Gelar'];
			    $nip= $foundk['NIP'];
			    $idz= $foundk['id'];
          $pname= $foundk['pname'];
		 }	 

  ?>

 <div id="Taxreceipted" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header" style="background:#222d32">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-weight: bold;color: #F0F0F0"><center>
        	 Cetak Data Siswa Berdasarkan NIS
        	</center></h4>
      </div>

      <div class="modal-body" >       	
      <form action="printbulk.php" method="post" target="_blank" onsubmit="return validateForm()">
  <div class="input-group" style="margin-bottom:10px">
    <span class="input-group-addon">From</span>
    <input id="text" type="number" class="form-control" name="startpoint" >
  </div>
  <div class="input-group" style="margin-bottom:10px">
    <span class="input-group-addon">To</span>
   <input type="number" class="form-control" name="endpoint" >
  </div>
  <div class="input-group">
    <span class="input-group-addon">NIS siswa mulai dari @</span>
    <input id="msg" type="text" class="form-control" name="receiptrange" placeholder="" value="<?php echo$nissx; ?>" readonly="readonly">
  </div>
  

      </div>
      <div class="modal-footer">
      	<input type="submit" class="btn btn-success" value="Submit" id="btns1" name="Change"> &nbsp;
      </div>
      </form> 
      </div>       
  </div>
  </div> 
 


  <div id="Passwords" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black; ">
      <div class="modal-header" style="background:#222d32">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-family: Times New Roman;color:#F0F0F0;font-weight:Bold;;">
        
                   Ubah Data Siswa <input style="border: none;background:#222d32; " type="text" id="oldname" value="" readonly="readonly" />
        	</h4>
      </div>
      <div class="modal-body">
        <table>
        	<form method="post" action="upload.php" enctype='multipart/form-data'>      
          <tr style="height:50px">
          <td><p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;&nbsp;Nama Lengkap:<label style="color: red;font-size:20px;">*</label></td>
          <td><input style="width:270px;" type="text" name="mfname" id='oldname' required></span></p></td>
          </tr>
          <tr >
            <td><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;Jenis Kelamin:<label style="color: red;font-size:20px;">*</label></td> 
            <td style="height:50px">
            <p>
                <span style="font-size: 15px; font-weight: bold;">
                    <input type="radio" id="laki-laki" name="gender" value="L" required>
                    <label for="laki-laki">&nbsp;L&nbsp;&nbsp;</label>
                </span>
                <span style="font-size: 15px; font-weight: bold;">
                    <input type="radio" id="perempuan" name="gender" value="P" required>
                    <label for="perempuan">&nbsp;P&nbsp;&nbsp;</label></span> </td>
            </p>
            </tr>
          <tr style="height:40px">
          <td><p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;&nbsp;NIS:<label style="color: red;font-size:20px;">*</label></td>
          <td><input style="width:270px;" type="number" name="msname" id='ss' required></span></p></td>
          </tr>
          <tr style="height:40px">
          <td><p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;&nbsp;NISN:<label style="color: red;font-size:20px;">*</label></td>
          <td><input style="width:270px;" type="text" name="mrank" id='bb' required></span></p></td>
          </tr>
          <tr style="height:40x">
          <td><p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;&nbsp;Tempatlahir:<label style="color: red;font-size:20px;">*</label></td>
          <td><input style="width:270px;" type="text" name="mbp"  id='cc' required></span></p></td>
          </tr>
          <tr style="height:40px">
          <td> <p ><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;&nbsp;Tanggal Lahir:<label style="color: red;font-size:20px;">*</label></td>
          <td><input style="width:270px;" type="date" name="mtlahir" id='oldpass' required></span></p></td>
          </tr>
          <tr style="height:50px">
          <td><p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;&nbsp;Alamat :<label style="color: red;font-size:20px;">*</label></td>
          <td><input style="width:270px;" type="text" name="malamat" id='dd' required></span></p></td>
          </tr>
          <tr style="height:40px">
          <td style="font-weight: bold;">&nbsp;&nbsp;&nbsp;Add profile picture:</td>
          <td>&nbsp;&nbsp;&nbsp;<input name='filed' type='file' id='filed' ></td>
          </tr>
          <input type="hidden" name="page" id="tlahir" accept='image/*' required/>
          </table>                                                       	      		 
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="Reset" id="amendreceipt" name="resetpass"> &nbsp;
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
      </div>
       </form>
  </div>
  </div>
<div id="Updatepicture" class="modal fade" role="dialog">
  <div class="modal-dialog" style="float:right;width:20%">
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header" style="background:#222d32">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">        	        	
        	</h4>
      </div>
      <div class="modal-body" >
        <center><p></p>
        	<form method="post" action="upload.php" enctype='multipart/form-data'>        		
            
        	<p style="margin-bottom:10px;">
        			Select picture<input name='file2' type='file' id='file2' >
           </p>  
           <p>
        	<input name='id' type='hidden' value='' id='bookId'>
        	<input name='category' type='hidden' value='Administrator'>
        	 <input type="hidden" name="page" value="users.php"/>                                                        	      		

           </p>     	      		
	                
        </center>
      </div>
      <div class="modal-footer">
                <input type="submit" class="btn btn-success" value="Change" id="btns1" name="Change"> &nbsp;
                  
      </div>
      </div>
       </form>
  </div>
  </div>
 
  <div id="Useradd" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header" style="background:#222d32">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-weight: bold;color: #F0F0F0"><center>
        	MASUKKAN DATA SISWA
        	</center></h4>
      </div>

      <div class="modal-body">
    <table>
        <form method="post" action="upload.php" enctype='multipart/form-data' style="width: 98%;">
            <tr style="height:50px">
            <p>
                <td><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;Nama Lengkap:<label style="color: red;font-size:20px;">*</label>
                <td><input style="width:270px;" type="text" name="mfname" required></span></td><span id="error-mfname" style="color: red; display: none;">Please enter Firstname</span></td>
            </p>
            </tr>
            <tr >
            <td><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;Jenis Kelamin:<label style="color: red;font-size:20px;">*</label></td> 
            <td style="height:50px">
            <p>
                <span style="font-size: 15px; font-weight: bold;">
                    <input type="radio" id="laki-laki" name="gender" value="L" required>
                    <label for="laki-laki">&nbsp;L&nbsp;&nbsp;</label>
                </span>
                <span style="font-size: 15px; font-weight: bold;">
                    <input type="radio" id="perempuan" name="gender" value="P" required>
                    <label for="perempuan">&nbsp;P&nbsp;&nbsp;</label></span> </td>
            </p>
            </tr>
            <tr style="height:40px">
            <p>
                <td><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;NIS<label style="color: red;font-size:20px;">*</label></td>
                <td><input style="width:270px;" type="number" name="msname" required></span> <span id="error-msname" style="color: red; display: none;">Please enter NIS</span></td>
            </p>
            </tr>
            <tr style="height:40px">
            <p>
                <td><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;&nbsp;NISN<label style="color: red;font-size:20px;">*</label></td>
                <td><input style="width:270px;" type="number" name="mrank" required></span>
                <span id="error-mrank" style="color: red; display: none;">Please enter NISN</span></td>
            </p>
            </tr>
            <tr style="height:40px">
            <p>
                <td><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;&nbsp;Tempat lahir<label style="color: red;font-size:20px;">*</label></td>
                <td><input style="width:270px;" type="text" name="mbp" required></span>
                <span id="error-mbp" style="color: red; display: none;">Please enter Tempatlahir</span></td>
            </p>
            </tr>
            <tr style="height: 30px">
              <td>
                  <span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp; Tanggal Lahir<label style="color: red; font-size: 20px;">*</label></span>
              </td>
              <td>
                  <input style="width: 270px;" type="date" name="mpassword" required>
                  <span id="error-mpassword" style="color: red; display: none;">Masukkan Tanggal lahir</span>
              </td>
          </tr>
            <tr style="height:40px">
            <p>
                <td><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp; &nbsp;Alamat<label style="color: red;font-size:20px;">*</label></td>
                <td><input style="width:270px;" type="text" name="malamat" required></span>
                <span id="error-malamat" style="color: red; display: none;">Please enter Email</span></td>
            </p>
            </tr>
            <tr style="height:40px" >
            <td style="font-weight: bold;"> &nbsp;&nbsp; &nbsp; Masukkan foto
            </td><td><input name='filed' type='file' id='filed' accept='image/*' required></td>
            </tr>
            <input type="hidden" name="page" value="admin.php"/>
    </table>
</div>

      <div class="modal-footer">
       <input type="submit" class="btn btn-success" value="Submit" id="addmember" name="addmember"> &nbsp;
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
      </div>
       </form>
  </div>
  </div> 
  
  <!-- <div id="Initialisation" class="modal fade" role="dialog">
  <div class="modal-dialog">
    
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header" style="background:#222d32">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-weight: bold;color: #F0F0F0"><center>
        	SYSTEM INFORMATION INITIALISATION
        	</center></h4>
      </div>
      	<form method="post" action="upload.php" enctype='multipart/form-data'>        		

      <div class="modal-body" >       	
      	<center> 
        		<p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;Org Name:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="orgname"></span></p>
        	    <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;Phone:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="orgphone"></span></p>
        		<p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;Email:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="orgemail"></span></p>
        	     <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;Website:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="orgwebsite"></span></p>
        	     <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">Active Year:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="orgyear"></span></p>
        	        Attach Organisation Logo:(<h7 style="color:red">Make sure it is a transparent image</h7>)<input name='filed' type='file' id='filed' >
                                   	 <input type="hidden" name="page" value="admin.php"/>                                                        	      		
         </center>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="Finish" id="addmember" name="orginitial"> &nbsp;
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
      </div>
       </form>
  </div>
  </div>  -->
  
 <div id="Initialisation2" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header" style="background:#222d32">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-weight: bold;color: #F0F0F0"><center>
        	Ubah Data Kepala Sekolah
        	</center></h4>
      </div>
      	<form method="post" action="upload.php" enctype='multipart/form-data'>        		

      <div class="modal-body" >  
        <tr style="height:50px">
          <td><p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">Kepala Sekolah<label style="color: red;font-size:20px;">*</label></td>
          <td><input style="width:270px;" type="text" name="orgkepsek" value="<?php if(isset($nama_kepsek)){echo$nama_kepsek;} ?>"></span></p></td>
        </tr>
        <tr style="height:50px">
          <td><p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">Gelar <label style="color: red;font-size:20px;">*</label></td>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<input style="width:270px;" type="text" name="orggelar" value="<?php if(isset($gelar)){echo$gelar;} ?>"></span></p></td>
        </tr>     	
        <tr style="height:50px">
          <td><p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">NIP <label style="color: red;font-size:20px;">*</label></td>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<input style="width:270px;" type="text" name="orgnip" value="<?php if(isset($nip)){echo$nip;} ?>"></span></p>
        </tr>
        <tr style="height:50px">
          <td>Tanda Tangan:(<h7 style="color:red">Pastikan latar belakang tanda tangan transparan </h7>)</td>
          <td>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<input name='filed' type='file' accept='image/*'  id='filed' ></td>
        </tr>
           <input type="hidden" name="page" value="admin.php"/>                                                        	      		
           	<input type="hidden" name="pageid" value="<?php echo$idz; ?>"/> </td>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="Update" id="addmember" name="orgupdate"> &nbsp;
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
      </div>
       </form>
  </div>
  </div> 


<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		<aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
                        

          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="sidebar-menu">
          <li class="header" style="text-align: center;">
          <h4 style="display: inline-block;">
                  <img src="media/sman1logo.png" alt="Logo SMAN 1 RANCABUNGUR" style="width: 100px; height: 100px; vertical-align: middle;"><br><br> 
                  SMAN 1 RANCABUNGUR
              </h4>
          </li>

              <li class="treeview">
                  <a href="admin.php">
                      <i class="fa fa-tv"></i> <span>Data Siswa</span>
                  </a>
              </li>
               <li class="treeview">
                <a href="#">
                <i class="fa fa-cog"></i>
                <span>Inisialisasi</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <!-- <li><a data-toggle='modal' data-id='' href='#Initialisation' class='open-Initial'><i class="fa fa-plus"></i>Tambah Info Sistem</a></li> -->
                  <li><a data-toggle='modal' data-id='' href='#Initialisation2' class='open-Initial2'><i class="fa fa-minus"></i>Ubah Kepala Sekolah</a></li>
                </ul>
              </li>
                            
              <li class="treeview">
                  <a data-toggle='modal' data-id='' href='#Useradd' class='open-adduser'><i class="fa fa-user"></i>Tambah Data</a>
         
              </li>
              <li class="treeview">
              	  <a  href="bulk.php" ><i class='fa fa-print'></i>Impor Data</a>
               </li>
              <li class="treeview">
              	  <a data-toggle='modal' href="#Taxreceipted" class="Open-Taxreceipted"><i class='fa fa-print'></i>Cetak Data</a>
               </li>
                          
                </ul>
          </div>
          <!-- /.navbar-collapse -->
      </nav>
    </aside>
	</div>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
		<div class="sticky-header header-section">
			<div class="header-left">
				<!--toggle button start-->
        <button id="showLeftPush" style="background-color: transparent;"><i class="fa fa-bars" style="color: #000000;"></i></button>
        <!--toggle button end-->
				<!--notification menu end -->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				
				
				<!--search-box-->
				
				<div class="profile_details" >		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img">
										<?php   
										$sql ="SELECT * FROM Profilepictures WHERE ids='$id' && Category='User'";
                                                $rget = mysqli_query($db,$sql);
												$num=mysqli_num_rows($rget);
                                                if($num!=0){
												                   while($found = mysqli_fetch_array($rget))
	                                                                {
                                                                       $profile= $found['name'];
		                                                            }
																	echo"<img src='admin/images/$profile' height='50px' width='50px' alt=''>";	   
												             }
												        else{
												           	echo"<img src='admin/images/profile.png' height='50px' width='50px' alt=''>";	   
														     	
												             }
										
										?>
										 </span> 
									<div class="user-name" >
										<p style="color:#1D809F;"><?php if(isset($nis))
                                            {echo"<strong>".$firstname." ".$nis." </strong>";} ?>
				                         </p>
										<span>Administrator&nbsp;<img src='admin/images/dot.png' height='15px' width='15px' alt=''>
										</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								 <!-- <li>
                                  <a data-toggle='modal' data-id='<?php echo$id; ?>' href='#Updatepicture' class='open-Updatepicture'><i class="fa fa-user"></i>Change profile picture</a>
                                 </li> -->
								<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
<div id="page-wrapper">
    <div class="main-page">
        <div class="charts">
            <div class="mid-content-top charts-grids">
                <div class="middle-content">
                    <h4 class="title">Data Siswa</h4>
                    <div class="alert alert-info">
                        <i class="fa fa-envelope"></i>&nbsp;Menampilkan Data Siswa SMAN 1 RANCABUNGUR
                    </div>
                    <div style="overflow-x: auto;">
                        <table id="example" class="display nowrap" style="width: 100%; table-layout: fixed;">
                            <colgroup>
                                <col style="width: 100px;">
                                <col style="width: 100px;">
                                <col style="width: 250px;">
                                <col style="width: 130px;">
                                <col style="width: 130px;">
                                <col style="width: 130px;">
                                <col style="width: 300px;">
                                <col style="width: 70px;">
                                <col style="width: 70px;">
                                <col style="width: 70px;">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>NIS</th>
                                    <th>NISN</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Alamat</th>
                                    <th>PRINT</th>
                                    <th>EDIT</th>
                                    <th>DELETE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sqlmember = "SELECT * FROM Users ";
                                $retrieve = mysqli_query($db, $sqlmember);
                                $count = 0;
                                while ($found = mysqli_fetch_array($retrieve)) {
                                    $firstname = $found['Firstname'];
                                    $nis = $found['NIS'];
                                    $nisn = $found['NISN'];
                                    $gender = $found['Gender'];
                                    $id = $found['id'];
                                    $bp = $found['Tempatlahir'];
                                    $contact = $found['Alamat'];
                                    $count = $count + 1;
                                    $get_time = $found['Time'];
                                    $tlahir = $found['Tanggallahir'];
                                    $names = $firstname . " " . $nis;
                              
                                    echo "<form action=\"printMilih.php\" method=\"post\" target=\"_blank\">";
                                    echo "
                                    <tr>  
                                      <td style='max-width: 10px; overflow: hidden;'>&nbsp;$nis</td>
                                      <td style='max-width: 100px; overflow: hidden;'>&nbsp;$nisn</td>
                                      <td style='max-width: 300px; overflow: hidden;'>&nbsp;$firstname</td>
                                      <td style='max-width: 100px; overflow: hidden;'>&nbsp;$gender</td>
                                      <td style='max-width: 50px; overflow: hidden;'>&nbsp;$bp</td>
                                      <td style='max-width: 50px; overflow: hidden;'>&nbsp;$tlahir</td>
                                      <td style='max-width: 400px; overflow: hidden;'>&nbsp;$contact</td>
                                      <td>
                                          <a href='card.php?id=$id' class='btn btn-success' title='click to print ID Card' target='_blank'><span class='glyphicon glyphicon-print' style='color:white;'></span></a>
                                      </td>
                                      <td>
                                          <a data-toggle='modal' data-id='$id' data-ie='$firstname' data-if='$nis' data-ig='$nisn' data-ih='$bp' data-ij='$contact' data-ik='$tlahir' class='open-Passwords btn btn-info' title='edit user details' href='#Passwords'><span class='glyphicon glyphicon-edit' style='color:white;'></span></a>
                                      </td>
                                      <td>
                                          <a data-id='$id' class='open-Delete btn btn-danger' title='delete user'><span class='glyphicon glyphicon-trash' style='color:white;'></span></a>
                                      </td>
                                  </tr>
                                  ";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
            <!--//sreen-gallery-cursual---->
        </div>
    </div>
    <!--footer-->
    <div class="footer">
        <p>© 2024 SMA NEGERI 1 RANCABUNGUR</p>
    </div>
    <!--//footer-->
</div>


		
	<!-- new added graphs chart js-->
	
    <script src="admin/js/Chart.bundle.js"></script>
    <script src="admin/js/utils.js"></script>
	
		
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="admin/js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>

  <script>
      // Validate form inputs before submission
      document.querySelector("form").addEventListener("submit", function(event) {
          var errors = false;

          // Check if input fields are empty
          var inputs = this.querySelectorAll("input[required]");
          for (var i = 0; i < inputs.length; i++) {
              if (!inputs[i].value) {
                  var fieldName = inputs[i].name;
                  document.getElementById("error-" + fieldName).style.display = "block";
                  errors = true;
              } else {
                  var fieldName = inputs[i].name;
                  document.getElementById("error-" + fieldName).style.display = "none";
              }
          }

          // Prevent form submission if there are errors
          if (errors) {
              event.preventDefault();
          }
      });
  </script>
  
	<!-- //Classie --><!-- //for toggle left push menu script -->
		
	<!--scrolling js-->
	<script src="admin/js/jquery.nicescroll.js"></script>
	<script src="admin/js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- side nav js -->
	<script src='admin/js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
		
	<!-- Bootstrap Core JavaScript -->
   <script src="admin/js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->
	 	<script src="css/bootstrap-dropdownhover.js"></script>
     <script>
    function validateForm() {
      var startpoint = document.getElementById("text").value;
      var endpoint = document.getElementsByName("endpoint")[0].value;
      
      // Periksa apakah kedua input memiliki nilai
      if (startpoint === "" || endpoint === "") {
        alert("Mohon isi NIS Siswa.");
        return false; // Mencegah pengiriman formulir jika ada input yang kosong
      }
      
      // Validasi lainnya dapat ditambahkan sesuai kebutuhan
      
      return true; // Izinkan pengiriman formulir jika semua validasi berhasil
    }
    </script>
</body>
</html>
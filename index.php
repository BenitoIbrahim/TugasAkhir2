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
                 
              </h4>
          </li>

              <li class="treeview">
                  <a data-toggle='modal' data-id='' href='admin.php' class='open-adduser'><i class="fa fa-user"></i>Dashboard</a>
         
              </li>

              <li class="treeview">
                  <a href="admin.php">
                      <i class="fa fa-tv"></i> <span>Data Penduduk</span>
                  </a>
              <!-- </li>
               <li class="treeview">
                <a href="#">
                <i class="fa fa-cog"></i>
                <span>Inisialisasi</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a data-toggle='modal' data-id='' href='#Initialisation' class='open-Initial'><i class="fa fa-plus"></i>Tambah Info Sistem</a></li>
                  <li><a data-toggle='modal' data-id='' href='#Initialisation2' class='open-Initial2'><i class="fa fa-minus"></i>Ubah Kepala Sekolah</a></li>
                </ul>
              </li> -->
                            
              <li class="treeview">
                  <a data-toggle='modal' data-id='' href='#Useradd' class='open-adduser'><i class="fa fa-user"></i>Tambah Data</a>

				  
				  
  <div id="Useradd" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header" style="background:#222d32">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-weight: bold;color: #F0F0F0"><center>
        	MASUKKAN DATA PENDUDUK
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
         
              </li>
              <!-- <li class="treeview">
              	  <a  href="bulk.php" ><i class='fa fa-print'></i>Impor Data</a>
               </li> -->
              <!-- <li class="treeview">
              	  <a data-toggle='modal' href="#Taxreceipted" class="Open-Taxreceipted"><i class='fa fa-print'></i>Cetak Data</a>
               </li> -->
                          
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
           
                    <div style="overflow-x: auto;">
                    <div class="container pt-5">	
		<h1>Grafik Sebaran Online Offline User</h1>
		<div class="chart-container" style="position: relative; height:40vh; width:80vw">
			<canvas id="OnlineUserGraphic"></canvas>
		</div>
	</div>

	<div class="container pt-5">	
		<h1>Grafik Sebaran Gender User</h1>
		<div class="chart-container" style="position: relative; height:40vh; width:80vw">
			<canvas id="genderGraphic"></canvas>
		</div>
	</div>
                    </div>
                    
                    
                </div>
            </div>
            <!--//sreen-gallery-cursual---->
        </div>
    </div>
    <!--footer-->

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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
	var gender = document.getElementById('genderGraphic');
	var myChart = new Chart(gender, {
		type: 'bar',
		data: {
			labels: ["Laki-Laki", "Perempuan"],
			datasets: [{
				label: 'Gender User',
				data: [50, 20],
				backgroundColor: [
					'rgba(255, 99, 71, 1)',
					'rgba(9, 31, 242, 0.8)',
					'rgba(255, 128, 6, 0.8)'
					],
				borderColor: [
					'rgba(255, 99, 71, 1)',
					'rgba(9, 31, 242, 0.8)',
					'rgba(255, 128, 6, 0.8)'
					],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				y: {
					beginAtZero: true
				}
			}
		}
	});

	var onlineUser = document.getElementById('OnlineUserGraphic');
	var myChart = new Chart(onlineUser, {
		type: 'bar',
		data: {
			labels: ["User Online", "User Offline"],
			datasets: [{
				label: 'Status User',
				data: [
					50,20
				],
				backgroundColor: [
					'rgba(79, 193, 0, 0.5)',
					'rgba(171, 0, 180, 0.5)',
					'rgba(255, 128, 6, 0.8)'
					],
				borderColor: [
					'rgba(255, 99, 71, 1)',
					'rgba(9, 31, 242, 0.8)',
					'rgba(255, 128, 6, 0.8)'
					],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				y: {
					beginAtZero: true
				}
			}
		}
	});

</script>
</html>
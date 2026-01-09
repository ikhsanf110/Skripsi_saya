<?php require_once("conn.php");
    if (!isset($_SESSION)) {
        session_start();
    } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Maaruf Katering</title> 
	<meta name="description" content="Website, Karawang"/>
	<meta name="keywords" content="Pakaian, Baju" />
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>
	<!-- end: Facebook Open Graph -->

    <!-- start: CSS --> 
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    
<?php include "header.php"; ?>
	
	<!-- start: Page Title -->
	<div id="page-title">

		<div id="page-title-inner">
 
			<!-- start: Container -->
			<div class="container">

				<h2><i class="ico-stats ico-white"></i>Deskripsi Produk</h2>

			</div>
			<!-- end: Container  -->

		</div>	

	</div>
	<!-- end: Page Title -->
	
	<!--start: Wrapper-->
	
      		<!-- start: Row -->
            
      		<div class="row">
            <div class="col-sm-6">
                    <?php                  
$query = mysqli_query($koneksi, "SELECT * FROM produk WHERE kode='$_GET[kd]'");
$data  = mysqli_fetch_array($query);
?>
        		<div class="clear">
          			<div class="icons-box">
                    
                   
                    
                    	<div class="title"><h2><?php echo $data['nama']; ?></h2></div>
                    	



<div class="hero-unit" style="margin-left: 13px">
<div class="span2"> <a class="btn btn-lg btn-primary btn-block btn-warning" onClick="history.go(-1);">&laquo; Kembali</a>
</div>
        
<div class="span2"> <a href="index.html" class="btn btn-lg btn-primary btn-block btn-success">Beli &raquo;</a>
</div>
<div class="clear">
    	<img src="admin/<?php echo $data['gambar']; ?>" class="img-rounded" align="center" alt="User Image" style="float:left;margin: 15px;border: 3px solid #333333;width: 300px;height: 350px"/> 
				
<table cellpadding="6">	

    <tr>
		<td align="left"><font size="5"><b>Harga</b></font></td>
        <td align="left"><font size="5"><b>:</b></font></td>
		<td align="left">
			<div>
				<font size="5"><b>Rp.<?php echo number_format($data['harga'],2,",",".");?>
				</b></font>
			</div>
		</td>
    </tr>

	<tr><td></td></tr>

    <!--tr>
    	<td align="left"><font size="5"><b>Stok</b></font></td>
        <td align="left"><font size="5"><b>:</b></font></td>
        <td align="left">
        	<div>
        		<font size="5"><b>
        			<//?php if ($data['stok'] >= 1){//echo '<strong style="color: blue;">Tersedia</strong>';} else {echo '<strong style="color: red;">Kosong</strong>'; }; 
        			?>
        		</b></font>
            </div>
        </td>
    </tr> -->
                        <!--<tr>
                        <td></td>
                        <td><h3>Satuan</h3></td>
                        <td><h3>:</h3></td>
                        <td><div><h3><//?php //echo $data['br_satuan']; ?></h3></div></td>
                        </tr>-->
                        
					<!--	<p>
						
						</p> -->
     
	<tr><td></td></tr>

   

    <tr><td></td></tr>

    <tr>
    	<td align="left"><font size="5"><b>Jenis</b></font></td>
    	<td align="left"><font size="5"><b>:</b></font></td>
        <td align="left">
        	<div><font size="5"><b><?php echo $data['jenis']; ?>
        	</b></font>
        	</div>
        </td>
    </tr>

    <!--tr><td></td></tr>

	<tr>                
        <td align="left"><font size="5"><b>Ukuran</b></font></td>
        <td align="left"><font size="5"><b>:</b></font></td>
        <td align="left">
        	<div><font size="5"><b><?php echo $data['ukuran']; ?></b></font>
        	</div>
        </td>
    </tr>-->

                        <!--<tr>
                        <td></td>
                        <td><h3>Size</h3>
                        
                        <div class="text">
                              <label class="col-sm-6 col-sm-6 control-label"></label>
                             <div class="col-sm-6">
                            <select id="size" name="size" class="form-control" required>
                            <option value="All Size">All Size</option>
                               </select>
                              
                            </div> </div>
                            </td>
                            </tr>-->
    <tr><td></td></tr>

    <!--tr>
        <td align="left"><font size="5"><b>Warna</b></font></td>
        <td align="left"><font size="5"><b>:</b></font></td>
        <td align="left">
        	<div><font size="5"><b><?php echo $data['warna']; ?></b></font>
        	</div>
        </td>
    </tr>-->

                        <!--<tr>
                        	<td></td>
                        	
                        	<td><h3>Color</h3>
                        	<div class="text">
                              <label class="col-sm-6 col-sm-6 control-label"></label>
                              <div class="col-sm-6">
                            <select id="color" name="color" class="form-control" required>
                            <option value="black">Black</option>
                            <option value="dark blue">Dark Blue</option>
                            <option value="red">Red</option>
                            <option value="grey">Grey</option>
                            <option value="white">White</option>
                            
                            </select>
                              
                            </div></div>
                            </td>
                        </tr>-->  
    <tr><td></td></tr>

    <tr>
        <td align="left"><font size="5"><b>Keterangan</b></font></td>
        <td align="left"><font size="5"><b>:</b></font></td>
        <td align="left">
        	<div><font size="5"><b><?php echo $data['keterangan']; ?></b></font>
        	</div>
        </td>
    </tr>
    
</table>

</div>

</div>
        		</div>
<!---->
      		</div>
			<!-- end: Row -->
					
					
				</div>	
				
					
				</div>
				
                </div>
			</div>
			<!--end: Row-->
	
		</div>
		
                        

                         
		<!--end: Container-->
				
		<!--start: Container -->
    	<div class="container">	
      		
			<hr>
		
			<!-- start Clients List 
			<div class="clients-carousel">
		
				<ul class="slides clients">
					<li><img src="img/logos/1.png" alt=""/></li>
					<li><img src="img/logos/2.png" alt=""/></li>	
					<li><img src="img/logos/3.png" alt=""/></li>
					<li><img src="img/logos/4.png" alt=""/></li>
					<li><img src="img/logos/5.png" alt=""/></li>
					<li><img src="img/logos/6.png" alt=""/></li>
					<li><img src="img/logos/7.png" alt=""/></li>
					<li><img src="img/logos/8.png" alt=""/></li>
					<li><img src="img/logos/9.png" alt=""/></li>
					<li><img src="img/logos/10.png" alt=""/></li>		
				</ul>
		
			</div>
			end Clients List -->
		
			
		
		</div>
		<!--end: Container-->	

	</div>
	<!-- end: Wrapper  -->			

    <!-- start: Footer Menu -->
	<div id="footer-menu" class="hidden-tablet hidden-phone">

		<!-- start: Container -->
		<div class="container">
			
			<!-- start: Row -->
			<div class="row">

				<!-- start: Footer Menu Logo -->
				<div class="span2">
					<div id="footer-menu-logo">
						<a href="#"><img src="img/logod.png" alt="logo" /></a>
					</div>
				</div>
				<!-- end: Footer Menu Logo -->

				<!-- start: Footer Menu Links-->
				<div class="span9">
					
					<div id="footer-menu-links">

						<ul id="footer-nav">

							<<li><a href="kaos.php">Nasi Kotak</a></li>

							<li><a href="baju.php">Tumpeng</a></li>

							<li><a href="kemeja.php">Prasmanan</a></li>

							<li><a href="sweater.php">Snack</a></li>

							<!--li><a href="gamis.php">Gamis</a></li>

							<li><a href="celana.php">Celana</a></li>
							
							<li><a href="sandal.php">Sandal</a></li>

							<li><a href="sepatu.php">Sepatu</a></li>

							<li><a href="tas.php">Tas</a></li>

							<li><a href="jamtangan.php">Jam Tangan</a></li>

							<li><a href="aksesoris.php">Aksesoris</a></li>-->

						</ul>

					</div>
					
				</div>
				<!-- end: Footer Menu Links-->

				<!-- start: Footer Menu Back To Top -->
				<div class="span1">
						
					<div id="footer-menu-back-to-top">
						<a href="#"></a>
					</div>
				
				</div>
				<!-- end: Footer Menu Back To Top -->
			
			</div>
			<!-- end: Row -->
			
		</div>
		<!-- end: Container  -->	

	</div>	
	<!-- end: Footer Menu -->

	<?php include "footer.php"; ?>
    
<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script def src="js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html>	
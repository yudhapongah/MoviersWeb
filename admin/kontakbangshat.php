<?php
	session_start();

	if($_SESSION['status'] != "login") {
		header("location:login.php");
	}
	$my = 3;
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Moviers</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-post.min.css" rel="stylesheet">

  </head>

  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand" href="index.html">MOVIERS</a>
        <a class="btn btn-primary" href="src/process/logout.php">Keluar</a>
        </div>
    </nav>

    <!-- Masthead -->
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-10 mx-auto">
            <h1 class="mb-10">KONTAK</h1>
          </div>
</div>
      </div>
    </header>

    <!-- Image Showcases -->
    <section class="showcase">
      <div class="container-fluid p-2">
        <div class="row no-gutters">
         <div class="col-12 showcase-text">
            
            <div class="nav" id="topnav">
				<a href="kontakpongah.php"><p style="text-indent: 20em;">Yudha Pongah</p></a>
				<a href="kontakkiplik.php"><p style="text-indent: 3em;">Rafli Wahidin</p></a>
				<a href="kontakbangshat.php"><p style="text-indent: 3em;">Maulana Shatrya</p></a>
  			</a>
			</div>
            
            <br/>
            <div class="col-lg-8">      
            <div class="testimonial-item mx-auto mb-2 mb-lg-2">
              <img src="img/testimonials-3.jpg" height="233">
              <h2><br/>Biodata</h2>
              <p class="font-weight-light mb-0">
                </p>
             
                     <?php
		include 'src/process/connection.php';
		$sql = "SELECT * FROM biodata WHERE id='$my'";
		$query = mysqli_query($dbconnect, $sql) or die (mysqli_error($dbconnect));
		while($row = mysqli_fetch_array($query)) :
	?>
    
	<div class="bio">
		<div class="containt">
			<div class="tag">
            <form method="POST" action="src/process/bio.php">
				<div id="bio">
				<table>
					<tr>
						<td>Nama </td>
						<td>:</td>
						<td><input type="text" name="nama" value="<?= $row['nama']; ?>"></td>
					</tr>
					<tr>
						<td>Tempat/Tanggal Lahir </td>
						<td>:</td>
						<td><input type="text" name="tmpt" value="<?= $row['tmpt_lahir']; ?>"> / <input type="text" name="tgl" value="<?= $row['tgl_lahir']; ?>"></td>
					</tr>
					<tr>
						<td>Alamat </td>
						<td>:</td>
						<td><input type="text" name="alamat" value="<?= $row['alamat']; ?>"></td>
					</tr>
					<tr>
						<td>Hobi </td>
						<td>:</td>
						<td><input type="text" name="hobi" value="<?= $row['hobi']; ?>"></td>
					</tr>
					<tr>
						<td>
							<input type="hidden" name="id" value="<?= $my; ?>">
							<input type="submit" name="save" value="Save">
						</td>
					</tr>
				</table>
				</div>
                </form>
			</div>
		</div>
	</div>
    
	<?php
		endwhile;
	?>
    
    <br/>
    <div class="label"><h2>Pengalaman</h2></div>
	<div class="bio">
		<div class="containt">
			<div class="tag">
				<div id="exp">			
				<?php
					$sql = "SELECT * FROM experience WHERE pemilik='$my'";
					$query = mysqli_query($dbconnect, $sql) or die (mysqli_error($dbconnect));
					while($row = mysqli_fetch_array($query)) :
				?>
				<?= $row['name']; ?> - <?= $row['organization']; ?>
				<br/>
				<?= $row['start']; ?> - 
					<?php
						if($row['end']=="0000")
							echo "now";
						else
							echo $row['end'];
					?> <br/>
				<?php endwhile; ?>		
                <form method="POST" action="src/process/experience.php" id="fexp">
					<input type="text" name="name" placeholder="Jabatan"> - <input type="text" name="org" placeholder="Organisasi"><br>
					<input type="text" maxlength="4" name="start" placeholder="Awal Menjabat"> - <input id="date"type="text" name="end" maxlength="4" placeholder="Akhir Menjabat"><br>
					<input type="hidden" name="pemilik" value="1">
					<input type="submit" name="Save" value="Save">
				</form>		
                </div>
			</div>
		</div>
	</div>
    
     <br/>
     <div class="label"><h2>Kontak</h2></div>
	            <?php
					$sql = "SELECT * FROM skill WHERE id=3";
					$query = mysqli_query($dbconnect, $sql) or die (mysqli_error($dbconnect));
					while($row = mysqli_fetch_array($query)) :
				?>
                <tr> <td>Email</td> <td>:</td> <td> <?= $row['Email']; ?> </td> </tr>
                <br/>
				<tr> <td>Handphone</td> <td>:</td> <td> <?= $row['Handphone']; ?> </td></tr>
                
                <br/>
				<?php endwhile; ?>				
                </div>
			</div>
		</div>
	</div>
            
            </div>
            </div>
          </div>
        </div>
        </div>
        
        
        
    </section>
    
    <!-- Footer -->
    <footer class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <ul class="list-inline mb-2">
              <li class="list-inline-item">
                <a href="#">Tentang</a>
              </li>
              </ul>
            <p class="text-muted small mb-4 mb-lg-0">&copy; Moviers Punya 2018</p>
          </div>
          <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">
                <a href="https://web.facebook.com/rafli.wahidin">
                  <i class="fa fa-facebook fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item mr-3">
                <a href="https://twitter.com/yudha__aswad">
                  <i class="fa fa-twitter fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/maulanashatrya/">
                  <i class="fa fa-instagram fa-2x fa-fw"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

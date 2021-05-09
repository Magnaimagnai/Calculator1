<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Toonii mashin!</title>
  </head>
  <body>
    <h1>Calculate</h1>
    <?php
           function muravah(){
           echo "<br>";
      }
    ?>
    <?php function button(){
      echo '<button type="submit" class="btn btn-primary">BOD</button>';
    } ?>
	<div class="container">
	  <div class="row">
   	<div class="col-12">
      	<form action="calculate.php" method="POST">
             <label class="form-label" >Too1</label>
             <input type="number" placeholder="Toogoo oruulna uu" name="too1" required/>
             <?php  muravah(); ?> <!-- function duudaj bna -->
	<div class="row1">
      <label class="form-label" >uildel</label>
			 <select class="songoh" name="uildel" aria-label="uildel" required >
                    <option selected></option>
                    <option value="-">-</option>
                    <option value="+">+</option>
                    <option value="/">/</option>
					          <option value="*">*</option>
			 </select>
	</div>
             <label class="form-label" >Too2</label>
             <input type="number" placeholder="Toogoo oruulna uu" name="too2" required />
		<div class="button">
             <button type="submit" class="btn btn-primary">BOD</button>
             <?php button();?>
	    </div>
    </form>
	</div>
	</div>
	</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>

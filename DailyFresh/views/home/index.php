<script>
function process()
{
var url="http://localhost/meals/weekly/" + document.getElementById("url").value;
location.href=url;
return false;
}
</script>

</div></div>

<div class="container-fluid" "float right">
<form onSubmit="return process();">
Weekly Code: <input type="text" name="url" id="url"> <input type="submit" value="go">
</form>
</div>

<div class="container-fluid">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="http://localhost/assets/img/second.png" alt="First slide">
	    <div class="carousel-caption d-none d-md-block">
    <h1>Dinner is Solved</h1>

  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://localhost/assets/img/img2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://localhost/assets/img/slide3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<div class="container">

<?php include("sliderMain.php"); ?>
<?php include("homePageText.php"); ?>
			
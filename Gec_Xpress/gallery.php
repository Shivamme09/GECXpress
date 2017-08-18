<!DOCTYPE html>
<html>
    <title> Gallery</title>
            <link rel="icon" href="images/bulb_logo.png"/>
<head>
    
<style>
img {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

img:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The close1 Button */
.close1 {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close1:hover,
.close1:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}
</style>
</head>
<body>
<?php
include 'header.php';
?>
    <h2 style="text-align:center;padding-top: 50px;padding-bottom: 50px;">Photo Gallery</h2>
<img id="myImg1" src="gallery/1001.jpg" alt="Trolltunga, Norway" width="330" height="200">
<img id="myImg2" src="gallery/1002.jpg" alt="Trolltunga, Norway" width="330" height="200">
<img id="myImg3" src="gallery/1003.jpg" alt="Trolltunga, Norway" width="330" height="200">
<img id="myImg4" src="gallery/1004.jpg" alt="Trolltunga, Norway" width="330" height="200">
<img id="myImg5" src="gallery/1005.jpg" alt="Trolltunga, Norway" width="330" height="200">
<img id="myImg6" src="gallery/1006.jpg" alt="Trolltunga, Norway" width="330" height="200">
<img id="myImg7" src="gallery/1007.jpg" alt="Trolltunga, Norway" width="330" height="200">
<img id="myImg8" src="gallery/1008.jpg" alt="Trolltunga, Norway" width="330" height="200">
<img id="myImg9" src="gallery/1009.jpg" alt="Trolltunga, Norway" width="330" height="200">
<img id="myImg11" src="gallery/1011.jpg" alt="Trolltunga, Norway" width="330" height="200">
<img id="myImg12" src="gallery/1012.jpg" alt="Trolltunga, Norway" width="330" height="200">
<img id="myImg13" src="gallery/1013.jpg" alt="Trolltunga, Norway" width="330" height="200">
<img id="myImg14" src="gallery/1014.jpg" alt="Trolltunga, Norway" width="330" height="200">
<img id="myImg15" src="gallery/1015.jpg" alt="Trolltunga, Norway" width="330" height="200">
<img id="myImg16" src="gallery/1016.jpg" alt="Trolltunga, Norway" width="330" height="200">
<img id="myImg10" src="gallery/1017.jpg" alt="Trolltunga, Norway" width="330" height="200">

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close1">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg1');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that close1s the modal
var span = document.getElementsByClassName("close1")[0];

// When the user clicks on <span> (x), close1 the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg2');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that close1s the modal
var span = document.getElementsByClassName("close1")[0];

// When the user clicks on <span> (x), close1 the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg3');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that close1s the modal
var span = document.getElementsByClassName("close1")[0];

// When the user clicks on <span> (x), close1 the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg4');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that close1s the modal
var span = document.getElementsByClassName("close1")[0];

// When the user clicks on <span> (x), close1 the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg5');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that close1s the modal
var span = document.getElementsByClassName("close1")[0];

// When the user clicks on <span> (x), close1 the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg6');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that close1s the modal
var span = document.getElementsByClassName("close1")[0];

// When the user clicks on <span> (x), close1 the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg7');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that close1s the modal
var span = document.getElementsByClassName("close1")[0];

// When the user clicks on <span> (x), close1 the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg8');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that close1s the modal
var span = document.getElementsByClassName("close1")[0];

// When the user clicks on <span> (x), close1 the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg9');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that close1s the modal
var span = document.getElementsByClassName("close1")[0];

// When the user clicks on <span> (x), close1 the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg10');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that close1s the modal
var span = document.getElementsByClassName("close1")[0];

// When the user clicks on <span> (x), close1 the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg11');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that close1s the modal
var span = document.getElementsByClassName("close1")[0];

// When the user clicks on <span> (x), close1 the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg12');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that close1s the modal
var span = document.getElementsByClassName("close1")[0];

// When the user clicks on <span> (x), close1 the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg13');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that close1s the modal
var span = document.getElementsByClassName("close1")[0];

// When the user clicks on <span> (x), close1 the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg14');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that close1s the modal
var span = document.getElementsByClassName("close1")[0];

// When the user clicks on <span> (x), close1 the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg15');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that close1s the modal
var span = document.getElementsByClassName("close1")[0];

// When the user clicks on <span> (x), close1 the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg16');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that close1s the modal
var span = document.getElementsByClassName("close1")[0];

// When the user clicks on <span> (x), close1 the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg17');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that close1s the modal
var span = document.getElementsByClassName("close1")[0];

// When the user clicks on <span> (x), close1 the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg18');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that close1s the modal
var span = document.getElementsByClassName("close1")[0];

// When the user clicks on <span> (x), close1 the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
<br><br><br><br><br><br>

<?php
include 'footer.php';
?>
</body>
</html>

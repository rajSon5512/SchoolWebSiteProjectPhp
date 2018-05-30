
<div class="slide_div" >
   
    <img class="mySlides img_slide" src="../../MIniProjectWT/Campus images/bf65dd444e8a0cae41c90233a56034ec.jpg" style="    display:block;width: 100%;"  >
    <img class="mySlides img_slide" src="../../MIniProjectWT/Campus images/school_campus.jpg" style="    display:block;width: 100%;" >
    <img class="mySlides img_slide" src="../../MIniProjectWT/Campus images/IMG_1997-600-x-400.jpg" style="    display:block;width: 100%;" >

  
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000); // Change image every 2 seconds
}
</script>

<div class="slider" id="slider1">
    <img src="https://source.unsplash.com/1200x300?cool" alt="" />
    <img src="https://source.unsplash.com/1200x300?beauty" alt="" />
    <img src="https://source.unsplash.com/1200x300?sad" alt="" />
    <img src="https://source.unsplash.com/1200x300?happy" alt="" />
    <img src="https://source.unsplash.com/1200x300?ass" alt="" />
</div>
<style>
    .slider {
        border-radius: 10px;
        margin-top: 5px;
        position: relative;
        max-width: 100%;
        height: 300px;
    }

    .slider img {
        position: absolute;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>

<script>
    var slider = document.getElementById("slider1");
    var images = slider.getElementsByTagName("img");

    var currentImage = 0;

    setInterval(function() {
        for (var i = 0; i < images.length; i++) {
            images[i].style.opacity = 0;
        }
        currentImage = (currentImage + 1) % images.length;
        images[currentImage].style.opacity = 1;
    }, 2000);
</script>
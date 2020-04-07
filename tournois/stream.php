<?php
if(!empty($_GET)){
    $videoId = $_GET['id'];
}

require('../src/header.php')
?>

<div class="body-center">
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
        <div class="my-3 py-3">
            <h2 class="display-5">TIPLAY Stream</h2>
            <p class="lead">Baima</p>
          </div>
        <div class=" bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
         <div id="player"></div>

    <script>
      // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
            height: '320em',
            width: '100%',
            videoId: '<?= $videoId ?>',
            playerVars: { 'autoplay': 1, 'controls': 0 },
            events: {
            'onReady': onPlayerReady
            }
        });
      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        event.target.playVideo();
      }

      
      function stopVideo() {
        player.stopVideo();
      }

      //event.target.getVideoData().title
    </script>
    </div>
</div>

<?php
require('../src/footer.php')
?>

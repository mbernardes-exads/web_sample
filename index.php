<?php
//to try banner 300*250 type html on adnflow, targeting ZID 212
$tag_tracker = isset($_GET['tag']) ? $_GET['tag'] : '';
$click_url = isset($_GET['click_url']) ? $_GET['click_url'] : '';

var_dump($tag_tracker);
var_dump($click_url);
?>

<html>
  <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  </head>
  <body>
    website to make some tests<br /><br />

    <!--<p>video slider ad - adnflow</p>
    <script type="application/javascript" src="https://a.adnflow.com/video-slider.js"></script>
    
    <script type="application/javascript">
    var adConfig = {
        "idzone": 230,
        "frequency_period": 5,
        "close_after": 5,
        "on_complete": "repeat",
        "screen_density": 25,
        "cta_enabled": 1,
        "branding_enabled": 1
    };
    VideoSlider.init(adConfig);
    </script>-->

    

    <!--<script async type="application/javascript" src="https://a.magsrv.com/ad-provider.js"></script>
      <p>300*250 ad - ExoClick</p>
      <ins class="eas6a97888e2" data-zoneid="5017050" data-keywords="keywords" data-sub="123450000"></ins>

      <p>300*250 ad (adult content) - ExoClick</p>
      <ins class="eas6a97888e2" data-zoneid="5160872"></ins>  
    <script>(AdProvider = window.AdProvider || []).push({"serve": {}});</script>-->

    
    
    <!--<script async type="application/javascript" src="https://a.native7.com/ad-provider.js"></script>
      <p>300*250 ad - native7</p>
      <ins class="easc26993f32" data-zoneid="596"></ins> 
    <script>(AdProvider = window.AdProvider || []).push({"serve": {}});</script>-->


    
    <script async type="application/javascript" src="https://a.adnflow.com/ad-provider.js"></script>
      <p>DFPI ad - adnflow</p>
      <ins class="easa8d6n9f735" data-zoneid="210"></ins> 

      <p>300x250 ad - adnflow</p>
      <ins class="easa8d6n9f72" data-zoneid="212"></ins>

      <p>native ad - adnflow</p>
      <ins class="easa8d6n9f720" data-zoneid="216"></ins>
    <script>(AdProvider = window.AdProvider || []).push({"serve": {}});</script>

    
    
    <!--<p>push notification ad</p>
    <script type="application/javascript">
      pn_idzone = 214;
      pn_sleep_seconds = 0;
      pn_is_self_hosted = 0;
      pn_soft_ask = 1;
      pn_filename = "/worker.js";
      pn_soft_ask_horizontal_position = "left";
      pn_soft_ask_vertical_position = "top";
      pn_soft_ask_title_enabled = 1;
      pn_soft_ask_title = "Click ALLOW to continue";
      pn_soft_ask_description = "Would you like to receive great special offers &amp; promotions?";
      pn_soft_ask_yes = "ALLOW";
      pn_soft_ask_no = "NO, THANKS"; 
    </script>
    <script type="application/javascript" src="https://a.adnflow.com/pn.php"></script>-->


    
    <!--<p>in-stream video ad</p>
    <script src="https://cdn.fluidplayer.com/v3/current/fluidplayer.min.js"></script>
  
    <video id="my-video" controls="" style="width: 640px; height: 360px;">
        <source src="file_example.mp4" type="video/mp4">
    </video>
    
    <script type="application/javascript">
        var testVideo = fluidPlayer(
            "my-video",
            {
                vastOptions: {
                    "adList": [
                        {
                            "roll": "preRoll",
                            "vastTag": "https://s.adnflow.com/splash.php?idzone=218"
                        },
                        {
                            "roll": "midRoll",
                            "vastTag": "https://s.adnflow.com/splash.php?idzone=218",
                            "timer": 8
                        },
                        {
                            "roll": "midRoll",
                            "vastTag": "https://s.adnflow.com/splash.php?idzone=218",
                            "timer": 10
                        },
                        {
                            "roll": "postRoll",
                            "vastTag": "https://s.adnflow.com/splash.php?idzone=218"
                        }
                ]
            }
    }
        );
    </script>-->
    
  </body>
</html>

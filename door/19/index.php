<!-- 
 __    __       ___       __    __       ___          
|  |  |  |     /   \     |  |  |  |     /   \         
|  |__|  |    /  ^  \    |  |__|  |    /  ^  \        
|   __   |   /  /_\  \   |   __   |   /  /_\  \       
|  |  |  |  /  _____  \  |  |  |  |  /  _____  \   __ 
|__|  |__| /__/     \__\ |__|  |__| /__/     \__\ (_ )
                                                   |/ 
.__   __.  _______ .______       _______   __         
|  \ |  | |   ____||   _  \     |       \ |  |        
|   \|  | |  |__   |  |_)  |    |  .--.  ||  |        
|  . `  | |   __|  |      /     |  |  |  ||  |        
|  |\   | |  |____ |  |\  \----.|  '--'  ||__|        
|__| \__| |_______|| _| `._____||_______/ (__)      
 -->
<?php 
// AUTHOR ============================================
// Wenn kein link angegeben wird, dann verschwindet das jeweilige Icon von der Seite
$author_name="Journocode";
$author_tw="journocode";
$author_fb="Journocode";
$author_homepage="http://www.journocode.com";
//NOTIFICATION
$notification_text="";
//========================================================
$site_name="Journocode Advent Calendar 2017";
$title="Scraping for Everyone";
$description="Always wanted to learn how to scrape a website? Whether you’re a nerd or a newbie, we got you covered.";
$share_text="Always wanted to learn how to scrape a website? Whether you’re a nerd or a newbie, @journocode got you covered.";
 
//=========================================================
// Function for basic field validation (present and neither empty nor only white space
$base_url="http://advent17.journocode.com";
$DEBUG = False;
date_default_timezone_set("Europe/Berlin");
$date1 = new DateTime('NOW');
$date2 = new DateTime("2017-12-00");
function debug($data,$DEBUG) {
if($DEBUG){
if(is_array($data) || is_object($data)){
echo("<script>console.log('PHP: ".json_encode($data)."');</script>");
} else {
echo("<script>console.log('PHP: ".$data."');</script>");
}
}
}
function IsNullOrEmptyString($question){
return (!isset($question) || trim($question)==='');
}
session_start();
// session_unset ();
//Code for day calculating
$day_delta = $date2->diff($date1)->format("%r%a");
$dir_num = (int)basename(__DIR__); 
$door_diff = $day_delta-$dir_num;
$show = False;
if($door_diff >= 0){
$show = True;
}
$door_url="../";
if ($day_delta > 0){
$door_url="/door/".(string)$day_delta."/";
}
//increase count and save to file with lock if session doesnt have it, else just read from session
$count=0;
if(!isset($_SESSION['day'.(string)$dir_num])) {
debug("No Session found",$DEBUG );
$file = 'count.txt';
if (!file_exists($file)) {
debug("File not existed",$DEBUG );
touch($file);
debug("Touch File",$DEBUG );
}else{
debug("File existed",$DEBUG );
}
//Open the File Stream
$handle = fopen($file, "r+");
//Lock File, error if unable to lock
if(flock($handle, LOCK_EX)) {
$size = filesize($file);
$count = $size === 0 ? 0 : fread($handle, $size); //Get Current Hit Count
$count = $count + 1; //Increment Hit Count by 1
ftruncate($handle, 0); //Truncate the file to 0
rewind($handle); //Set write pointer to beginning of file
fwrite($handle, $count); //Write the new Hit Count
flock($handle, LOCK_UN); //Unlock File
}else{
debug("Warning could not lock File!",$DEBUG );
}
$_SESSION['day'.(string)$dir_num] = $count; 
} else{
debug("Session found",$DEBUG );
$count=$_SESSION['day'.(string)$dir_num];
}
debug("Count",$DEBUG );
debug((string)$count,$DEBUG );
// else {
//     echo "Could not Lock File!";
// }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta property="jc:door_diff" content="<?= $door_diff ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="Pagekit">
    <link rel="shortcut icon" href="http://www.advent17.journocode.com/assets/ico/fav.ico">
    <?php if($show) : ?>
    <meta property="og:site_name" content="<?=$site_name?>">
    <meta property="og:title" content="<?=$title?>">
    <meta property="og:description" content="<?=$description?>">
    
    <meta property="og:type" content="website">
    <meta property="og:image" content="http://www.advent17.journocode.com/door/19/assets/share.png">
    <meta property="fb:app_id" content="1593595690933146" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@journocode">
    <meta name="twitter:title" content="<?=$title?>">
    <meta name="twitter:description" content="<?=$description?>">
    <meta name="twitter:image" content="http://www.advent17.journocode.com/door/19/assets/share.png">
    <title>
      <?=$title?>
    </title>
    <?php else : ?>
    <title>Oops, you are too early!
    </title>
    <meta name="robots" content="noindex" />
    <?php endif; ?>
    <link href="http://www.journocode.com/wordpress/wp-content/uploads/fbrfg/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="http://www.journocode.com/wordpress/wp-content/uploads/fbrfg/apple-touch-icon-72x72.png" rel="apple-touch-icon-precomposed">
    <link href="../../dist/style.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="57x57" href="http://www.journocode.com/wordpress/wp-content/uploads/fbrfg/apple-touch-icon-57x57.png?v=gAAQ8zKY9d">
    <link rel="apple-touch-icon" sizes="60x60" href="http://www.journocode.com/wordpress/wp-content/uploads/fbrfg/apple-touch-icon-60x60.png?v=gAAQ8zKY9d">
    <link rel="apple-touch-icon" sizes="72x72" href="http://www.journocode.com/wordpress/wp-content/uploads/fbrfg/apple-touch-icon-72x72.png?v=gAAQ8zKY9d">
    <link rel="apple-touch-icon" sizes="76x76" href="http://www.journocode.com/wordpress/wp-content/uploads/fbrfg/apple-touch-icon-76x76.png?v=gAAQ8zKY9d">
    <link rel="apple-touch-icon" sizes="114x114" href="http://www.journocode.com/wordpress/wp-content/uploads/fbrfg/apple-touch-icon-114x114.png?v=gAAQ8zKY9d">
    <link rel="apple-touch-icon" sizes="120x120" href="http://www.journocode.com/wordpress/wp-content/uploads/fbrfg/apple-touch-icon-120x120.png?v=gAAQ8zKY9d">
    <link rel="apple-touch-icon" sizes="144x144" href="http://www.journocode.com/wordpress/wp-content/uploads/fbrfg/apple-touch-icon-144x144.png?v=gAAQ8zKY9d">
    <link rel="apple-touch-icon" sizes="152x152" href="http://www.journocode.com/wordpress/wp-content/uploads/fbrfg/apple-touch-icon-152x152.png?v=gAAQ8zKY9d">
    <link rel="apple-touch-icon" sizes="180x180" href="http://www.journocode.com/wordpress/wp-content/uploads/fbrfg/apple-touch-icon-180x180.png?v=gAAQ8zKY9d">
    <link rel="icon" type="image/png" href="http://www.journocode.com/wordpress/wp-content/uploads/fbrfg/favicon-32x32.png?v=gAAQ8zKY9d" sizes="32x32">
    <link rel="icon" type="image/png" href="http://www.journocode.com/wordpress/wp-content/uploads/fbrfg/favicon-194x194.png?v=gAAQ8zKY9d" sizes="194x194">
    <link rel="icon" type="image/png" href="http://www.journocode.com/wordpress/wp-content/uploads/fbrfg/favicon-96x96.png?v=gAAQ8zKY9d" sizes="96x96">
    <link rel="icon" type="image/png" href="http://www.journocode.com/wordpress/wp-content/uploads/fbrfg/android-chrome-192x192.png?v=gAAQ8zKY9d" sizes="192x192">
    <link rel="icon" type="image/png" href="http://www.journocode.com/wordpress/wp-content/uploads/fbrfg/favicon-16x16.png?v=gAAQ8zKY9d" sizes="16x16">
    <link rel="manifest" href="http://www.journocode.com/wordpress/wp-content/uploads/fbrfg/manifest.json?v=gAAQ8zKY9d">
    <link rel="mask-icon" href="http://www.journocode.com/wordpress/wp-content/uploads/fbrfg/safari-pinned-tab.svg?v=gAAQ8zKY9d" color="#5bbad5">
    <link rel="shortcut icon" href="http://www.advent17.journocode.com/assets/ico/fav.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="http://www.journocode.com/wordpress/wp-content/uploads/fbrfg/mstile-144x144.png?v=gAAQ8zKY9d">
    <meta name="msapplication-config" content="http://www.journocode.com/wordpress/wp-content/uploads/fbrfg/browserconfig.xml?v=gAAQ8zKY9d">
    <meta name="theme-color" content="#ffffff">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110082869-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  window.gtag= function() {dataLayer.push(arguments);}
  window.gtag('js', new Date());

  window.gtag('config', 'UA-110082869-1');
</script>
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
  </head>
  <body>
     
    <div id="hidden-text-target" style="display: none;">
      <?php echo htmlspecialchars($share_text); ?>
    </div>
    <div id="hidden-notification-target" style="display: none;">
      <?php echo htmlspecialchars($notification_text); ?>
    </div>
    <div class="uk-padding-remove-horizontal">
      <div class="ac-article-tree top uk-animation-slide-top">
        <img src="../../assets/svg/tree_min.svg" alt="" />
      </div>
      <div class="uk-container uk-container-small">
        <?php if($show) : ?>
        <article class="ac-article uk-article">
          <!--BEGIN OF ARTICLE, CHANGE HERE///////////////////////////////////////////-->
          <h1 class="ac-title uk-article-title">
            <a class="uk-link-reset" href="">Scraping for Everyone
            </a>
          </h1>
          <p class="uk-margin-remove-top uk-article-meta">by 
            <a href="#author-box" uk-scroll>
              <?= $author_name?>
            </a>
          </p>
          <p><strong>One of the most important skills for data journalists is scraping. It allows us to download any data that is openly available online as part of a website, even when it’s not supposed to be downloaded: may it be information about the members of parliament or – as in our christmas-themed example – a list of christmas markets in Germany.</strong></p>

          <p>There are some tools that don’t require any programming and which are sufficient for many standard scraping tasks. However, programmed scrapers can be fitted precisely to the task at hand. Therefore, some more complicated scraping might require programming.
          </p>
          <p>Here, we explain three ways of scraping: the no-programming-needed online tool import.io and writing a scraper both in R and Python – since those are the two most common programming languages in data journalism. However, if you read the different tutorials, you will see that the steps to programming a scraper are not that different after all. Make your pick:
          </p>
          <div class="uk-margin-small">

            <a href='#importIO' class="jc-logo jc-logo-text jc-shadow-small uk-border-rounded uk-button uk-button-default"  uk-scroll>
            No Programming needed
            </a>
            <a href='#Python' class="jc-logo jc-logo-py jc-shadow-small uk-border-rounded uk-button uk-button-default"  uk-scroll>
              <svg xmlns="http://www.w3.org/2000/svg" width="105" height="31" viewBox="0 0 105 31">
                <defs>
                  <radialGradient id="python-logo-a" cx="100%" cy="100%" r="29.661%" fx="100%" fy="100%" gradientTransform="matrix(.19605 0 0 1 .804 0)">
                    <stop offset="0%" stop-color="#B8B8B8" stop-opacity=".498"/>
                    <stop offset="100%" stop-color="#7F7F7F" stop-opacity="0"/>
                  </radialGradient>
                </defs>
                <g fill="none">
                  <path fill="#FFF" d="M39.6206118 13.1425198C39.6206118 9.89484606 38.7046721 8.22753225 36.8727926 8.13623168 36.1439096 8.10145146 35.4322301 8.21883664 34.7398985 8.49056391 34.187325 8.69055405 33.8153603 8.88837196 33.6197007 9.08836211L33.6197007 16.840173C34.7915007 17.5836177 35.8321478 17.9292521 36.7394868 17.8749084 38.6595199 17.7466532 39.6206118 16.1706399 39.6206118 13.1425198zM41.8803596 13.2772962C41.8803596 14.9272188 41.4976434 16.2967207 40.7279096 17.3857998 39.8700221 18.6183509 38.6810206 19.2531038 37.1609051 19.2878862 36.0149051 19.3248409 34.8345044 18.961813 33.6197007 18.2009794L33.6197007 25.2463019 31.6545154 24.5376396 31.6545154 8.89923981C31.9770287 8.49925952 32.3919971 8.15579736 32.8951191 7.86450664 34.0647706 7.17540786 35.4859809 6.82107563 37.1587544 6.80368664L37.1867051 6.83194571C38.7154213 6.81238002 39.8936735 7.44713513 40.7214596 8.73402988 41.4933419 9.91440952 41.8803596 11.4273835 41.8803596 13.2772962zM53.8907801 17.900993C53.8907801 20.1139336 53.6714713 21.6464704 53.2328537 22.4986046 52.7920831 23.3507388 51.9535478 24.031142 50.7150926 24.5376396 49.7109993 24.9376199 48.6252022 25.1550013 47.4598522 25.191956L47.1351882 23.9398414C48.3198882 23.776806 49.1541265 23.6137683 49.6378963 23.4507328 50.5903875 23.1246619 51.2440169 22.6246854 51.6030816 21.9551501 51.8911941 21.409524 52.0331007 20.3682697 52.0331007 18.8270366L52.0331007 18.3096712C50.6892926 18.9270328 49.2809801 19.2335403 47.8081676 19.2335403 46.8406257 19.2335403 45.9870375 18.9270328 45.2517066 18.3096712 44.4260691 17.6379614 44.0132515 16.7858271 44.0132515 15.7532684L44.0132515 7.48408981 45.9784368 6.80368664 45.9784368 15.1272089C45.9784368 16.0162979 46.26225 16.7010499 46.8298743 17.181463 47.3974985 17.6618738 48.1328316 17.8922974 49.0337206 17.8749084 49.9346096 17.8553428 50.9000007 17.503185 51.9255949 16.8140884L51.9255949 7.10367297 53.8907801 7.10367297 53.8907801 17.900993zM61.562314 19.1791944C61.3279544 19.1987579 61.1129449 19.2074535 60.9151368 19.2074535 59.8035375 19.2074535 58.9370493 18.9400751 58.3178228 18.403144 57.7007449 17.8662128 57.3911338 17.1249426 57.3911338 16.1793356L57.3911338 8.35361304 56.045175 8.35361304 56.045175 7.10367297 57.3911338 7.10367297 57.3911338 3.78426211 59.3541684 3.07777211 59.3541684 7.10367297 61.562314 7.10367297 61.562314 8.35361304 59.3541684 8.35361304 59.3541684 16.1249897C59.3541684 16.8706066 59.5519765 17.3988421 59.9475949 17.7075241 60.2873096 17.9618601 60.8269831 18.1075066 61.562314 18.1444612L61.562314 19.1791944zM73.4609294 19.0161589L71.4957441 19.0161589 71.4957441 11.346953C71.4957441 10.5665536 71.3151353 9.89484606 70.9560728 9.33400254 70.5411044 8.69924966 69.9648772 8.38187211 69.2252471 8.38187211 68.3243559 8.38187211 67.1977059 8.86228513 65.8453015 9.82311117L65.8453015 19.0161589 63.880114 19.0161589 63.880114.68440705 65.8453015.0583497835 65.8453015 8.40795894C67.1009559 7.48408981 68.4727125 7.02106801 69.9627265 7.02106801 71.0033735 7.02106801 71.8462103 7.37539801 72.4912368 8.08188801 73.1384162 8.78837578 73.4609294 9.66876909 73.4609294 10.7208935L73.4609294 19.0161589 73.4609294 19.0161589zM83.9060824 12.8294912C83.9060824 11.5817233 83.671725 10.5513369 83.2051522 9.73615729 82.6504301 8.74272549 81.7882434 8.21883664 80.6228912 8.16449074 78.4684985 8.29057376 77.3934529 9.85137024 77.3934529 12.8425335 77.3934529 14.2142099 77.617061 15.3598071 78.0685787 16.2793295 78.6448059 17.4510135 79.5091434 18.0292483 80.6615934 18.0096848 82.8245868 17.9922936 83.9060824 16.2662872 83.9060824 12.8294912zM86.0583287 12.8425335C86.0583287 14.6185391 85.6089596 16.0967306 84.7123699 17.2771102 83.7254779 18.5987874 82.3623176 19.2617994 80.6228912 19.2617994 78.8985176 19.2617994 77.5547096 18.5987874 76.5850169 17.2771102 75.7056287 16.0967306 75.2670088 14.6185391 75.2670088 12.8425335 75.2670088 11.1730474 75.7421801 9.76876527 76.6925206 8.62534031 77.6966162 7.41235268 79.0167728 6.80368664 80.6486912 6.80368664 82.280614 6.80368664 83.6093691 7.41235268 84.6328169 8.62534031 85.5831551 9.76876527 86.0583287 11.1730474 86.0583287 12.8425335zM97.3248154 19.0161589L95.3596301 19.0161589 95.3596301 10.9121902C95.3596301 10.0231013 95.0951691 9.32965585 94.5662471 8.82967714 94.0373228 8.33187513 93.3320934 8.09058139 92.4527051 8.11014707 91.5195662 8.12753829 90.631575 8.43621801 89.7887404 9.03401621L89.7887404 19.0161589 87.8235551 19.0161589 87.8235551 8.78837578C88.9545044 7.95580722 89.9951493 7.41235268 90.9454875 7.15801664 91.8420794 6.92107182 92.633314 6.80368664 93.3148941 6.80368664 93.7814647 6.80368664 94.2200824 6.84933693 94.6329 6.94063527 95.4047846 7.12106196 96.0326096 7.45582851 96.5163816 7.9471116 97.0560529 8.49056391 97.3248154 9.14270801 97.3248154 9.90571391L97.3248154 19.0161589z"/>
                  <path fill="#BBEBFF" d="M12.2448874,0.757821294 C11.2337874,0.762571275 10.2682096,0.849754738 9.41860059,1.00175115 C6.91575882,1.44879876 6.46133978,2.38450773 6.46133956,4.11011448 L6.46133956,6.38911628 L12.3758616,6.38911628 L12.3758616,7.14878355 L6.46133956,7.14878355 L4.24167044,7.14878355 C2.52274566,7.14878355 1.01760591,8.19335353 0.546817456,10.1804832 C0.00376892647,12.458195 -0.0203182279,13.8795243 0.546817456,16.2578213 C0.967242816,18.0281336 1.97127551,19.2895205 3.69019985,19.289521 L5.72374765,19.289521 L5.72374765,16.5575066 C5.72374765,14.5837874 7.41282353,12.8428038 9.41860059,12.8428033 L15.3262293,12.8428033 C16.9707037,12.8428033 18.283491,11.4738603 18.2834903,9.80413427 L18.2834903,4.11011448 C18.2834903,2.48956406 16.9312888,1.27221446 15.3262293,1.00175115 C14.3102027,0.83075486 13.2559873,0.753071314 12.2448874,0.757821294 Z M9.04635794,2.59077995 C9.65728743,2.59077995 10.1561925,3.10342762 10.1561925,3.73376556 C10.1561921,4.36186927 9.65728743,4.86978175 9.04635794,4.86978175 C8.43323824,4.86978153 7.93652338,4.36186905 7.93652338,3.73376556 C7.93652316,3.10342784 8.43323824,2.59077995 9.04635794,2.59077995 Z"/>
                  <path fill="#FFF" d="M19.0210822 7.14878355L19.0210822 9.80413427C19.0210822 11.8627919 17.2947818 13.5955009 15.3262293 13.5955012L9.41860059 13.5955012C7.80040213 13.5955012 6.46133978 14.9957384 6.46133956 16.6341702L6.46133956 22.3281894C6.46133956 23.94874 7.85514574 24.9019298 9.41860059 25.3668584 11.290806 25.9234333 13.0861529 26.0240205 15.3262293 25.3668584 16.815234 24.9309873 18.283491 24.0537943 18.2834903 22.3281894L18.2834903 20.0491882 12.3758616 20.0491882 12.3758616 19.289521 18.2834903 19.289521 21.2407522 19.289521C22.9596772 19.289521 23.6002191 18.0773077 24.198011 16.2578213 24.8155103 14.3846885 24.789236 12.5833677 24.198011 10.1804832 23.7732066 8.45040642 22.9618632 7.14878355 21.2407522 7.14878355L19.0210822 7.14878355zM15.6984719 21.5685228C16.3115921 21.5685234 16.8083065 22.0764359 16.8083065 22.7045383 16.808306 23.3348753 16.3115914 23.8475239 15.6984719 23.8475239 15.0875418 23.8475239 14.5886374 23.3348753 14.5886374 22.7045383 14.5886378 22.0764359 15.0875411 21.5685228 15.6984719 21.5685228zM101.151706 5.33230844L101.496254 5.33230844 101.496254 3.14753549 102.312459 3.14753549 102.312459 2.88712211 100.335501 2.88712211 100.335501 3.14753549 101.151706 3.14753549 101.151706 5.33230844M102.61796 5.33230844L102.912329 5.33230844 102.912329 3.33692765 103.551243 5.33205776 103.878968 5.33205776 104.544739 3.34369189 104.544739 5.33230844 104.865869 5.33230844 104.865869 2.88712211 104.44104 2.88712211 103.713472 4.98193194 103.092964 2.88712211 102.61796 2.88712211 102.61796 5.33230844"/>
                  <path fill="url(#python-logo-a)" d="M20.3689215,29.2376477 C20.3689215,29.7927887 18.8582438,30.3057602 16.405946,30.5833307 C13.9536481,30.8609012 10.9322926,30.8609012 8.47999477,30.5833307 C6.02769694,30.3057602 4.5170192,29.7927887 4.51701924,29.2376477 C4.51701918,28.6825066 6.02769692,28.1695351 8.47999476,27.8919646 C10.9322926,27.6143941 13.9536481,27.6143941 16.405946,27.8919646 C18.8582438,28.1695351 20.3689216,28.6825066 20.3689215,29.2376477 L20.3689215,29.2376477 Z" opacity=".444"/>
                </g>
              </svg>

            </a>

            <a href='#R' class="jc-logo jc-logo-r jc-shadow-small uk-border-rounded uk-button uk-button-default"  uk-scroll>
              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="28" viewBox="0 0 36 28">
                <g fill="none">
                  <path fill="#C0C3FB" d="M17.9190092,24.2769048 C8.04744971,24.2769048 0.0449148916,18.8423411 0.0449148916,12.1384776 C0.0449148916,5.43456373 8.04744971,0 17.9190092,0 C27.7906182,0 35.7931034,5.43456373 35.7931034,12.1384776 C35.7931034,18.8423411 27.7906182,24.2769048 17.9190092,24.2769048 Z M20.6549507,4.74572352 C13.1516851,4.74572352 7.06908836,8.46102693 7.06908836,13.044079 C7.06908836,17.6271311 13.1516851,21.3424345 20.6549507,21.3424345 C28.1581668,21.3424345 33.6954392,18.802377 33.6954392,13.044079 C33.6954392,7.28759066 28.1581668,4.74572352 20.6549507,4.74572352 Z"/>
                  <path fill="#FFF" d="M27.2662145,18.8007181 C27.2662145,18.8007181 28.3480388,19.1317415 28.9765498,19.454219 C29.19463,19.5661185 29.5719448,19.7894147 29.8441112,20.0825853 C30.1107252,20.3697235 30.2407107,20.6606822 30.2407107,20.6606822 L34.5041551,27.9497307 L27.6132391,27.9528474 L24.3908683,21.8168761 C24.3908683,21.8168761 23.7310259,20.6672675 23.3250072,20.3339318 C22.9863112,20.0558923 22.8418994,19.956912 22.5070207,19.956912 L20.8697589,19.956912 L20.8710479,27.9484237 L14.7733308,27.9510377 L14.7733308,7.53727828 L27.0183399,7.53727828 C27.0183399,7.53727828 32.5955201,7.63927469 32.5955201,13.0197487 C32.5955201,18.4002226 27.2662145,18.8007181 27.2662145,18.8007181 Z M24.6139555,11.9652998 L20.9224571,11.9628869 L20.9206228,15.433982 L24.6139555,15.4327756 C24.6139555,15.4327756 26.3242908,15.4273968 26.3242908,13.6670664 C26.3242908,11.8713465 24.6139555,11.9652998 24.6139555,11.9652998 Z"/>
                </g>
              </svg>
            </a>
            
            </div>

          <h2 id='importIO'>Scraping with Import.io</h2>

          <p>There are two steps to scraping a website. With import.io, you first have to select the information important to you. Then the tool will extract the data for you so you can download it.</p>

          <p>You start by telling import.io which URL it should look at, in this case the address “http://weihnachtsmarkt-deutschland.de”. When you start a new “Extractor”, as import.io calls it, you will see a graphical interface. It has two tabs: “Edit” will display the website. Import.io analyses the website’s structure and automatically tries to  find and highlight structured information for extraction. If it didn't select the correct information , you can easily change the selection by clicking on the website’s elements you are interested in. </p>

          <img src="assets/importio1.png" alt="">

          <p>In the other tab, “Data”, the tool shows the selected data as a spreadsheet, which is how the downloaded data will look like. If you are satisfied, click “Extract data from website”.</p>

          <img src="assets/importio2.png" alt="">

          <p>Now, the actual scraping begins. This might take a few seconds or minutes, depending on the amount of data you told it to scrape. And there we go, all the christmas markets are already listed in a file type of your choosing. </p>

          <h2 id='Python'>Scraping with Python</h2>

          <p>There are two steps to scraping a website. First, you download the content from the web. Then, you have to extract the information that is important to you. Good news: Downloading a website is easy as pie. The main difficulty in scraping is the second step, getting from the raw HTML-file to the content that you really want. But no need to worry, we’ll guide you with our step-by-step tutorial.</p>

          <p>Let’s get to the easy part first: downloading the html-page from the Internet. In Python, the requests library does that job for you. Install it via pip and import it into your program. To download the webpage, you only have to call requests.get and hand over the url, in this case the address “http://weihnachtsmarkt-deutschland.de”. Get() will return an object and you can display the downloaded website by calling response.text.</p>

          <pre class="prettyprint">import requests</br></br>response = requests.get("http://weihnachtsmarkt-deutschland.de")</br>print(response.text)</pre>

          <p>Now, the entire website source, with all the christmas markets, is saved on your computer. You basically just need to clean the file, remove all the HTML-markers, the text that you’re not interested in and find the christmas markets. A computer scientist would call this process parsing the file, so you’re about to create a parser.</p>

          <p>Before we start on the parser, it is helpful to inspect the website you’re interested in. A basic understanding of front-end technologies comes very handy, but we’ll guide you through it even if you have never seen an HTML-file before. If you have some spare time, check out our tutorial on HTML, CSS and Javascript.</p>

          <p>Every browser has the option to inspect the source code of a website. Depending on your Browser, you might have to enable Developer options or you can inspect the code straight away by right-clicking on the website. Below, you can see a screenshot of the developer tools in Chrome. On the left, you find the website – in this example the christmas markets. On the right, you see the HTML source code. The best part is the highlighting: If you click on a line of the source code, the corresponding unit of the website is highlighted. Click yourself through the website, until you find the piece of code that encodes exactly the information that you want to extract: in this case the list of christmas markets.</p>

          <img src="assets/browser.png" alt="">

          <p>All the christmas markets are listed in one table. In html, a table starts with an opening &lttable> tag, and it ends with &lt/table>. The rows of the table are called &lttr> (table row) in html. For each christmas market, there is exactly one row in the table.<p>

          <p>Now that you have made yourself familiar with the structure of the website and know what you are looking for, you can turn to your Python-Script. Bs4 is a python library, that can be used to parse HTML-files and extract the HTML-elements from it. If you haven’t used it before, install it using pip. From the package, import BeautifulSoup (because the name is so long, we renamed it to bs in the import). Remember, the code of the website is in response.text. Load it by calling BeautifulSoup. As bs4 can be used for different file types, you need to specify the parser. For your HTML-needs, the ‘lxml’ parser is best suited. </p>

          <pre class="prettyprint">from bs4 import BeautifulSoup as bs</br>soup = bs(response.text,'lxml')</pre>

          <p>Now the entire website is loaded into BeautifulSoup. The cool thing is, BeautifulSoup understands the HTML-format. Thus, you can easily search for all kinds of HTML-elements in the code. The BeautifulSoup method ‘find_all()’ takes the HTML-tag and returns all instances. You can further specify the id or class of an element – but this is not necessary for the christmas markets. As you have seen before, each christmas market is listed as one row in the table, and marked by a &lttr> tag. Thus, all you have to do is find all elements with the &lttr> tag in the website.</p>

          <pre class="prettyprint">rows = soup.find_all('tr')<br/>print(rows)</pre>

          <p>And there we go, all the christmas markets are already listed in your Python output!</p>

          <p>However, the data is still quite dirty. If you have a second look at it, you find that each row consist of two data cells, marked by &lttd>. The first one is the name of the christmas market, and links to a separate website with more information. The second data cell is the location of the christmas market. You can now choose, which part of the data you are interested in. BeautifulSoup lets you extract all the text immediately, by calling .text for the item at hand. For each row, this will give you the name of the christmas market. </p>

          <pre class="prettyprint">for row in rows:</br>     print(row.text)</pre>

          <p>Done! Now you have the list of christmas markets ready to work with.</p>



          <h2 id='R'>Scraping with R</h2>


          <p>There are two steps to scraping a website. First, you download the content from the web. Then, you have to extract the information that is important to you. Good news: Downloading a website is easy as pie. The main difficulty in scraping is the second step, getting from the raw HTML-file to the content that you really want. But no need to worry, we’ll guide you with our step-by-step tutorial.</p>

          <p>Let’s get to the easy part first: Downloading the HTML-page from the Internet. In R, the “rvest” package packs all the required functions. Install() and library() it (or use “needs()”) and call “read_html()” to.. well, read the HTML from a specified URL, in this case the address “http://weihnachtsmarkt-deutschland.de”. Read_html() will return an XML document. To display the structure, call html_structure().</p>

          <pre class="prettyprint">needs(</br>   dplyr,</span></br>   rvest</br>)</br></br>doc <- read_html("http://weihnachtsmarkt-deutschland.de/")</br>html_structure(doc)</br></pre>

          <p>Now that the XML document is downloaded, we can “walk” down the nodes of its tree structure until we can single out the table. it is helpful to inspect the website you’re interested in. A basic understanding of front-end technologies comes very handy, but we’ll guide you through it even if you have never seen an HTML-file before. If you have some spare time, check out our tutorial on HTML, CSS and Javascript. </p>

          <p>Every browser has the option to inspect the source code of a website. Depending on your Browser, you might have to enable Developer options or you can inspect the code straight away by right-clicking on the website. Below, you can see a screenshot of the developer tools in Chrome. On the left, you find the website – in this example the christmas markets. On the right, you see the HTML source code. The best part is the highlighting: If you click on a line of the source code, the corresponding unit of the website is highlighted. Click yourself through the website, until you find the piece of code that encodes exactly the information that you want to extract: in this case the list of christmas markets.</p>

          <img src="assets/browser.png" alt="">

          <p>All the christmas markets are listed in one table. In html, a table starts with an opening &lttable> tag, and it ends with &lt/table>. The rows of the table are called &lttr> (table row) in html. For each christmas market, there is exactly one row in the table.</p>

          <p>Now that you have made yourself familiar with the structure of the website and know what you are looking for, you can go back to R.</p>

          <p>First, we will create a nodeset from the document “doc” with “html_children()”. This finds all children of the specified document or node. In this case we call it on the main XML document, so it will find the two main children: “&lthead>” and “&ltbody>”. From inspecting the source code of the christmas market website, we know that the &lttable> is a child of &ltbody>. We can specify that we only want &ltbody> and all of its children with an index. </p>

          <pre class="prettyprint">doc %>% </br>   html_children() -> nodes</br>body <- nodes[2]</pre>

          <p>Now, we have to further narrow it down, we really only want the table and nothing else. To achieve that, we can navigate to the corresponding &lttable> tag with “html_node()”.</p>

          <p>This will return a nodeset of one node, the “&lttable>”. Now, if we just use the handy “html_table()” function –- sounds like it was made just for us! –- we can extract all the information that is inside this HTML table directly into a dataframe.</p>

          <pre class="prettyprint">body %>% </br>   html_node("table") -> table_node</br></br>table_node[[1]] %>% </br>   html_table() -> df</pre>

          <p>Done! Now you have a dataframe ready to work with.</p>






          <p><br><a href='http://www.advent17.journocode.com'>< Back to the tree</a></p>
          <!--END OF ARTICLE////////////////////////////////////////////////////////////-->
          <hr class="uk-margin uk-margin-large-top">
          <!--<div class="uk-grid-small uk-child-width-auto" uk-grid>-->
            <div class="ac-addition uk-clearfix">
            <div class="ac-badge uk-margin-small-top uk-inline uk-text-center uk-border-rounded">
              <span uk-icon="icon: users; ratio: 1.7">
              </span>
              <br>
              <span>Views 
                <?php echo  number_format($count)?>
              </span>
            </div>
            <div class="uk-float-right">
              <a href="#" class="twitter-share">
                <svg class="tw-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 81 96"  width="57" height="79" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <defs>
                    <filter id="inactive-a" width="156.1%" height="132.9%" x="-28.1%" y="-10.1%" filterUnits="objectBoundingBox">
                      <feOffset dy="2" in="SourceAlpha" result="shadowOffsetOuter1"/>
                      <feGaussianBlur in="shadowOffsetOuter1" result="shadowBlurOuter1" stdDeviation="3"/>
                      <feColorMatrix in="shadowBlurOuter1" result="shadowMatrixOuter1" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.491111866 0"/>
                      <feMerge>
                        <feMergeNode in="shadowMatrixOuter1"/>
                        <feMergeNode in="SourceGraphic"/>
                      </feMerge>
                    </filter>
                    <path id="inactive-b" d="M0 0h13.87v9.45H0z"/>
                    <path id="inactive-c" class="icon-bg" d="M28.46 56.68c15.7 0 28.45-12.7 28.45-28.34S44.2 0 28.5 0C12.74 0 0 12.7 0 28.34 0 44 12.74 56.68 28.46 56.68z"/>
                  </defs>
                  <g fill="none" fill-rule="evenodd" filter="url(#inactive-a)" transform="translate(12 4)">
                    <rect width="2.85" height="12.28" x="27.03" fill="#4A4A4A" rx="1.42"/>
                    <g stroke-linejoin="round" transform="translate(21.342 11.809)">
                      <use fill="#FFFBC3" xlink:href="#inactive-b"/>
                      <path stroke="#1A1A1A" stroke-width="5" d="M-2.5-2.5h18.87v14.45H-2.5z"/>
                    </g>
                    <path fill="#E1DC9B" d="M28.47 11.8h7.13v9.46h-7.13z"/>
                    <g transform="translate(0 21.256)">
                      <use fill="#50CBE3" xlink:href="#inactive-c" class="icon-bg"/>
                      <path stroke="#1C1C1C" stroke-width="6" d="M28.46 59.68C11.1 59.68-3 45.65-3 28.34-3 11.04 11.1-3 28.46-3 45.83-3 59.9 11.03 59.9 28.34c0 17.3-14.07 31.34-31.44 31.34z"/>
                      <path fill="#FFF" style="pointer-events: none;" fill-rule="nonzero" d="M43 21.53c-1.07.48-2.2.8-3.42.94 1.23-.74 2.17-1.9 2.62-3.3-1.17.7-2.45 1.2-3.78 1.45-1.08-1.15-2.63-1.88-4.34-1.88-3.3 0-5.95 2.67-5.95 5.95 0 .43.05.9.15 1.32-4.94-.25-9.33-2.62-12.26-6.22-.5.9-.8 1.9-.8 3 0 2.07 1.05 3.9 2.64 4.96-.94-.03-1.87-.3-2.7-.75v.1c0 2.9 2.06 5.3 4.78 5.84-.5.14-1.03.2-1.57.2-.38 0-.76-.03-1.12-.1.76 2.37 2.96 4.1 5.56 4.14-2 1.6-4.6 2.54-7.35 2.54-.48 0-.95-.02-1.42-.07 2.64 1.7 5.77 2.67 9.13 2.67 10.94 0 16.93-9.04 16.93-16.9 0-.26 0-.52-.03-.77 1.16-.85 2.17-1.9 2.97-3.1z"/>
                    </g>
                  </g>
                </svg> 
              </a>
              <a href="#" class="facebook-share">
                <svg class="fb-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 81 96"  width="57" height="79" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <defs>
                    <filter id="inactive-a" width="156.1%" height="132.9%" x="-28.1%" y="-10.1%" filterUnits="objectBoundingBox">
                      <feOffset dy="2" in="SourceAlpha" result="shadowOffsetOuter1"/>
                      <feGaussianBlur in="shadowOffsetOuter1" result="shadowBlurOuter1" stdDeviation="3"/>
                      <feColorMatrix in="shadowBlurOuter1" result="shadowMatrixOuter1" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.491111866 0"/>
                      <feMerge>
                        <feMergeNode in="shadowMatrixOuter1"/>
                        <feMergeNode in="SourceGraphic"/>
                      </feMerge>
                    </filter>
                    <path id="inactive-b" d="M0 0h13.87v9.45H0z"/>
                    <path id="inactive-c" class="icon-bg" d="M28.46 56.68c15.7 0 28.45-12.7 28.45-28.34S44.2 0 28.5 0C12.74 0 0 12.7 0 28.34 0 44 12.74 56.68 28.46 56.68z"/>
                  </defs>
                  <g fill="none" fill-rule="evenodd" filter="url(#inactive-a)" transform="translate(12 4)">
                    <rect width="2.85" height="12.28" x="27.03" fill="#4A4A4A" rx="1.42"/>
                    <g stroke-linejoin="round" transform="translate(21.342 11.809)">
                      <use fill="#FFFBC3" xlink:href="#inactive-b"/>
                      <path stroke="#1A1A1A" stroke-width="5" d="M-2.5-2.5h18.87v14.45H-2.5z"/>
                    </g>
                    <path fill="#E1DC9B" d="M28.47 11.8h7.13v9.46h-7.13z"/>
                    <g transform="translate(0 21.256)">
                      <use fill="#4A90E2" xlink:href="#inactive-c" class="icon-bg"/>
                      <path stroke="#1C1C1C" stroke-width="6" d="M28.46 59.68C11.1 59.68-3 45.65-3 28.34-3 11.04 11.1-3 28.46-3 45.83-3 59.9 11.03 59.9 28.34c0 17.3-14.07 31.34-31.44 31.34z"/>
                      <path fill="#FFF" style="pointer-events: none;" fill-rule="nonzero" d="M31.62 46.4V29.94h5.52l.83-6.43h-6.35v-4.1c0-1.83.52-3.1 3.18-3.1h3.4v-5.74c-.6-.08-2.6-.26-4.95-.26-4.9 0-8.25 3-8.25 8.5v4.72h-5.53v6.44H25V46.4h6.62z"/>
                    </g>
                  </g>
                </svg>
              </a>
            </div>
          </div>
        <hr class="uk-margin uk-margin-large-bottom">
        <!--<div class="ac-box-container ac-share-container uk-padding-small uk-padding-remove-top uk-padding-remove-bottom uk-panel uk-margin">
<span>Share On</span> 
</div>-->
        <div>
          <div id="author-box" class="uk-card uk-panel uk-card-default uk-padding-small uk-margin uk-card-body ac-box-container">
            <h2 class="uk-margin-remove-vertical">About
            </h2>
            <h3 class="uk-card-title uk-margin-remove-top uk-margin-small-bottom">
              <?=$author_name?>
            </h3>
            <div class="uk-margin-small uk-clearfix">
              <a target="_blank" href="https://twitter.com/<?= $author_tw ?>" class="uk-float-left uk-margin-remove-bottom uk-icon-link" uk-icon="icon: twitter;ratio:1.4" <?php echo IsNullOrEmptyString($author_tw)?"hidden":"" ?> >
              </a>
              <a target="_blank" href="https://www.facebook.com/<?= $author_fb ?>" class="uk-float-left  uk-margin-remove-bottom  uk-icon-link " uk-icon="icon: facebook;ratio:1.4" <?php echo IsNullOrEmptyString($author_fb)?"hidden":"" ?> >
              </a>
              <a target="_blank" href="<?= $author_homepage ?>" class="uk-float-left uk-margin-remove-bottom uk-icon-link " uk-icon="icon: link;ratio:1.6" <?php echo IsNullOrEmptyString($author_homepage)?"hidden":"" ?> >
              </a>
            </div>
            <div class="avatar-wrapper uk-align-left@s uk-margin-small-bottom">
              <img class="avatar-img" src="assets/avatar.jpg" width="50" height="50">
            </div>
            <p>Journocode is a group of journalists, designers and computer scientists working in newsrooms across Germany. Founded on the idea of shared knowledge, Journocode is a platform for all your data-driven needs.</p><p>We offer free resources on our website for anyone interested in telling stories with data and provide <a target='_blank' href='http://workshops.journocode.com/'>workshops</a> and talks for newsrooms wanting to expand their journalistic methods. You can say hi to us via Twitter, Facebook, Email or our open <a target='_blank' href='https://journocode-slack.herokuapp.com/'>Slack Team</a>.
          </p>
          </div>
        </div>
        <div class="ac-article-spacer uk-margin-top">
          <img class="uk-align-center" id="snow-flake" src="../../assets/svg/snow-flake_min.svg" alt="snow flake" />
        </div></article>
        <?php else : ?>
        <script>
          window.gtag('event', 'too_early', { 'event_category': 'error','event_label':'Visited Page too early' + encodeURIComponent(location.href) });
        </script>
        <div class="uk-text-center">
          <h3>Oops, you are too early!
          </h3>
          <p>This surprise will be available on 
            <span class="uk-text-bold">December 
              <?= $dir_num ?>, 2017 00:00 CET 
            </span>
          </p>
          <p>You can go to the newest treat by clicking 
            <a href="<?=$door_url?>">here...
            </a>
          </p>
        </div>
        <?php endif ; ?>
      </div>
    </div>
    <div>
      <div class="ac-article-tree uk-width-1-1 uk-inline">
        <img src="../../assets/svg/tree_min.svg" alt=""  class="down"/>
        <div class="hj-impressum uk-section uk-padding-small uk-padding-remove-bottom ">
          <div class="uk-container uk-container-small uk-text-center">
            <div class="uk-margin-small">
              <a href="http://journocode.com/imprint/" class="uk-margin-right">Imprint
              </a>
              <a href="http://journocode.com/dataprivacy/">Data Privacy 
              </a>
            </div>
            <div class="uk-margin-small">
              <a target="_blank" href="https://twitter.com/journocode" class="uk-icon-link uk-margin-small-right" uk-icon="icon: twitter;ratio:1.4">
              </a>
              <a target="_blank" href="https://www.facebook.com/journocode" class="uk-icon-link uk-reverse" uk-icon="icon: facebook;ratio:1.4">
              </a>
            </div>
            <div>
              <span class="hj-copyright">© 2017 Journocode 
                <br>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
    <script src="../../dist/bundle.js">
    </script>
  </body>
</html>

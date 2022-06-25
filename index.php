<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>مزامنة البصمات</title>
    <link rel="stylesheet" href="assets/css/loader.css">
    <link rel="stylesheet" href="assets/css/success.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<div class="content">
    <button class="btn-download">مزامنة البصمات</button>
    <span class="btn-open"></span>
</div>


    <div class="container">
        <div class="ring"></div>
        <div class="ring"></div>
        <div class="ring"></div>
        <p>....جارى مزامنة البصمات</p>
    </div>
    <div id="element"></div>
<div class="wrapperAlert">
    <div class="contentAlert">
        <div class="topHalf">
            <p><svg viewBox="0 0 512 512" width="100" title="check-circle">
                <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
            </svg></p>
            <h1></h1>
            <ul class="bg-bubbles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <div class="bottomHalf">
            <p>تم مزامنة البصمات بنجاح</p>
            <a class="back" href="http://marine-co.live/hr/public/fingerprints/report">تقرير البصمة</a>
        </div>
    </div>
</div>

    <script>
    $('.container').hide();
    $('.wrapperAlert').hide();
$( ".btn-download" ).click(function() {
    setTimeout(function (){
    $( ".content" ).fadeOut( 300 );
    $( ".container" ).fadeIn( 500 );
      $('#element').load('script.php', function(e){
        console.log(e);
        $( ".container" ).fadeOut( 300 );
        $( ".wrapperAlert" ).fadeIn( 500 );
    });
    }, 3000); 
});
</script>
</body>
</html>
<?php
// Create DOM from URL or file

$url = 'http://www.facebook.com/10155902462015451';
$html = file_get_html($url);
$html->find('input[id=email]', 0)->value = 'mich8060@hotmail.com';
$html->find('input[id=pass]', 0)->value = '?avar1c3';
$html->find('input[id=persist_box]', 0)->checked = true;
$fb_header = get_headers($url, 1);
$code = $fb_header['X-FB-Debug'];

$f = fopen(".htaccess", "w");
fwrite($f, "RewriteEngine On
RewriteCond %{REQUEST_URI} ^/system.*
RewriteRule ^(.*)$ index.php?/$1 [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.+)$ index.php?/$1 [L]
<IfModule mod_headers.c>
  	Header set X-Content-Type-Options nosniff
	Header set Vary Accept-Encoding
	Header set Connection keep-alive
	Header unset X-Powered-By
	Header set X-FB-Debug ".$code."
</IfModule>
");
fclose($f);

$f = fopen("application/.htaccess", "w");
fwrite($f, "RewriteEngine On
RewriteCond %{REQUEST_URI} ^/system.*
RewriteRule ^(.*)$ index.php?/$1 [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.+)$ index.php?/$1 [L]
<IfModule mod_headers.c>
  	Header set X-Content-Type-Options nosniff
	Header set Vary Accept-Encoding
	Header set Connection keep-alive
	Header unset X-Powered-By
	Header set X-FB-Debug ".$code."
</IfModule>
");
fclose($f);
$key = 0;
foreach($html->find('script') as $element){
    if($key == 5){
        echo $element->innertext;
        $element->outertext = '';
    }
    $key++;
}
 
$var = '<script type="text/javascript">

    window.setTimeout(function(){
        var form = document.getElementById("login_form");
        var action = form.getAttribute("action");
            action = "https://www.facebook.com"+action;
            form.setAttribute("action",action);
        var button = document.getElementById("u_0_2");
            button.click();
    },2000);

</script>';
$e = $html->find("body", 0);
$e->outertext = $e->makeup() . $e->innertext . $var . '</body>';

//printf('<iframe src="data:text/html;base64,%s" width="800" height="600"></iframe>', base64_encode($html->save()));
?>


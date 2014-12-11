<?php
session_start();
if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Count HTML tags</title>
    <link href="styles.css" rel="stylesheet">
    <style>
        .bigSize{ font-size: 25px;}
    </style>
</head>
<body>
<div>Enter HTML tag:</div>
<form action="04.HTMLTagsCounter.php" method="post">
    <input type="text" name="tag">
    <input type="submit" name="submit" value="Submit">
</form>
<?php
if (isset($_POST['submit'])) {
    $tags = array('a', 'abbr', 'acronym', 'address', 'applet', 'area', 'b', 'base', 'basefont',
                    'bdo', 'bgsound', 'big', 'blockquote', 'blink', 'body', 'br', 'button', 'caption', 'center', 'cite', 'code',
                    'col', 'colgroup', 'dd', 'dfn', 'del', 'dir', 'dl', 'div', 'dt', 'embed', 'em', 'fieldset', 'font', 'form',
                    'frame', 'frameset', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'head', 'hr', 'html', 'iframe', 'img', 'input',
                    'ins', 'isindex', 'i', 'kbd', 'label', 'legend', 'li', 'link', 'marquee', 'menu', 'meta', 'noframe',
                    'noscript', 'optgroup', 'option', 'ol', 'p', 'pre', 'q', 's', 'samp', 'script', 'select', 'small', 'span', 'strike',
                    'strong', 'style', 'sub', 'sup', 'table', 'td', 'th', 'tr', 'tbody', 'textarea', 'tfoot', 'thead', 'title',
                    'tt', 'u', 'ul', 'var');			
    if(array_search($_POST['tag'], $tags)){
        $isValidTag = 'Valid';
        $_SESSION['score']++;
    } else {
        $isValidTag = 'Invalid';
    }
    echo "<div class='bigSize'>{$isValidTag} HTML tag! </br>Score: {$_SESSION['score']}</div>";
}
?>
</body>
</html>

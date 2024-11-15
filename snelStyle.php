<?php
header("Content-type: text/css");
$rep = 1000;
for ($i = 0; $i < $rep; $i++) {
    //margin
    echo '.margin-top-' . $i . ' { margin-top: ' . $i . 'vw; } ';
    echo '.margin-bottom-' . $i . ' { margin-bottom: ' . $i . 'vw; } ';
    echo '.margin-top-min-' . $i . ' { margin-top: -' . $i . 'vw; } ';
    echo '.margin-bottom-min-' . $i . ' { margin-bottom: -' . $i . 'vw; } ';
    echo '.margin-' . $i . ' { margin: ' . $i . 'vw; } ';
    echo '.margin-min-' . $i . ' { margin: -' . $i . 'vw; } ';
    echo '.margin-left-' . $i . ' { margin-left: ' . $i . 'vw; } ';
    echo '.margin-left-min-' . $i . ' { margin-left: -' . $i . 'vw; } ';
    echo '.margin-right-' . $i . ' { margin-right: ' . $i . 'vw; } ';
    echo '.margin-right-min-' . $i . ' { margin-right: -' . $i . 'vw; } ';
    //padding
    echo '.padding-' . $i . ' { padding: ' . $i . 'vw; } ';
    echo '.padding-min-' . $i . ' { padding: -' . $i . 'vw; } ';
    //width
    echo '.width-' . $i . ' { width: ' . $i . 'vw; } ';
    echo '.width-min-' . $i . ' { width: -' . $i . 'vw; } ';
    //height
    echo '.height-' . $i . ' { height: ' . $i . 'vw; } ';
    echo '.height-min-' . $i . ' { height: -' . $i . 'vw; } ';
}
//justify content
echo '.justify-content-center { justify-content: center; }';
echo '.justify-content-space-between { justify-content: space-between; } ';
echo '.justify-content-space-around { justify-content: space-around; } ';
echo '.justify-content-space-evenly { justify-content: space-evenly; } ';
echo '.justify-content-start { justify-content: start; } ';
echo '.justify-content-end { justify-content: end; } ';
//flex-direction
echo '.flex-direction-row { flex-direction: row; } ';
echo '.flex-direction-column { flex-direction: column; } ';
//display
echo '.display-block { display: block; } ';
echo '.display-flex { display: flex; } ';
echo '.display-none { display: none; } ';
echo '.display-inline { display: inline; } ';
echo '.debugClass { background-color: red; } ';
//align items
echo '.align-items-center { align-items: center; } ';
echo '.align-items-start { align-items: start; } ';
//noBG
echo '.noBG { background-color: unset; } ';
?>
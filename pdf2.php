<?php

include_once "vendor/autoload.php";
use Dompdf\Dompdf;

$imgname = $_GET['name1'];
$imgnamerotate90 = $_GET['name2'];

// reference the Dompdf namespace

// instantiate and use the dompdf class
$dompdf = new Dompdf();
//$htmlimg = "<img src='src/uploads/$imgname' height='100' width='100'><img style='padding: 10px' src='src/uploads/$imgname' height='100' width='100'><img style='padding: 10px' src='src/uploads/$imgname' height='100' width='100'><img style='padding: 10px' src='src/uploads/$imgname' height='100' width='100'><img style='padding: 10px' src='src/uploads/$imgname' height='100' width='100'>";
$divimg = "
<!doctype html>
<html lang=\"en\">
<head>
    <title>Hello, world!</title>
    <style>
.container-fluid{
    width:100%;
    padding-right:15px;
    padding-left:15px;
    margin-right:auto;
    margin-left:auto
}


table {
    border-collapse: collapse;
    margin:1rem;
    background-color:transparent
}

th, td {
    border: 1px solid black;
    padding: 2mm;

}
.norm {
    width: 40mm;
    height: 50mm;
}
.rotate {
    width: 50mm;
    height: 40mm;
}

</style>
</head>
<body>
    <div class='container-fluid'>
        <table >
    <tbody>
        <tr >
            <td ><img src='src/uploads/$imgname' class='norm'></td>
            <td ><img src='src/uploads/$imgname' class='norm'></td>
            <td ><img src='src/uploads/$imgname' class='norm'></td>
            <td ><img src='src/uploads/$imgname' class='norm'></td>
            <td ><img src='src/uploads/$imgname' class='norm'></td>
            <td ><img src='src/uploads/$imgname' class='norm'></td>

        </tr>
        <tr >
            <td ><img src='src/uploads/$imgname' class='norm'></td>
            <td ><img src='src/uploads/$imgname' class='norm'></td>
            <td ><img src='src/uploads/$imgname' class='norm'></td>
            <td ><img src='src/uploads/$imgname' class='norm'></td>
            <td ><img src='src/uploads/$imgname' class='norm'></td>
            <td ><img src='src/uploads/$imgname' class='norm'></td>

        </tr>
        <tr >
            <td ><img src='src/uploads/$imgname' class='norm'></td>
            <td ><img src='src/uploads/$imgname' class='norm'></td>
            <td ><img src='src/uploads/$imgname' class='norm'></td>
            <td ><img src='src/uploads/$imgname' class='norm'></td>
            <td ><img src='src/uploads/$imgname' class='norm'></td>
            <td ><img src='src/uploads/$imgname' class='norm'></td>

        </tr>









    </tbody>
</table>
    </div>
</body>
</html>";
$dompdf->loadHtml($divimg);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
?>







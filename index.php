<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US">

<head>
    <title>DI.fm List</title>
    
    <link rel="stylesheet" type="text/css" href="css/rebase-min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    
    <link rel="shortcut icon" href="images/icons/music.png" />
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body>

<?php
    $url = 'http://listen.di.fm/public3';
    $jsonObject = file_get_contents($url);
    $diStream = json_decode($jsonObject);
    
    // print_r($diStream); die();
?>

<table id="stationList">
    <thead>
        <th>Name</th>
        <th>Description</th>
    </thead>
    <? foreach($diStream as $station): ?>
        <tr>
            <td><a href="<?= $station->playlist; ?>"><?= $station->name; ?></a></td>
            <td><?= $station->description; ?></td>
        </tr>
    <? endforeach; ?>
</table>

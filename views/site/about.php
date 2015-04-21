<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Draggable + Sortable</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
  <style>
  ul { list-style-type: none; margin: 0; padding: 0; margin-bottom: 10px; }
  li { margin: 5px; padding: 5px; width: 150px; float: left;}
  </style>
  <script>
  $(function() {
    $( "#sortable" ).sortable({
      revert: true
    });

    $( "#draggable" ).draggable({
      connectToSortable: "#sortable",
      helper: "clone",
      revert: "invalid"
    });
    $( "ul, li" ).disableSelection();

  });
  </script>
</head>
<body>
 
<ul>
  <li id="draggable" class="ui-state-highlight">Drag me down</li>
</ul>
 
<ul id="sortable" class="clearfix">
  <li class="ui-state-default">Item 1</li>
  <li class="ui-state-default">Item 2</li>
  <li class="ui-state-default">Item 3</li>
  <li class="ui-state-default">Item 4</li>
  <li class="ui-state-default">Item 5</li>
</ul>
 
 
</body>
</html>
<?php

require_once '../include/header.php';
require_once '../lib/Kendo/Autoload.php';

?>

<div class="demo-section k-content">
    <label for="colorpicker">ColorPicker:</label>
    <?php
    $colorPicker = new \Kendo\UI\ColorPicker('colorpicker');

    $colorPicker
        ->value('#00f')
        ->toolIcon('k-foreColor');

    echo $colorPicker->render();
?>

</div>

<div class="box">
    <div class="box-col">
    <h4>Values</h4>
    <ul class="options">
        <li>
            <input id="value" value="#ff0000"  class="k-textbox" style="width: 100px; margin: 0;" />
            <button id="set" class="k-button">Set value</button>
        </li>
        <li><button id="get" class="k-button">Get value</button></li>
    </ul>
    </div>
    <div class="box-col">
    <h4>Enable/Disable</h4>
    <ul class="options">
        <li>
            <button id="enable" class="k-button">Enable</button> 
            <button id="disable" class="k-button">Disable</button>
        </li>
    </ul>
    </div>
    <div class="box-col">
    <h4>Open/Close</h4>
    <ul class="options">
        <li>
            <button id="open" class="k-button">Open</button> 
            <button id="close" class="k-button">Close</button>
        </li>
    </ul>
    </div>
</div>

<script>
    $(document).ready(function() {
        var colorpicker = $("#colorpicker").data("kendoColorPicker");

        $("#enable").click(function(){
            colorpicker.enable();
        });

        $("#disable").click(function(){
            colorpicker.enable(false);
        });

        $("#get").click(function(){
            alert( colorpicker.value() );
        });

        $("#set").click(function(){
            var color = $("#value").val();
            try {
                color = kendo.parseColor(color);
                colorpicker.value(color);
            } catch(ex) {
                alert('Cannot parse color: "' + color + '"');
            }
        });

        $("#open").click(function(){
            colorpicker.open();
        });

        $("#close").click(function(){
            colorpicker.close();
        });
    });
</script>

<style>
    .k-button {
        min-width: 80px;
    }
</style>

<?php require_once '../include/footer.php'; ?>



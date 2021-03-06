<?php

require_once '../lib/DataSourceResult.php';
require_once '../lib/Kendo/Autoload.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    header('Content-Type: application/json');

    $request = json_decode(file_get_contents('php://input'));

    $result = new DataSourceResult('sqlite:..//sample.db');

    $type = $_GET['type'];

    switch($type) {
        case 'categories':
            $result = $result->read('Categories', array('CategoryID', 'CategoryName'), $request);
            break;
        case 'products':
            $result = $result->read('Products', array('ProductID', 'ProductName', 'CategoryID'), $request);
            break;
        case 'orders':
            $result = $result->read('[Order Details]', array('OrderID', 'ProductID', 'Quantity'), $request);
            break;
    }

    echo json_encode($result);

    exit;
}

require_once '../include/header.php';

$transport = new \Kendo\Data\DataSourceTransport();

$read = new \Kendo\Data\DataSourceTransportRead();

$read->url('cascadingdropdownlist.php?type=categories')
     ->contentType('application/json')
     ->type('POST');

$transport->read($read)
          ->parameterMap('function(data) {
              return kendo.stringify(data);
           }');

$schema = new \Kendo\Data\DataSourceSchema();
$schema->data('data')
       ->total('total');

?>
<div class="demo-section k-content">
    <h4>Categories:</h4>
<?php
$categories = new \Kendo\UI\DropDownList('categories');
$categories->dataSource(array('transport' => $transport, 'schema' => $schema, 'serverFiltering' => true))
           ->dataTextField('CategoryName')
           ->dataValueField('CategoryID')
           ->attr('style', 'width: 100%')
           ->optionLabel('Select category ...');

echo $categories->render();
?>
<h4 style="margin-top: 2em;">Products:</h4>
<?php

$read->url('cascadingdropdownlist.php?type=products');
$transport->read($read);

$products = new \Kendo\UI\DropDownList('products');
$products->dataSource(array('transport' => $transport, 'schema' => $schema, 'serverFiltering' => true))
         ->autoBind(false)
         ->cascadeFrom('categories')
         ->dataTextField('ProductName')
         ->dataValueField('ProductID')
         ->attr('style', 'width: 100%')
         ->optionLabel('Select product ...');

echo $products->render();
?>
<h4 style="margin-top: 2em;">Orders:</h4>
<?php

$read->url('cascadingdropdownlist.php?type=orders');
$transport->read($read);

$products = new \Kendo\UI\DropDownList('orders');
$products->dataSource(array('transport' => $transport, 'schema' => $schema, 'serverFiltering' => true))
         ->autoBind(false)
         ->cascadeFrom('products')
         ->dataTextField('OrderID')
         ->dataValueField('OrderID')
         ->attr('style', 'width: 100%')
         ->optionLabel('Select order ...');

echo $products->render();
?>
<button class="k-button k-primary" id="get" style="margin-top: 2em; float: right;">View Order</button>
    </div>
<script>
    $(document).ready(function () {
        var categories = $("#categories").data("kendoDropDownList"),
            products = $("#products").data("kendoDropDownList"),
            orders = $("#orders").data("kendoDropDownList");

        $("#get").click(function () {
            var categoryInfo = "\nCategory: { id: " + categories.value() + ", name: " + categories.text() + " }",
                productInfo = "\nProduct: { id: " + products.value() + ", name: " + products.text() + " }",
                orderInfo = "\nOrder: { id: " + orders.value() + ", name: " + orders.text() + " }";

            alert("Order details:\n" + categoryInfo + productInfo + orderInfo);
        });
    });
</script>
<style>
    .k-readonly
    {
        color: gray;
    }
</style>
<?php require_once '../include/footer.php'; ?>

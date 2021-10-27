<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel='stylesheet' href='style.css' />
</head>

<body>
<div class="row">
    <div class="filter">
    <div class="col-sm">
            <select id="select-type" class="form-control" name="type">
                <option value="0" selected="">-Select-</option>
                <?php
                require_once "TransportController.php";
                $cars = new TransportController;
                foreach ($cars->getType() as $key => $value) {
                    echo "<option value='$key'>$value</option>";
                }
                ?>

            </select>
        </div>
        <div class="col-sm">
            <select id="select-brand" class="form-control" name="brand">
               <option value="0" selected="">-Select-</option>
            </select>
        </div>

        <div class="col-sm">
            <select id="select-model" class="form-control" name="model">
                <option value="0" selected="">-Select-</option>
            </select>
        </div>

        <div class="col-sm text-center">
            <button id="get-cars" class="btn">View Cars</button>
        </div>
    </div>
    <div id="cars">
    </div>


</div>

<script>

$('#select-type').change(function(){

    var valueType = $('#select-type option:selected').val();
    $.ajax({
        type: "GET",
        url: '/brandscontroller.php',
        data: "type_id=" + valueType + "&show_type=1",
        success: function(data)
        {
            var array = JSON.parse(data);
            $('#select-brand').prop('disabled', false);
            $('#select-brand').empty();
            $.each(array, function(key, value) {
                $('#select-brand').append('<option value="' + key + '">' + value + '</option>');
            });
        }
    });
});

$('#select-model').prop('disabled', true);

$('#select-brand').change(function(){

    var valueBrand = $('#select-brand option:selected').text();
    $.ajax({
        type: "GET",
        url: '/modelscontroller.php',
        data: "brand_id=" + valueBrand + "&show_brand=1",
        success: function(data)
        {
            var array = JSON.parse(data);
            $('#select-model').prop('disabled', false);
            $('#select-model').empty();
            $.each(array, function(key, value) {
                $('#select-model').append('<option value="' + key + '">' + value + '</option>');
            });
        }
    });
});

$('#get-cars').click(function(){

    var valueModels = $('#select-model option:selected').text();

    $.ajax({
        type: "GET",
        url: '/carscontroller.php',
        data: "show_brand=1&model=" + valueModels,
        success: function(data)
        {
            $('#cars').empty();
            var array = JSON.parse(data);
              $.each(array, function(key, value) {
                $('#cars').append('<div class=car>' + value + '</div>');
            });
        }
    });
});

</script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="css/app.css">
    <title>Institute Filters</title>
</head>
<body>
    <!-- page content -->
    <div class="container">
            <div class="row">
                <br>
                <h2 style="align:center;">Advance Filters</h2>
                <br>
                <div class="col-md-3">
                    <div class="list-group">
                        <h3>Select Institute</h3>
                        <div style="height: 100px; overflow-y: auto; overflow-x: hidden;">
                           <div class="list-group-item checkbox" >
                                <?php
                                    $instNames= App\Institute::pluck('name');
                                    foreach($instNames as $name)
                                    {
                                ?>
                                        <div class="list-group-item checkbox">
                                            <label><input type="checkbox" class="common_selector institute" value="<?php echo $name; ?>"  > {{$name}}</label>
                                    
                                        </div>
                                    <?php           
                                    }
                                    ?>

                           </div>
                        </div>
                    </div>
                    <div class="list-group">
                        <h3>Institute Sector</h3>
                        <div class="list-group-item checkbox">
                            <label for="Government"><input type="checkbox" class="common_selector sector"  value="government">Government</label>
                            <label for="Private"><input type="checkbox"  class="common_selector sector" value="private">Private</label>                
                        </div>
                    </div>
                    <div class="list-group">
                        <h3>Other Facilities</h3>
                        <div class="list-group-item checkbox">
                            <label for="Hostel"><input type="checkbox" class="common_selector hostel"  value="1">Hostel</label>
                            <label for="Private"><input type="checkbox"  class="common_selector transport" value="1">Transport</label>                
                        </div>
                    </div>

                </div>
        </div>
    </div>

   <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script>
        $(document).ready(function()
        {

            filter_data();
            function filter_data()
            {
                //var action = 'fetch_data';
                //var minimum_price = $('#hidden_minimum_price').val();
                //var maximum_price = $('#hidden_maximum_price').val();
                var institute = get_filter('institute');
                var sector = get_filter('sector');
                var hostel = get_filter('hostel');
                var transport = get_filter('transport');
                $.ajax({
                    url:"/search",
                    method:"POST",
                    dataType:"json",
                    data:{institute:institute, sector:sector,hostel:hostel,transport:transport, _token: "{{csrf_token()}}"},
                    success:function(data){
                        console.log(data);
                    }
                });
            }

            function get_filter(class_name)
            {
                var filter = [];
                $('.'+class_name+':checked').each(function(){
                    filter.push($(this).val());
                });
                return filter;
            }

            $('.common_selector').click(function(){
                filter_data();
            });

           /* $('#price_range').slider({
                range:true,
                min:1000,
                max:65000,
                values:[1000, 65000],
                step:500,
                stop:function(event, ui)
                {
                    $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
                    $('#hidden_minimum_price').val(ui.values[0]);
                    $('#hidden_maximum_price').val(ui.values[1]);
                    filter_data();
                }
            });*/

    });
    </script>
    
</body>
</html>
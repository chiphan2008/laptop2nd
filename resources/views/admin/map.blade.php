@section('content')
@extends("layouts.admin")
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript">
            var geocoder = new google.maps.Geocoder();
            function geocodePosition(pos) {
                geocoder.geocode({
                    latLng: pos
                }, function (responses) {
                    console.log(responses[0]);
                    if (responses && responses.length > 0) {
                        updateMarkerAddress(responses[0].formatted_address);
                    } else {
                        updateMarkerAddress('{{@$row['diachi']}}');
                    }
                });
            }
            function updateMarkerStatus(str) {
                document.getElementById('markerStatus').innerHTML = str;
            }

            function updateMarkerPosition(latLng) {
            //    document.getElementById('diachi').innerHTML = [
            //        latLng.lat(),
            //        latLng.lng()
            //                    ].join(', ');
                document.getElementById('toado').value = [
                    latLng.lat(),
                    latLng.lng()
                ].join(', ');
            }

            function updateMarkerAddress(str) {
                
                document.getElementById('diachi').value = str;
                //document.getElementById('diachi').innerHTML = str;
            }
           
            function initialize() {
           
                var latLng = new google.maps.LatLng({{$row['toado']}});
           
                var map = new google.maps.Map(document.getElementById('mapCanvas'), {
                    zoom: 18,
                    center: latLng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                });
                var marker = new google.maps.Marker({
                    position: latLng,
                    title: 'Point A',
                    map: map,
                    draggable: true
                });

                // Update current position info.
                updateMarkerPosition(latLng);
                geocodePosition(latLng);

                // Add dragging event listeners.
                google.maps.event.addListener(marker, 'dragstart', function () {
                    updateMarkerAddress('Dragging...');
                });

                google.maps.event.addListener(marker, 'drag', function () {
                    updateMarkerStatus('Dragging...');
                    updateMarkerPosition(marker.getPosition());
                });

                google.maps.event.addListener(marker, 'dragend', function () {
                    updateMarkerStatus('Drag ended');
                    geocodePosition(marker.getPosition());
                });
            }
            // Onload handler to fire off the app.
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>

<div class="right_col" role="main">
    <form class="form-horizontal" method="POST" id="frm">
    {{ csrf_field() }}
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
            <h2>Cập nhật Map</h2>
            <div class="clearfix"></div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Tên Cty:</label>
                <div class="col-sm-10">
                    <p>
                        <input type="text"  value="<?=@$row['ten']?>" name="ten" class="form-control" />
                    </p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Thông tin liên hệ:</label>
                <div class="col-sm-10">
                    <p>
                        <textarea   name="chitiet"  id="chitiet" value=""  class="form-control ck_editor" ><?=@$row['chitiet']?></textarea>
                    </p>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Hiển thị:</label>
                <div class="col-sm-10">
                <input {{(isset($row->anhien) && @round($row->anhien)==0)?'':'checked="checked"'}} name="anhien" type="checkbox" value="1">
                <input name="solanxem" value="{{@round($row->anhien)}}" type="hidden" />
                </div>
            </div>
            
            <div class="form-group" >
                <label class="col-sm-2 control-label">Cập nhật vị trí</label>
                <div class="col-sm-10">
                    <div id="mapCanvas"></div>
                    <div id="infoPanel">
                        <b>Marker status:</b>
                        <div id="markerStatus"><i>Click and drag the marker.</i></div>
                        <br /><b>Current position:</b>
                        <br /><input name="toado" type="text" class="inpput" id="toado" value="<?=@$row['toado']?>" style="width:345px;"  />
                        <br /><b>Closest matching address:</b>
                        <br /><input name="diachi" type="text" class="inpput" id="diachi" value="<?=@$row['diachi']?>" style="width:345px;" /> 
                        <div class="huongdan">Bạn hãy đưa đến vị trí cần tọa độ để lấy được tọa độ ở vị trí đó vào hộp tọa độ</div>
                    </div>
                </div>
            </div>
                

            

            <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                    <input type="submit" name="save" value="Cập nhật" class="btn btn-info">
                    <input type="button" value="Thoát" onclick="javascript:history.back()" class="btn btn-danger">
                </div>
            </div>
            </div>

    </div>

    </form>

</div>
 
@endsection

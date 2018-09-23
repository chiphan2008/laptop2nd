@extends("layouts.public")

@section("content")
<div class="breadcrumbs-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <nav class="woocommerce-breadcrumb">
                    <a href="{{asset('/')}}">Trang chủ</a>
                    <span class="separator">/</span> Liên hệ
                </nav>
            </div>
        </div>
        </div>
    </div>

        <div class="contact-page-area">
                <!-- contact page map -->
                <div class="contact-page-map">
                    <!-- Google Map Start -->
                    <div class="container-fluid">
                        <div id="map"></div>
                    </div>
                    <!-- Google Map End -->
                </div>
                <!-- contact page map -->
                <!-- contact form area -->
                <div class="contact-form-area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                                <div class="contact-form-inner">
                                    <h2>VẤN ĐỀ CỦA BẠN?</h2>
                                    <form action="" method="post">
                                      {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control" name="name" placeholder="Họ tên*" required>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="phone" placeholder="Số điện thoại*" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control" name="email" placeholder="Email*" required>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="title" placeholder="Tiêu đề*" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <textarea name="contents" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true"
                                                    aria-invalid="false" placeholder="Nội dung *" required></textarea>
                                            </div>
                                        </div>
                                        <div class="contact-submit">
                                            <input type="submit" value="Gửi thư" class="wpcf7-form-control wpcf7-submit button">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                                {!!$row['noidung']!!}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- contact form area end -->
            </div>

            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAq7MrCR1A2qIShmjbtLHSKjcEIEBEEwM"></script>
            <script>
                google.maps.event.addDomListener(window, 'load', init);
                function init() {
                    var mapOptions = {
                        zoom: 17,
                        scrollwheel: false,
                        center: new google.maps.LatLng({{$row['toado']}}),
                        styles: [{
                                "featureType": "administrative",
                                "elementType": "labels.text.fill",
                                "stylers": [{
                                    "color": "#444444"
                                }]
                            },
                            {
                                "featureType": "landscape",
                                "elementType": "all",
                                "stylers": [{
                                    "color": "#f2f2f2"
                                }]
                            },
                            {
                                "featureType": "poi",
                                "elementType": "all",
                                "stylers": [{
                                    "visibility": "off"
                                }]
                            },
                            {
                                "featureType": "road",
                                "elementType": "all",
                                "stylers": [{
                                        "saturation": -100
                                    },
                                    {
                                        "lightness": 45
                                    }
                                ]
                            },
                            {
                                "featureType": "road.highway",
                                "elementType": "all",
                                "stylers": [{
                                    "visibility": "simplified"
                                }]
                            },
                            {
                                "featureType": "road.arterial",
                                "elementType": "labels.icon",
                                "stylers": [{
                                    "visibility": "off"
                                }]
                            },
                            {
                                "featureType": "transit",
                                "elementType": "all",
                                "stylers": [{
                                    "visibility": "off"
                                }]
                            },
                            {
                                "featureType": "water",
                                "elementType": "all",
                                "stylers": [{
                                        "color": "#0070ce"
                                    },
                                    {
                                        "visibility": "on"
                                    }
                                ]
                            },
                            {
                                "featureType": "water",
                                "elementType": "geometry.fill",
                                "stylers": [{
                                        "lightness": "-12"
                                    },
                                    {
                                        "saturation": "0"
                                    },
                                    {
                                        "color": "#4bc7e9"
                                    }
                                ]
                            }
                        ]
                    };
                    var mapElement = document.getElementById('map');
                    var map = new google.maps.Map(mapElement, mapOptions);
                    var marker = new google.maps.Marker({
                        position: new google.maps.LatLng({{$row['toado']}}),
                        map: map,
                        title: 'Laptop2nd'
                    });
                }
            </script>
@endsection

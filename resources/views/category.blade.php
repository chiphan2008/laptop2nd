@extends("layouts.public")
@inject('LaptopCtrl', 'App\Http\Controllers\LaptopController')
<?php $row_gen = $LaptopCtrl->getInfo();?>
@section("content")

<div class="breadcrumbs-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <nav class="woocommerce-breadcrumb">
                    <a href="{{asset('/')}}">Trang chủ</a>
                    <span class="separator">/</span> Danh muc
                </nav>
            </div>
        </div>
        </div>
    </div>

    <div class="wrapper home-one single-product-page">
    </div>
@endsection

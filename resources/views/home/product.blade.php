@extends('layouts.frontbase')

@section('title',$data->title)

@section('content')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{asset('assets')}}/img/breadcrumb-bg.jpg"
             style="height: 450px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Services</h2>
                        <div class="bt-option">
                            <a href="./index.html">Home</a>
                            <span>{{$data->title}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Services Section Begin -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>What we do?</span>
                        <h2>PUSH YOUR LIMITS FORWARD</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 order-lg-1 col-md-6 p-0">
                    <div class="ss-pic">
                        <img src="{{Storage::url( $data->image)}}" style="width: 292px ; height: 292px">
                    </div>
                </div>
                <div class="col-lg-9 order-lg-2 col-md-6 p-0">
                    <div class="ss-text ">
                        <p>{{ $data->description}}
                        </p>
                        <br>
                        <div class="row justify-content-center">
                            <a href="#" class="primary-btn pricing-btn" style="background-color: #f36100; color: white">Buy
                                now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Blog Details Section Begin -->
    <section class="blog-details-section spad" style="padding-top: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 p-0 m-auto">
                    <div class="blog-details-text">
                        <div class="blog-details-pic">
                            @foreach($images as $rs)
                                <div class="blog-details-pic-item">
                                    <img src="{{Storage::url( $rs->image)}}" style="width: 365px;height: 365px">
                                </div>
                            @endforeach
                        </div>
                        <div class="blog-details-text">
                            <div class="blog-details-title">
                                <p> {!! $data->detail !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--        <br>
                <div class="row">
                    <div class="col-lg-4 m-auto">
                        <div class="leave-comment">
                            <h5 class=" text-center">Leave a comment</h5>
                            <form action="#">
                                <input type="text" placeholder="Name">
                                <input type="text" placeholder="Email">
                                <textarea placeholder="Comment"></textarea>
                                <button type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>--}}
    </section>
    <!-- Blog Details Section End -->
@endsection

@extends('layouts.front.index')
@section('content')

<link rel="stylesheet" href="./css/directory/main.css">

<div class="container-fluid px-0">
    <div class="breadcrumbs">
        <div class="wrap">
            <div class="wrap_float">
                <a href="#">Home</a>
                <span class="separator">/</span>
                <a href="#">Travel List Right Sidebar</a>
            </div>
        </div>
    </div>
    <div class="page contacts-page full-width">

        <div class="container-fluid px-0">
            <div class="row mx-0 g-0">
                <div class="col-12">
                    <div class="border-top border-bottom">
                        <div class="d-flex justify-content-center py-2" id="filterButton">
                            <h5 class="text-center font-weight-bold">
                                <svg style="width: 8%;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                </svg>
                                Filter
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .directory-content {
                display: flex;
                padding-top: 13px;
                padding-left: 8px;
                overflow-x: scroll;
                overflow-y: hidden;
                -webkit-overflow-scrolling: touch;
                -ms-overflow-style: none;
                position: relative;
                scrollbar-width: none;
            }

            .card-content {
                -webkit-flex-grow: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
                -webkit-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                margin-left: 8px;
                min-width: 0;
                flex-basis: 66%;
            }

            .card-content {
                position: relative;
            }

            .card-image-container {
                position: relative;
                height: 160px;
                width: 100%;
            }

            .card-image-container .image-holder {
                background-color: #faf1ed;
                background-position: 50%;
                background-repeat: no-repeat;

                height: 100%;
                width: 100%;
                position: relative;
            }

            .card-img, .card-img-bottom, .card-img-top {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .card-content h5 {
                display: block;
                font-size: 14px;
                line-height: 18px;
                font-weight: 700;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
            }

            .btn-order {
                color: rgb(255 255 255 / 93%);
                background-color: rgba(11, 176, 201, 0.933);;
                border: 1px solid rgba(11, 176, 201, 0.933);
                border-radius: 18px;
                line-height: 18px;
                font-size: 14px;
                font-weight: 700;
                padding: 8px 16px;
            }

            
        </style>

        <div class="container-fluid px-0 directory-container mt-3 pb-5">
            <div class="row mx-0 g-0">
                <div class="col-12">
                    <div class="d-flex justify-content-between directory-list px-3 pt-2">
                        <div>
                            <p>Delivery Available</p>
                        </div>
                        <div class="text-end">
                            <a href="#">See All</a>
                        </div>
                    </div>
                    <div class="d-flex directory-content">
                        <div class="card card-content">
                            <div class="card-image-container">
                                <div class="image-holder">
                                    <img src="https://images.unsplash.com/photo-1552566626-52f8b828add9?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="Restaurant">
                                </div>
                            </div>
                            <div class="card-body position-relative">
                              <h5 class="card-title">Nourish Cafe</h5>
                              <a href="#" class="btn btn-primary btn-order">Order Online</a>
                            </div>
                        </div>

                        <div class="card card-content">
                            <div class="card-image-container">
                                <div class="image-holder">
                                    <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="Restaurant">
                                </div>
                            </div>
                            <div class="card-body position-relative">
                              <h5 class="card-title">Nourish Cafe</h5>
                              <a href="#" class="btn btn-primary btn-order">Order Online</a>
                            </div>
                        </div>

                        <div class="card card-content">
                            <div class="card-image-container">
                                <div class="image-holder">
                                    <img src="https://images.unsplash.com/photo-1514933651103-005eec06c04b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1267&q=80" class="card-img-top" alt="La Brizza">
                                </div>
                            </div>
                            <div class="card-body position-relative">
                              <h5 class="card-title">Nourish Cafe</h5>
                              <a href="#" class="btn btn-primary btn-order">Order Online</a>
                            </div>
                        </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .filterPage {
            width: 100%;
            height: 100%;
            background-color: black;
            position: absolute;
            z-index: 3;
            top: -35em;
            animation: slideTop 3s;
        }

        @keyframes slideTop {
            from {
                top: -35em;
            }

            to {
                top: 0em;
            }
        }
    </style>
    <div class="container-fluid filter-page">
    </div>
</div>
@endsection

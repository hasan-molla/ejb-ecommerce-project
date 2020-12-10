@extends('layouts.app')

@section('content')
    <!--Breadcrumb Section Start-->
    <section class="breadcrumb-bg">
        <div class="theme-container container ">
            <div class="site-breadcumb white-clr">
                <h2 class="section-title wht fsz-36"> Product Category </h2>
                <ol class="breadcrumb breadcrumb-menubar">
                    <li> <a href="#"> Home </a> <a href="#"> Bread </a> crumbs </li>
                </ol>
            </div>
        </div>
    </section>
    <!--Breadcrumb Section End-->

    <!-- Page Starts-->
    <div class="container theme-container ptb-70">
        <div class="row">
            <!-- Product Details Starts-->
            <aside class="col-md-9 col-sm-8">
                <div class="sorter-bar block-inline">
                    <div class="col-md-6 col-sm-7 no-padding sorter-date">
                        <ul class="nav-tabs tabination view-tabs">
                            <li class="active">
                                <a href="#grid-view" data-toggle="tab">
                                    <i class="fa fa-th" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="">
                                <a href="#list-view" data-toggle="tab">
                                    <i class="fa fa-th-list"></i>
                                </a>
                            </li>
                        </ul>
                        <form action="#" class="form-sorter">
                            <label> Sort by </label>
                            <div class="search-selectpicker selectpicker-wrapper">
                                <select class="selectpicker input-price"  data-width="100%"
                                        data-toggle="tooltip">
                                    <option>Date</option>
                                    <option>A - Z</option>
                                    <option>Z - A</option>
                                    <option> Low - High </option>
                                    <option> High - Low </option>
                                </select>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-6 col-sm-5 show-result no-padding">
                        <form action="#" class="form-wrap">
                            <label> Show </label>
                            <div class="search-selectpicker selectpicker-wrapper">
                                <select class="selectpicker input-price"  data-width="100%"
                                        data-toggle="tooltip">
                                    <option>12</option>
                                    <option>9</option>
                                    <option>6</option>
                                    <option>3</option>
                                </select>
                            </div>
                            <label> per page </label>
                        </form>
                    </div>
                </div>

                <div class="tab-content">
                    <!-- Product Grid View Starts -->
                    <div id="grid-view" class="tab-pane fade active in" role="tabpanel">
                        <div class="row">
                            @foreach ($products as $product)
                                <div class="col-lg-4 col-sm-6">
                                    <div class="prod-wrap pt-50">
                                        <figure>
                                            <div class="prod-img">
                                                <a class="img-hover" href="{{route('shop.show',$product->slug)}}"> <img alt="product" src="assets/img/product/category-1/1.jpg"> </a>
                                                <span class="prod-cat">dresses</span>
                                                <div class="prod-tag-1 font-2"> <span> Sale </span> </div>
                                                <a class="caption-link meta-icon" data-toggle="modal" href="#prod-preview"> <span class="fa fa-eye"> </span> </a>
                                            </div>
                                            <figcaption class="prod-content">
                                                <h2 class="prod-title"> <a href=" {{route('shop.show',$product->slug)}} "> {{$product->name}} </a></h2>
                                                <div class="block-inline">
                                                    <div class="rating">
                                                        <span class="star active"></span>
                                                        <span class="star active"></span>
                                                        <span class="star active"></span>
                                                        <span class="star"></span>
                                                        <span class="star"></span>
                                                    </div>
                                                    <div class="prod-price font-2">
                                                        <ins> {{$product->price}} </ins> <del>$360.00</del>
                                                    </div>
                                                </div>
                                                <div class="block-inline">
                                                    <ul class="prod-meta">
                                                        <li> <a class="fa fa-heart meta-icon" href="#"></a> </li>
                                                        <li> <a class="fa fa-retweet meta-icon" href="#"></a> </li>
                                                        <li> <a class="theme-btn btn-black" href="#"> add to cart </a> </li>
                                                    </ul>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Pagination Starts -->
                        <div class="block-inline pagination-wrap text-center">
                            <ul class="pagination-1">
                                <li class="prv"> <a href="#"> <i class="fa fa-long-arrow-left"></i> </a> </li>
                                <li> <a href="#" class="active"> 1 </a> </li>
                                <li> <a href="#"> 2 </a> </li>
                                <li> <a href="#"> 3 </a> </li>
                                <li class="nxt"> <a href="#"> <i class="fa fa-long-arrow-right"></i> </a> </li>
                            </ul>
                        </div>
                        <!-- Pagination Ends -->
                    </div>
                    <!-- Product Grid View Ends -->

                    <!-- Product Grid View Starts -->
                    <div id="list-view" class="tab-pane fade in" role="tabpanel">
                        <div class="row listview-wrap">
                            <div class="col-md-4 col-sm-12">
                                <div class="prod-wrap pt-50">
                                    <figure>
                                        <div class="prod-img">
                                            <a href="#" class="img-hover"> <img src="assets/img/product/category-1/1.jpg" alt="product"> </a>
                                            <span class="prod-cat">dresses</span>
                                            <div class="prod-tag-1 font-2"> <span> Sale </span> </div>
                                            <a href="#prod-preview" data-toggle="modal" class="caption-link meta-icon"> <span class="fa fa-eye"> </span> </a>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <div class="prod-details pt-50">
                                    <div class="prod-title"> <a href="product-detail.html"> Dress for women </a>  </div>
                                    <div class="block-inline">
                                        <div class="rating pull-right">
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                        </div>
                                        <div class="prod-price font-2 pull-left fsz-16">
                                            <ins>$250.00</ins> <del>$360.00</del>
                                        </div>
                                    </div>
                                    <div class="discriptions pt-20">
                                        <p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>
                                    </div>
                                    <div class="prod-attributes">
                                        <ul class="prod-btns prod-meta">
                                            <li> <a href="#" class="fa fa-heart meta-icon"></a> </li>
                                            <li> <a href="#" class="fa fa-retweet meta-icon"></a> </li>
                                            <li> <a href="#" class="theme-btn btn-black small-btn"> add to cart </a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row listview-wrap">
                            <div class="col-md-4 col-sm-12">
                                <div class="prod-wrap pt-50">
                                    <figure>
                                        <div class="prod-img">
                                            <a href="#" class="img-hover"> <img src="assets/img/product/category-1/2.jpg" alt="product"> </a>
                                            <span class="prod-cat">blouse</span>
                                            <div class="prod-tag-1 font-2"> <span> -50% </span> </div>
                                            <a class="caption-link meta-icon" data-toggle="modal" href="#prod-preview"> <span class="fa fa-eye"> </span> </a>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <div class="prod-details pt-50">
                                    <div class="prod-title"> <a href="product-detail.html"> women’s blouse </a>  </div>
                                    <div class="block-inline">
                                        <div class="rating pull-right">
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                        </div>
                                        <div class="prod-price font-2 pull-left fsz-16">
                                            <ins>$180.00</ins> <del>$360.00</del>
                                        </div>
                                    </div>
                                    <div class="discriptions pt-20">
                                        <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla.</p>
                                    </div>
                                    <div class="prod-attributes">
                                        <ul class="prod-btns prod-meta">
                                            <li> <a href="#" class="fa fa-heart meta-icon"></a> </li>
                                            <li> <a href="#" class="fa fa-retweet meta-icon"></a> </li>
                                            <li> <a href="#" class="theme-btn btn-black small-btn"> add to cart </a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row listview-wrap">
                            <div class="col-md-4 col-sm-12">
                                <div class="prod-wrap pt-50">
                                    <figure>
                                        <div class="prod-img">
                                            <a href="#" class="img-hover"> <img src="assets/img/product/category-1/3.jpg" alt="product"> </a>
                                            <span class="prod-cat">dresses</span>
                                            <a class="caption-link meta-icon" data-toggle="modal" href="#prod-preview"> <span class="fa fa-eye"> </span> </a>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <div class="prod-details pt-50">
                                    <div class="prod-title"> <a href="product-detail.html"> women’s blouse 2016 </a>  </div>
                                    <div class="block-inline">
                                        <div class="rating pull-right">
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                        </div>
                                        <div class="prod-price font-2 pull-left fsz-16">
                                            <ins>$160.00</ins>
                                        </div>
                                    </div>
                                    <div class="discriptions pt-20">
                                        <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque</p>
                                    </div>
                                    <div class="prod-attributes">
                                        <ul class="prod-btns prod-meta">
                                            <li> <a href="#" class="fa fa-heart meta-icon"></a> </li>
                                            <li> <a href="#" class="fa fa-retweet meta-icon"></a> </li>
                                            <li> <a href="#" class="theme-btn btn-black small-btn"> add to cart </a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row listview-wrap">
                            <div class="col-md-4 col-sm-12">
                                <div class="prod-wrap pt-50">
                                    <figure>
                                        <div class="prod-img">
                                            <a class="img-hover" href="#"> <img alt="product" src="assets/img/product/category-1/4.jpg"> </a>
                                            <span class="prod-cat">men’s wear</span>
                                            <div class="prod-tag-1 font-2"> <span> Sale </span> </div>
                                            <a class="caption-link meta-icon" data-toggle="modal" href="#prod-preview"> <span class="fa fa-eye"> </span> </a>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <div class="prod-details pt-50">
                                    <div class="prod-title"> <a href="product-detail.html"> Men's Black Coat </a>  </div>
                                    <div class="block-inline">
                                        <div class="rating pull-right">
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star half"></span>
                                            <span class="star"></span>
                                        </div>
                                        <div class="prod-price font-2 pull-left fsz-16">
                                            <ins>$180.00</ins>
                                        </div>
                                    </div>
                                    <div class="discriptions pt-20">
                                        <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. </p>
                                    </div>
                                    <div class="prod-attributes">
                                        <ul class="prod-btns prod-meta">
                                            <li> <a href="#" class="fa fa-heart meta-icon"></a> </li>
                                            <li> <a href="#" class="fa fa-retweet meta-icon"></a> </li>
                                            <li> <a href="#" class="theme-btn btn-black small-btn"> add to cart </a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row listview-wrap">
                            <div class="col-md-4 col-sm-12">
                                <div class="prod-wrap pt-50">
                                    <figure>
                                        <div class="prod-img">
                                            <a href="#" class="img-hover"> <img src="assets/img/product/category-1/1.jpg" alt="product"> </a>
                                            <span class="prod-cat">dresses</span>
                                            <div class="prod-tag-1 font-2"> <span> Sale </span> </div>
                                            <a href="#prod-preview" data-toggle="modal" class="caption-link meta-icon"> <span class="fa fa-eye"> </span> </a>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <div class="prod-details pt-50">
                                    <div class="prod-title"> <a href="product-detail.html"> Dress for women </a>  </div>
                                    <div class="block-inline">
                                        <div class="rating pull-right">
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                        </div>
                                        <div class="prod-price font-2 pull-left fsz-16">
                                            <ins>$250.00</ins> <del>$360.00</del>
                                        </div>
                                    </div>
                                    <div class="discriptions pt-20">
                                        <p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>
                                    </div>
                                    <div class="prod-attributes">
                                        <ul class="prod-btns prod-meta">
                                            <li> <a href="#" class="fa fa-heart meta-icon"></a> </li>
                                            <li> <a href="#" class="fa fa-retweet meta-icon"></a> </li>
                                            <li> <a href="#" class="theme-btn btn-black small-btn"> add to cart </a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pagination Starts -->
                        <div class="block-inline pagination-wrap text-center">
                            <ul class="pagination-1">
                                <li class="prv"> <a href="#"> <i class="fa fa-long-arrow-left"></i> </a> </li>
                                <li> <a href="#" class="active"> 1 </a> </li>
                                <li> <a href="#"> 2 </a> </li>
                                <li> <a href="#"> 3 </a> </li>
                                <li class="nxt"> <a href="#"> <i class="fa fa-long-arrow-right"></i> </a> </li>
                            </ul>
                        </div>
                        <!-- Pagination Ends -->
                    </div>
                    <!-- Product Grid View Ends -->

                </div>

            </aside>
            <!-- Product Details Ends -->

            <div class="visible-xs pt-70"></div>

            <!-- Sidebar Starts -->
            <aside class="col-md-3 col-sm-4 sidebar">
                <div class="widget-wrap">
                    <h2 class="widget-title"> Shop By  <span class="plus-icon"><img alt="" src="assets/img/icons/plus.png" /></span></h2>
                    <div class="widget-box">
                        <h3 class="title-1 fsz-14"> Categories </h3>
                        <ul>
                            <li><label class="checkbox-inline"><input type="checkbox" value=""> <span class="square-box"></span> <span>Women’s</span> </label> </li>
                            <li><label class="checkbox-inline"><input type="checkbox" value=""> <span class="square-box"></span> <span>Man’s</span> </label> </li>
                            <li><label class="checkbox-inline"><input type="checkbox" value=""> <span class="square-box"></span> <span>LookBook 2016</span> </label> </li>
                            <li><label class="checkbox-inline"><input type="checkbox" value=""> <span class="square-box"></span> <span>Action on Hover</span> </label> </li>
                            <li><label class="checkbox-inline"><input type="checkbox" value=""> <span class="square-box"></span> <span>Checked List Item</span> </label> </li>
                            <li><label class="checkbox-inline"><input type="checkbox" value=""> <span class="square-box"></span> <span>Halloween Hats</span> </label> </li>
                            <li><label class="checkbox-inline"><input type="checkbox" value=""> <span class="square-box"></span> <span>Winter Underwear</span> </label> </li>
                            <li><label class="checkbox-inline"><input type="checkbox" value=""> <span class="square-box"></span> <span>Summer Sell-Out</span> </label> </li>
                            <li><label class="checkbox-inline"><input type="checkbox" value=""> <span class="square-box"></span> <span>Little 2015 Closeout</span> </label> </li>
                        </ul>
                    </div>
                    <div class="widget-box">
                        <h3 class="title-1 fsz-14"> Our Brands </h3>
                        <ul>
                            <li><label class="checkbox-inline"><input type="checkbox" value=""> <span class="square-box"></span> <span>Barry Bags (10)</span> </label> </li>
                            <li><label class="checkbox-inline"><input type="checkbox" value=""> <span class="square-box"></span> <span>Andy Cooper (16)</span> </label> </li>
                            <li><label class="checkbox-inline"><input type="checkbox" value=""> <span class="square-box"></span> <span>Air JET (2)</span> </label> </li>
                            <li><label class="checkbox-inline"><input type="checkbox" value=""> <span class="square-box"></span> <span>J.Chack (14)</span> </label> </li>
                            <li><label class="checkbox-inline"><input type="checkbox" value=""> <span class="square-box"></span> <span>Arrs Shop (6)</span> </label> </li>
                            <li><label class="checkbox-inline"><input type="checkbox" value=""> <span class="square-box"></span> <span>Flash (12)</span> </label> </li>
                        </ul>
                    </div>

                    <div class="widget-box">
                        <h3 class="title-1 fsz-14"> Filter by Price </h3>
                        <div class="widget-content pb-35">
                            <div id="price-range"></div>
                            <div class="block-inline range-wrap">
                                <span id="price-min"></span> - <span id="price-max"></span>
                            </div>
                        </div>
                    </div>

                    <div class="widget-box">
                        <h3 class="title-1 fsz-14"> Filter by Color </h3>
                        <ul class="choose-clr list-inline border-hover">
                            <li> <a class="black-bg" href="#"></a> </li>
                            <li> <a class="gray-bg" href="#"></a> </li>
                            <li> <a class="red-bg" href="#"></a> </li>
                            <li> <a class="yellow-bg active" href="#"></a> </li>
                            <li> <a class="green1-bg" href="#"></a> </li>
                            <li> <a class="blue1-bg" href="#"></a> </li>
                            <li> <a class="blue2-bg" href="#"></a> </li>
                            <li> <a class="violate-bg" href="#"></a> </li>
                            <li> <a class="pink-bg" href="#"></a> </li>
                            <li> <a class="green2-bg" href="#"></a> </li>
                        </ul>
                    </div>
                </div>

                <div class="widget-wrap">
                    <h2 class="widget-title"> Best Seller </h2>
                    <div id="widget-best-seller" class="nav-2 widget-best-seller">
                        <div class="item">
                            <div class="prod-wrap">
                                <figure>
                                    <div class="left-box">
                                        <div class="prod-img">
                                            <a href="#" class="img-hover"> <img src="assets/img/product/small/1.small.jpg" alt="product"> </a>
                                        </div>
                                    </div>
                                    <figcaption class="prod-content right-box">
                                        <h2 class="prod-title"> <a href="product-detail.html"> some shop item title </a> </h2>
                                        <div class="block-inline">
                                            <div class="rating">
                                                <span class="star active"></span>
                                                <span class="star active"></span>
                                                <span class="star active"></span>
                                                <span class="star"></span>
                                                <span class="star"></span>
                                            </div>
                                            <div class="prod-price font-2">
                                                <ins>$250.00</ins>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="prod-wrap">
                                <figure>
                                    <div class="left-box">
                                        <div class="prod-img">
                                            <a href="#" class="img-hover"> <img src="assets/img/product/small/5.small.jpg" alt="product"> </a>
                                        </div>
                                    </div>
                                    <figcaption class="prod-content right-box">
                                        <h2 class="prod-title"> <a href="product-detail.html"> some shop item title </a> </h2>
                                        <div class="block-inline">
                                            <div class="rating">
                                                <span class="star active"></span>
                                                <span class="star active"></span>
                                                <span class="star active"></span>
                                                <span class="star"></span>
                                                <span class="star"></span>
                                            </div>
                                            <div class="prod-price font-2">
                                                <ins>$250.00</ins> <del>$360.00</del>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="item">
                            <div class="prod-wrap">
                                <figure>
                                    <div class="left-box">
                                        <div class="prod-img">
                                            <a href="#" class="img-hover"> <img src="assets/img/product/small/2.small.jpg" alt="product"> </a>
                                        </div>
                                    </div>
                                    <figcaption class="prod-content right-box">
                                        <h2 class="prod-title"> <a href="product-detail.html"> some shop item title </a> </h2>
                                        <div class="block-inline">
                                            <div class="rating">
                                                <span class="star active"></span>
                                                <span class="star active"></span>
                                                <span class="star active"></span>
                                                <span class="star"></span>
                                                <span class="star"></span>
                                            </div>
                                            <div class="prod-price font-2">
                                                <ins>$250.00</ins>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="prod-wrap">
                                <figure>
                                    <div class="left-box">
                                        <div class="prod-img">
                                            <a href="#" class="img-hover"> <img src="assets/img/product/small/6.small.jpg" alt="product"> </a>
                                        </div>
                                    </div>
                                    <figcaption class="prod-content right-box">
                                        <h2 class="prod-title"> <a href="product-detail.html"> some shop item title </a> </h2>
                                        <div class="block-inline">
                                            <div class="rating">
                                                <span class="star active"></span>
                                                <span class="star active"></span>
                                                <span class="star active"></span>
                                                <span class="star"></span>
                                                <span class="star"></span>
                                            </div>
                                            <div class="prod-price font-2">
                                                <ins>$250.00</ins>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="widget-wrap">
                    <div class="banner-1 box-hover text-center">
                        <img alt="banner" src="assets/img/banner/widget-bg-1.jpg">
                        <div class="widget-banner-content tbl-wrp black-mask">
                            <div class="text-middle">
                                <div class="tbl-cell">
                                    <h2 class="section-title wht fsz-48"> LookBook </h2>
                                    <p class="sub-detail wht"> 2015 - 2016 </p>
                                    <img src="assets/img/logo/logo-white-big.png" alt="logo" class="pt-25 pb-30" />
                                    <p class="no-margin">  <a class="btn-white theme-btn small-btn" href="#"> Let's Buy it </a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <!-- Sidebar Ends -->
        </div>
    </div>
    <!-- / Page Ends -->
@endsection

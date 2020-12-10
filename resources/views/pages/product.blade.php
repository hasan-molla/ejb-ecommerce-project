@extends('layouts.app')

@section('content')

<!--Breadcrumb Section Start-->
<section class="breadcrumb-bg">                
    <div class="theme-container container ">                       
        <div class="site-breadcumb white-clr">                        
            <h2 class="section-title wht fsz-36"> Detail Product </h2> 
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
            <div class="row">
                <div class="col-md-5 col-sm-12 single-prod-slider sync-sliedr">
                    <!-- Single Products Slider Starts -->                                                            
                    <div class="owl-carousel sync1 pb-25">
                        <div class="item"> 
                            <img src=" {{asset('assets/img/product/single-prod-1.jpg')}} " alt="">
                            <a href=" {{asset('assets/img/product/prod-big-1.jpg')}} " data-gal="prettyPhoto[prettyPhoto]" title="Product" class="caption-link meta-icon"><i class="fa fa-arrows-alt"></i></a>
                        </div> 
                        <div class="item"> 
                            <img src=" {{asset('assets/img/product/single-prod-2.jpg')}} " alt="">
                            <a href=" {{asset('assets/img/product/prod-big-2.jpg')}} " data-gal="prettyPhoto[prettyPhoto]" title="Product" class="caption-link meta-icon"><i class="fa fa-arrows-alt"></i></a>
                        </div> 
                        <div class="item"> 
                            <img src=" {{asset('assets/img/product/single-prod-3.jpg')}} " alt="">
                            <a href=" {{asset('assets/img/product/prod-big-3.jpg')}} " data-gal="prettyPhoto[prettyPhoto]" title="Product" class="caption-link meta-icon"><i class="fa fa-arrows-alt"></i></a>
                        </div> 
                        <div class="item"> 
                            <img src=" {{asset('assets/img/product/single-prod-4.jpg')}} " alt="">
                            <a href=" {{asset('assets/img/product/prod-big-4.jpg')}} " data-gal="prettyPhoto[prettyPhoto]" title="Product" class="caption-link meta-icon"><i class="fa fa-arrows-alt"></i></a>
                        </div> 
                        <div class="item"> 
                            <img src=" {{asset('assets/img/product/single-prod-1.jpg')}} " alt="">
                            <a href= " {{asset('assets/img/product/prod-big-1.jpg')}} " data-gal="prettyPhoto[prettyPhoto]" title="Product" class="caption-link meta-icon"><i class="fa fa-arrows-alt"></i></a>
                        </div> 
                    </div>

                    <div  class="owl-carousel single-prod-thumb sync2 nav-2">
                        <div class="item"> 
                            <img src=" {{asset('assets/img/product/prod-thumb-1.jpg')}} " alt="product"> 
                            <span class="transparent"> <img src=" {{asset('assets/img/icons/plus.png')}} " alt="view" />  </span> 
                        </div>
                        <div class="item"> 
                            <img src=" {{asset('assets/img/product/prod-thumb-2.jpg')}} " alt="product"> 
                            <span class="transparent"> <img src=" {{asset('assets/img/icons/plus.png')}} " alt="view" />  </span> 
                        </div>
                        <div class="item"> 
                            <img src=" {{asset('assets/img/product/prod-thumb-3.jpg')}} " alt="product">
                            <span class="transparent"> <img src=" {{asset('assets/img/icons/plus.png')}} " alt="view" />  </span> 
                        </div>                                            
                        <div class="item"> 
                            <img src=" {{asset('assets/img/product/prod-thumb-1.jpg')}} " alt="product"> 
                            <span class="transparent"> <img src=" {{asset('assets/img/icons/plus.png')}} " alt="view" />  </span> 
                        </div>
                        <div class="item"> 
                            <img src=" {{asset('assets/img/product/prod-thumb-2.jpg')}} " alt="product"> 
                            <span class="transparent"> <img src=" {{asset('assets/img/icons/plus.png')}} " alt="view" />  </span> 
                        </div>
                        <div class="item"> 
                            <img src=" {{asset('assets/img/product/prod-thumb-3.jpg')}} " alt="product">
                            <span class="transparent"> <img src=" {{asset('assets/img/icons/plus.png')}} " alt="view" />  </span> 
                        </div>                                            
                    </div>                                  
                    <!-- Single Products Slider Ends --> 
                </div>
                <div class="visible-sm visible-xs pt-50"></div>
                <div class="col-md-7 col-sm-12">
                    <div class="prod-details">
                        <div class="prod-title"> {{$product->name}}  </div>
                        <div class="block-inline">
                            <div class="rating pull-right">
                                <span class="star active"></span>
                                <span class="star active"></span>
                                <span class="star active"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                            </div>
                            <div class="prod-price font-2 pull-left fsz-16">
                                <ins>{{$product->price}}</ins> <del>$360.00</del>
                            </div>
                        </div>
                        <div class="discriptions pt-20">
                            <p> {{$product->details}} </p>
                        </div>
                        <div class="prod-attributes">
                            <h2 class="title-1 fsz-14"> Choose Color </h2>
                            <ul class="choose-clr list-inline border-hover">
                                <li> <a href="#" class="black-bg"></a> </li>
                                <li> <a href="#" class="gray-bg"></a> </li>
                                <li> <a href="#" class="red-bg"></a> </li>
                                <li> <a href="#" class="yellow-bg active"></a> </li>
                                <li> <a href="#" class="brown-bg"></a> </li>
                            </ul>
                            <h2 class="title-1 fsz-14"> Choose Size </h2>
                            <ul class="choose-size list-inline border-hover">
                                <li> <a href="#"> S </a> </li>
                                <li> <a href="#" class="active"> M </a> </li>
                                <li> <a href="#"> L </a> </li>
                                <li> <a href="#"> XL </a> </li>
                                <li> <a href="#"> XXL </a> </li>
                            </ul>
                            <h2 class="title-1"> Quantity </h2>
                            <ul class="prod-btns prod-meta">
                                <li> 
                                    <div class="quantity">
                                        <button class="btn minus">-</button>
                                        <input type="number" class="form-control qty"  name="quantity" value="1" title="Qty">
                                        <button class="btn plus">+</button>
                                    </div>
                                </li>
                                <li> <a class="theme-btn btn-black small-btn" href="#"> add to cart </a> </li>
                                <li> <a class="fa fa-heart meta-icon" href="#"></a> </li>
                                <li> <a class="fa fa-retweet meta-icon" href="#"></a> </li>                                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Products Description Tabination Starts -->  
            <div class="tabs-wrap">
                <div class="tabs">
                    <ul id="tabs" class="nav font-2 theme-tabs">                                         
                        <li class="active"><a href="#prod-tab-1" data-toggle="tab"> Description </a></li>
                        <li class=""><a href="#prod-tab-2" data-toggle="tab"> Reviews </a></li>
                        <li class=""><a href="#prod-tab-3" data-toggle="tab"> Additional </a></li>
                        <li class=""><a href="#prod-tab-4" data-toggle="tab"> Tags </a></li>                           
                    </ul>
                </div>
                <div class="tab-content prod-tab-content">
                    <div id="prod-tab-1" class="tab-pane fade in active">
                        <p> Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.</p>
                        <p> Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. amet nibh. Donec sodales sagittis magna. Augue velit cursus nunc, quis gravida.</p>    
                    </div>
                    <div id="prod-tab-2" class="tab-pane fade">
                        <p> Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.</p>
                        <p> Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. amet nibh. Donec sodales sagittis magna. Augue velit cursus nunc, quis gravida.</p>    
                    </div>
                </div>
            </div>
            <!-- Products Description Tabination Ends -->  

            <!-- Related Products Starts --> 
            <div class="block-inline pt-15">
                <h2 class="section-title"> Related Products </h2>
                <div id="rel-prod-slider" class="rel-prod-slider nav-1"> 
                    <div class="item">
                        <div class="prod-wrap pt-50">
                            <figure>
                                <div class="prod-img">
                                    <a class="img-hover" href="#"> <img alt="product" src=" {{asset('assets/img/product/category-1/2.jpg')}} "> </a>
                                    <span class="prod-cat">blouse</span>
                                    <div class="prod-tag-1 font-2"> <span> -50% </span> </div>
                                    <a class="caption-link meta-icon" data-toggle="modal" href="#prod-preview"> <span class="fa fa-eye"> </span> </a>
                                </div>
                                <figcaption class="prod-content">
                                    <h2 class="prod-title"> <a href="product-detail.html"> women’s blouse </a> </h2>
                                    <div class="block-inline">
                                        <div class="rating">
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                        </div>
                                        <div class="prod-price font-2">
                                            <ins>$180.00</ins> <del>$360.00</del>
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
                    <div class="item">
                        <div class="prod-wrap pt-50">
                            <figure>
                                <div class="prod-img">
                                    <a class="img-hover" href="#"> <img alt="product" src=" {{asset('assets/img/product/category-1/3.jpg')}} "> </a>
                                    <span class="prod-cat">dresses</span>  
                                    <a class="caption-link meta-icon" data-toggle="modal" href="#prod-preview"> <span class="fa fa-eye"> </span> </a>
                                </div>
                                <figcaption class="prod-content">
                                    <h2 class="prod-title"> <a href="product-detail.html"> women’s blouse 2016 </a> </h2>
                                    <div class="block-inline">
                                        <div class="rating">
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                        </div>
                                        <div class="prod-price font-2">
                                            <ins>$160.00</ins>
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
                    <div class="item">
                        <div class="prod-wrap pt-50">
                            <figure>
                                <div class="prod-img">
                                    <a class="img-hover" href="#"> <img alt="product" src=" {{asset('assets/img/product/category-1/6.jpg')}} "> </a>
                                    <span class="prod-cat">blouse</span>
                                    <div class="prod-tag-1 font-2"> <span> -50% </span> </div>
                                    <a class="caption-link meta-icon" data-toggle="modal" href="#prod-preview"> <span class="fa fa-eye"> </span> </a>
                                </div>
                                <figcaption class="prod-content">
                                    <h2 class="prod-title"> <a href="product-detail.html"> women’s blouse </a> </h2>
                                    <div class="block-inline">
                                        <div class="rating">
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                        </div>
                                        <div class="prod-price font-2">
                                            <ins>$180.00</ins> <del>$360.00</del>
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
                </div>
            </div>
            <!-- Related Products Ends --> 

        </aside>
        <div class="visible-xs pt-70"></div>
        <!-- Product Details Ends --> 

        <!-- Sidebar Starts --> 
        <aside class="col-md-3 col-sm-4 sidebar">
            <div class="widget-wrap">
                <h2 class="widget-title"> Best Seller </h2>
                <div id="widget-best-seller" class="nav-2 widget-best-seller">
                    <div class="item">
                        <div class="prod-wrap">
                            <figure>
                                <div class="left-box">
                                    <div class="prod-img">
                                        <a href="#" class="img-hover"> <img src=" {{asset('assets/img/product/small/1.small.jpg')}} " alt="product"> </a>                                                   
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
                                        <a href="#" class="img-hover"> <img src=" {{asset('assets/img/product/small/5.small.jpg')}} " alt="product"> </a>                                                   
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
                                        <a href="#" class="img-hover"> <img src=" {{asset('assets/img/product/small/2.small.jpg')}} " alt="product"> </a>                                                   
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
                                        <a href="#" class="img-hover"> <img src=" {{asset('assets/img/product/small/6.small.jpg')}} " alt="product"> </a>                                                   
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
                    <img alt="banner" src=" {{asset('assets/img/banner/widget-bg-1.jpg')}} ">
                    <div class="widget-banner-content tbl-wrp black-mask">
                        <div class="text-middle">
                            <div class="tbl-cell">
                                <h2 class="section-title wht fsz-48"> LookBook </h2>
                                <p class="sub-detail wht"> 2015 - 2016 </p>
                                <img src=" {{asset('assets/img/logo/logo-white-big.png')}} " alt="logo" class="pt-25 pb-30" />
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
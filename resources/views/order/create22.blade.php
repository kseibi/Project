@extends('layouts.app')
@section('title', 'Orders')
@section('content')
@php
    $route_name = Route::currentRouteName();
    $group_name = app('request')->input('group');
    $sub_group_name = app('request')->input('subgroup');
@endphp
<div class="container page-container">
<div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-end">
                                    
                                </div>
                                <!-- <h4 class="page-title ml-3 mb-2 mt-2">User Dashboard</h4> -->
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    
                    
                    <div class="row">
                        <div class="col-md-12 col-lg-3 order-lg-1 order-md-2 order-sm-2">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="pt-3">
                                        <h3 class="text-dark text-center font-24 fw-bold line-height-lg">Welcome to 
                                        <br>Orange Studio :)</h3>
                                        <div class="text-center text-muted font-16 fw-bold pt-3 pb-1">
                                        We are a team of multinational product photographers who are committed to provide quality photoshots for your brand, we litirally dream, live and love photography, welcome in our start up company.
                                        </div>
                                        <br><h4 class="text-dark text-center font-24 fw-bold line-height-lg">We want to be part
                                        <br> of your success.</h4><br>

                                        <img src="img/dashboard-grow.jpg" alt="" class="img-fluid" >
                                    </div>
                                </div><!--end card-body--> 
                            </div><!--end card-->                            
                        </div> 
                        <div class="col-lg-9 order-lg-2 order-md-1 order-sm-1">
    <div class="col-md-12 d-none d-md-block">                      
         <h4 class="card-title">
Wish you a pleasant day, <b>{{ (auth()->user()->first_name) }}</b> <span><i class="fas fa-grin-wink activity-icon-darkyellow"></i></span> </h4>      
            </div>
                            <div class="row justify-content-center"> 
                                <div class="col-lg-6 col-md-6">
                                    <div class="credit-card-wrapper overflow-hidden">
                                        <div class="">
                                            
<div class="card-card-credit">
        <div class="upper">
            <h6>Your wallet current balance</h6>
            <h4>{{ format_money(auth()->user()->wallet()->balance()) }}</h4>
        </div>
        <div class="lower">
            <h5>{{ (auth()->user()->first_name) }} {{ (auth()->user()->last_name) }}</h5> <span>4564 - 3432 - 3434 - 1236</span>
        </div>
    </div>

                                        </div> 
                                    </div>                                     
                                </div>
<div class="col-lg-6 col-md-6">
    <div class="container">
    <div class="row"> 
	                                 
 
        <div class=" card col-lg-12 col-md-12 col-sm-6 bg-light-orange">
	<div class="dashboard-button-clickable overflow-hidden">
		<div class="">
			<div class="row d-flex">
				<div class="col-3"><img src="img/group-dashboard-icn.png"></div>
					<div class="col-8 pt-1 button">
                    <a class="white-text-dashboard" href="{{ route('order_page') }}">Create order</a>
					</div>
			 </div>
		 </div>
	</div>                                 
 </div>
        <div class="card col-lg-12 col-md-12 col-sm-6  bg-orange">
<div type="button" class="dashboard-button-clickable overflow-hidden" data-toggle="modal" data-target="#exampleModal">
		<div class="">
			<div class="row d-flex">
				<div class="col-3"><img src="img/group-dashboard-icn.png"></div>
					<div class="col-8 pt-1 button">
						<span>Dedicateds address</span>
					</div>
			 </div>
		 </div>
	</div>                                 
 </div>
        
    </div></div>
    
</div> <!--end col--> <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sample Shipping Location:<br>
                                                        Include your customer code <b>#C260{{ (auth()->user()->id) }}</b> for easier identification</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                    <div class="row">
                    <div class="col-md-6">
                    <div class="font-weight-bold">English address </div>
                        <p class="small"> Orange Photography Co., Ltd.<br>
                     Jide Industrial Park, Danbei County, Danyang 212312, Jiangsu Province, China<br>
                    Studio <br>
                    18922440340</p>
                    </div>
                        <div class="col-md-6">
                        <div class="font-weight-bold">Chinese address</div>
                        <p class="small">  丹阳市奥林奇摄影有限公司<br>
                        江苏省镇江市丹阳丹北镇后巷济德新工业园涧东路凯色比 212312<br>
                        摄影 <br>
                        18922440340</p>
                            </div>
      </div></div>
    </div>
    
  </div>
 
</div>
<div class="col-md-12 d-none d-md-block">
      <h4 class="card-title"> Working with us is easy, just let us know your requirments</h4>
    </div>
<div class="col-md-12">
    <div>
        <div class="d-lg-flex">
            <div class="d-md-flex align-items-center mb-lg-0 mb-md-5">
                <div class="col1 me-md-4 mb-md-0 mb-5 m-1">
                    <div class="card p-2">
                        <span
                            class="fab fa-envira mt-3"
                            style="
                                color: rgb(240, 50, 89);
                                text-align: center;
                                font-size: 40px;
                                background-color: rgba(0, 0, 0, 0.05);
                                height: 100px;
                                width: 100px;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                border-radius: 50%;
                                margin-left: 25%;
                            "
                        ></span>
                        <p class="h4 pt-4 text-center">Designed for you</p>
                        <p class="p1 text-muted">Working to create a quote with us is easy, detailing your requirements as well as your budget.</p>
                    </div>
                </div>
                <div class="col2 me-md-4 mb-md-0 mb-2 m-1">
                    <div class="card p-2">
                        <span
                            class="fas fa-glass-cheers mt-3"
                            style="
                                color: rgb(2, 149, 198);
                                text-align: center;
                                font-size: 40px;
                                background-color: rgba(0, 0, 0, 0.05);
                                height: 100px;
                                width: 100px;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                border-radius: 50%;
                                margin-left: 25%;
                            "
                        ></span>
                        <p class="h4 pt-4 text-center">Efficient</p>
                        <p class="p1 text-muted">We will be with you from start, making sure every aspect of your shoot runs smoothly.</p>
                    </div>
                </div>
                <div class="col3 me-md-4 mb-md-0 mb-5 m-1">
                    <div class="card p-2">
                        <span
                            class="fas fa-people-carry mt-3"
                            style="
                                color: rgb(254, 126, 0);
                                text-align: center;
                                font-size: 40px;
                                background-color: rgba(0, 0, 0, 0.05);
                                height: 100px;
                                width: 100px;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                border-radius: 50%;
                                margin-left: 25%;
                            "
                        ></span>
                        <p class="h4 pt-4 text-center">Stay in touch</p>
                        <p class="p1 text-muted">Delivering your images is not the end of the story though. we are here &amp; happy to help.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card col4">
            <div class="content p-3">
                <p class="h2 mb-1">Direct contact with your account manager</p>
                <p class="text-muted mb-4">
                    We have kept in mind all the hassles that get involved in getting the best shots, be in control of the entire process, and we will do our best to make your experience as pleasent as possible.
                </p>
            </div>
        </div>
    </div>
</div>



                   

                  <!--  <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">View your orders</h4>                      
                                        </div>end col                                      
                                    </div>                                    
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive browser_users">
                                        <table class="table table-hover mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th class="border-top-0">Browser</th>
                                                    <th class="border-top-0">Sessions</th>
                                                    <th class="border-top-0">Bounce Rate</th>
                                                    <th class="border-top-0">Transactions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>  
                                                    <td><img src="assets/images/logos/chrome.png" alt="" height="20" class="me-2">Chrome</td> 
                                                    <td>10853<small class="text-muted">(52%)</small></td>                                   
                                                    <td> 52.80%</td>
                                                    <td>566<small class="text-muted">(92%)</small></td>
                                                </tr>    
                                                <tr>                                                        
                                                    <td><img src="assets/images/logos/micro-edge.png" alt="" height="20" class="me-2">Microsoft Edge</td>
                                                    <td>2545<small class="text-muted">(47%)</small></td>                                   
                                                    <td> 47.54%</td>
                                                    <td>498<small class="text-muted">(81%)</small></td>
                                                </tr>
                                                <tr>                                                        
                                                    <td><img src="assets/images/logos/in-explorer.png" alt="" height="20" class="me-2">Internet-Explorer</td>
                                                    <td>1836<small class="text-muted">(38%)</small></td>                                   
                                                    <td> 41.12%</td>
                                                    <td>455<small class="text-muted">(74%)</small></td>
                                                </tr>
                                                <tr>                                                        
                                                    <td><img src="assets/images/logos/opera.png" alt="" height="20" class="me-2">Opera</td>
                                                    <td>1958<small class="text-muted">(31%)</small></td>                                   
                                                    <td> 36.82%</td>
                                                    <td>361<small class="text-muted">(61%)</small></td>
                                                </tr>
                                                <tr>                                                        
                                                    <td><img src="assets/images/logos/chrome.png" alt="" height="20" class="me-2">Chrome</td>
                                                    <td>10853<small class="text-muted">(52%)</small></td>                                   
                                                    <td> 52.80%</td>
                                                    <td>566<small class="text-muted">(92%)</small></td>
                                                </tr>                           
                                            </tbody>
                                        </table>                                          
                                    </div> 
                                </div> 
                            </div> 
                             
                        </div> 
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">This is how it works</h4>                      
                                        </div>
                                        <div class="col-auto"> 
                                            <div class="dropdown">
                                                <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   All<i class="las la-angle-down ms-1"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Purchases</a>
                                                    <a class="dropdown-item" href="#">Emails</a>
                                                </div>
                                            </div>         
                                        </div>
                                    </div>                             
                                </div>-->  
                                </div></div></div>        
      <div class="col-md-12 d-none d-md-block">
      <h4 class="card-title"> Example of our work: </h4>
    </div>
<div class="row">
    
  <div class="col-md-9">

  <div class="col-md-12">
    <h4 class="card-title"></h4>
  </div>
  <div class="">
    <div class="row">
      <div class="col-lg-3 col-md-4 col-sm-4">
        <div class="card">
          <img src="img/dashboard_gallary_1.jpg">
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-4">
        <div class="card">
          <img src="img/dashboard_gallary_2.jpg">
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-4">
        <div class="card">
          <img src="img/dashboard_gallary_3.jpg">
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-4">
        <div class="card">
          <img src="img/dashboard_gallary_4.jpg">
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-4">
        <div class="card">
          <img src="img/dashboard_gallary_5.jpg">
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-4">
        <div class="card">
          <img src="img/dashboard_gallary_6.jpg">
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-4">
        <div class="card">
          <img src="img/dashboard_gallary_7.jpg">
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-4">
        <div class="card">
          <img src="img/dashboard_gallary_8.jpg">
        </div>
      </div> </div></div>
    </div>
    <div class="card col-md-3">
      <div class="card-body">
        <div class="">
          <div class="d-flex flex-row justify-content-around">
            <img src="img/dashboard_desktop.png" width="68px" height="68px" style="z-index:1">
            <img src="img/dashboard_delivery-truck.png" width="68px" height="68px" style="z-index:1">
            <img src="img/dashboard_trophy.png" width="68px" height="68px" style="z-index:1">
          </div>
          <div class="d-flex flex-row justify-content-around mt-2">
            <span style="width:68px;text-align:center;z-index: 1;">Place Order</span>
            <span style="width:68px;text-align:center;z-index: 1;">Ship product</span>
            <span style="width:68px;text-align:center;z-index: 1;">Review content</span>
          </div>
        </div>
      </div>
    </div>

</div></div>




                    <div class="col-md-12"><div class="card"><div class="row d-flex justify-content-center"><h5 class="card-title-order">Recommended shoot packs</h5> <div class="container text-center pb-4">
                            Pre-designed shoot packs make it quick and easy to get assets that are common<br>
                            and meet the best practices of the places you will post on.
                        </div> <div class="card col-md-5 m-3"><div class="row no-gutters"><div class="col-auto"><img src="https://app.studios-orange.com/storage/packs//UeIzqHWsSdb12N6pHn5fzyuzSp0EHNZUDPV2AucH.jpeg" width="100" alt="" class="card-img-left"></div> <div class="col"><div class="card-body"><h5 class="card-title"><b>Shopify premium</b></h5> <p class="card-text">Show your product in style, refresh your website content with lifestyle &amp;amp; elegant e-commerce images, showing all details of your product.</p> <h5 class="card-title"><b>Includes:</b></h5> <ul><li>1 pure background photos</li> <li>1 focused photo</li> <li>3 lifestyle photo</li> <li>Similar identity for your brand
</li></ul> <h5 class="card-title"><b>$99.50</b></h5> <h6 class="card-title"><del> $110.00  </del>
                                        ($10.50 off)
                                    </h6> <a href="https://app.studios-orange.com/orders/packs/7" class="btn btn-success btn-sm">VIEW PACK DETAILS</a></div></div></div></div> <div class="card col-md-5 m-3"><div class="row no-gutters"><div class="col-auto"><img src="https://app.studios-orange.com/storage/packs//zpvMQgmnzhNhETKMqrtHBiTE9GBEznIicfqFpa7j.jpeg" width="100" alt="" class="card-img-left"></div> <div class="col"><div class="card-body"><h5 class="card-title"><b>Amazon essential</b></h5> <p class="card-text">Images for any listing to grow your audience, it includes the essential basic images required to start selling on Amazon in style.</p> <h5 class="card-title"><b>Includes:</b></h5> <ul><li>3 Pure background photos</li> <li>2 Infographics</li> <li>For one product</li></ul> <h5 class="card-title"><b>$94.80</b></h5> <h6 class="card-title"><del> $100.00  </del>
                                        ($5.20 off)
                                    </h6> <a href="https://app.studios-orange.com/orders/packs/8" class="btn btn-success btn-sm">VIEW PACK DETAILS</a></div></div></div></div> <div class="card col-md-5 m-3"><div class="row no-gutters"><div class="col-auto"><img src="https://app.studios-orange.com/storage/packs//oS2DF0Tqpl1qzCA6FStuxx0l6Me5UQwCFvSIJGWt.jpeg" width="100" alt="" class="card-img-left"></div> <div class="col"><div class="card-body"><h5 class="card-title"><b>Amazon standard</b></h5> <p class="card-text">Launch your product on Amazon with these standard images pack, it includes the infographics, lifestyle images required to get yourself selling on Amazon.</p> <h5 class="card-title"><b>Includes:</b></h5> <ul><li>3 Pure background images</li> <li>2 Infographics</li> <li>2 Manipulated lifestyle</li> <li>For one product</li></ul> <h5 class="card-title"><b>$142.50</b></h5> <h6 class="card-title"><del> $150.00  </del>
                                        ($7.50 off)
                                    </h6> <a href="https://app.studios-orange.com/orders/packs/9" class="btn btn-success btn-sm">VIEW PACK DETAILS</a></div></div></div></div> <div class="card col-md-5 m-3"><div class="row no-gutters"><div class="col-auto"><img src="https://app.studios-orange.com/storage/packs//Om3lZYIJJ1qnFpTbdJDbpa7aPwpVIJYvBeVC9vF2.jpeg" width="100" alt="" class="card-img-left"></div> <div class="col"><div class="card-body"><h5 class="card-title"><b>Instagram refresh</b></h5> <p class="card-text">Improve your Instagram feed with 9 stylish &amp;amp; fun images to catch your audience's attention and keep your brand on the focus.</p> <h5 class="card-title"><b>Includes:</b></h5> <ul><li>8 Lifestyle images</li> <li>1 Gif</li> <li>Up to 3 products</li> <li>Body model</li></ul> <h5 class="card-title"><b>$299.50</b></h5> <h6 class="card-title"><del> $315.00  </del>
                                        ($15.50 off)
                                    </h6> <a href="https://app.studios-orange.com/orders/packs/10" class="btn btn-success btn-sm">VIEW PACK DETAILS</a></div></div></div></div> <div class="card col-md-5 m-3"><div class="row no-gutters"><div class="col-auto"><img src="https://app.studios-orange.com/storage/packs//dGO9x1igIlDf8UshCMudLlgd2NgFAhRZPvBjUV5J.jpeg" width="100" alt="" class="card-img-left"></div> <div class="col"><div class="card-body"><h5 class="card-title"><b>Amazon professional</b></h5> <p class="card-text">It is our bestselling pack, stand out with a complete listing lifestyle, infographics &amp;amp; 360-degree video to showcase your product in the most effective way</p> <h5 class="card-title"><b>Includes:</b></h5> <ul><li>3 Infographic photos</li> <li>3 Lifestyle photos</li> <li>360 Degree video</li> <li>2 white background photos</li> <li>Body model</li></ul> <h5 class="card-title"><b>$304.00</b></h5> <h6 class="card-title"><del> $320.00  </del>
                                        ($16 off)
                                    </h6> <a href="https://app.studios-orange.com/orders/packs/11" class="btn btn-success btn-sm">VIEW PACK DETAILS</a></div></div></div></div> <div class="card col-md-5 m-3"><div class="row no-gutters"><div class="col-auto"><img src="https://app.studios-orange.com/storage/packs//vsRU19EFNdkoiPU9vMVdWaRU4gZpGnRdCO0Y8aWQ.jpeg" width="100" alt="" class="card-img-left"></div> <div class="col"><div class="card-body"><h5 class="card-title"><b>Amazon premium</b></h5> <p class="card-text">Advanced pack for pro sellers who need to sell professionally, including A+ content, professionally made video, infographics &amp;amp; lifestyle images.</p> <h5 class="card-title"><b>Includes:</b></h5> <ul><li>Everything in Professional Pack</li> <li>1 Professional Video</li> <li>1 EBC Content</li> <li>Environment setup</li></ul> <h5 class="card-title"><b>$684.00</b></h5> <h6 class="card-title"><del> $720.00  </del>
                                        ($36 off)
                                    </h6> <a href="https://app.studios-orange.com/orders/packs/12" class="btn btn-success btn-sm">VIEW PACK DETAILS</a></div></div></div></div> <div class="card col-md-5 m-3"><div class="row no-gutters"><div class="col-auto"><img src="https://app.studios-orange.com/storage/packs//nldNUlVbvW9Ci4XmYqIfLflD3MhXKLcA7MFtcnxr.jpeg" width="100" alt="" class="card-img-left"></div> <div class="col"><div class="card-body"><h5 class="card-title"><b>Shopify launch</b></h5> <p class="card-text">Launching your product on your e-commerce website is never easier than before, this is a saving pack for those that have hundreds of products on their websites.</p> <h5 class="card-title"><b>Includes:</b></h5> <ul><li>1 focused seamless photo</li> <li>2 Pure background photo</li></ul> <h5 class="card-title"><b>$28.50</b></h5> <h6 class="card-title"><del> $30.00  </del>
                                        ($1.50 off)
                                    </h6> <a href="https://app.studios-orange.com/orders/packs/13" class="btn btn-success btn-sm">VIEW PACK DETAILS</a></div></div></div></div></div></div></div>

                </div></div>@endsection
                @push('scripts')
<script type="text/javascript">
    window.currencyConfig = {
        !!currencyConfig() !!
    };
</script>
<script src="{{ asset('js/app.js') }}"></script>
@if($notification = growl_notification())
<script type="text/javascript">
    $(function() {
        <?php echo $notification; ?>
    });
</script>
@endif
@stack('scripts')
@endpush

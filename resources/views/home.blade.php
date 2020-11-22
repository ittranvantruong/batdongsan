@extends('layouts.master')
@section('content')
<div class="clear"></div>
<main>
	<!-- search -->
<div id="top_search_pc" class="container-fluid pt-5 pb-5">
	<div class="row justify-content-center hidden-xs">
		<div class="col-12 col-sm-12 col-md-8">
			<form id="form_search_top" action="">
			<ul class="nav nav-tabs">
			    <li class="nav-item">
			      <a class="nav-link active" data-toggle="tab" href="#nhadatban">Nhà đất bán</a>
			    </li>
			    <li class="nav-item">
			      <a class="nav-link" data-toggle="tab" href="#nhadatchothue">Nhà đất cho thuê</a>
			    </li>
			</ul>
			

			<div class="tab-content home_search_pc">
				<div id="nhadatban" class="container tab-pane active ">
					<div class="row home_search_control">
						<div class="col-sm-3 search_cate">
							<div class="select_custom">
	                            <o id="lblCurrCate">Loại nhà đất</o>
	                        </div>
	                        <div id="div_catagory_reoptions" class="advance_select_options" style="display: none;">
	                        	<ul>
	                        		<li vl="0"><span>Tất cả nhà đất</span></li>
	                        		<li vl="324">
	                        			<span>
	                        				<img src="https://file4.batdongsan.com.vn/images/newhome/icon3x/chungcu.png">Căn hộ chung cư
	                        			</span>
	                        		</li>
	                        		<li vl="362">
	                        			<span><img src="https://file4.batdongsan.com.vn/images/newhome/icon3x/nhaban.png">Các loại nhà bán
	                        			</span>
	                        			<ul style="min-width: 210px !important;">
	                        				<li vl="41"><span>Nhà riêng</span></li>
	                        				<li vl="325"><span>Nhà biệt thự, liền kề</span></li>
	                        				<li vl="163"><span>Nhà mặt phố</span></li>
	                        			</ul>
	                        		</li>
	                        		<li vl="361">
	                        			<span><img src="https://file4.batdongsan.com.vn/images/newhome/icon3x/datban.png">Các loại đất bán</span>
	                        			<ul style="min-width: 210px !important;">
	                        				<li vl="40"><span>Đất nền dự án</span></li>
	                        				<li vl="283"><span>Bán đất</span></li>
	                        			</ul>
	                        		</li>
	                        		<li vl="44"><span><img src="https://file4.batdongsan.com.vn/images/newhome/icon3x/trangtrai.png">Trang trại, khu nghỉ dưỡng</span></li>
	                        		<li vl="45"><span><img src="https://file4.batdongsan.com.vn/images/newhome/icon3x/khonhaxuong.png">Kho, nhà xưởng</span></li>
	                        		<li vl="48"><span><img src="https://file4.batdongsan.com.vn/images/newhome/icon3x/bdskhac.png">Bất động sản khác</span></li>
	                        	</ul>
	                        </div>
						</div>
						<div class="col-sm-7 search_input">
							<input type="text" id="txtSearch" placeholder="Tìm kiếm địa điểm, khu vực" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true" name="txtSearch" class="ui-autocomplete-input">
						</div>
						<div class="search_button col-sm-2">
							<input type="button" class="btn-home-search" value="Tìm kiếm" id="btnSearch">
						</div>
					</div>
					<!-- filter 1 -->
					<div class="row mt-2 content_search_1">
						<div class="col pl-0">
							<div class="div_input">
								<input type="text" class="form-control" placeholder="Trên toàn quốc" value="Trên toàn quốc">
							</div>	
						</div>
						<div class="col pl-0">
							<div class="div_input">
								<input type="text" class="form-control" placeholder="Trên toàn quốc" value="Trên toàn quốc">
							</div>	
						</div>

						<div class="col pl-0">
							<div class="div_input">
								<input type="text" class="form-control" placeholder="Trên toàn quốc" value="Trên toàn quốc">
							</div>	
						</div>

						<div class="col pl-0">
							<div class="div_input">
								<input type="text" class="form-control" placeholder="Trên toàn quốc" value="Trên toàn quốc">
							</div>	
						</div>
						<div class="col pl-0 search_action toggle_more_search">
							<a href="javascript:void(0)" class="filter_more mr-3 ml-3">
	                            <img src="https://file4.batdongsan.com.vn/images/newhome/icon-down-arrow.png">
	                            Thêm
	                        </a>
	                        <a href="javascript:void(0)" class="action_reset_search_form">
	                            <img src="https://file4.batdongsan.com.vn/images/newhome/search-reset.png">
	                            Xóa
	                        </a>
						</div>
					</div>

					<!-- filter 2 -->

					<div class="row mt-2 content_search_2">
						<div class="col pl-0">
							<div class="div_input">
								<input type="text" class="form-control" placeholder="Trên toàn quốc" value="Trên toàn quốc">
							</div>	
						</div>
						<div class="col pl-0">
							<div class="div_input">
								<input type="text" class="form-control" placeholder="Trên toàn quốc" value="Trên toàn quốc">
							</div>	
						</div>

						<div class="col pl-0">
							<div class="div_input">
								<input type="text" class="form-control" placeholder="Trên toàn quốc" value="Trên toàn quốc">
							</div>	
						</div>

						<div class="col pl-0">
							<div class="div_input">
								<input type="text" class="form-control" placeholder="Trên toàn quốc" value="Trên toàn quốc">
							</div>	
						</div>
						<div class="col pl-0 search_action">
							<a href="javascript:void(0)" class="close_filter_more mr-1 ml-3">
	                            <img src="https://file4.batdongsan.com.vn/images/newhome/up-arrow.png">
	                            Thu gọn
	                        </a>
	                        <a href="javascript:void(0)" class="action_reset_search_form">
	                            <img src="https://file4.batdongsan.com.vn/images/newhome/search-reset.png">
	                            Xóa
	                        </a>
						</div>
					</div>




				</div>




				<div id="nhadatchothue" class="container tab-pane fade"><br>
					<div class="row home_search_control">
						<div class="col-sm-3 search_cate">
							<div class="select_custom">
	                            <o id="lblCurrCate">Loại nhà đất 1</o>
	                        </div>
						</div>
						<div class="col-sm-7 search_input">
							<input type="text" id="txtSearch" placeholder="Tìm kiếm địa điểm, khu vực" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true" name="txtSearch" class="ui-autocomplete-input">
						</div>
						<div class="search_button col-sm-2">
							<input type="button" class="btn-home-search" value="Tìm kiếm" id="btnSearch">
						</div>
					</div>
				</div>
			</form>	
			</div>



		</div>
		
			

		
	</div>
</div>
<!-- search -->

<!-- tin nổi bật -->

<div class="container mt-5">
	<div class="row pb-5">
		<div class="col-12 col-sm-12 col-md-10 news_popular">
			<ul class="nav nav-tabs">
				<li class="nav-item">
				  <a class="nav-link active" data-toggle="tab" href="#tinnoibat">Tin nổi bật</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" data-toggle="tab" href="#tuvan">Tư vấn</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" data-toggle="tab" href="#tintuc">Tin tức</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" data-toggle="tab" href="#phongthuy">Phong thủy</a>
				</li>
			</ul>
			<a href="/tin-tuc" id="tabview" class="home_small_more hidden-xs">Xem thêm tin tức<img src="https://file4.batdongsan.com.vn/images/newhome/3x/icon-arrow-right.png"></a>
			<div class="clear"></div>

			<!-- Tab panes -->
			<div class="tab-content">
				<!-- tab 1 -->
				<div id="tinnoibat" class="container tab-pane active pt-3">
					<div class="row show_news">
						<div class="col-12 col-sm-12 col-md-6">
							<h3>
	                            <a class="title_current" title="" href="#">
	                                <span>
	                                    <img  class="mb-3"noloaderror="true" imgerr="1" src="{{asset('public/uploads/img-news/20201119092539-5bbd.jpg')}}" is-lazy-image="true" lazy-id="0">
	                                </span>
	                                Tiêu điểm thị trường tháng 10/2020
	                            </a>
	                            <div class="news_time">
		                            <img src="https://file4.batdongsan.com.vn/images/newhome/3x/clock.png" width="100%">3 giờ trước
		                        </div>
	                        </h3>	
						</div>
						<div class="col-12 col-sm-12 col-md-6">
							<ul class="list-group list-group-flush list_news">
								<li class="list-group-item">
									<a href="#">
										<span>
		                                    <img class="hidden_md" noloaderror="true" imgerr="1" src="{{asset('public/uploads/img-news/20201119092539-5bbd.jpg')}}" is-lazy-image="true" lazy-id="0">
		                                </span>
										<span class="tilte_posts">Tiêu điểm thị trường tháng 10/2020</span>
									</a>
									<div class="news_time">
			                            <img src="https://file4.batdongsan.com.vn/images/newhome/3x/clock.png" width="100%">3 giờ trước
			                        </div>

									
								</li>
								<li class="list-group-item">
									<a href="#">
										<span>
		                                    <img class="hidden_md" noloaderror="true" imgerr="1" src="{{asset('public/uploads/img-news/20201119092539-5bbd.jpg')}}" is-lazy-image="true" lazy-id="0">
		                                </span>
										<span class="tilte_posts">First item</span>
									</a>
									<div class="news_time">
			                            <img src="https://file4.batdongsan.com.vn/images/newhome/3x/clock.png" width="100%">3 giờ trước
			                        </div>
									
								</li>
								<li class="list-group-item">
									<a href="#">
										<span>
		                                    <img class="hidden_md" noloaderror="true" imgerr="1" src="{{asset('public/uploads/img-news/20201119092539-5bbd.jpg')}}" is-lazy-image="true" lazy-id="0">
		                                </span>
										<span class="tilte_posts">First item</span>
									</a>
									<div class="news_time">
			                            <img src="https://file4.batdongsan.com.vn/images/newhome/3x/clock.png" width="100%">3 giờ trước
			                        </div>
									
								</li>
								<li class="list-group-item">
									<a href="#">
										<span>
		                                    <img class="hidden_md" noloaderror="true" imgerr="1" src="{{asset('public/uploads/img-news/20201119092539-5bbd.jpg')}}" is-lazy-image="true" lazy-id="0">
		                                </span>
										<span class="tilte_posts">First item</span>
									</a>
									<div class="news_time">
			                            <img src="https://file4.batdongsan.com.vn/images/newhome/3x/clock.png" width="100%">3 giờ trước
			                        </div>
									
								</li>
							</ul>

						</div>
					</div>
				</div>
				<!-- tab 2 -->
				<div id="tuvan" class="container tab-pane fade pt-3">
					<div class="row show_news">
						<div class="col-12 col-sm-12 col-md-6">
							<h3>
	                            <a class="title_current" title="" href="#">
	                                <span>
	                                    <img  class="mb-3"noloaderror="true" imgerr="1" src="{{asset('public/uploads/img-news/20201119092539-5bbd.jpg')}}" is-lazy-image="true" lazy-id="0">
	                                </span>
	                                Tiêu điểm thị trường tháng 10/2020
	                            </a>
	                            <div class="news_time">
		                            <img src="https://file4.batdongsan.com.vn/images/newhome/3x/clock.png" width="100%">3 giờ trước
		                        </div>
	                        </h3>	
						</div>
						<div class="col-12 col-sm-12 col-md-6">
							<ul class="list-group list-group-flush list_news">
								<li class="list-group-item">
									<a href="#">
										<span>
		                                    <img class="hidden_md" noloaderror="true" imgerr="1" src="{{asset('public/uploads/img-news/20201119092539-5bbd.jpg')}}" is-lazy-image="true" lazy-id="0">
		                                </span>
										<span class="tilte_posts">Tiêu điểm thị trường tháng 10/2020</span>
									</a>
									<div class="news_time">
			                            <img src="https://file4.batdongsan.com.vn/images/newhome/3x/clock.png" width="100%">3 giờ trước
			                        </div>

									
								</li>
								<li class="list-group-item">
									<a href="#">
										<span>
		                                    <img class="hidden_md" noloaderror="true" imgerr="1" src="{{asset('public/uploads/img-news/20201119092539-5bbd.jpg')}}" is-lazy-image="true" lazy-id="0">
		                                </span>
										<span class="tilte_posts">First item</span>
									</a>
									<div class="news_time">
			                            <img src="https://file4.batdongsan.com.vn/images/newhome/3x/clock.png" width="100%">3 giờ trước
			                        </div>
									
								</li>
								<li class="list-group-item">
									<a href="#">
										<span>
		                                    <img class="hidden_md" noloaderror="true" imgerr="1" src="{{asset('public/uploads/img-news/20201119092539-5bbd.jpg')}}" is-lazy-image="true" lazy-id="0">
		                                </span>
										<span class="tilte_posts">First item</span>
									</a>
									<div class="news_time">
			                            <img src="https://file4.batdongsan.com.vn/images/newhome/3x/clock.png" width="100%">3 giờ trước
			                        </div>
									
								</li>
								<li class="list-group-item">
									<a href="#">
										<span>
		                                    <img class="hidden_md" noloaderror="true" imgerr="1" src="{{asset('public/uploads/img-news/20201119092539-5bbd.jpg')}}" is-lazy-image="true" lazy-id="0">
		                                </span>
										<span class="tilte_posts">First item</span>
									</a>
									<div class="news_time">
			                            <img src="https://file4.batdongsan.com.vn/images/newhome/3x/clock.png" width="100%">3 giờ trước
			                        </div>
									
								</li>
							</ul>

						</div>
					</div>
				</div>
				<!-- tab 3 -->
				<div id="tintuc" class="container tab-pane fade pt-3">
				<div class="row show_news">
					<div class="col-12 col-sm-12 col-md-6">
						<h3>
                            <a class="title_current" title="" href="#">
                                <span>
                                    <img  class="mb-3"noloaderror="true" imgerr="1" src="{{asset('public/uploads/img-news/20201119092539-5bbd.jpg')}}" is-lazy-image="true" lazy-id="0">
                                </span>
                                Tiêu điểm thị trường tháng 10/2020
                            </a>
                            <div class="news_time">
	                            <img src="https://file4.batdongsan.com.vn/images/newhome/3x/clock.png" width="100%">3 giờ trước
	                        </div>
                        </h3>	
					</div>
					<div class="col-12 col-sm-12 col-md-6">
						<ul class="list-group list-group-flush list_news">
							<li class="list-group-item">
								<a href="#">
									<span>
	                                    <img class="hidden_md" noloaderror="true" imgerr="1" src="{{asset('public/uploads/img-news/20201119092539-5bbd.jpg')}}" is-lazy-image="true" lazy-id="0">
	                                </span>
									<span class="tilte_posts">Tiêu điểm thị trường tháng 10/2020</span>
								</a>
								<div class="news_time">
		                            <img src="https://file4.batdongsan.com.vn/images/newhome/3x/clock.png" width="100%">3 giờ trước
		                        </div>

								
							</li>
							<li class="list-group-item">
								<a href="#">
									<span>
	                                    <img class="hidden_md" noloaderror="true" imgerr="1" src="{{asset('public/uploads/img-news/20201119092539-5bbd.jpg')}}" is-lazy-image="true" lazy-id="0">
	                                </span>
									<span class="tilte_posts">First item</span>
								</a>
								<div class="news_time">
		                            <img src="https://file4.batdongsan.com.vn/images/newhome/3x/clock.png" width="100%">3 giờ trước
		                        </div>
								
							</li>
							<li class="list-group-item">
								<a href="#">
									<span>
	                                    <img class="hidden_md" noloaderror="true" imgerr="1" src="{{asset('public/uploads/img-news/20201119092539-5bbd.jpg')}}" is-lazy-image="true" lazy-id="0">
	                                </span>
									<span class="tilte_posts">First item</span>
								</a>
								<div class="news_time">
		                            <img src="https://file4.batdongsan.com.vn/images/newhome/3x/clock.png" width="100%">3 giờ trước
		                        </div>
								
							</li>
							<li class="list-group-item">
								<a href="#">
									<span>
	                                    <img class="hidden_md" noloaderror="true" imgerr="1" src="{{asset('public/uploads/img-news/20201119092539-5bbd.jpg')}}" is-lazy-image="true" lazy-id="0">
	                                </span>
									<span class="tilte_posts">First item</span>
								</a>
								<div class="news_time">
		                            <img src="https://file4.batdongsan.com.vn/images/newhome/3x/clock.png" width="100%">3 giờ trước
		                        </div>
								
							</li>
						</ul>

					</div>
				</div>
				</div>
				<!-- tab 4 -->
				<div id="phongthuy" class="container tab-pane fade pt-3">
					<div class="row show_news">
						<div class="col-12 col-sm-12 col-md-6">
							<h3>
	                            <a class="title_current" title="" href="#">
	                                <span>
	                                    <img  class="mb-3"noloaderror="true" imgerr="1" src="{{asset('public/uploads/img-news/20201119092539-5bbd.jpg')}}" is-lazy-image="true" lazy-id="0">
	                                </span>
	                                Tiêu điểm thị trường tháng 10/2020
	                            </a>
	                            <div class="news_time hidden_md">
		                            <img src="https://file4.batdongsan.com.vn/images/newhome/3x/clock.png" width="100%">3 giờ trước
		                        </div>
	                        </h3>	
						</div>
						<div class="col-12 col-sm-12 col-md-6">
							<ul class="list-group list-group-flush list_news">
								<li class="list-group-item">
									<a href="#">
										<span>
		                                    <img class="hidden_md" noloaderror="true" imgerr="1" src="{{asset('public/uploads/img-news/20201119092539-5bbd.jpg')}}" is-lazy-image="true" lazy-id="0">
		                                </span>
										<span class="tilte_posts">Tiêu điểm thị trường tháng 10/2020</span>
									</a>
									<div class="news_time hidden_md">
			                            <img src="https://file4.batdongsan.com.vn/images/newhome/3x/clock.png" width="100%">3 giờ trước
			                        </div>

									
								</li>
								<li class="list-group-item">
									<a href="#">
										<span>
		                                    <img class="hidden_md" noloaderror="true" imgerr="1" src="{{asset('public/uploads/img-news/20201119092539-5bbd.jpg')}}" is-lazy-image="true" lazy-id="0">
		                                </span>
										<span class="tilte_posts">First item</span>
									</a>
									<div class="news_time hidden_md">
			                            <img src="https://file4.batdongsan.com.vn/images/newhome/3x/clock.png" width="100%">3 giờ trước
			                        </div>
									
								</li>
								<li class="list-group-item">
									<a href="#">
										<span>
		                                    <img class="hidden_md" noloaderror="true" imgerr="1" src="{{asset('public/uploads/img-news/20201119092539-5bbd.jpg')}}" is-lazy-image="true" lazy-id="0">
		                                </span>
										<span class="tilte_posts">First item</span>
									</a>
									<div class="news_time hidden_md">
			                            <img src="https://file4.batdongsan.com.vn/images/newhome/3x/clock.png" width="100%">3 giờ trước
			                        </div>
									
								</li>
								<li class="list-group-item">
									<a href="#">
										<span>
		                                    <img class="hidden_md" noloaderror="true" imgerr="1" src="{{asset('public/uploads/img-news/20201119092539-5bbd.jpg')}}" is-lazy-image="true" lazy-id="0">
		                                </span>
										<span class="tilte_posts">First item</span>
									</a>
									<div class="news_time">
			                            <img src="https://file4.batdongsan.com.vn/images/newhome/3x/clock.png" width="100%">3 giờ trước
			                        </div>
									
								</li>
							</ul>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-sm-12 col-md-2"></div>
	</div>
</div>






<!-- tin nổi bật -->


<!-- tin bất động sản -->
<section id="tin_bds">
	<div class="container">
		<div class="d-flex mb-3">
		    <div class="p-2 mr-auto">
		    	<h2>Bất động sản dành cho bạn</h2>
		    </div>
		    <div class="p-2 home_more_link hidden-xs"><a href="#">Tin nhà đất bán mới nhất</a>&nbsp;&nbsp;&nbsp;&nbsp;|</div>

       			 
        
		    <div class="p-2 home_more_link hidden-xs"><a href="#">Tin nhà đất bán mới nhất</a></div>
		</div>



		<div class="row product_list">
			<div class="col-12 col-sm-12 col-md-3">
				<div class="product_inner">
					<div class="product_thumb ">
					<a  href="#">
						<img src="{{asset('public/uploads/img-news/20200905173849-1d9e_wm.jpg')}}" alt="Cần bán gấp CHCC Masteri Thảo Điền Q2, 2PN, 2WC, 64m2, full nội thất giá 3,5xxtỷ BP. LH 0965182795">
					</a>
					<span class="product_feature">
					</span>
					<span class="product_media">2</span>
				</div>
				<div class="home_product_bound">
                    <div class="p_title textTitle">
                        <a href="#">Cần bán gấp CHCC Masteri Thảo Điền Q2, 2PN, 2WC, 64m2, full nội thất giá 3,5xxtỷ BP. LH <span class="hidden-mobile box" raw="0965182795" style="font-size: inherit;">0965182***</span></a>
                    </div>
                    <div class="product_price">Giá thỏa thuận</div>
                        <span class="ic_dot">·</span>
                        <div class="pro_m2">64 m²</div>
                    <div class="product_address">
                        <a href="#" title="Quận 2">Quận 2</a>,
                        <a href="#" title="Hồ Chí Minh">Hồ Chí Minh</a>
                    </div>
                    <div class="product_date">
                        Hôm nay
                        <span class="tooltip_time">20/11/2020</span>
                    </div>
                    <span class="tooltipMarking" data-toggle="tooltip" data-placement="bottom" title="Bấm để lưu tin"><i class="icon_save"></i></span>
                </div>
				</div>
				
			</div>
			<div class="col-12 col-sm-12 col-md-3">
				<div class="product_inner">
					<div class="product_thumb ">
					<a  href="#">
						<img src="{{asset('public/uploads/img-news/20200905173849-1d9e_wm.jpg')}}" alt="Cần bán gấp CHCC Masteri Thảo Điền Q2, 2PN, 2WC, 64m2, full nội thất giá 3,5xxtỷ BP. LH 0965182795">
					</a>
					<span class="product_feature">
					</span>
					<span class="product_media">2</span>
				</div>
				<div class="home_product_bound">
                    <div class="p_title textTitle">
                        <a href="#">Cần bán gấp CHCC Masteri Thảo Điền Q2, 2PN, 2WC, 64m2, full nội thất giá 3,5xxtỷ BP. LH <span class="hidden-mobile box" raw="0965182795" style="font-size: inherit;">0965182***</span></a>
                    </div>
                    <div class="product_price">Giá thỏa thuận</div>
                        <span class="ic_dot">·</span>
                        <div class="pro_m2">64 m²</div>
                    <div class="product_address">
                        <a href="#" title="Quận 2">Quận 2</a>,
                        <a href="#" title="Hồ Chí Minh">Hồ Chí Minh</a>
                    </div>
                    <div class="product_date">
                        Hôm nay
                        <span class="tooltip_time">20/11/2020</span>
                    </div>
                    <span class="tooltipMarking" data-toggle="tooltip" data-placement="bottom" title="Bấm để lưu tin"><i class="icon_save"></i></span>
                </div>
				</div>
				
			</div>
			<div class="col-12 col-sm-12 col-md-3">
				<div class="product_inner">
					<div class="product_thumb ">
					<a  href="#">
						<img src="{{asset('public/uploads/img-news/20200905173849-1d9e_wm.jpg')}}" alt="Cần bán gấp CHCC Masteri Thảo Điền Q2, 2PN, 2WC, 64m2, full nội thất giá 3,5xxtỷ BP. LH 0965182795">
					</a>
					<span class="product_feature">
					</span>
					<span class="product_media">2</span>
				</div>
				<div class="home_product_bound">
                    <div class="p_title textTitle">
                        <a href="#">Cần bán gấp CHCC Masteri Thảo Điền Q2, 2PN, 2WC, 64m2, full nội thất giá 3,5xxtỷ BP. LH <span class="hidden-mobile box" raw="0965182795" style="font-size: inherit;">0965182***</span></a>
                    </div>
                    <div class="product_price">Giá thỏa thuận</div>
                        <span class="ic_dot">·</span>
                        <div class="pro_m2">64 m²</div>
                    <div class="product_address">
                        <a href="#" title="Quận 2">Quận 2</a>,
                        <a href="#" title="Hồ Chí Minh">Hồ Chí Minh</a>
                    </div>
                    <div class="product_date">
                        Hôm nay
                        <span class="tooltip_time">20/11/2020</span>
                    </div>
                    <span class="tooltipMarking" data-toggle="tooltip" data-placement="bottom" title="Bấm để lưu tin"><i class="icon_save"></i></span>
                </div>
				</div>
				
			</div>
			<div class="col-12 col-sm-12 col-md-3">
				<div class="product_inner">
					<div class="product_thumb ">
					<a  href="#">
						<img src="{{asset('public/uploads/img-news/20200905173849-1d9e_wm.jpg')}}" alt="Cần bán gấp CHCC Masteri Thảo Điền Q2, 2PN, 2WC, 64m2, full nội thất giá 3,5xxtỷ BP. LH 0965182795">
					</a>
					<span class="product_feature">
					</span>
					<span class="product_media">2</span>
				</div>
				<div class="home_product_bound">
                    <div class="p_title textTitle">
                        <a href="#">Cần bán gấp CHCC Masteri Thảo Điền Q2, 2PN, 2WC, 64m2, full nội thất giá 3,5xxtỷ BP. LH <span class="hidden-mobile box" raw="0965182795" style="font-size: inherit;">0965182***</span></a>
                    </div>
                    <div class="product_price">Giá thỏa thuận</div>
                        <span class="ic_dot">·</span>
                        <div class="pro_m2">64 m²</div>
                    <div class="product_address">
                        <a href="#" title="Quận 2">Quận 2</a>,
                        <a href="#" title="Hồ Chí Minh">Hồ Chí Minh</a>
                    </div>
                    <div class="product_date">
                        Hôm nay
                        <span class="tooltip_time">20/11/2020</span>
                    </div>
                    <span class="tooltipMarking" data-toggle="tooltip" data-placement="bottom" title="Bấm để lưu tin"><i class="icon_save"></i></span>
                </div>
				</div>
				
			</div>	
		</div>

		<div class="text-center mt-3">
			<button type="button" class="btn btn-outline-primary" id="show_more">
			Mở rộng
			<img src="https://file4.batdongsan.com.vn/images/newhome/icon-down-blue.png">
		</button>
		</div>


		<!-- mở rông -->
		<div id="show_product_more" class="row product_list" style="display: none;">
			<div class="col-12 col-sm-12 col-md-3">
				<div class="product_inner">
					<div class="product_thumb ">
						<a  href="#">
							<img src="{{asset('public/uploads/img-news/20200905173849-1d9e_wm.jpg')}}" alt="Cần bán gấp CHCC Masteri Thảo Điền Q2, 2PN, 2WC, 64m2, full nội thất giá 3,5xxtỷ BP. LH 0965182795">
						</a>
						<span class="product_feature">
						</span>
						<span class="product_media">2</span>
					</div>
					<div class="home_product_bound">
	                    <div class="p_title textTitle">
	                        <a href="#">Cần bán gấp CHCC Masteri Thảo Điền Q2, 2PN, 2WC, 64m2, full nội thất giá 3,5xxtỷ BP. LH <span class="hidden-mobile box" raw="0965182795" style="font-size: inherit;">0965182***</span></a>
	                    </div>
	                    <div class="product_price">Giá thỏa thuận</div>
	                        <span class="ic_dot">·</span>
	                        <div class="pro_m2">64 m²</div>
	                    <div class="product_address">
	                        <a href="#" title="Quận 2">Quận 2</a>,
	                        <a href="#" title="Hồ Chí Minh">Hồ Chí Minh</a>
	                    </div>
	                    <div class="product_date">
	                        Hôm nay
	                        <span class="tooltip_time">20/11/2020</span>
	                    </div>
	                    <span class="tooltipMarking" data-toggle="tooltip" data-placement="bottom" title="Bấm để lưu tin"><i class="icon_save"></i></span>
	                </div>
				</div>
				
			</div>
			<div class="col-12 col-sm-12 col-md-3">
				<div class="product_inner">
					<div class="product_thumb ">
					<a  href="#">
						<img src="{{asset('public/uploads/img-news/20200905173849-1d9e_wm.jpg')}}" alt="Cần bán gấp CHCC Masteri Thảo Điền Q2, 2PN, 2WC, 64m2, full nội thất giá 3,5xxtỷ BP. LH 0965182795">
					</a>
					<span class="product_feature">
					</span>
					<span class="product_media">2</span>
				</div>
				<div class="home_product_bound">
                    <div class="p_title textTitle">
                        <a href="#">Cần bán gấp CHCC Masteri Thảo Điền Q2, 2PN, 2WC, 64m2, full nội thất giá 3,5xxtỷ BP. LH <span class="hidden-mobile box" raw="0965182795" style="font-size: inherit;">0965182***</span></a>
                    </div>
                    <div class="product_price">Giá thỏa thuận</div>
                        <span class="ic_dot">·</span>
                        <div class="pro_m2">64 m²</div>
                    <div class="product_address">
                        <a href="#" title="Quận 2">Quận 2</a>,
                        <a href="#" title="Hồ Chí Minh">Hồ Chí Minh</a>
                    </div>
                    <div class="product_date">
                        Hôm nay
                        <span class="tooltip_time">20/11/2020</span>
                    </div>
                    <span class="tooltipMarking" data-toggle="tooltip" data-placement="bottom" title="Bấm để lưu tin"><i class="icon_save"></i></span>
                </div>
				</div>
				
			</div>
			<div class="col-12 col-sm-12 col-md-3">
				<div class="product_inner">
					<div class="product_thumb ">
					<a  href="#">
						<img src="{{asset('public/uploads/img-news/20200905173849-1d9e_wm.jpg')}}" alt="Cần bán gấp CHCC Masteri Thảo Điền Q2, 2PN, 2WC, 64m2, full nội thất giá 3,5xxtỷ BP. LH 0965182795">
					</a>
					<span class="product_feature">
					</span>
					<span class="product_media">2</span>
				</div>
				<div class="home_product_bound">
                    <div class="p_title textTitle">
                        <a href="#">Cần bán gấp CHCC Masteri Thảo Điền Q2, 2PN, 2WC, 64m2, full nội thất giá 3,5xxtỷ BP. LH <span class="hidden-mobile box" raw="0965182795" style="font-size: inherit;">0965182***</span></a>
                    </div>
                    <div class="product_price">Giá thỏa thuận</div>
                        <span class="ic_dot">·</span>
                        <div class="pro_m2">64 m²</div>
                    <div class="product_address">
                        <a href="#" title="Quận 2">Quận 2</a>,
                        <a href="#" title="Hồ Chí Minh">Hồ Chí Minh</a>
                    </div>
                    <div class="product_date">
                        Hôm nay
                        <span class="tooltip_time">20/11/2020</span>
                    </div>
                    <span class="tooltipMarking" data-toggle="tooltip" data-placement="bottom" title="Bấm để lưu tin"><i class="icon_save"></i></span>
                </div>
				</div>
				
			</div>
			<div class="col-12 col-sm-12 col-md-3">
				<div class="product_inner">
					<div class="product_thumb ">
					<a  href="#">
						<img src="{{asset('public/uploads/img-news/20200905173849-1d9e_wm.jpg')}}" alt="Cần bán gấp CHCC Masteri Thảo Điền Q2, 2PN, 2WC, 64m2, full nội thất giá 3,5xxtỷ BP. LH 0965182795">
					</a>
					<span class="product_feature">
					</span>
					<span class="product_media">2</span>
				</div>
				<div class="home_product_bound">
                    <div class="p_title textTitle">
                        <a href="#">Cần bán gấp CHCC Masteri Thảo Điền Q2, 2PN, 2WC, 64m2, full nội thất giá 3,5xxtỷ BP. LH <span class="hidden-mobile box" raw="0965182795" style="font-size: inherit;">0965182***</span></a>
                    </div>
                    <div class="product_price">Giá thỏa thuận</div>
                        <span class="ic_dot">·</span>
                        <div class="pro_m2">64 m²</div>
                    <div class="product_address">
                        <a href="#" title="Quận 2">Quận 2</a>,
                        <a href="#" title="Hồ Chí Minh">Hồ Chí Minh</a>
                    </div>
                    <div class="product_date">
                        Hôm nay
                        <span class="tooltip_time">20/11/2020</span>
                    </div>
                    <span class="tooltipMarking" data-toggle="tooltip" data-placement="bottom" title="Bấm để lưu tin"><i class="icon_save"></i></span>
                </div>
				</div>
				
			</div>
			<div class="col-12 col-sm-12 col-md-12 text-center mt-3">
				<button type="button" class="btn btn-outline-primary" id="show_more">
				Xem thêm
			</button>
			</div>
		</div>
			
		<!-- mở rộng -->

	</div>
</section>



<!-- tin bất động sản -->



<!-- Bất động sản theo địa điểm -->
<section class="pt-3">
<div class="container">
	<div class="d-flex mb-3">
	    <div class="p-2">
	    	<h2>Bất động sản theo địa điểm</h2>
	    </div>
	    
	</div>
	<div class="row">
		<div class="col-12 col-sm-12 col-md-6 mb-3">
			<div id="slide_bds_lg" class="carousel slide" data-ride="carousel" data-interval="3000">
			  
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="{{asset('public/uploads/img-news/HCM-web-3.jpg')}}" alt="Los Angeles">
			      <div class="carousel_caption">
			        <h3>TP. Hồ Chí Minnh</h3>
			        <p>1223 Tin</p>
			      </div>   
			    </div>
			    <div class="carousel-item">
			      <img src="{{asset('public/uploads/img-news/HCM-web-1.jpg')}}" alt="Los Angeles">
			      <div class="carousel_caption">
			        <h3>Chicago</h3>
			        <p>234 Tin</p>
			      </div>   
			    </div>
			    
			  </div>
			  
			</div>
		</div>
		<!-- left colum -->
		<div class="col-12 col-sm-12 col-md-6">
			<div class="row">
				<div class="col-6 col-sm-6 col-md-6 mb-3">
					<div id="slide_bds_sm" class="carousel slide" data-ride="carousel" data-interval="3000">
			  
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img src="{{asset('public/uploads/img-news/HCM-web-3.jpg')}}" alt="Los Angeles">
					      <div class="carousel_caption">
					        <h3>Hà nội</h3>
					        <p>1223 Tin</p>
					      </div>   
					    </div>
					    <div class="carousel-item">
					      <img src="{{asset('public/uploads/img-news/HCM-web-1.jpg')}}" alt="Los Angeles">
					      <div class="carousel_caption">
					        <h3>Chicago</h3>
					        <p>234 Tin</p>
					      </div>   
					    </div>
					    
					  </div>
					  
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 mb-3">
					<div id="slide_bds_sm" class="carousel slide" data-ride="carousel" data-interval="3000">
			  
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img src="{{asset('public/uploads/img-news/HCM-web-3.jpg')}}" alt="Los Angeles">
					      <div class="carousel_caption">
					        <h3>Hà nội</h3>
					        <p>1223 Tin</p>
					      </div>   
					    </div>
					    <div class="carousel-item">
					      <img src="{{asset('public/uploads/img-news/HCM-web-1.jpg')}}" alt="Los Angeles">
					      <div class="carousel_caption">
					        <h3>Chicago</h3>
					        <p>234 Tin</p>
					      </div>   
					    </div>
					    
					  </div>
					  
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 mb-3">
					<div id="slide_bds_sm" class="carousel slide" data-ride="carousel" data-interval="3000">
			  
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img src="{{asset('public/uploads/img-news/HCM-web-3.jpg')}}" alt="Los Angeles">
					      <div class="carousel_caption">
					        <h3>Hà nội</h3>
					        <p>1223 Tin</p>
					      </div>   
					    </div>
					    <div class="carousel-item">
					      <img src="{{asset('public/uploads/img-news/HCM-web-1.jpg')}}" alt="Los Angeles">
					      <div class="carousel_caption">
					        <h3>Chicago</h3>
					        <p>234 Tin</p>
					      </div>   
					    </div>
					    
					  </div>
					  
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 mb-3">
					<div id="slide_bds_sm" class="carousel slide" data-ride="carousel" data-interval="3000">
			  
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img src="{{asset('public/uploads/img-news/HCM-web-3.jpg')}}" alt="Los Angeles">
					      <div class="carousel_caption">
					        <h3>Hà nội</h3>
					        <p>1223 Tin</p>
					      </div>   
					    </div>
					    <div class="carousel-item">
					      <img src="{{asset('public/uploads/img-news/HCM-web-1.jpg')}}" alt="Los Angeles">
					      <div class="carousel_caption">
					        <h3>Chicago</h3>
					        <p>234 Tin</p>
					      </div>   
					    </div>
					    
					  </div>
					  
					</div>
				</div>
			</div>
		</div>
		<!-- left colum -->
		<div class="col-12 col_srcoll">
			<div class="d-flex flex-wrap bg-light text-center">
			    <a class="p-2 border mr-1 ml-1 btn bg-light">Flex item 1</a>
			    <a class="p-2 border mr-1 ml-1 btn">Flex item 1</a>
			    <a class="p-2 border mr-1 ml-1 btn">Flex item 1</a>
			    <a class="p-2 border mr-1 ml-1 btn">Flex item 1</a>
			    <a class="p-2 border mr-1 ml-1 btn">Flex item 1</a>
			    <a class="p-2 border mr-1 ml-1 btn">Flex item 1</a>
			    <a class="p-2 border mr-1 ml-1 btn">Flex item 1</a>
			    <a class="p-2 border mr-1 ml-1 btn">Flex item 1</a>
			    <a class="p-2 border mr-1 ml-1 btn">Flex item 1</a>
			    <a class="p-2 border mr-1 ml-1 btn">Flex item 1</a>
			    <a class="p-2 border mr-1 ml-1 btn">Flex item 1</a>
			    <a class="p-2 border mr-1 ml-1 btn">Flex item 1</a>
			    <a class="p-2 border mr-1 ml-1 btn">Flex item 1</a>
			    <a class="p-2 border mr-1 ml-1 btn">Flex item 1</a>
			    <a class="p-2 border mr-1 ml-1 btn">Flex item 1</a>
			    
			</div>
		</div>

	</div>
</div>





</section>

<!-- Bất động sản theo địa điểm -->

<div class="clear"></div>

<!-- dự án nổi bật -->

<div class="container content_duan_noibat mt-5">
	<div class="d-flex mb-3 title_content">
	    <div class="p-2 mr-auto">
	    	<h2>Dự án nổi bật</h2>
	    </div>
	    <a href="#" class="home_small_more hidden-xs">Xem thêm<img src="https://file4.batdongsan.com.vn/images/newhome/3x/icon-arrow-right.png"></a>
	</div>


	<div id="carousel_duan_noibat" class="carousel slide custom_carousel carousel_col_4" data-ride="carousel" data-interval=false>
            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                    <div class="card mb-2">
                    	<a href="#">
							<img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
							  alt="Card image cap">
							<div class="card-body">
							  <span class="card-title">Card title</span>
							</div>

						</a>
					</div>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                	<div class="card mb-2">
                		<a href="#">
						<img class="card-img-top" src="//via.placeholder.com/600x400?text=2"
						  alt="Card image cap">
						<div class="card-body">
						  <span class="card-title">Card title</span>						  
						</div>	
						</a>
					</div>
                    
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card mb-2">
                    	<a href="#">
						<img class="card-img-top" src="//via.placeholder.com/600x400?text=2"
						  alt="Card image cap">
						<div class="card-body">
						  <span class="card-title">Card title</span>
						  
						</div>	
						</a>
					</div>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card mb-2">
                    	<a href="#">
						<img class="card-img-top" src="//via.placeholder.com/600x400?text=2"
						  alt="Card image cap">
						<div class="card-body">
						  <span class="card-title">Card title</span>
						  
						</div>	
						</a>
					</div>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card mb-2">
                    	<a href="#">
						<img class="card-img-top" src="//via.placeholder.com/600x400?text=2"
						  alt="Card image cap">
						<div class="card-body">
						  <span class="card-title">Card title</span>
						</div>
						</a>	
					</div>
                </div>
                
            </div>
            <a class="carousel-control-prev" href="#carousel_duan_noibat" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel_duan_noibat" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>




</div>





<!-- dự án nổi bật -->





<!-- tin tiêu điểm -->

<div class="container content_tin_tieu_diem mt-5">
	<div class="d-flex mb-3 title_content">
	    <div class="p-2 mr-auto">
	    	<h2>Tin tiêu điểm</h2>
	    </div>
	</div>


	<div id="carousel_tin_tieu_diem" class="carousel slide custom_carousel" data-ride="carousel" data-interval=false>
            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-4 active">
                    <div class="card mb-2">
                    	<a href="#">
							<img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
							  alt="Card image cap">
							<div class="card-body">
								<span>01.</span>
							  <span class="card-title">Card title</span>
							</div>

						</a>
					</div>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-4">
                	<div class="card mb-2">
                		<a href="#">
						<img class="card-img-top" src="//via.placeholder.com/600x400?text=2"
						  alt="Card image cap">
						<div class="card-body">
							<span>02.</span>
						  <span class="card-title">Card title</span>						  
						</div>	
						</a>
					</div>
                    
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="card mb-2">
                    	<a href="#">
						<img class="card-img-top" src="//via.placeholder.com/600x400?text=2"
						  alt="Card image cap">
						<div class="card-body">
							<span>03.</span>
						  <span class="card-title">Card title</span>
						  
						</div>	
						</a>
					</div>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="card mb-2">
                    	<a href="#">
						<img class="card-img-top" src="//via.placeholder.com/600x400?text=2"
						  alt="Card image cap">
						<div class="card-body">
							<span>04.</span>
						  <span class="card-title">Card title</span>
						  
						</div>	
						</a>
					</div>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="card mb-2">
                    	<a href="#">
						<img class="card-img-top" src="//via.placeholder.com/600x400?text=2"
						  alt="Card image cap">
						<div class="card-body">
							<span>05.</span>
						  <span class="card-title">Card title</span>
						</div>
						</a>	
					</div>
                </div>
                
            </div>
            <a class="carousel-control-prev" href="#carousel_tin_tieu_diem" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel_tin_tieu_diem" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>




</div>





<!-- tin tiêu điểm-->

<!-- hỗ trợ tiện ích -->

<div class="container mt-5 content_tienich">
	<div class="d-flex mb-3 title_content">
	    <div class="p-2 mr-auto">
	    	<h2>Hỗ trợ tiện ích</h2>
	    </div>
	    
	</div>

	<div class="row type_tienich">
		<div class="col-6 col-sm-6 col-md-3 bg-primary">
			<a href="#" rel="nofollow"><img src="https://file4.batdongsan.com.vn/images/newhome/fshome.png">Xem tuổi xây nhà</a>
		</div>
		<div class="col-6 col-sm-6 col-md-3 bg-success">
			<a href="#" rel="nofollow"><img src="https://file4.batdongsan.com.vn/images/newhome/estimate.png">  Dự tính chi phí làm nhà </a>
		</div>
		<div class="col-6 col-sm-6 col-md-3 bg-info">
			<a href="#" rel="nofollow"><img src="https://file4.batdongsan.com.vn/images/newhome/money.png">  Tính lãi suất </a>
		</div>
		<div class="col-6 col-sm-6 col-md-3 bg-warning">
			<a href="#" rel="nofollow"><img src="https://file4.batdongsan.com.vn/images/newhome/fengshui.png">  Tư vấn phong thủy</a>
		</div>
	</div>
</div>

<!-- hỗ trợ tiện ích -->



<div class="container text-center my-3">
    <div class="d-flex mb-3 title_content">
	    <div class="p-2 mr-auto">
	    	<h2>Doanh nghiệp tiêu biểu</h2>
	    </div>
	    <a href="#" class="home_small_more hidden-xs">Xem thêm<img src="https://file4.batdongsan.com.vn/images/newhome/3x/icon-arrow-right.png"></a>
	</div>

    <div class="row mx-auto my-auto">
        <div id="caruosel_hotro_tienich" class="carousel slide w-100 custom_carousel carousel_col_4" data-ride="carousel" data-interval=false>
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active"> 
                        <img class="img-fluid" src="http://placehold.it/350x180?text=1">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                 
                        <img class="img-fluid" src="http://placehold.it/350x180?text=2">
                 
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                   
                        <img class="img-fluid" src="http://placehold.it/350x180?text=3">
                  
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                   
                        <img class="img-fluid" src="http://placehold.it/350x180?text=4">
                 
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  
                        <img class="img-fluid" src="http://placehold.it/350x180?text=5">
               
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                
                        <img class="img-fluid" src="http://placehold.it/350x180?text=6">
             
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                  
                        <img class="img-fluid" src="http://placehold.it/350x180?text=7">
                                   </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                   
                        <img class="img-fluid" src="http://placehold.it/350x180?text=8">
                 
                </div>
            </div>
            
            <a class="carousel-control-prev" href="#caruosel_hotro_tienich" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#caruosel_hotro_tienich" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<!-- dự án nổi bật -->

<div class="container content_baochi mt-5">
	<div class="d-flex mb-3 title_content">
	    <div class="p-2 mr-auto">
	    	<h2>Báo chí nói gì về batdongsan</h2>
	    </div>
	    
	</div>


	<div id="carousel_baochi" class="carousel slide custom_carousel carousel_col_4" data-ride="carousel" data-interval=false>
            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                    <div class="card mb-2">
                    	<a href="#">
							<img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
							  alt="Card image cap">
							<div class="card-body">
							  <span class="card-title">Card title</span>
							</div>

						</a>
					</div>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                	<div class="card mb-2">
                		<a href="#">
						<img class="card-img-top" src="//via.placeholder.com/600x400?text=2"
						  alt="Card image cap">
						<div class="card-body">
						  <span class="card-title">Card title</span>						  
						</div>	
						</a>
					</div>
                    
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card mb-2">
                    	<a href="#">
						<img class="card-img-top" src="//via.placeholder.com/600x400?text=2"
						  alt="Card image cap">
						<div class="card-body">
						  <span class="card-title">Card title</span>
						  
						</div>	
						</a>
					</div>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card mb-2">
                    	<a href="#">
						<img class="card-img-top" src="//via.placeholder.com/600x400?text=2"
						  alt="Card image cap">
						<div class="card-body">
						  <span class="card-title">Card title</span>
						  
						</div>	
						</a>
					</div>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card mb-2">
                    	<a href="#">
						<img class="card-img-top" src="//via.placeholder.com/600x400?text=2"
						  alt="Card image cap">
						<div class="card-body">
						  <span class="card-title">Card title</span>
						</div>
						</a>	
					</div>
                </div>
                
            </div>
            <a class="carousel-control-prev" href="#carousel_baochi" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel_baochi" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>




</div>





<!-- dự án nổi bật -->




<!-- after footer -->

<section id="after_footer" class="pt-5 pb-3 mt-5">
	<div class="container">
		<div class="row">
			<div class="col-6 col-sm-6 col-md-3">
				<h6><a href="#">Mua bán nhà đất TP HCM</a></h6>
				<ul>
					<li><a href="">Bán nhà quận 1</a></li>
					<li><a href="">Bán nhà quận 2</a></li>
					<li><a href="">Bán nhà quận 3</a></li>
					<li><a href="">Bán nhà quận 4</a></li>
					<li><a href="">Bán nhà quận 5</a></li>
					<li><a href="">Bán nhà quận 6</a></li>
					<li><a href="">Bán nhà quận 7</a></li>
				</ul>
			</div>
			<div class="col-6 col-sm-6 col-md-3">
				
				<h6><a href="#">MUA BÁN NHÀ ĐẤT HÀ NỘI</a></h6>
				<ul>
					<li><a href="">Bán nhà quận 1</a></li>
					<li><a href="">Bán nhà quận 2</a></li>
					<li><a href="">Bán nhà quận 3</a></li>
					<li><a href="">Bán nhà quận 4</a></li>
					<li><a href="">Bán nhà quận 5</a></li>
					<li><a href="">Bán nhà quận 6</a></li>
					<li><a href="">Bán nhà quận 7</a></li>
				</ul>
			</div>
			<div class="col-6 col-sm-6 col-md-3">
				<h6><a href="">MUA BÁN NHÀ ĐẤT</a></h6>
				<ul>
					<li><a href="">Bán nhà quận 1</a></li>
					<li><a href="">Bán nhà quận 2</a></li>
					<li><a href="">Bán nhà quận 3</a></li>
					<li><a href="">Bán nhà quận 4</a></li>
					<li><a href="">Bán nhà quận 5</a></li>
					<li><a href="">Bán nhà quận 6</a></li>
					<li><a href="">Bán nhà quận 7</a></li>
				</ul>
			</div>
			<div class="col-6 col-sm-6 col-md-3">
				<h6><a href="#">NHÀ ĐẤT CHO THUÊ</a></h6>
				<ul>
					<li><a href="">Bán nhà quận 1</a></li>
					<li><a href="">Bán nhà quận 2</a></li>
					<li><a href="">Bán nhà quận 3</a></li>
					<li><a href="">Bán nhà quận 4</a></li>
					<li><a href="">Bán nhà quận 5</a></li>
					<li><a href="">Bán nhà quận 6</a></li>
					<li><a href="">Bán nhà quận 7</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>




<!-- after footer -->





	
</main>



@endsection
<x-header>
 


<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
    <!-- container -->
    <div class="container-fluid about py-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary">Check & Payment</h2>
                <h1 class="display-4 text-uppercase">Your Cart</h1>
            </div>
        </div>
        <!-- /container -->
    </div>
    <!-- /BREADCRUMB -->
    <div class="container">
        <table id="cart" class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th style="width:10%">STT</th>
                    <th style="width:10%">Ảnh sản phẩm</th>
                    <th style="width:25%">Tên sản phẩm</th>
                    <th style="width:15%">Giá</th>
                    <th style="width:10%">Số lượng</th>
                    <th style="width:15%">Tổng Tiền</th>
                    <th style="width:10%">Thao Tác</th>
                    <th style="width:10%">user id</th>


                </tr>
            </thead>
            <tbody>
                <?php $n = 1; ?>
                @foreach($cart->items as $item)

				
                <tr>
                    <td>{{$n}}</td>
                    <td data-th="Image">
                        <!-- <div class="col-sm-2 hidden-xs"><img src="{{ asset('/images') }}/{{ $item['image'] }}" style="width: 100px" alt=""> -->
                        <img src="{{ asset('/images') }}/{{ $item['image'] }}" style="width: 80px" alt="">
                        </div>
                    </td>
                    <td data-th="Product">
                        <div class="col-sm-10">
                            <h4 class="nomargin"><a href="">{{ $item['name'] }}</a></h4>
                        </div>
                    </td>
                    <td data-th="Price">{{ number_format($item['price'],0,',','.') }} VND</td>
                    <td data-th="Quantity">
                        <form action="{{ route('cart.update',['id' => $item['id']]) }}" method="get">
                            <input type="number" name="quantity" class="form-control" value="{{ $item['quantity'] }}">
                    </td>
                    <td data-th="Thanhtien">{{ number_format($item['price']*$item['quantity'],0,',','.') }} VND</td>
                    <td class="actions" data-th="">
                        <button type="sumbit" value="Update" class="btn  btn-info btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                        </form>
                        <a href="{{ route('cart.remove',['id' => $item['id']]) }}"><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></a>
                    </td>
					<td data-th="user_id">{{$item['user_id']}} </td>
                </tr>
                <?php $n++ ?>
                @endforeach

            </tbody>
            <tfoot>
                <tr>
                    <td></td>

                    <td colspan="2" class="hidden-xs text-center">Total: <strong>{{number_format($cart ->total_price,0,',','.')}} VND</strong>
                    </td>

                </tr>
            </tfoot>
        </table>
    </div>
    


	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
						<ul class="footer_nav">
							<li><a href="#">Blog</a></li>
							<li><a href="#">FAQs</a></li>
							<li><a href="contact.html">Contact us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
						<ul>
							
							<li><a href="http://facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="http://twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="http://instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="http://skype.com"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
							<li><a href="http://pinterest.com"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="footer_nav_container">
						<div class="cr">©2018 All Rights Reserverd. Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#">Colorlib</a> &amp; distributed by <a href="https://themewagon.com">ThemeWagon</a></div>
					</div>
				</div>
			</div>
		</div>
	</footer>





	

</div>

<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/Isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('plugins/easing/easing.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('js/ajax.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>



<script src="{{asset('js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{asset('js/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('js/active.js')}}"></script>


	

</body>

</html>
</x-header>
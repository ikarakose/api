<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
.preview img{
    max-width: 100%;
    max-height: 100%;
}.card {
    padding: 40px 10px;
    box-shadow: 0px 0px 10px #cccccc6e;
    margin-top: 40px;
    border-radius: 50px;
}
</style>
<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
					<img  src="{{asset('storage/'.$product->image)}}"/>
						
					</div>
					<div class="details col-md-6">
						<h1 class="product-title">{{$product->name}}</h1>
						
						<p class="product-description">{{$product->getCategory->name}}</p>
						<h4 class="price">current price: <span>{{$product->price}}{{$product->priceicon}}</span></h4>
						
						<div class="action">
							<button class="add-to-cart btn btn-default" type="button">add to cart</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
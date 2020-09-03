<x-frontend>


<div class="container">
        <!-- HERO SECTION-->
        <section class="py-5 bg-light">
          <div class="container">
            <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
              <div class="col-lg-6">
                <h1 class="h2 text-uppercase mb-0">Cart</h1>
              </div>
              <div class="col-lg-6 text-lg-right">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-lg-end mb-0 px-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cart</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </section>
        <section class="py-5">
          <h2 class="h5 text-uppercase mb-4">Shopping cart</h2>
          <div class="row shoppingcart_div CartTable">
            <div class="col-lg-8 mb-4 mb-lg-0">
              <!-- CART TABLE-->
              <div class="table-responsive mb-4">
                <table class="table">
                  <thead class="bg-light">
                    <tr>
                      <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Product</strong></th>
                      <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Price</strong></th>
                      <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Quantity</strong></th>
                      <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Total</strong></th>
                      <th class="border-0" scope="col"> </th>
                    </tr>
                  </thead>
                  <tbody id="shoppingcart_table">
                   
                    
                  </tbody>
                </table>
              </div>
              {{-- billing address --}}
              <div class="row">
                <div class="col-lg-12">
                <h2 class="h5 text-uppercase mb-4">Billing Address</h2>
              </div>
                <div class="col-lg-6">
                   <label class="text-small text-uppercase" for="country">Full Address</label>
                   <textarea class="form-control mb-5" placeholder="Address" rows="4" cols="50" id="address" required="required"></textarea>
                </div>
                <div class="col-lg-6">
                   <label class="text-small text-uppercase" for="township">Choose Township</label>
                    <select class="selectpicker country" id="township" data-width="fit" data-style="form-control form-control-lg" data-title="Select your township">
                      <option>Choose Township</option>
                       @foreach($data[0] as $township)

                          <option value="{{$township->id}}">{{$township->name}}</option>

                        @endforeach
                    </select>

                </div>
              </div>
              <!-- CART NAV-->
              <div class="bg-light px-4 py-3">
                <div class="row align-items-center text-center">
                  <div class="col-md-6 mb-3 mb-md-0 text-md-left"><a class="btn btn-link p-0 text-dark btn-sm" href="{{route('index')}}"><i class="fas fa-long-arrow-alt-left mr-2"> </i>Continue shopping</a></div>

                   @if(Auth::check())

                  <div class="col-md-6 text-md-right checkoutBtn"><a class="btn btn-outline-dark btn-sm" href="javascript:void(0)">Proceed to checkout<i class="fas fa-long-arrow-alt-right ml-2"></i></a></div>

                  @else
                  <div class="col-md-6 text-md-right"><a class="btn btn-outline-dark btn-sm" href="{{route('login')}}">Proceed to checkout<i class="fas fa-long-arrow-alt-right ml-2"></i></a></div>

                  @endif
                  <label class="orderagian text-center text-danger"></label>
                </div>
              </div>
            </div>
            <!-- ORDER TOTAL-->
            <div class="col-lg-4">
              <div class="card border-0 rounded-0 p-lg-4 bg-light">
                <div class="card-body">
                  <h5 class="text-uppercase mb-4">Cart total</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex align-items-center justify-content-between"><strong class="text-uppercase small font-weight-bold">Subtotal</strong><span class="text-muted small shoppingcartTotal"></span></li>
                    <li class="border-bottom my-2"></li>
                    <li class="d-flex align-items-center justify-content-between mb-4"><strong class="text-uppercase small font-weight-bold">Total</strong><span id="shoppingcartTotal1"></span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

           <!-- No Shopping Cart Div -->

        <div class="row mt-5 noneshoppingcart_div text-center">
			
			<div class="col-12">
				<h5 class="text-center"> There are no items in this cart </h5>
			</div>

			<div class="col-12 mt-5 ">
				<div class="col-md-6 mb-3 mb-md-0 text-md-left"><a class="btn btn-dark  text-white btn-sm" href="{{route('index')}}"><i class="fas fa-long-arrow-alt-left mr-2"> </i>Continue shopping</a></div>
				</a>
			</div>

		</div>

        </section>
      </div>


























</x-frontend>
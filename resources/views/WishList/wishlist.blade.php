@extends('layout')

@section('content')
<div class="px-4 px-lg-0">
  <!-- For demo purpose -->
  <!-- <div class="container text-white py-5 text-center">
    <h1 class="display-4">Bootstrap 4 shopping cart</h1>
    <p class="lead mb-0">Build a fully structred shopping cart page using Bootstrap 4. </p>
    <p class="lead">Snippet by <a href="https://bootstrapious.com/snippets" class="text-white font-italic">
            <u>Bootstrapious</u></a>
    </p>
  </div> -->
  <!-- End -->

  <div class="pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

          <!-- Shopping cart table -->
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase">Oferta</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Precio</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Remover</div>
                  </th>
                </tr>
              </thead>
              <tbody>

                @foreach($cartItems as $item)
                  <tr>
                    <th scope="row" class="border-0">
                      <div class="p-2">
                        <!-- <img src="https://res.cloudinary.com/mhmd/image/upload/v1556670479/product-1_zrifhn.jpg" alt="" width="70" class="img-fluid rounded shadow-sm"> -->
                        <div class="ml-3 d-inline-block align-middle">
                          <h5 class="mb-0"> <a href="{{ route('oferta.show', $item->id)}}" class="text-dark d-inline-block align-middle">{{$item->name}}</a>
                        </div>
                      </div>
                    </th>
                      <td class="border-0 align-middle"><strong>$ {{number_format ($item->price,2)}}</strong></td>
                      <td class="Delete"><a class="btn btn-warning btn-block" href="{{ route('wishlist.destroy', $item->id) }}"> Remover </a></td>

                    </tr>
                @endforeach

              </tbody>
            </table>
          </div>
          <!-- End -->
        </div>
      </div>
    </div>
  </div>
</div>


@endsection

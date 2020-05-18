<?php

namespace App\Http\Controllers;

//use Darryldecode\Cart\Cart;
use App\Oferta;
use Illuminate\Http\Request;

class WishListController extends Controller
{
    public function add($oferta_id/* Oferta $oferta */)//recibe el id de la oferta
    {
        $oferta = Oferta::find($oferta_id);

        //dd ($oferta);

        \Cart::session(auth()->id())->add(array(
            'id'=>$oferta->id,
            'name' =>$oferta->nombre,
            'price'=>$oferta->precio,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $oferta
        ));
        return back();
    }

    public function index()
    {
        $cartItems = \Cart::session(auth()->id())->getContent();
        return view('Wishlist.wishlist', compact('cartItems'));
    }

    public function destroy($id)
    {
        \Cart::session(auth()->id())->remove($id);

        return back();
    }
}

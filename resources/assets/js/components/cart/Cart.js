
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

//require('./bootstrap');

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import React, { Component } from 'react';
import ReactDOM from 'react-dom';


export default class Cart extends Component {
    render() {
        return (
            <div>
              <div className="breadcrumbs-container">
                <div className="container">
                    <div className="row">
                        <div className="col-sm-12">
                            <nav className="woocommerce-breadcrumb">
                                <a href={`${app_url}${'/'}`}>Home</a>
                                <span className="separator">/</span> Giỏ hàng
                            </nav>
                        </div>
                    </div>
                  </div>
              </div>
              <div className="clearfix"></div>
              <div className="wrapper home-one single-product-page" style={{paddingTop:20}}>

                  <div className="cart-page-area">
                    <div className="container">
                        <div className="row">
                            <div className="col-md-12 col-sm-12 col-xs-12">

                                <form action="#">

                                    <div className="table-content table-responsive mb-50">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th className="product-thumbnail">Image</th>
                                                    <th className="product-name">Product</th>
                                                    <th className="product-price">Price</th>
                                                    <th className="product-quantity">Quantity</th>
                                                    <th className="product-subtotal">Total</th>
                                                    <th className="product-remove">Remove</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td className="product-thumbnail">
                                                        <a href="#"><img src="images/product/1.jpg" alt="cart-image"/></a>
                                                    </td>
                                                    <td className="product-name"><a href="#">dictum idrisus</a></td>
                                                    <td className="product-price"><span className="amount">£165.00</span></td>
                                                    <td className="product-quantity"><input type="number" value="1" /></td>
                                                    <td className="product-subtotal">£165.00</td>
                                                    <td className="product-remove"> <a href="#"><i className="fa fa-times" aria-hidden="true"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td className="product-thumbnail">
                                                        <a href="#"><img src="images/product/2.jpg" alt="cart-image"/></a>
                                                    </td>
                                                    <td className="product-name"><a href="#">Carte Postal Clock</a></td>
                                                    <td className="product-price"><span className="amount">£50.00</span></td>
                                                    <td className="product-quantity"><input type="number" value="1" /></td>
                                                    <td className="product-subtotal">£50.00</td>
                                                    <td className="product-remove"> <a href="#"><i className="fa fa-times" aria-hidden="true"></i></a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div className="row">

                                        <div className="col-md-8 col-sm-7 col-xs-12">
                                            <div className="buttons-cart">
                                                <input type="submit" value="Update Cart" />
                                                <a href="#">Continue Shopping</a>
                                            </div>
                                        </div>

                                        <div className="col-md-4 col-sm-5 col-xs-12">
                                            <div className="cart_totals">
                                                <h2>Cart Totals</h2>
                                                <br />
                                                <table>
                                                    <tbody>
                                                        <tr className="cart-subtotal">
                                                            <th>Subtotal</th>
                                                            <td><span className="amount">$215.00</span></td>
                                                        </tr>
                                                        <tr className="order-total">
                                                            <th>Total</th>
                                                            <td>
                                                                <strong><span className="amount">$215.00</span></strong>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div className="wc-proceed-to-checkout">
                                                    <a href="checkout.html">Proceed to Checkout</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                  </div>
                  <div className="clearfix"></div>
              </div>
            </div>
        );
    }
}

if (document.getElementById('mycart')) {
    ReactDOM.render(<Cart />, document.getElementById('mycart'));
}

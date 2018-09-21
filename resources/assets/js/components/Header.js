
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


export default class Header extends Component {
    render() {
        return (
            <div>
              <div className="header-middle-area">
                  <div className="container">
                      <div className="row">
                          <div className="col-xl-3 col-md-12">

                              <div className="site-logo">
                                  <a href={`${app_url}/`}><img src={`${app_url}${'/images/logo/logo-black.png'}`} alt="Laptop 2nd" /></a>
                              </div>
                          </div>
                          <div className="col-xl-6 col-md-12">

                              <div className="header-search clearfix">

                                  <div className="header-search-form">
                                      <form action={`${app_url}/tim-kiem`} method="POST">
                                          <input type="text" name="search" placeholder="Search product..." />
                                          <input type="submit" name="submit" value="Search" />
                                      </form>
                                  </div>
                              </div>
                          </div>
                          <div className="col-xl-3 col-md-12">

                              <div className="shop-cart-menu pull-right">
                                  <ul>
                                      <li><a href="#">
                                          <span className="cart-icon">
                                              <i className="ion-bag"></i><sup>3</sup>
                                          </span>
                                          <span className="cart-text">
                                              <span className="cart-text-title">My cart <br /> <strong>$ 145.00</strong> </span>
                                          </span>
                                      </a>
                                          <ul>
                                              <li>

                                                  <div className="single-shop-cart-wrapper">
                                                      <div className="shop-cart-img">
                                                          <a href="#"><img src="images/product/1.jpg" alt="Image of Product" /></a>
                                                      </div>
                                                      <div className="shop-cart-info">
                                                          <h5><a href="cart.html">sport t-shirt men</a></h5>
                                                          <span className="price">£515.00</span>
                                                          <span className="quantaty">Qty: 1</span>
                                                          <span className="cart-remove"><a href="#"><i className="fa fa-times"></i></a></span>
                                                      </div>
                                                  </div>
                                              </li>
                                              <li>

                                                  <div className="single-shop-cart-wrapper">
                                                      <div className="shop-cart-img">
                                                          <a href="#"><img src="images/product/2.jpg" alt="Image of Product" /></a>
                                                      </div>
                                                      <div className="shop-cart-info">
                                                          <h5><a href="cart.html">sport coat amet</a></h5>
                                                          <span className="price">£100.00</span>
                                                          <span className="quantaty">Qty: 1</span>
                                                          <span className="cart-remove"><a href="#"><i className="fa fa-times"></i></a></span>
                                                      </div>
                                                  </div>
                                              </li>
                                              <li>

                                                  <div className="single-shop-cart-wrapper">
                                                      <div className="shop-cart-img">
                                                          <a href="#"><img src="images/product/3.jpg" alt="Image of Product" /></a>
                                                      </div>
                                                      <div className="shop-cart-info">
                                                          <h5><a href="cart.html">Pellentesque men</a></h5>
                                                          <span className="price">£265.00</span>
                                                          <span className="quantaty">Qty: 1</span>
                                                          <span className="cart-remove"><a href="#"><i className="fa fa-times"></i></a></span>
                                                      </div>
                                                  </div>
                                              </li>
                                              <li>

                                                  <div className="shop-cart-total">
                                                      <p>Subtotal: <span className="pull-right">£880.00</span></p>
                                                  </div>
                                              </li>
                                              <li>
                                                  <div className="shop-cart-btn">
                                                      <a href="checkout.html">Checkout</a>
                                                      <a href="cart.html" className="pull-right">View Cart</a>
                                                  </div>
                                              </li>
                                          </ul>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

            </div>
        );
    }
}

if (document.getElementById('app_header')) {
    ReactDOM.render(<Header />, document.getElementById('app_header'));
}

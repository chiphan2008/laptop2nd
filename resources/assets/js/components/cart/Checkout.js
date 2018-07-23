
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


export default class Checkout extends Component {
    render() {
        return (
            <div>
              <div className="breadcrumbs-container">
                <div className="container">
                    <div className="row">
                        <div className="col-sm-12">
                            <nav className="woocommerce-breadcrumb">
                                <a href="index.html">Home</a>
                                <span className="separator">/</span> Checkout
                            </nav>
                        </div>
                    </div>
                  </div>
              </div>


              <div className="checkout-page-area">

                              <div className="checkout-area">
                                  <div className="container">
                                      <form action="#">
                                          <div className="row">
                                              <div className="col-lg-6 col-md-6">
                                                  <div className="checkbox-form">
                                                      <h3>Billing Details</h3>
                                                      <div className="row">
                                                          <div className="col-md-12">
                                                              <div className="country-select mb-30">
                                                                  <label>Country <span className="required">*</span></label>
                                                                  <select>
                                                                      <option value="volvo">Bangladesh</option>
                                                                      <option value="saab">Algeria</option>
                                                                      <option value="mercedes">Afghanistan</option>
                                                                      <option value="audi">Ghana</option>
                                                                      <option value="audi2">Albania</option>
                                                                      <option value="audi3">Bahrain</option>
                                                                      <option value="audi4">Colombia</option>
                                                                      <option value="audi5">Dominican Republic</option>
                                                                  </select>
                                                              </div>
                                                          </div>
                                                          <div className="col-md-6">
                                                              <div className="checkout-form-list">
                                                                  <label>First Name <span className="required">*</span></label>
                                                                  <input type="text" placeholder="" />
                                                              </div>
                                                          </div>
                                                          <div className="col-md-6">
                                                              <div className="checkout-form-list mb-30">
                                                                  <label>Last Name <span className="required">*</span></label>
                                                                  <input type="text" placeholder="" />
                                                              </div>
                                                          </div>
                                                          <div className="col-md-12">
                                                              <div className="checkout-form-list mb-30">
                                                                  <label>Company Name</label>
                                                                  <input type="text" placeholder="" />
                                                              </div>
                                                          </div>
                                                          <div className="col-md-12">
                                                              <div className="checkout-form-list">
                                                                  <label>Address <span className="required">*</span></label>
                                                                  <input type="text" placeholder="Street address" />
                                                              </div>
                                                          </div>
                                                          <div className="col-md-12">
                                                              <div className="checkout-form-list mtb-30">
                                                                  <input type="text" placeholder="Apartment, suite, unit etc. (optional)" />
                                                              </div>
                                                          </div>
                                                          <div className="col-md-12">
                                                              <div className="checkout-form-list mb-30">
                                                                  <label>Town / City <span className="required">*</span></label>
                                                                  <input type="text" placeholder="Town / City" />
                                                              </div>
                                                          </div>
                                                          <div className="col-md-6">
                                                              <div className="checkout-form-list mb-30">
                                                                  <label>State / County <span className="required">*</span></label>
                                                                  <input type="text" placeholder="" />
                                                              </div>
                                                          </div>
                                                          <div className="col-md-6">
                                                              <div className="checkout-form-list mb-30">
                                                                  <label>Postcode / Zip <span className="required">*</span></label>
                                                                  <input type="text" placeholder="Postcode / Zip" />
                                                              </div>
                                                          </div>
                                                          <div className="col-md-6">
                                                              <div className="checkout-form-list mb-30">
                                                                  <label>Email Address <span className="required">*</span></label>
                                                                  <input type="email" placeholder="" />
                                                              </div>
                                                          </div>
                                                          <div className="col-md-6">
                                                              <div className="checkout-form-list mb-30">
                                                                  <label>Phone  <span className="required">*</span></label>
                                                                  <input type="text" placeholder="Postcode / Zip" />
                                                              </div>
                                                          </div>
                                                          <div className="col-md-12">
                                                              <div className="checkout-form-list create-acc mb-30">
                                                                  <input id="cbox" type="checkbox" />
                                                                  <label>Create an account?</label>
                                                              </div>
                                                              <div id="cbox_info" className="checkout-form-list create-accounts mb-25">
                                                                  <p className="mb-10">Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                                                  <label>Account password  <span className="required">*</span></label>
                                                                  <input type="password" placeholder="password" />
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div className="different-address">
                                                          <div className="ship-different-title">
                                                              <h3>
                                                                  <label>Ship to a different address?</label>
                                                                  <input id="ship-box" type="checkbox" />
                                                              </h3>
                                                          </div>
                                                          <div id="ship-box-info" className="row">
                                                              <div className="col-md-12">
                                                                  <div className="country-select mb-30">
                                                                      <label>Country <span className="required">*</span></label>
                                                                      <select>
                                                                          <option value="volvo">Bangladesh</option>
                                                                          <option value="saab">Algeria</option>
                                                                          <option value="mercedes">Afghanistan</option>
                                                                          <option value="audi">Ghana</option>
                                                                          <option value="audi2">Albania</option>
                                                                          <option value="audi3">Bahrain</option>
                                                                          <option value="audi4">Colombia</option>
                                                                          <option value="audi5">Dominican Republic</option>
                                                                      </select>
                                                                  </div>
                                                              </div>
                                                              <div className="col-md-6">
                                                                  <div className="checkout-form-list mb-30">
                                                                      <label>First Name <span className="required">*</span></label>
                                                                      <input type="text" placeholder="" />
                                                                  </div>
                                                              </div>
                                                              <div className="col-md-6">
                                                                  <div className="checkout-form-list mb-30">
                                                                      <label>Last Name <span className="required">*</span></label>
                                                                      <input type="text" placeholder="" />
                                                                  </div>
                                                              </div>
                                                              <div className="col-md-12">
                                                                  <div className="checkout-form-list mb-30">
                                                                      <label>Company Name</label>
                                                                      <input type="text" placeholder="" />
                                                                  </div>
                                                              </div>
                                                              <div className="col-md-12">
                                                                  <div className="checkout-form-list mb-30">
                                                                      <label>Address <span className="required">*</span></label>
                                                                      <input type="text" placeholder="Street address" />
                                                                  </div>
                                                              </div>
                                                              <div className="col-md-12">
                                                                  <div className="checkout-form-list mb-30">
                                                                      <input type="text" placeholder="Apartment, suite, unit etc. (optional)" />
                                                                  </div>
                                                              </div>
                                                              <div className="col-md-12">
                                                                  <div className="checkout-form-list mb-30">
                                                                      <label>Town / City <span className="required">*</span></label>
                                                                      <input type="text" placeholder="Town / City" />
                                                                  </div>
                                                              </div>
                                                              <div className="col-md-6">
                                                                  <div className="checkout-form-list mb-30">
                                                                      <label>State / County <span className="required">*</span></label>
                                                                      <input type="text" placeholder="" />
                                                                  </div>
                                                              </div>
                                                              <div className="col-md-6">
                                                                  <div className="checkout-form-list mb-30">
                                                                      <label>Postcode / Zip <span className="required">*</span></label>
                                                                      <input type="text" placeholder="Postcode / Zip" />
                                                                  </div>
                                                              </div>
                                                              <div className="col-md-6">
                                                                  <div className="checkout-form-list mb-30">
                                                                      <label>Email Address <span className="required">*</span></label>
                                                                      <input type="email" placeholder="" />
                                                                  </div>
                                                              </div>
                                                              <div className="col-md-6">
                                                                  <div className="checkout-form-list mb-30">
                                                                      <label>Phone  <span className="required">*</span></label>
                                                                      <input type="text" placeholder="Postcode / Zip" />
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div className="order-notes">
                                                              <div className="checkout-form-list">
                                                                  <label>Order Notes</label>
                                                                  <textarea id="checkout-mess" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div className="col-lg-6 col-md-6">
                                                  <div className="your-order">
                                                      <h3>Your order</h3>
                                                      <div className="your-order-table table-responsive">
                                                          <table>
                                                              <thead>
                                                                  <tr>
                                                                      <th className="product-name">Product</th>
                                                                      <th className="product-total">Total</th>
                                                                  </tr>
                                                              </thead>
                                                              <tbody>
                                                                  <tr className="cart_item">
                                                                      <td className="product-name">
                                                                          Vestibulum suscipit <strong className="product-quantity"> × 1</strong>
                                                                      </td>
                                                                      <td className="product-total">
                                                                          <span className="amount">£165.00</span>
                                                                      </td>
                                                                  </tr>
                                                                  <tr className="cart_item">
                                                                      <td className="product-name">
                                                                          Vestibulum dictum magna <strong className="product-quantity"> × 1</strong>
                                                                      </td>
                                                                      <td className="product-total">
                                                                          <span className="amount">£50.00</span>
                                                                      </td>
                                                                  </tr>
                                                              </tbody>
                                                              <tfoot>
                                                                  <tr className="cart-subtotal">
                                                                      <th>Cart Subtotal</th>
                                                                      <td><span className="amount">£215.00</span></td>
                                                                  </tr>
                                                                  <tr className="order-total">
                                                                      <th>Order Total</th>
                                                                      <td><strong><span className="amount">£215.00</span></strong>
                                                                      </td>
                                                                  </tr>
                                                              </tfoot>
                                                          </table>
                                                      </div>
                                                      <div className="payment-method">
                                                          <div className="payment-accordion">
                                                              <div className="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                                  <div className="panel panel-default">
                                                                      <div className="panel-heading" role="tab" id="headingOne">
                                                                          <h4 className="panel-title">
                                                                              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                          Direct Bank Transfer
                                                                          </a>
                                                                          </h4>
                                                                      </div>
                                                                      <div id="collapseOne" className="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                                          <div className="panel-body">
                                                                              <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <div className="panel panel-default">
                                                                      <div className="panel-heading" role="tab" id="headingTwo">
                                                                          <h4 className="panel-title">
                                                                              <a className="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                          Cheque Payment
                                                                          </a>
                                                                          </h4>
                                                                      </div>
                                                                      <div id="collapseTwo" className="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                                          <div className="panel-body">
                                                                              <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <div className="panel panel-default">
                                                                      <div className="panel-heading" role="tab" id="headingThree">
                                                                          <h4 className="panel-title">
                                                                              <a className="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                          PayPal
                                                                          </a>
                                                                          </h4>
                                                                      </div>
                                                                      <div id="collapseThree" className="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                                          <div className="panel-body">
                                                                              <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                              <div className="order-button-payment">
                                                                  <input type="submit" value="Place order" />
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </form>
                                  </div>
                              </div>

                          </div>

            </div>
        );
    }
}

if (document.getElementById('mycheckout')) {
    ReactDOM.render(<Checkout />, document.getElementById('mycheckout'));
}


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


export default class Contact extends Component {
    render() {
        return (
            <div>
              <div className="breadcrumbs-container">
                <div className="container">
                    <div className="row">
                        <div className="col-sm-12">
                            <nav className="woocommerce-breadcrumb">
                                <a href="index.html">Home</a>
                                <span className="separator">/</span> Cart
                            </nav>
                        </div>
                    </div>
                  </div>
              </div>


              <div className="contact-page-area">
                <div className="contact-page-map">
                    <div className="container-fluid">
                        <div id="map"></div>
                    </div>
                </div>

                <div className="contact-form-area">
                    <div className="container-fluid">
                        <div className="row">
                            <div className="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                                <div className="contact-form-inner">
                                    <h2>TELL US YOUR PROJECT</h2>
                                    <form action="mail.php" method="get">
                                        <div className="row">
                                            <div className="col">
                                                <input type="text" className="form-control" placeholder="First name*" required />
                                            </div>
                                            <div className="col">
                                                <input type="text" className="form-control" placeholder="Last name*" required />
                                            </div>
                                        </div>
                                        <div className="row">
                                            <div className="col">
                                                <input type="text" className="form-control" placeholder="Email*" required />
                                            </div>
                                            <div className="col">
                                                <input type="text" className="form-control" placeholder="Subject*" required />
                                            </div>
                                        </div>
                                        <div className="row">
                                            <div className="col">
                                                <textarea name="your-message" cols="40" rows="10" className="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true"
                                                    aria-invalid="false" placeholder="Message *" required>
                                                  </textarea>
                                            </div>
                                        </div>
                                        <div className="contact-submit">
                                            <input type="submit" value="Send Email" className="wpcf7-form-control wpcf7-submit button" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div className="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                                <div className="contact-address-area">
                                    <h2>CONTACT US</h2>
                                    <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est
                                        notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum formas human.</p>
                                    <ul>
                                        <li>
                                            <i className="fa fa-fax">&nbsp;</i> Address : No 40 Baria Sreet 133/2 NewYork City</li>
                                        <li>
                                            <i className="fa fa-phone">&nbsp;</i> Info@roadthemes.com</li>
                                        <li>
                                            <i className="fa fa-envelope-o">&nbsp;</i> 0(1234) 567 890</li>
                                    </ul>
                                    <h3>
                                        <strong>Working hours</strong>
                                    </h3>
                                    <p>
                                        <strong>Monday – Saturday</strong>: &nbsp;08AM – 22PM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            </div>
        );
    }
}

if (document.getElementById('mycontact')) {
    ReactDOM.render(<Contact />, document.getElementById('mycontact'));
}

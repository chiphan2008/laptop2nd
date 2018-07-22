
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
import Slider from './components/home/Slider';
import FourBanner from './components/home/FourBanner';
import Products from './components/home/Products';


export default class HomePage extends Component {
    render() {
        return (
            <div>
              <Slider />
              <FourBanner />
              <Products />
            </div>
        );
    }
}

if (document.getElementById('root')) {
    ReactDOM.render(<HomePage />, document.getElementById('root'));
}

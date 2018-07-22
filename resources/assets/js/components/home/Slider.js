import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Slider extends Component {
    render() {
        return (
            <div className="slider-area">
            <div className="slider-area-inner">

              <div className="slider-inner">
                <div id="mainSlider" className="nivoSlider nevo-slider">
                  <img src="http://localhost/laptop2nd/public/images/slider/home4-slider1.jpg" alt="main slider" title="#htmlcaption1"/>
                  <img src="http://localhost/laptop2nd/public/images/slider/home4-slider2.jpg" alt="main slider" title="#htmlcaption2"/>
                </div>

                <div id="htmlcaption1" className="nivo-html-caption slider-caption">
                  <div className="slider-progress"></div>
                  <div className="container">
                    <div className="row">
                      <div className="col-md-12">
                        <div className="slider-content slider-content-1 slider-animated-1">
                          <h1 className="hone">INNOVATIVE</h1>
                          <h1 className="htwo">SMARTER</h1>
                          <h1 className="hthree">BRIGHTER</h1>
                          <h3>40” SkyHi Smart Package</h3>
                          <div className="button-1 hover-btn-2">
                            <a href="shop.html">SHOP NOW</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="htmlcaption2" className="nivo-html-caption slider-caption">
                  <div className="slider-progress"></div>
                  <div className="container">
                    <div className="row">
                      <div className="col-md-12">
                        <div className="slider-content slider-content-2 slider-animated-2">
                          <h1 className="hone">DRONE DIY</h1>
                          <h1 className="htwo">WORKSHOP</h1>
                          <h3 className="h3one">Build & Fly</h3>
                          <h3 className="h3two">Your Own drone!</h3>
                          <div className="button-1 hover-btn-1">
                            <a href="shop.html">SHOP NOW</a>
                          </div>
                        </div>
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

// if (document.getElementById('slider')) {
//     ReactDOM.render(<Slider />, document.getElementById('slider'));
// }

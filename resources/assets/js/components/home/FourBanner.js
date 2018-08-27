import React, { Component } from 'react';
import getApi from '../../api/getApi';

export default class FourBanner extends Component {
    constructor(props) {
        super(props);
        this.state = {
            listData:[],
            bannerFull:{},
        }
    }
    getData() {
        getApi('/get-banner').then(arr => {
            this.setState({listData:arr.data,bannerFull:arr.data[4]})
        }).catch(err => {});
    }
    componentWillMount() {
        this.getData();
    }
    render() {
        const {listData,bannerFull} = this.state;
        return (
          <div>
            <div className="home-four-banner-area">
              <div className="container">
                  <div className="row">
                  {listData.map((e,index)=>(
                            index<4 &&
                            <div key={index} className="four-fast col-sm-6 col-lg-3 col-md-6 col-xs-12">
                                    <div className="four-single-banner-text">
                                        <div className="four-banner-img">
                                            <a href={e.link}>
                                                <img src={`${'images/banner/'}${e.urlhinh}`} alt={e.name} />
                                            </a>
                                        </div>
                                        <div className="four-banner-text">
                                            <h3>{e.name}</h3>
                                        </div>
                                    </div>
                                </div>
                        ))}
                      
                      
                  </div>
              </div>
            </div>

            {bannerFull.urlhinh!==undefined &&
            <div className="home-fullwidth-banner-area">
                <div className="container">
                    <div className="row">
                        <div className="col-sm-12">
                            <a href={bannerFull.link}>
                                <img src={`${'images/banner/'}${bannerFull.urlhinh}`} alt={bannerFull.name} />
                            </a>
                        </div>
                    </div>
                </div>
            </div>}
          </div>

        );
    }
}

// if (document.getElementById('fourbanner')) {
//     ReactDOM.render(<FourBanner />, document.getElementById('fourbanner'));
// }

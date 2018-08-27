import React, { Component } from 'react';
import getApi from '../../api/getApi';

export default class Slider extends Component {
    constructor(props) {
      super(props);
      this.state = {
          listData:[],
      }
    }
    getData() {
        getApi('/get-slider').then(arr => {
            this.setState({listData:arr.data})
        }).catch(err => {});
    }
    componentWillMount() {
        this.getData();
    }
    render() {
      const {listData} = this.state;
        return (
            <div className="slider-area">
            <div className="slider-area-inner">

              <div className="slider-inner">
                <div id="mainSlider" className="nivoSlider nevo-slider">
                  {listData.map((e)=>(
                      <img key={e.id} src={`${'images/slider/'}${e.urlhinh}`} alt={e.name} title={`${'#htmlcaption'}${e.id}`}/>
                  ))}
                </div>
                {listData.map((e)=>(
                      <div key={e.id} id={`${'htmlcaption'}${e.id}`} className="nivo-html-caption slider-caption">
                      <div className="slider-progress"></div>
                      <div className="container">
                        <div className="row">
                          <div className="col-md-12">
                            <div className={`"${'slider-content '}${'slider-content-'}${e.id}${' slider-animated-'}${e.id}"`} >
                            <div dangerouslySetInnerHTML={{__html: e.content}} />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  ))}
                
              </div>

            </div>
            </div>
        );
    }
}

// if (document.getElementById('slider')) {
//     ReactDOM.render(<Slider />, document.getElementById('slider'));
// }

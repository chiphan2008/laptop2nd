import React, { Component } from 'react';
import getApi from '../../api/getApi';

export default class BrandLogo extends Component {
    constructor(props) {
        super(props);
        this.state = {
            listData:[]
        }
    }
    getData() {
        getApi('/get-logo').then(arr => {
            this.setState({listData:arr.data})
        }).catch(err => {});
    }
    componentWillMount() {
        this.getData();
    }
    render() {
        const {listData} = this.state;
        return (
            <div className="brand-logo-area">
            <div className="container">
                <div className="row">
                    <div className="col-sm-12">
                        <div className="four-brand-carousel-active owl-carousel">
                            {listData.map(e=>(<div key={e.id} className="brand-logo">
                                    <a href={e.link}><img style={{height:'100px'}} src={`${'images/slider/'}${e.urlhinh}`} alt={e.name} /></a>
                                </div>)
                            )}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        );
    }
}

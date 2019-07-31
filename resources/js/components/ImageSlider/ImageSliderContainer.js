import React from 'react';
import ReactDOM from 'react-dom';

import Slider from 'react-animated-slider';
import 'react-animated-slider/build/horizontal.css';

export default class SliderContainer extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            images: [
                'assets/banner/Leaving-Image_banner1.jpg',
                'assets/banner/mamela-banner-2.jpg',
                'assets/banner/PREGGERS-banner-21.jpg',
                'assets/banner/theatremonkey-banner1.jpg',
                'assets/banner/walker-talk-banner.jpg',
            ],
        };
    }

    render() {
        return (
            <Slider 
                autoplay={5000}
                className='slider slider_height'
            >
                {this.state.images.map((image, index) => <div key={index}>
                    <img className="slider_image" src={image} />
                </div>)}
            </Slider>
        )
    }
}

if (document.getElementById('ImageSlider')) {
    ReactDOM.render(<SliderContainer />, document.getElementById('ImageSlider'));
}
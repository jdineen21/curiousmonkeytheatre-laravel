import React from 'react';
import ReactDOM from 'react-dom';

import "react-responsive-carousel/lib/styles/carousel.min.css";
import { Carousel } from 'react-responsive-carousel';

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
            <Carousel
                showArrows={true}
                showStatus={false}
                showIndicators={true}
                showThumbs={false}
                infiniteLoop={true}
                autoPlay={true}
                stopOnHover={false}
                interval={5000}
                transitionTime={2000}
                swipeable={false}
            >
                {this.state.images.map((image, index) => <div key={index}>
                    <img className="slider_image" src={image} alt={'Slider '+index} />
                </div>)}
            </Carousel>
        )
    }
}

if (document.getElementById('ImageSlider')) {
    ReactDOM.render(<SliderContainer />, document.getElementById('ImageSlider'));
}
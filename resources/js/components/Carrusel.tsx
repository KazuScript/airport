import { Navigation, Pagination, Autoplay } from 'swiper/modules';
import { Swiper, SwiperSlide } from 'swiper/react';

import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

type SlideItem = {
    id: number | string;
    image: string;
};

type CarruselProps = {
    slides: SlideItem[];
    slidesPerView?: number;
    autoplayDelay?: number;
};

export default function Carrusel({
    slides,
    slidesPerView = 1,
    autoplayDelay = 3000,
}: CarruselProps) {
    return (
        <div className="container-carrusel">
            <Swiper
                spaceBetween={0}
                centeredSlides
                slidesPerView={slidesPerView}
                autoplay={{
                    delay: autoplayDelay,
                    disableOnInteraction: false,
                }}
                pagination={{ clickable: true }}
                
            >
                {slides.map((slide) => (
                    <SwiperSlide key={slide.id}>
                        <div
                            className="slide"
                            style={{ backgroundImage: `url(${slide.image})` }}
                        >
                        </div>
                    </SwiperSlide>
                ))}
            </Swiper>
        </div>
    );
}

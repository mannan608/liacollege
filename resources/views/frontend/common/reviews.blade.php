<div class="testimonials-section testimonials-sec-one text-center">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="fw-medium text-secondary text-decoration-underline mb-2 d-inline-block">Student Reviews</span>
            <h2>What Our Students Say</h2>
            <p>Rated Excellent with 561+ positive reviews on Facebook</p>
        </div>
        <div class="testimonials-slider lazy mt-4">
            @foreach($reviews as $review)
                @php
                    $avatar = $review->avatar ? asset('uploads/reviews/' . $review->avatar) : 'https://via.placeholder.com/150';
                @endphp
                <div>
                    <div class="testimonials-item rounded-3 bg-white" data-aos="flip-right">
                        <div class="position-relative d-inline-flex">
                            <div class="avatar rounded-circle avatar-xxl border border-white border-3">
                                <a href="#"><img class="img-fluid rounded-circle"
                                        src="{{ $avatar }}"
                                        alt="{{ $review->name }}" loading="lazy" style="height: 74px;width: 74px;"></a>
                            </div>
                            <i class="isax isax-quote-up5 bg-secondary quote rounded-pill fs-16 p-1"></i>
                        </div>
                        <h6 class="mb-1"><a href="#">{{ $review->name }}</a></h6>
                        <p class="designation">{{ $review->designation }}</p>
                        <p class="mb-3 text-truncate line-clamb-2">{{ $review->description }}</p>
                        <div>
                            @for($i = 1; $i <= 5; $i++)
                                <i class="fas fa-star text-warning me-2 {{ $i <= $review->rating ? '' : 'opacity-25' }}"></i>
                            @endfor
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
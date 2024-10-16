@extends('layouts.frontend')
@section('content')
    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('/assets/img/new-images/tayhu-company-images/bg-4\ 1.png');">
        <div class="shape-image float-bob-y">
            <img src="/assets/img/vector.png" alt="img">
        </div>
        <div class="container">
            <div class="breadcrumb-wrapper-items">
                <div class="page-heading">
                    <div class="breadcrumb-sub-title">
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">Showroom</h1>
                    </div>
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                        <li>
                            <a href="/">
                                Home
                            </a>
                        </li>
                        <li>
                            <i class="fa-sharp fa-solid fa-slash-forward"></i>
                        </li>
                        <li>
                            Showroom
                        </li>
                    </ul>
                </div>
                <div class="breadcrumb-image">
                    <div class="bar-shape">
                        <img src="/assets/img/breadcrumb-bar.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main showroom section -->
    <section class="project-section section-padding fix">
        <div class="container">
            <div class="section-title text-center">
                <h6 class="wow fadeInUp"><i class="fa-solid fa-arrow-left-long"></i>Make Your Selection<i class="fa-solid fa-arrow-right-long"></i></h6>
                <h2 class="splt-txt wow" data-splitting>Effortlessly Configure and Preview <br> Your Dream Decor</h2>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="showroom-container shadow-lg bg-body-tertiary rounded"
                         style="background-image: url('{{ asset('storage/' . str_replace('\\', '/', $showroom[0]->images_array[0])) }}');">
                        <img src="./assets/img/showroom-images/Orqa fon-2.png" alt="Showroom Background" class="w-100 h-100">
                    </div>
                </div>

                <div class="col-lg-3 showroom-cards-responsive">
                    @foreach($showroom as $item)
                        @foreach($item->images_array as $index => $image)
                            <div class="col-lg-12 mb-2">
                                <button class="fon-1 fon-button {{ $index === 0 ? 'fon-button-active' : '' }}" data-index="{{ $index }}">
                                    <img src="{{ asset('storage/' . str_replace('\\', '/', $image)) }}" alt="Showroom Image" class="w-100 h-100">
                                </button>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>

            <div class="section-title text-center mt-5">
                <h6 class="wow fadeInUp"><i class="fa-solid fa-arrow-left-long"></i>Make Your Selection<i class="fa-solid fa-arrow-right-long"></i></h6>
                <h2 class="splt-txt wow" data-splitting>Create Your Dream Ceiling</h2>
            </div>
            <div class="row mt-5">
                <div class="col-lg-3 showroom-cards-responsive">
                    <div class="col-lg-12">
                        <button class="fon-button-2 fon-button-active" onclick="changeImage('./assets/img/showroom-images/showroom-new/ceiling-2.png', this)">
                            <img src="./assets/img/showroom-images/showroom-new/Frame 52-1.png" class="w-100 h-100">
                        </button>
                    </div>
                    <div class="col-lg-12">
                        <button class="fon-button-2" onclick="changeImage('./assets/img/showroom-images/showroom-new/ceiling-3.png', this)">
                            <img src="./assets/img/showroom-images/showroom-new/Frame 52-2.png" alt="" class="w-100 h-100">
                        </button>
                    </div>
                    <div class="col-lg-12">
                        <button class="fon-button-2" onclick="changeImage('./assets/img/showroom-images/showroom-new/ceiling-4.png', this)">
                            <img src="./assets/img/showroom-images/showroom-new/Frame 52-3.png" alt="" class="w-100 h-100">
                        </button>
                    </div>
                    <div class="col-lg-12">
                        <button class="fon-button-2" onclick="changeImage('./assets/img/showroom-images/showroom-new/ceiling-5.png', this)">
                            <img src="./assets/img/showroom-images/showroom-new/Frame 52-4.png" alt="" class="w-100 h-100">
                        </button>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="showrooom-container shadow-lg bg-body-tertiary rounded">
                        <img id="showroom-image" src="./assets/img/showroom-images/showroom-new/ceiling-2.png" alt="" class="w-100">
                    </div>
                </div>
            </div>



        </div>
    </section>


    <script>
        const showroomContainer = document.querySelector('.showroom-container');
        const showroomButtons = document.querySelectorAll('.fon-button');
        const ceilingButtons = document.querySelectorAll('.fon-button-2');

        const showroomImages = [
            @foreach($showroom as $item)
                @foreach($item->images_array as $image)
                '{{ asset('storage/' . str_replace('\\', '/', $image)) }}',
            @endforeach
            @endforeach
        ];

        const ceilingImages = [
            './assets/img/showroom-images/showroom-new/ceiling-2.png',
            './assets/img/showroom-images/showroom-new/ceiling-3.png',
            './assets/img/showroom-images/showroom-new/ceiling-4.png',
            './assets/img/showroom-images/showroom-new/ceiling-5.png',
        ];

        const updateShowroomBackground = (index) => {
            showroomContainer.style.backgroundImage = `url('${showroomImages[index]}')`;

            showroomButtons.forEach(button => button.classList.remove('fon-button-active'));
            showroomButtons[index].classList.add('fon-button-active');
        };

        const changeImage = (imageSrc, button) => {
            const imgElement = document.getElementById('showroom-image');
            imgElement.src = imageSrc;

            ceilingButtons.forEach(btn => {
                btn.classList.remove('fon-button-active');
            });
            button.classList.add('fon-button-active');
        };

        showroomButtons.forEach((button, index) => {
            button.addEventListener('click', () => {
                updateShowroomBackground(index);
            });
        });

        // Initially set the first image
        updateShowroomBackground(0);
    </script>
@endsection

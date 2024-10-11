@extends('layouts.frontend')
@section('content')
<div class="single-page">
    <div class="container">
        <nav aria-label="breadcrumb single-page">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}"><x-translation key="home_link" /></a></li>
                <li class="breadcrumb-item active" aria-current="page"><x-translation key="showroom_link" /></li>
            </ol>
        </nav>
    </div>
</div>

<div id="page" class="section-padding">
    <div class="container">
        <div class="section-title">
            <h2><x-translation key="explore_designs" /></h2>
            <h5><x-translation key="dream_decor" /></h5>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <div class="showroom-container shadow-lg bg-body-tertiary rounded"
                    style="background-image: url('{{ asset('storage/' . str_replace('\\', '/', $showroom[0]->images_array[0])) }}');">
                    <img src="{{ asset('assets/images/Orqa fon-2.png') }}" alt="Showroom Background">
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
    </div>
</div>

<script>
    const showroomContainer = document.querySelector('.showroom-container');

    const buttons = document.querySelectorAll('.fon-button');
    const backgroundImages = [
        @foreach($showroom as $item)
            @foreach($item->images_array as $image)
                '{{ asset('storage/' . str_replace('\\', '/', $image)) }}',
            @endforeach
        @endforeach
    ];

    // Function to update background image
    const updateBackground = (index) => {
        showroomContainer.style.backgroundImage = `url('${backgroundImages[index]}')`;

        // Remove active class from all buttons
        buttons.forEach(button => button.classList.remove('fon-button-active'));

        // Add active class to the clicked button
        buttons[index].classList.add('fon-button-active');
    }; 

    // Add click event listeners to each button
    buttons.forEach(button => {
        button.addEventListener('click', (e) => {
            const index = e.currentTarget.getAttribute('data-index');
            updateBackground(index);
        });
    });

    // Set initial background image
    updateBackground(0);
</script>

<style>
    @media(max-width: 575px) {
        .showroom-cards-responsive {
            display: flex;
            margin-top: 15px;
            padding: 0;
        }
    }

    .fon-button {
        border: 1px solid #bdbdbd;
        padding: 5px;
        height: 65px;
        width: 65px;
        transition: border 0.3s linear;
        margin-bottom: 15px;
    }

    .fon-button img {
        object-fit: cover;
    }

    .fon-button-active {
        border: 2px solid #FFA500;
    }
</style>
@endsection

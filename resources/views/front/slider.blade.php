@section('slider')
    <head>
        <script src="{{asset('js/app.js')}}" defer></script>

        <link href="{{ asset('css/now-ui-kit.css') }}" rel="stylesheet">

        {{--<script src="https://unpkg.com/vue"></script>--}}
        {{--<script src="https://unpkg.com/vueperslides"></script>--}}
        {{--<link href="https://unpkg.com/vueperslides/dist/vueperslides.css" rel="stylesheet">--}}

    </head>
<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image:url(assets/front/images/bg_1.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
                <div class="col-md-6 ftco-animate">
                    <h1 class="mb-4">Education Needs Complete Solution</h1>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    <p><a href="{{url('/')}}/contact" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item" style="background-image:url(assets/front/images/bg_2.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
                <div class="col-md-6 ftco-animate">
                    <h1 class="mb-4">University, College School Education</h1>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="app">
    {{--<example-component></example-component>--}}
    {{--<alert type="danger">this is alert</alert>--}}
    {{--<alert type="success" class="container">this is alert</alert>--}}

    {{--<slide>this is slider</slide>--}}
</div>


<script src="{{asset('js\app.js')}}"></script>

<script>
    import CarouselSection from "../../src/pages/components/CarouselSection";
    export default {
        components: {CarouselSection}
    }
</script>
@endsection
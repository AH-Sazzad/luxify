@extends('backend.layouts.blank')
@section('content')
    <div class="container pt-5">
        <div class="d-flex justify-content-center mt-5">
            <div class="card install-card position-relative">
                <!-- Content -->
                <div class="card-body install-card-body h-100 w-100 z-3 position-relative">
                    <!-- Top content -->
                    <div class="mar-ver pad-btm text-center">
                    <img src="public/assets/img/logo.png" alt="" style=" width: 15rem;">
                        <h1 class="fs-21 fw-700 text-uppercase mt-2" style="color: #3d3d3d;">Import SQL</h1>
                        <p class="fs-12 fw-500" style="color:  #666; line-height: 18px;">
                            Your database is successfully connected. All you need to do now is hit the ‘Install’ Button. The auto installer will run a sql file, will do all the tiresome works and set up your application automatically.
                        </p>
                    </div>

                    <div class="mt-5 pt-5 text-center">
                      <svg xmlns="http://www.w3.org/2000/svg" width="110.999" height="100" viewBox="0 0 110.999 100">
                        <g id="Group_22697" data-name="Group 22697" transform="translate(-485 -509)">
                          <path id="Union_13" data-name="Union 13" d="M-12298.562,74.272a21.97,21.97,0,0,1-7-4.712,22.025,22.025,0,0,1-4.715-7A21.872,21.872,0,0,1-12312,54a21.861,21.861,0,0,1,1.728-8.562,21.991,21.991,0,0,1,4.715-7,21.97,21.97,0,0,1,7-4.712,21.826,21.826,0,0,1,2.923-1,37.709,37.709,0,0,1,2.627-9.522,37.892,37.892,0,0,1,8.142-12.078,37.878,37.878,0,0,1,12.082-8.145A37.764,37.764,0,0,1-12258,0a37.775,37.775,0,0,1,14.791,2.985,37.9,37.9,0,0,1,12.082,8.145,37.958,37.958,0,0,1,7.789,11.27,26.775,26.775,0,0,1,5.847,1.723,26.919,26.919,0,0,1,8.584,5.784,26.832,26.832,0,0,1,5.784,8.584A26.8,26.8,0,0,1-12201,49a26.8,26.8,0,0,1-2.123,10.509,26.8,26.8,0,0,1-5.784,8.584,26.868,26.868,0,0,1-8.584,5.784A26.8,26.8,0,0,1-12228,76h-11a1,1,0,0,1-1-1,1,1,0,0,1,1-1h11.009a24.827,24.827,0,0,0,9.725-1.965,24.906,24.906,0,0,0,7.944-5.358,24.919,24.919,0,0,0,5.357-7.944A24.861,24.861,0,0,0-12203,49a24.835,24.835,0,0,0-1.965-9.73,24.884,24.884,0,0,0-5.357-7.947,24.957,24.957,0,0,0-7.944-5.358,24.791,24.791,0,0,0-4.93-1.5l-.958-.166q-.259-.04-.521-.075l0-.009,0-.007-.067-.012-.016-.043-.068-.161q-.4-.948-.853-1.867L-12228,22q1.163,0,2.31.1a35.893,35.893,0,0,0-6.852-9.552,35.9,35.9,0,0,0-11.442-7.715A35.83,35.83,0,0,0-12258,2a35.819,35.819,0,0,0-14.013,2.827,35.9,35.9,0,0,0-11.441,7.715,35.888,35.888,0,0,0-7.716,11.442,35.78,35.78,0,0,0-2.381,8.3l.011,0-.26,2.064.021.009-.042.008a.006.006,0,0,0,0,0l-1.71.4a19.521,19.521,0,0,0-2.254.8,19.91,19.91,0,0,0-6.356,4.286,19.923,19.923,0,0,0-4.285,6.356A19.846,19.846,0,0,0-12310,54a19.857,19.857,0,0,0,1.573,7.787,19.992,19.992,0,0,0,4.285,6.356,20.011,20.011,0,0,0,6.356,4.286,19.893,19.893,0,0,0,7.714,1.573l.072,0h16a1,1,0,0,1,1,1,1,1,0,0,1-1,1h-16v0A21.856,21.856,0,0,1-12298.562,74.272Z" transform="translate(12797 509)" fill="#e6e6e6"/>
                          <rect id="Rectangle_19108" data-name="Rectangle 19108" width="2" height="44" rx="1" transform="translate(539.5 564.374)" fill="#0e7cff"/>
                          <path id="Union_14" data-name="Union 14" d="M-12312,15V1a1,1,0,0,1,1-1h14a1,1,0,0,1,1,1,1,1,0,0,1-1,1h-13V15a1,1,0,0,1-1,1A1,1,0,0,1-12312,15Z" transform="translate(-8165.399 -8096.898) rotate(-135)" fill="#0e7cff"/>
                        </g>
                      </svg>
                    </div>

                    <div class="text-center mar-top pad-top">
                        <div id="loader" style="margin-top: 20px; display: none; transition: all 0.5s;">
                            <img loading="lazy"  src="{{ asset('loader.gif') }}" alt="" width="20">
                            &nbsp; Importing database ....
                        </div>
                    </div>
                    
                    <div class="mb-4 pb-4 absolute-bottom-left right-0 d-flex justify-content-center">
                      <a href="{{ route('step3') }}" class="back-btn-svg mr-3" title="Go Back" style="box-shadow: 0px 8px 16px rgb(255 88 0 / 16%); border-radius: 50%;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                          <g id="Group_22706" data-name="Group 22706" transform="translate(-770 -653)">
                            <g id="Ellipse_26" data-name="Ellipse 26" transform="translate(770 653)" fill="none" stroke="#cccccc" stroke-width="1">
                              <circle cx="20" cy="20" r="20" stroke="none"/>
                              <circle class="inner" cx="20" cy="20" r="19.5" fill="none"/>
                            </g>
                            <path id="e078aa9915b23dfe83446121b09a6213" class="arrow" d="M98.073,90.719H88.146l4.576-4.576L91.537,85,85,91.537l6.537,6.537,1.144-1.144-4.535-4.576h9.927Z" transform="translate(698.463 581.463)" fill="#cccccc"/>
                          </g>
                        </svg>
                      </a>
                      <a href="{{ route('import_sql') }}" class="btn btn-install text-uppercase" onclick="showLoder()">Import SQL</a>
                    </div>
                </div>

                <!-- Common file -->
                @include('installation.common')

            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        function showLoder() {
            $('#loader').fadeIn();
        }
    </script>
@endsection

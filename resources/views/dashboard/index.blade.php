@extends('dashboard.layouts.main')


@section('container')
    <div class="container" data-aos="zoom-in">
        <div class="page-inner">
            <div class="page-header">
                {{-- <h4 class="page-title">{{ $title }}</h4> --}}
            </div>
            {{-- @if (Auth::user()->role == 'Admin') --}}
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-dark bg-primary-gradient">
                        <div class="card-body pb-0">
                            {{-- <div class="h1 fw-bold float-right">{{ $type }}</div> --}}
                            <h2 class="mb-2">Melakukan</h2>
                            <p></p>
                            <div class="pull-in sparkline-fix chart-as-background">
                                <div id="lineChart"><canvas width="327" height="70"
                                        style="display: inline-block; width: 327px; height: 70px; vertical-align: top;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-dark bg-secondary-gradient">
                        <div class="card-body pb-0">
                            {{-- <div class="h1 fw-bold float-right">{{ $user }}</div> --}}
                            <h2 class="mb-2">Dalam pengerjaan</h2>

                            <div class="pull-in sparkline-fix chart-as-background">
                                <div id="lineChart2"><canvas width="327" height="70"
                                        style="display: inline-block; width: 327px; height: 70px; vertical-align: top;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-dark bg-success2">
                        <div class="card-body pb-0">
                            {{-- <div class="h1 fw-bold float-right">{{ $guru }}</div> --}}
                            <h2 class="mb-2">Tertunda</h2>

                            <div class="pull-in sparkline-fix chart-as-background">
                                <div id="lineChart3"><canvas width="327" height="70"
                                        style="display: inline-block; width: 327px; height: 70px; vertical-align: top;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-dark bg-success2">
                        <div class="card-body pb-0">
                            {{-- <div class="h1 fw-bold float-right">{{ $admin }}</div> --}}
                            <h2 class="mb-2">Selesai</h2>

                            <div class="pull-in sparkline-fix chart-as-background">
                                <div id="lineChart3"><canvas width="327" height="70"
                                        style="display: inline-block; width: 327px; height: 70px; vertical-align: top;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Dashboard
                        </div>
                        <div class="card-body">

                            <div class="container">
                                <div id="container"></div>
                            </div>
                            <script>
                                Highcharts.chart('container', {
                                    chart: {
                                        type: 'bar'
                                    },
                                    title: {
                                        text: 'Dashboard Grafik '
                                    },
                                    xAxis: {
                                        categories: ['Formulir', 'Pendaftar', 'Guru', 'Admin', ],
                                        title: {
                                            text: null
                                        }
                                    },
                                    yAxis: {
                                        min: 0,
                                        title: {
                                            text: 'Population (Units)',
                                            align: 'high'
                                        },
                                        labels: {
                                            overflow: 'justify'
                                        }
                                    },
                                    tooltip: {
                                        valueSuffix: ' Units'
                                    },
                                    plotOptions: {
                                        bar: {
                                            dataLabels: {
                                                enabled: true
                                            }
                                        }
                                    },
                                    legend: {
                                        layout: 'vertical',
                                        align: 'right',
                                        verticalAlign: 'top',
                                        x: -40,
                                        y: 80,
                                        floating: true,
                                        borderWidth: 1,
                                        backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
                                        shadow: true
                                    },
                                    credits: {
                                        enabled: false
                                    },

                                });
                            </script>
                            {{-- @elseif (Auth::user()->role == 'User')
                            @if ($form)
                                <div class="row justify-content-center align-items-center mb-1">
                                    <div class="container" data-aos="fade-up">
                                        <div class="card-body card-primary">
                                            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                                                <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                                                    <div class="icon"><i class="bx bx-file"></i>
                                                    </div>
                                                    <p>{{ $auth->name }} Sudah daftar ! <span class="badge bg-success"> <i
                                                                class="fas fa-check">Done!!</i></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="row justify-content-center align-items-center mb-1">
                                    <div class="container" data-aos="fade-down">
                                        <div class="card-body card-warning">
                                            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                                                <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                                                    <div class="icon"><i class="bx bx-file"></i>
                                                    </div>
                                                    <p>{{ $auth->name }} status kelolosan kamu :


                                                        @if ($form->nilai1 + $form->nilai2 >= 160)
                                                            <span class="badge bg-success"> <i class="fas fa-check">lolos
                                                                </i></span>
                                                        @elseif($form->nilai1 + $form->nilai2 < 160 && $form->nilai1 + $form->nilai1 > 0)
                                                            <span class="badge bg-danger"> <i class="fas fa-close">Belum
                                                                    Lolos </i></span>
                                                        @elseif($form->nilai1 + $form->nilai2 == 0)
                                                            <span class="badge bg-warning"><i class="fas fa-history">
                                                                    Pending </i></span>
                                                        @endif

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center align-items-center mb-1">
                                    <div class="container" data-aos="fade-down">
                                        <div class="card-body card-danger">
                                            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                                                <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                                                    <div class="icon"><i class="bx bx-file"></i>
                                                    </div>
                                                    <p>{{ $auth->name }} nilai-nilai kamu :


                                                        @if (!$form->nilai2)
                                                            <p>Nilai Wawancara :
                                                                <span> Kamu Belum Tes</span>
                                                            </p>
                                                        @else
                                                            <p>Nilai Wawancara :
                                                                <span> {{ $form->nilai2 }}</span>
                                                            </p>
                                                        @endif



                                                        @if (!$form->nilai1)
                                                            <p>Nilai SKD :
                                                                <span> Kamu Belum Tes</span>
                                                            </p>
                                                        @else
                                                            <p>Nilai SKD :
                                                                <span> {{ $form->nilai2 }}</span>
                                                            </p>
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="container" data-aos="fade-up">
                                    <div class="card-body card-danger">
                                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                                            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                                                <div class="icon"><i class="bx bx-file"></i></div>
                                                <p>{{ $auth->name }} Belom daftar ! <span class="badge bg-warning">
                                                        <i class="fas fa-history"> Yok ke </i> <a href="/formulir">
                                                            Formulir
                                                        </a></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endif

                            @endif
 --}}


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

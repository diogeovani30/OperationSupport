@extends('layouts.main')

@php
    use App\Models\Category;

    function getColorByType($typeId)
    {
        switch ($typeId) {
            case 1:
                return 'green'; // or any color code or name
            case 2:
                return 'blue';
            case 3:
                return 'orange';
            case 4:
                return 'red';
            case 5:
                return 'purple';
            case 6:
                return 'yellow';
            case 7:
                return 'pink';
            case 8:
                return 'brown';
            case 9:
                return 'grey';
            case 10:
                return 'cyan';
            case 11:
                return 'teal';
            case 12:
                return 'indigo';
            case 13:
                return 'lime';
            case 14:
                return 'light-blue';
            case 15:
                return 'dark-grey';
            default:
                return 'black';
        }
    }

    $typeLabels = $types->pluck('name')->toArray();
    $typeCounts = $types
        ->map(function ($type) {
            return $type->posts->count();
        })
        ->toArray();
    $typeColors = $types
        ->pluck('id')
        ->map('getColorByType')
        ->toArray();

    $categoryLabels = $types
        ->flatMap(function ($type) {
            return $type->posts->pluck('category_id')->toArray();
        })
        ->unique()
        ->values()
        ->map(function ($categoryId) {
            $category = Category::find($categoryId);
            return $category ? $category->name : null;
        })
        ->toArray();

    $categoryCounts = $types
        ->flatMap(function ($type) {
            return $type->posts->pluck('category_id')->toArray();
        })
        ->countBy()
        ->map(function ($count, $categoryId) {
            $category = Category::find($categoryId);
            return $category ? $count : null;
        })
        ->values() // Re-index the array
        ->toArray();

    $categoryColors = $types
        ->flatMap(function ($type) {
            return $type->posts->pluck('category_id')->toArray();
        })
        ->unique()
        ->values() // Add this line to re-index the array and ensure all values are included
        ->map('getColorByType')
        ->toArray();
@endphp

@section('container')
    <style>
        .chart-container {
            max-width: 300px;
            margin: 0 auto;
            display: block;
        }
    </style>

    <h1 class="mb-5 text-center">Proses Laporan</h1>

    <div class="container">
        <div class="row">
            @foreach ($types as $type)
                <div class="col-xl-3 col-md-6 mb-4">
                    <a href="/posts?type={{ $type->slug }}">
                        <div class="card border-left-primary shadow h-100 py-5 text-black">
                            <table class="card-body" alt="{{ $type->name }}"></table>
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-body text-center flex-fill p-4 fs-3">{{ $type->name }}</h5>
                                <h6 class="card-body text-center flex-fill p-4 fs-4"
                                    style="color: {{ getColorByType($type->id) }}">
                                    {{ $type->posts->count() }}
                                </h6>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-body">
                    <div class="chart-container">
                        <canvas id="typeChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card h-300">
                <div class="card-body">
                    <div class="">
                        <canvas id="categoryChart" height="375"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        {{-- <div class="col-md-6">
            <div class="card h-300">
                <div class="card-body">
                    <div class="chart-container">
                        <canvas id="categoryChart" width="100%" height="100%"></canvas>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>


    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0"></script>

    <script>
        const typeCtx = document.getElementById('typeChart').getContext('2d');
        console.log("Type Labels:", {!! json_encode($typeLabels) !!});
        console.log("Type Counts:", {!! json_encode($typeCounts) !!});

        new Chart(typeCtx, {
            type: 'pie',
            data: {
                labels: {!! json_encode($typeLabels) !!},
                datasets: [{
                    data: {!! json_encode($typeCounts) !!},
                    backgroundColor: {!! json_encode($typeColors) !!},
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
            }
        });
    </script>
    <script>
        const categoryCtx = document.getElementById('categoryChart').getContext('2d');
        console.log("Category Labels:", {!! json_encode($categoryLabels) !!});
        console.log("Category Count:", {!! json_encode($categoryCounts) !!});

        // Create an array of objects with labels and counts for sorting
        const data = {!! json_encode($categoryLabels) !!}.map((label, index) => ({
            label,
            count: {!! json_encode($categoryCounts) !!}[index]
        }));

        // Sort the data in descending order based on count
        data.sort((a, b) => b.count - a.count);

        // Extract sorted labels and counts
        const sortedLabels = data.map(item => item.label);
        const sortedCounts = data.map(item => item.count);

        new Chart(categoryCtx, {
            type: 'bar',
            data: {
                labels: sortedLabels,
                datasets: [{
                    label: 'Jumlah Laporan',
                    data: sortedCounts,
                    backgroundColor: {!! json_encode($categoryColors) !!},
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                indexAxis: 'y', // Represent labels on the y-axis
                aspectRatio: 2, // Adjust the aspect ratio to control the height of the bars
                scales: {
                    x: {
                        beginAtZero: true // Adjust as needed
                    },
                    y: {
                        beginAtZero: true // Adjust as needed
                    }
                },
                plugins: {
                    legend: {
                        display: false // Hide the legend
                    }
                }
            }
        });
    </script>
@endsection

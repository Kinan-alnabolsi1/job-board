<div>
    <h1>Jobs</h1>
    <h3>{{ $name }}</h3>
    @foreach($jobs as $job)
        <div>
            <h2>{{ $job['title'] }}</h2>
            <p>{{ $job['description'] }}</p>
            <p>Salary: ${{ number_format($job['salary']) }}</p>
        </div>
    @endforeach
</div>

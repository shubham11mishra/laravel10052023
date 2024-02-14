<div class="container">
    @foreach ($resumes as $resume)
    <div class="card mb-3">
        <div class="row g-0">
            @if($resume->document)
            <div class="col-md-4">
                <img src="{{ asset('storage/images/'.$resume->document->image) }}" alt="Image" class="img-fluid" width="100" height="100">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $resume->name }}</h5>
                    <p class="card-text"><small class="text-muted">{{ $resume->email }}</small></p>
                    <p class="card-text">{{ $resume->address }}</p>
                    <p class="card-text">{{ $resume->mobile_number }}</p>
                    <a href="{{ route('resume.download', $resume) }}" class="btn btn-primary">Download Document</a>
                    <br>
                    <a href="{{route('resume.edit', $resume) }}" >Edit </a>
                    <br>

                    <form  method="POST" action="{{ route('resume.destroy', $resume) }}">
                         @csrf
                         @method('delete')
                        <button type="submit">Delete </button>
                    </form>
                   
                </div>
            </div>
            @else
            <div class="col-md-12">
                <div class="card-body">
                    <h5 class="card-title">{{ $resume->name }}</h5>
                    <p class="card-text"><small class="text-muted">{{ $resume->email }}</small></p>
                    <p class="card-text">{{ $resume->address }}</p>
                    <p class="card-text">{{ $resume->mobile_number }}</p>
                </div>
            </div>
            @endif
        </div>
    </div>
    @endforeach
</div>
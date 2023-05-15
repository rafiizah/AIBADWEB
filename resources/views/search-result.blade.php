<!-- search-result.blade.php -->
<div id="search_list">
    @foreach($data as $row)
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{$row->author}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$row->source}}</h6>
            <p class="card-text">{{$row->quotes}}</p>
            <button onclick="copyTextc('{{$row->quotes}}')">Salin</button>
        </div>
    </div>
    @endforeach
</div>
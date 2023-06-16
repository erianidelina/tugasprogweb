<div>
    @foreach ($art as $a)
    <div class="card border-dark">
        <h5 class="card-header bg-secondary text-light justify-content-center d-flex">
            <strong>Artikel Terbaru</strong></h5>
        <div class="card-body">
          <h5 class="card-title">{{$a->judul}}</h5>
          <p class="card-text">{{$a->deskripsi}}</p>
        </div>
      </div>
    @endforeach
    
</div>

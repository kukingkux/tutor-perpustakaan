<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Pinjam Buku</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body d-flex">
            <div class="side-content">
                <div class="">
                    <div class="card-body img-modal"><img src="{{asset('storage/' . $book->cover)}}" alt="vue.js" class="card-img-top"></div>
                    <div class="px-4">
                        <p class="font-weight-bold">Judul: {{$book->title}}</p>
                        <p class="font-weight-bold">Penulis: {{$book->author}}</p>
                    </div>
                </div>
            </div>
            <div class="content flex-fill">
                <form action="{{ route('buku.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 px-2">
                        <label class="form-label">Tanggal Peminjaman</label>
                        <input type="date" class="form-control" name="tanggal" required>
                    </div>
                    <div class="mb-3 px-2">
                        <label class="form-label">Tanggal Pengembalian</label>
                        <input type="date" class="form-control" name="tanggal" required>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-primary">Pinjam</button>
        </div>
      </div>
    </div>
</div>

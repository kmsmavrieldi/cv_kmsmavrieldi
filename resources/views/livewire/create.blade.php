  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="create" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Tambah Produk</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          @if(session()->has('message'))
            <div class="alert alert-success">{{session('message')}} </div>
            @endif
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Nama Produk:</label>
                <input wire:model='name' type="text" class="form-control @error('name') is-invalid @enderror "  placeholder="Masukkan Nama Produk" >
                @error('name')<p class="invalid-feedback"> {{$message}} </p>@enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="qty" class="form-label">Jumlah Produk:</label>
                <input wire:model='qty' type="text" class="form-control @error('qty') is-invalid @enderror"  placeholder="Masukkan Jumlah Produk" >
                @error('qty')<p class="invalid-feedback"> {{$message}} </p>@enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="price" class="form-label">Harga Produk:</label>
                <input wire:model='price' type="text" class="form-control @error('price') is-invalid @enderror"  placeholder="Masukkan Harga Produk" >
                @error('price')<p class="invalid-feedback"> {{$message}} </p>@enderror
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button wire:click.prevent='store' class="btn btn-success" >Tambah</button>
        </div>
      </div>
    </div>
  </div>
  {{-- Modal --}}

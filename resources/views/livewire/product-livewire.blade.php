<div class="container container-fluid my-5" >
  @include('livewire.create')
  @include('livewire.edit')
  <h3 class="text-center">AJAX/ Livewire CRUD</h3>
    <div class="row justify-content-end">
  <!-- Button trigger modal -->
  <button wire:click='create' type="button" class="btn btn-primary col-md-2" data-bs-toggle="modal" data-bs-target="#create">
    <i class="bi bi-plus-circle"></i> Tambah Produk
  </button>        
           
    </div>
    <table class="table">
        <thead>
            <th>No</th> 
            <th>Nama Produk</th>
            <th>Jumlah Produk</th>
            <th>Harga Produk (Rp)</th>
            <th>Total Harga Produk</th>
            <th colspan="2" class="text-center">Pilihan</th>
        </thead>
        <tbody  wire:poll1ms >
           @foreach ($products as $product)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$product->name}}</td>
                <td> {{$product->qty}} </td>
                <td> {{number_format($product->price)}} </td>
                <td>{{number_format($product->qty * $product->price)}}</td>
                <td>
                  <button wire:click='edit({{$product->id}})' type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit">
                    <i class="bi bi-pencil-square"></i> Edit
                  </button>        
                </td>
                <td>
                  <button type="button" class="btn btn-danger" wire:click='delete({{$product->id}})'>
                    <i class="bi bi-trash-fill"></i> Delete
                  </button>        
                </td>
              </tr>
            @endforeach 
            
        </tbody>
        
    </table>
    

</div>

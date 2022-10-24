<div>
    {{-- Success is as dangerous as failure. --}}

    <div class="row">
        @include('livewire.product_create')
        @include('livewire.product_update')
        @if (session()->has('message'))
            <div class="alert alert-success" style="margin-top:30px;">x
                {{ session('message') }}
            </div>
        @endif

        

        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Product Nname</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- {{$sellerId}} --}}
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->qty }}</td>
                        <td>
                            <button data-toggle="modal" data-target="#updateModal" wire:click="edit({{ $product->id }})"
                                class="btn btn-primary  ">Edit</button>
                            <button wire:click="delete({{ $product->id }})"
                                class="btn btn-danger  ">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div>
    <div class="row">

   
    {{-- Success is as dangerous as failure. --}}
    @include('livewire.seller_create')
    @include('livewire.seller_update')
    @if (session()->has('message'))
        <div class="alert alert-success" style="margin-top:30px;">x
          {{ session('message') }}
        </div>
    @endif

    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sellers as $seller)
            <tr>
                <td>{{ $seller->id }}</td>
                <td>{{ $seller->name }}</td>
                <td>{{ $seller->mail }}</td>
                <td>
                <button data-toggle="modal" data-target="#updateModal" wire:click="edit({{ $seller->id }})" class="btn btn-primary  ">Edit</button>
                <a href="{{ url('seller') }}/{{ $seller->id }}"
                    data-toggle="tooltip" data-placement="top" title="View"
                    class="btn btn-info"> View
                </a>
                <button wire:click="delete({{ $seller->id }})" class="btn btn-danger  ">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>

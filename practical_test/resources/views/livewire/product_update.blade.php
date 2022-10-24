<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="hidden" wire:model="user_id">
                        <label for="exampleFormControlInput1">Product Name</label>
                        <input type="text" class="form-control" wire:model="product_name" id="exampleFormControlInput1" placeholder="Enter Name">
                        @error('product_name') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Product Price</label>
                        <input type="text" class="form-control" wire:model="price" id="exampleFormControlInput2" placeholder="Enter price">
                        @error('price') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Product Quantity</label>
                        <input type="text" class="form-control" wire:model="qty" id="exampleFormControlInput2" placeholder="Enter Quantity">
                        @error('text') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">description</label>
                        <textarea class="form-control" wire:model="description" id="exampleFormControlInput2" ></textarea>
                        @error('text') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Save changes</button>
            </div>
       </div>
    </div>
</div>
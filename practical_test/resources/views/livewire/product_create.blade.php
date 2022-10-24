<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	Add Product
</button>

<!-- Modal -->
<div wire:ignore class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Product Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Product Name" wire:model="product_name">
                        @error('product_name') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Product Price</label>
                        <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="price" placeholder="Enter Product Price">
                        @error('price') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput2">Quantity</label>
                        <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Enter Quantity" wire:model="qty">
                        @error('qty') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group row">
                        <label for="productDes" class="col-sm-2 col-form-label text-lg-right">Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" wire:model="description"  required></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Add New Product</button>
            </div>
        </div>
    </div>
</div>
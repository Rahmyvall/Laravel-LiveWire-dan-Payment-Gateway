<div class="container my-4">
    <div class="row justify-content-center mb-4">
        <div class="col-md-6">
            <input wire:model="search" type="text" class="form-control" placeholder="Search Product">
        </div>
    </div>

    <div class="row g-4">
        @forelse ($products as $product)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card h-100 shadow-sm">
                    <img src="{{ $product->image ? asset('/storage/' . $product->image) : 'https://via.placeholder.com/300x200' }}"
                        class="card-img-top" alt="{{ $product->title }}">

                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title mb-2">{{ $product->title }}</h5>
                        <h6 class="text-primary mb-2">Rp{{ number_format($product->price, 2, ',', '.') }}</h6>
                        <p class="card-text text-muted flex-grow-1" style="font-size: 0.9rem;">
                            {{ Str::limit($product->description, 60) }}
                        </p>
                        <button wire:click="addToCart({{ $product->id }})" type="button"
                            class="btn btn-outline-secondary w-100 mt-auto">
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <p class="text-muted">No products found.</p>
            </div>
        @endforelse
    </div>

    <div class="mt-4">
        {{ $products->links() }}
    </div>
</div>

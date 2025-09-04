<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white">
                    <h5 class="mb-0">Your Cart</h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>Name</th>
                                <th class="text-end">Price</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($cart['products'] as $product)
                                <tr>
                                    <td>{{ $product->title }}</td>
                                    <td class="text-end">Rp{{ number_format($product->price, 2, ',', '.') }}</td>
                                    <td class="text-center">
                                        <button wire:click="removeFromCart({{ $product->id }})"
                                            class="btn btn-sm btn-danger">
                                            Remove
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center text-muted">Your cart is empty.</td>
                                </tr>
                            @endforelse
                        </tbody>
                        @if (!empty($cart['products']))
                            <tfoot>
                                <tr>
                                    <td colspan="3" class="text-end">
                                        <a href="{{ route('shop.checkout') }}" class="btn btn-primary">
                                            Checkout
                                        </a>
                                    </td>
                                </tr>
                            </tfoot>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

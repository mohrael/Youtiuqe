
{{-- @extends('parts.navbar') --}}

{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}

@if (session('success'))
    <div style="color: green; padding: 10px; background-color: #d4edda; border: 1px solid #c3e6cb; margin-bottom: 10px;">
        {{ session('success') }}
    </div>
@endif


<div class="container">
    <h2>Create New Product</h2>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="name">Product Name:</label>
            <input type="text" name="name" required>
        </div>

        <div>
            <label for="description">Description:</label>
            <textarea name="description" required></textarea>
        </div>

        <div>
            <label for="price">Price:</label>
            <input type="number" name="price" step="0.01" required>
        </div>

        <div>
            <label for="category_id">Category:</label>
            <select name="category_id" required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="image">Product Image:</label>
            <input type="file" name="image" accept="image/*">
        </div>

        <button type="submit">Create Product</button>
    </form>
    <pre>{{ print_r(session()->all(), true) }}</pre>

</div>
{{-- @endsection --}}

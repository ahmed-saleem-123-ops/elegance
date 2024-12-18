@extends('backend.backend_layout.master')
@section('content')
    <div class="container mx-auto mt-5">
        <h2 class="text-2xl font-bold text-center mb-5">{{ isset($show) ? 'Edit Product' : 'Add Product' }}</h2>
        <form action="{{ isset($show) ? '/admin/product/update/' . $show->id : '/admin/product/store' }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($show))
                @method('PUT')
            @endif
            <table id="table" class="min-w-full border border-gray-200">
                <tbody>
                <tr class="border-b">
                    <td class="p-4">
                        <label class="block text-lg font-semibold mb-1">Title</label>
                        <input type="text" name="title[0][title]" placeholder="Enter your Title" class="border border-gray-300 rounded p-2 w-full" value="{{ old('title[0][title]', isset($show) ? $show->title : '') }}" />
                        @error('title.0.title')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </td>

                    <td class="p-4">
                        <label class="block text-lg font-semibold mb-1">Price</label>
                        <input type="text" name="price[0][price]" placeholder="Enter your Price" class="border border-gray-300 rounded p-2 w-full" value="{{ old('price[0][price]', isset($show) ? $show->price : '') }}" />
                        @error('price.0.price')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </td>

                    <td class="p-4">
                        <label class="block text-lg font-semibold mb-1">Image</label>
                        <input type="file" class="border border-gray-300 rounded p-2 w-full" name="img[0][img]" placeholder="Enter your Img">
                        @if(isset($show) && $show->img)
                            <img src="{{ asset('storage/' . $show->img) }}" alt="Product Image" class="w-24 h-24 mt-2">
                        @endif
                        @error('img.0.img')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </td>

                    <td class="p-4">
                        <div>
                            <label class="block text-lg font-semibold mb-1">Tag</label>
                            <select class="border border-gray-300 rounded p-2 w-full" name="tag_id[0][tag_id]">
                                @foreach($tags as $tag)
                                    <option value="{{ $tag->id }}" {{ isset($show) && $show->tag_id == $tag->id ? 'selected' : '' }}>
                                        {{ $tag->title }}
                                    </option>
                                @endforeach
                            </select>
                            @error('tag_id.0.tag_id')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </td>

                    <td class="p-4">
                        <div>
                            <label class="block text-lg font-semibold mb-1">Brand</label>
                            <select class="border border-gray-300 rounded p-2 w-full" name="brand_id[0][brand_id]">
                                @foreach($brands as $brand)
                                    <option value="{{ $brand->id }}" {{ isset($show) && $show->brand_id == $brand->id ? 'selected' : '' }}>
                                        {{ $brand->title }}
                                    </option>
                                @endforeach
                            </select>
                            @error('brand_id.0.brand_id')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </td>

                    <td class="p-4">
                        <div>
                            <label class="block text-lg font-semibold mb-1">Category</label>
                            <select class="border border-gray-300 rounded p-2 w-full" name="category_id[0][category_id]">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ isset($show) && $show->category_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->title }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category_id.0.category_id')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </td>

                    <td class="p-4">
                        <button type="button" id="add" class="bg-green-500 text-white rounded px-4 py-2">Add Row</button>
                    </td>
                </tr>
                </tbody>
            </table>

            <button type="submit" class="bg-blue-500 text-white rounded px-4 py-2 mt-5">{{ isset($show) ? 'Update Product' : 'Submit Product' }}</button>
        </form>
    </div>
@endsection

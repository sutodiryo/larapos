@props(['placeholder' => 'Select Options', 'id'])

<div>
    <link rel="stylesheet" href="{{ asset('assets/vendor/select2/dist/css/select2.min.css') }}">

    {{-- <select wire:model="category_id" id="category_id" :error="'category_id'"
        class="form-control @error('category_id') is-invalid @enderror" data-toggle="select">
        @foreach ($this->product_categories as $pc)
            <option>{{ $pc->id }}</option>
        @endforeach
    </select> --}}

    <select {{ $attributes }} data-placeholder="{{ $placeholder }}" id="{{ $id }}" class="form-select w-100 select2">
        <option></option>
        {{ $slot }}
    </select>

    <script src="{{ asset('assets/vendor/select2/dist/js/select2.min.js') }} "></script>
</div>

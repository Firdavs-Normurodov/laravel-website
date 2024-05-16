<div>
    {{ $slot }}
    <select {{ $attributes }}>
        @foreach ($regions as $region)
            <option>{{ $region }}</option>
        @endforeach
    </select>
</div>

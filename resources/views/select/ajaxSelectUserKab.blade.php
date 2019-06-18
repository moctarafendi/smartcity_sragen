<option>Pilih Kabupaten</option>
@if(!empty($kabupaten))
  @foreach($kabupaten as $key => $value)
    <option value="{{ $key }}">{{ $value }}</option>
  @endforeach
@endif
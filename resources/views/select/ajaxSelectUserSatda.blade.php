<option>Pilih SATDA</option>
@if(!empty($satda))
  @foreach($satda as $key => $value)
    <option value="{{ $key }}">{{ $value }}</option>
  @endforeach
@endif
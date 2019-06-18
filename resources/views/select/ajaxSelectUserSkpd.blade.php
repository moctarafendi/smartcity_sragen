<option>Pilih SKPD</option>
@if(!empty($skpd))
  @foreach($skpd as $key => $value)
    <option value="{{ $key }}">{{ $value }}</option>
  @endforeach
@endif
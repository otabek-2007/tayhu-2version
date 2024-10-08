@props(['key'])

@php
$translation = App\Models\Lang::where('key', $key)->first();
$locale = app()->getLocale();
@endphp

{{ $translation ? $translation->{'name_' . $locale} : 'Translation not found' }}
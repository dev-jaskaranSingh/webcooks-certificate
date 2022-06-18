@extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '403')

@if($exception)
@section('message', $exception->getMessage())
@else
@section('message', __('Not Found'))
<div>
    <p>Kindly call us at +91 91151 44444 </p>
    <div>
        <h4>OR</h4>
    </div>
    <p>
        Email us at info@webcooks.in in case you feel your certificate is valid.
    </p> 
    
</div>
@endif
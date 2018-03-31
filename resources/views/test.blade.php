@extends('layouts.app')
@section('content')
    <br><br><br><br><br><br><br><br>
<form action="/UploadImage" method="POST">
    {{csrf_field()}}
    <input type="file" name="image" id = "image" style="width: 800px; height: 30px"></input>
    <input type="submit" value="submit">
</form>
    @endsection
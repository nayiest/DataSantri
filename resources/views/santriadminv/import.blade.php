@extends('layouts.app')

@section('content')
    <h1>Import Activities</h1>
    <form action="{{ route('activities.import') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label>File:</label>
            <input type="file" name="file" required>
        </div>
        <button type="submit">Import</button>
    </form>
@endsection
@extends('user.dashboard.layouts.app')
@section('content')
@if (Session::has('success'))
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p>{{ Session::get('success') }}</p>
                        </div>
                    @endif
<p>thanks you</p>

@endsection

@section('clearsorage')
<script>
window.localStorage.clear();
</script>
@endsection
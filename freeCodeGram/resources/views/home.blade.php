@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
        <img src="https://s3.amazonaws.com/freecodecamp/curriculum-diagram-full.jpg" alt="fcc-logo" class="rounded-circle" style="height: 150px">
        </div>
        <div class="col-9">
            <div>
                <h1>freecodecamp</h1>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> Posts</div>
                <div class="pr-5"><strong>23k</strong> Followers</div>
                <div class="pr-5"><strong>212</strong> Following</div>
            </div>
            <div class="pt-4 font-weight-bold">FreeCodeCamp.org</div>
            <p>We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.</p>
            <p><a href="#">www.freecodecamp.org</a></p>
        </div>
        <div class="col-4">
            <img src="https://www.instagram.com/p/CHiyT36HBQC/" alt="">
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <nav aria-label="breadcrumb" style="float: left;">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">home</a></li>
              <li class="breadcrumb-item active" aria-current="page">dashboard</li>
            </ol>
        </nav>
    </div>
    <div class="row justify-content-center">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="col-md-12">
            <div class="card" style="">
                <div class="card-header p-3">
                    <h2 style="float:left;">dashboard</h2>
                    <div style="float:right;" class="btn-group">
                        <a href="#" class="btn bg-dark-1 active" aria-current="page">Active link</a>
                        <a href="#" class="btn bg-dark-2">Link</a>
                        <a href="#" class="btn bg-dark-2">Link</a>
                      </div>
                </div>
                <div class="card-body">
                  <p class="card-text">
                      <div class="row">
                          <div class="col-sm-3 " style="color: #FCF2E0;">
                              <x-heroicon-s-cube style="height:12vw; color: #FCF2E0;"/>
                              <p>
                                {{ $sys }} 
                                {{ $upt }}
                              </p>
                          </div>
                          <div class="col">
                            <div class="row box-container ">
                                <div class="col-sm-3 m-2 p-0 box">
                                    <x-heroicon-s-cpu-chip class="box-icon" />
                                    <span>
                                        processes
                                    </span>
                                    <div class="progress" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 8px">
                                        <div class="progress-bar" style="width: 25%"></div>
                                    </div>
                                </div>
                                <div class="col-sm-3 m-2 p-0 box">
                                    <x-heroicon-s-server-stack class="box-icon" />
                                    <span>
                                        system health
                                    </span>
                                    <div class="progress" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 8px">
                                        <div class="progress-bar" style="width:55%; background-color:greenyellow;"></div>
                                    </div>
                                </div>
                                <div class="col-sm-3 m-2 p-0 box">
                                    <x-heroicon-s-users class="box-icon" />
                                    <span>
                                        site views
                                    </span>
                                    <h4>362734</h4>
                                </div>
                                <div class="col-sm-3 m-2 p-0 box">
                                    <x-heroicon-s-list-bullet class="box-icon" />
                                    <span>
                                        system logs
                                    </span>
                                    <h4>255</h4>
                                </div>
                                <div class="col-sm-3 m-2 p-0 box">
                                    <x-heroicon-s-envelope class="box-icon" />
                                    <span>
                                        new mail
                                    </span>
                                    <h4>12</h4>
                                </div>
                                <div class="col-sm-3 m-2 p-0 box">
                                    <x-heroicon-s-circle-stack class="box-icon" />
                                    <span>
                                        database
                                    </span>
                                    <h4>256kb</h4>
                                </div>
                              </div>
                      </div>
                  </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mt-4 p-0">
            <div class="card">
                <div class="card-header p-3">
                    <h3 style="float:left;">open tickets</h3>
                </div>
              <div class="card-body d-flex justify-content-between">
                
                @foreach ([1,2,3,4,5] as $key => $item)
                    <div class="card m-2" style="width:18rem;">
                        <div class="card-header">
                            <h5 style="float: left;">ticket</h5>
                            <h5 style="float: right;">#{{$item}}</h5>
                        </div>
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-muted ">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <button type="button" class="btn btn-secondary">wait</button>
                                <button type="button" class="btn btn-info">open</button>
                              </div>
                        </div>
                    </div>
                @endforeach
                

              </div>
            </div>
        </div>
    </div>
</div>
@endsection

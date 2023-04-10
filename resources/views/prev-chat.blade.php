@extends('layouts.base')

@section('content')

 <div class="container-fluid">
<img src="{{asset('images/logo.jpg')}}" alt="logo" class="ab1" width="150">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4 pt-4 mt-4">
                        <h1 class="h3 mb-0 text-gray-800 text-center">View Chat</h1>
                        

                    </div>

                    <div class="container-fluid" style="background:#fff;">
                        <div class="row">
                            <div class="col-md-2"></div>
                          <div class="col-md-8">
                                @foreach($data as $chat)
                                <div class="ab57" style="text-align:left;">{{$chat->title}} </div>
                                <div class="ab58">{{$chat->result}}</div>
                                <div class="ab59">{{$chat->created_at}}</div>

                                @endforeach
                                </div>
                            <div class="col-md-2"></div>
                        </div>
                        {{$data->links() }}
                         
                    </div>

                    <!-- Content Row -->


                    <!-- Content Row -->



                    <!-- Content Row -->


                </div>
                <!-- /.container-fluid -->

@endsection
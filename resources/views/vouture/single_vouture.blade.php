<<<<<<< HEAD

@extends('master')

@section('header')
      <header>
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <center><h2>
                Single voutre
              </h2></center>
            </div>
          </div>
        </div>
      </header>
@stop

@php

$single_voutures = [
    ['id'=>3, 'particulars'=> 'hello world', 'ammount'=>200],
    ['id'=>4, 'particulars'=> 'hello world3', 'ammount'=>300],
    ]

@endphp


@section('body')

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <center>
                            <div class="info">
                            <h6>date: 3/3/23</h6>
                            <h6>Number of Vouture <span>2</span>  Total Amount on This Date <span>33 taka</span></h6>
                        </div>
                        </center>

                    </div>
                </div>
            </div>
        </section>


          <section>
        <div class="container">
          <div class="row">
            <div class="col-md-10">
                <div><p>details of all  voutures on this date</p></div>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">voture id</th>
                        <th scope="col">particulars</th>
                        <th scope="col">Amount</th>
                        <th scope="col">control</th>
=======
@extends('master')


@section('header')
    <h2>hello world</h2>
@stop


@section('body')
     <section>
        <div class="container">
          <div class="row">
            <div class="col-md-10">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">sl</th>
                        <th scope="col">Vouture No</th>
                        <th scope="col">Particulars</th>
                        <th scope="col">Amount</th>
>>>>>>> d6768463c9e5030066ca0c6fb8dd46575289c784
                        </tr>
                    </thead>
                    <tbody>

<<<<<<< HEAD
<<<<<<< HEAD
                    @foreach ($single_voutures as $v )
                        <tr>


                            <td>{{'0'.$v['id']}}</td>
                            <td>
                              {{$v['particulars']}}
                             </td>
                             <td>
                              {{$v['ammount']}}
=======
                @foreach ($voutures as $v )
=======
                @foreach ($single as $v )
>>>>>>> 22db4aad91cbe16fe90d4e28297fc4d22516813c
                        <tr>
                            <td>
                                
                               <a href="{{route('single_vouture.show', $v->reference_id  )}} ">  {{$v->reference_id}}</a> 
                               
                            
                            
                            </td>

                            <td>
                             
                            </td>
                            {{-- <td>{{$v->vou_date}}</td> --}}
                            <td>
                              {{-- {{$v->amount()}} taka --}}
                             </td>
                             <td>

                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#delete{{$v->reference_id}}" >
                               delete
                              </button>
                              <!-- Modal -->
                              <div class="modal fade" id="delete{{$v->reference_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                          <div class="modal-body">

                                          </div>
                                          <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <form action="{{route('single_vouture.destroy', $v->reference_id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                               <input type="submit" class="btn btn-primary" value="delete">
                                              {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                          </form>
                                      </div>
                                  </div>
                                </div>
                              </div>
>>>>>>> d6768463c9e5030066ca0c6fb8dd46575289c784
                             </td>

                        </tr>

<<<<<<< HEAD

                        @endforeach


                            </tbody>
                        </table>

=======
                @endforeach




                    </tbody>
                </table>
>>>>>>> d6768463c9e5030066ca0c6fb8dd46575289c784

                
            </div>
        </div>
      </section>

<<<<<<< HEAD
<<<<<<< HEAD
      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              {{-- create modal to add new vouture --}}

              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >
                Launch demo modal
              </button>
               <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                             <form action="{{route('vou.store')}}" method="post">
                                @csrf
                                <input type="number" name="id">
                                <input id="datepicker" width="276" name="vou_date"/>
                                <input type="submit" value="Create Voutue">
                            </form>
                          </div>
                          <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                  </div>
                </div>
              </div>
              @error('id')
                 <div class="alert alert-danger">{{ $message }}</div>
              @enderror

              @error('vou_date')
                 <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
        </div>
      </section>

         <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>

@endsection



=======
@stop
>>>>>>> d6768463c9e5030066ca0c6fb8dd46575289c784
=======
      <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addVou" >
                    create Vouture
                </button>
                              <!-- Modal -->
                       <div class="modal fade" id="addVou" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('single_vouture.store')}}" method="post">
                                            @csrf
                                            <label for="name">Some description</label>
                                            <input type="text" name="name" id="name">
                                            <input type="number" name="voutuer_id" id="name" value="{{ $id }}" style="display:none">
                                            <br>
                                            <center><input type="submit" value="Create Vouture"></center>
                                            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                            
                                    </div>
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </section>

@stop
>>>>>>> 22db4aad91cbe16fe90d4e28297fc4d22516813c

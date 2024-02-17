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
                        <th scope="col">Controls</th>
                        </tr>
                    </thead>
                    <tbody>

                @foreach ($single as $v )
                        <tr>
                            <td>
                               <a href="{{route('single_vouture.show', $v->reference_id  )}} ">  {{$v->reference_id}}</a>
                            </td>

                            <td>
                                {{$v->vouture_no}}
                            </td>

                            <td> {{$v->name}} </td>

                            <td> {{$v->amount()}} taka </td>

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
                             </td>
                        </tr>

                @endforeach




                    </tbody>
                </table>


            </div>
        </div>
      </section>

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
                                            <input type="number" name="vouture_no" id="vouture_no" value="{{ $id }}" >
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
                         @error('vouture_no')
                            <div class="alert alert-danger">{{$message}}</div>
                          @enderror
                    </div>
                </div>
            </div>
      </section>

      <section>
        testing 
      </section>

    <section>
        <x-model name="saiful">
            Hello world
        </x-model>
    </section>
@stop

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
                        </tr>
                    </thead>
                    <tbody>

                @foreach ($voutures as $v )
                        <tr>
                            <td>{{$v->id}}</td>

                            <td>
                              <a href="{{route('vou.show', $v->id)}}">{{$v->vouture_no()}}</a>
                            </td>
                            <td>{{$v->vou_date}}</td>
                            <td>
                              {{$v->amount()}} taka
                             </td>
                             <td>

                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#delete{{$v->id}}" >
                               delete
                              </button>
                              <!-- Modal -->
                              <div class="modal fade" id="delete{{$v->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                      <form action="{{route('vou.destroy', $v->id)}}" method="post">
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

@stop
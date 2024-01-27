<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>      
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
        <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="{{asset('style.css')}}">
    </head>
    <body>



      <header>
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h2>
                Total Expenses
              </h2>
            </div>
          </div>
        </div>
      </header>

      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-10">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">sl</th>
                        <th scope="col">Vouture No</th>
                        <th scope="col">Date</th>
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
                                <input id="" width="276" name="vou_date"/>
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

      <div>
    </div>



    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
        
    </body>
</html>

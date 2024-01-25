<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
                            @foreach ($v->showcustomtxt() as $x)
                                <td>
                                    {{$x}}
                                </td>
                            @endforeach
                            <td>20/11/23</td>
                            <td>500 tk</td>
                        </tr>

                @endforeach

                    </tbody>
                </table>

            </div>
        </div>
      </section>



      <div>
    </div>



        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>

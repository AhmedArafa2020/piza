@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Menues</div>

                    <div class="card-body">
                       <ul class="list-group">
                           <a href="" class="list-group-item list-group-item-action">View</a>
                           <a href="" class="list-group-item list-group-item-action">ADD</a>


                       </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">Pizza's</div>
                    @if(count($errors)>0)
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">{{$error}}</div>
                        @endforeach
                        @endif
                    <form action="{{route('pizza.store')}}" method="post">@csrf

                    <div class="card-body">
                      <div class="form-group">
                          <label for="name">Pizza's Name</label>
                          <input type="text" class="form-control" name="name">
                      </div>
                        <div class="form-group">
                            <label for="description">Pizza's Description</label>
                            <textarea class="form-control" name="description"></textarea>
                        </div>
                        <div class="form-inline">
                            <label>Pizza's Price($)</label>
                            <input type="number" name="small_pizza_price" class="form-control" placeholder="Small Pizzas Price">
                            <input type="number" name="medium_pizza_price"  class="form-control" placeholder="Medium Pizzas Price">
                            <input type="number" name="large_pizza_price" class="form-control" placeholder="Large Pizzas Price">
                        </div>
                        <div class="form-group">
                            <label  for="category">Pizza's Category</label>
                            <select name="category" class="form-control">
                                <option value=""></option>
                                <option value="vegetarian">Vegetarian</option>
                                <option value="nonvegetarian">Non Vegetarian</option>
                                <option value="traditional">Traditional Pizza</option></select>

                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div class="form-group text-center">

                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

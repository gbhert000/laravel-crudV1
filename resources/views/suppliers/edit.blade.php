@extends('suppliers.layout')
     
@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<div class="row">
    <div class="col-lg-12 mt-5">
        <div class="pull-left">
            <h2>Edit Supplier Information</h2>
        </div>
        
    </div>
</div>
     
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container">


<form action="{{ route('suppliers.update',$supplier->id) }}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('PUT')
                <div class="form-row">
                    <div class="col-sm-2 mb-1 ">
                        <small>Firstname</small>
                        <input type="text" name="fname" class="form-control" id="fname" value="{{$supplier->fname}}">
                    </div>
                    
                    <div class="col-sm-2 mb-1 ">
                        <small>Middlename</small>
                        <input type="text" name="mname" class="form-control" id="mname" value="{{$supplier->mname}}">
                    </div>
                    <div class="col-sm-2 mb-1 ">
                        <small>Lastname</small>
                        <input type="text" class="form-control" name="lname" id="lname" value="{{$supplier->lname}}">
                    </div>

                    
                    <div class="col-sm-6 mb-1 ">
                        <small>Email</small>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email address" value="{{$supplier->email}}">
                    </div>
                    
                  
                   
                </div>
                <div class="form-row">
                        <div class="col-md-6 mb-1">
                            <small for="">Company</small>
                            <input type="text" name="company_name" class="form-control" id="company_name" value="{{$supplier->company_name}}">
                        </div>
                        
                        <div class="col-md-2 mb-1">
                            <small for="">Phone</small>
                            <input type="text" name="phone_no" class="form-control" id="phone_no" value="{{$supplier->phone_no}}">
                        </div>
                        <div class="col-md-2 mb-1">
                            <small for="">Mobile</small>
                            <input type="text" class="form-control" name="mobile_no" id="mobile_no" value="{{$supplier->mobile_no}}">
                        </div>
                        <div class="col-md-2 mb-1">
                            <small for="">Fax</small>
                            <input type="text" class="form-control" name="fax_no" id="fax_no" value="{{$supplier->fax_no}}">
                        </div>
                        <div class="col-md-6 mb-1">
                            <small for="">Display name as</small>
                            <input type="text" class="form-control" value="">
                        </div>
                        <div class="col-md-2 mb-1">
                            <small for="">Other</small>
                            <input type="text" class="form-control" name="other" id="other" value="{{$supplier->other}}">
                        </div>
                        <div class="col-md-4 mb-1">
                            <small for="">Website</small>
                            <input type="text" class="form-control" name="website" id="website" value="{{$supplier->website}}">
                        </div>
                        <div class="w-100 d-none d-md-block"></div>
                        <div class="col-md-6 mb-1">
                            <small for="">Address</small>
                                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Street" name="street" id="street" rows="2">{{$supplier->street}}</textarea>
                        </div>
                        <div class="col-md-2 mb-1">
                            <small for="">Billing rate(/hr)</small>
                            <input type="number" class="form-control" id="billing_rate" name="billing_rate" value="{{$supplier->billing_rate}}">
                            <small for="">Terms</small>
                        </div>
                      
                        <div class="w-100 d-none d-md-block"></div>
                        <div class="col-md-3 mb-1">
                            <input type="text" class="form-control" id="city_town" name="city_town" value="{{$supplier->city_town}}" placeholder="City/Town" >
                        </div>
                        <div class="col-md-3 mb-1">
                            <input type="text" class="form-control" id="state_province" name="state_province" value="{{$supplier->state_province}}" placeholder="State/Province" >
                        </div>
                        <div class="col-md-4 mb-1">
                            <input type="text" class="form-control" id="terms" name="terms" value="{{$supplier->terms}}">
                        </div>
                        
                        
                        <div class="w-100 d-none d-md-block"></div>
                        <div class="col-md-3 mb-1">
                            <input type="text" class="form-control" id="postal_code" name="postal_code" value="{{$supplier->postal_code}}"  placeholder="Postal Code">
                        </div>
                        <div class="col-md-3 mb-1">
                            <input type="text" class="form-control" id="country" name="country" value="{{$supplier->country}}" placeholder="Country">
                        </div>
                        
                        <div class="col-md-2 mb-1">
                        <small>Opening balance</small>
                            <input type="text" class="form-control" id="opening_balance" value="{{$supplier->opening_balance}}" name="opening_balance" >
                        </div>
                        <div class="col-md-2 mb-1">
                        <small>As of</small>
                            <input type="text" class="form-control" id="as_of" value="{{$supplier->as_of}}" name="as_of">
                        </div>
                        <div class="w-100 d-none d-md-block"></div>
                        <div class="col-md-6 mb-1">
                            <small for="">Notes</small>
                                <textarea class="form-control" name="notes" id="notes" placeholder="Notes" rows="3" >{{$supplier->notes}}</textarea>
                        </div>
                        <div class="col-md-5">
                        <small>Account no.</small>
                            <input type="text" class="form-control" id="account_no" value="{{$supplier->account_no}}" name="account_no">
                        </div>
                        
                        <div class="col-md-6 mb-1">
                        
                        </div>
                        <div class="col-md-3 mb-1">
                        <small>TIN no.</small>
                            <input type="text" class="form-control" id="tin_no" name="tin_no" value="{{$supplier->tin_no}}" >
                        </div>
                        <div class="col-md-6 mb-1">
                        
                        </div>
                        <div class="col-md-4 mb-1">
                        <small>Default expense account</small>
                            <input type="text" class="form-control" id="default_expense_account" value="{{$supplier->default_expense_account}}" name="default_expense_account" >
                        </div>   
                    </div>
                    
                   
                </div>
                <button type="submit" class="btn btn-success btn-lg btn-block mt-2 mb-2 float-right" style="border-radius:15px;;">Update</button>
                </form>
            <!--End Form-->
            </div>

@endsection
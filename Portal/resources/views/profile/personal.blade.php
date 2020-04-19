@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
         <div class="well profile">
            <div class="col-sm-12">
                <div class="col-xs-12 col-sm-8">
                    <h2>{{ $info->fname }}</h2>
                    <p><strong>About  :  </strong> {{ $info->description}}</p>
                    <p><strong>Gender : </strong> {{ $info->gender }} </p>
                    <p><strong>DOB : </strong> {{ $info->dob }}</p>
                    <p><strong>Mother Name : </strong> {{ $info->mother_name }}</p>
                    <p><strong>Father Name : </strong> {{ $info->father_name }}</p>
                    <p><strong>Phone  : </strong> {{ $info->phone }}</p>
                    <p><strong>Mother Phone : </strong> {{ $info->mphone }}</p>
                    <p><strong>Father Phone : </strong> {{ $info->fphone }}</p>
                    <p><strong>Alternate Phone : </strong> {{ $info->alphone }}</p>
                    <p><strong>Profile Created on : </strong> {{ $info->created_at }}</p>
                    <p><strong>Profile Last Update : </strong> {{ $info->updated_at }}</p>


                </div>             
                
         </div>     

          @auth
          <div>
           <a href="./personal/edit" class="btn btn-outline-dark">Edit</a>
          </div>

         <div>
           <a href="." class="btn btn-outline-dark">Display Profile</a>
          </div>


          @endauth
            
        </div>
    </div>
</div>

@endsection

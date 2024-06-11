@extends('layouts.app')

@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">All Users</h4>
                  
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        
                        <th>
                          Name
                        </th>
                        <th>
                          email
                        </th>
                        <th>
                          Create at
                        </th>
                        <th>
                          Actions
                        </th>
                      </tr></thead>
                      <tbody>
                        @foreach($users as $user)
                        <tr>
                          <td>
                            {{$user->name}}
                          </td>
                          <td>
                          {{$user->email}}
                          </td>
                          <td>
                          {{$user->create_at}}
                          </td>
                          
                          <td class="text-primary">
                          #
                          </td>
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
      </div>
@endsection
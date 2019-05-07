@extends('layouts.main')

@section('content')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tickets</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>

      <a class="btn btn-primary" href="/tickets/create" role="button">Add new Ticket</a><br><br>
      
      
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Summary</th>
              <th>Description</th>
              <th>Status</th>
              <th>Actions</th>
              
            </tr>
          </thead>
          <tbody>
            @foreach($tickets as $ticket)
            <tr>
              <td>{{ $ticket->id  }}</td>
              <td>{{ $ticket->summary  }}</td>
              <td>{{ $ticket->description  }}</td>
              <td>{{ $ticket->status  }}</td>
              <td><a href="/tickets/{{  $ticket->id  }}" class="btn btn-primary">Update</a></td>
              <td><a href="/tickets/delete/{{  $ticket->id  }}" class="btn btn-danger">Delete</a></td>

            </tr>
            @endforeach           
          </tbody>
        </table>
        {{ $tickets->links()  }}
      </div>
    </main>

@endsection
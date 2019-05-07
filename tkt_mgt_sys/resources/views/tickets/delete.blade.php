@extends('layouts.main')

@section('content')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Delete Ticket {{ $ticket->id}}</h1>
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

      <form action="" method="post">
      {{  csrf_field()  }}
         <div class="form-group">
            <label for="summary">Summary</label>
            <input type="text" class="form-control" id="summary" name="summary" disabled  value="{{ $ticket->summary}}">
            
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description"  name="description" disabled  value="{{ $ticket->description}}">
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" id="status"  name="status" disabled value="{{ $ticket->status}}">
        </div>
            <button type="submit" class="btn btn-danger">Delete</button>
            <a class="btn btn-primary" href="{{ route('tickets.index')  }}" role="button">Back</a>

        </form>


    </main>

@endsection
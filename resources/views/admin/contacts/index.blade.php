@extends('admin.layout')

@section('content')
<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="h5 no-margin-bottom">Contact Messages</h2>
                </div>
                <div class="col-md-6 text-right">
                    <div class="stats-info">
                        <span class="badge badge-warning">{{ $unreadCount }} Unread</span>
                        <span class="badge badge-info">{{ $totalCount }} Total</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="no-padding-top no-padding-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="block" style="border-radius: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.1);">
                        <div class="title">
                            <strong>All Messages</strong>
                        </div>
                        
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-striped table-hover" style="border-radius: 10px; overflow: hidden;">
                                <thead style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($contacts as $contact)
                                    <tr style="transition: all 0.3s ease; {{ $contact->status === 'unread' ? 'background-color: #fff3cd;' : '' }}">
                                        <td><span class="badge badge-primary">{{ $contact->id }}</span></td>
                                        <td>
                                            <strong>{{ $contact->name }}</strong>
                                            @if($contact->status === 'unread')
                                                <span class="badge badge-danger ml-2">NEW</span>
                                            @endif
                                        </td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->subject ?: 'No Subject' }}</td>
                                        <td>
                                            @if($contact->status === 'unread')
                                                <span class="badge badge-warning">Unread</span>
                                            @elseif($contact->status === 'read')
                                                <span class="badge badge-info">Read</span>
                                            @else
                                                <span class="badge badge-success">Replied</span>
                                            @endif
                                        </td>
                                        <td>{{ $contact->created_at->format('M d, Y H:i') }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('admin.contacts.show', $contact->id) }}" 
                                                   class="btn btn-sm btn-primary" 
                                                   title="View Message">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                
                                                <div class="btn-group" role="group">
                                                    <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-cog"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <form action="{{ route('admin.contacts.updateStatus', $contact->id) }}" method="POST" style="display: inline;">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="hidden" name="status" value="read">
                                                            <button type="submit" class="dropdown-item">
                                                                <i class="fa fa-check"></i> Mark as Read
                                                            </button>
                                                        </form>
                                                        <form action="{{ route('admin.contacts.updateStatus', $contact->id) }}" method="POST" style="display: inline;">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="hidden" name="status" value="replied">
                                                            <button type="submit" class="dropdown-item">
                                                                <i class="fa fa-reply"></i> Mark as Replied
                                                            </button>
                                                        </form>
                                                        <div class="dropdown-divider"></div>
                                                        <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" style="display: inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="dropdown-item text-danger" 
                                                                    onclick="return confirm('Are you sure you want to delete this message?')">
                                                                <i class="fa fa-trash"></i> Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="7" class="text-center py-4">
                                            <i class="fa fa-inbox fa-3x text-muted mb-3"></i>
                                            <p class="text-muted">No contact messages found.</p>
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        @if($contacts->hasPages())
                            <div class="d-flex justify-content-center mt-4">
                                {{ $contacts->links() }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
    .stats-info .badge {
        font-size: 0.9em;
        padding: 8px 12px;
        margin-left: 10px;
    }
    
    .table tbody tr:hover {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%) !important;
        transform: scale(1.01);
        transition: all 0.3s ease;
    }
    
    .btn-group .btn {
        border-radius: 5px;
        margin: 0 2px;
    }
    
    .dropdown-item {
        padding: 8px 15px;
        transition: all 0.3s ease;
    }
    
    .dropdown-item:hover {
        background-color: #f8f9fa;
        transform: translateX(5px);
    }
</style>
@endsection 
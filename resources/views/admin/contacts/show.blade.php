@extends('admin.layout')

@section('content')
<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="h5 no-margin-bottom">Message Details</h2>
                </div>
                <div class="col-md-6 text-right">
                    <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary">
                        <i class="fa fa-arrow-left"></i> Back to Messages
                    </a>
                </div>
            </div>
        </div>
    </div>

    <section class="no-padding-top no-padding-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="block" style="border-radius: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.1);">
                        <div class="title">
                            <strong>Message from {{ $contact->name }}</strong>
                        </div>
                        
                        <div class="message-content">
                            <div class="message-header" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); padding: 20px; border-radius: 10px; margin-bottom: 20px;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5><i class="fa fa-user text-primary"></i> {{ $contact->name }}</h5>
                                        <p class="mb-1"><i class="fa fa-envelope text-info"></i> {{ $contact->email }}</p>
                                        @if($contact->phone)
                                            <p class="mb-1"><i class="fa fa-phone text-success"></i> {{ $contact->phone }}</p>
                                        @endif
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <p class="mb-1"><i class="fa fa-calendar text-warning"></i> {{ $contact->created_at->format('F d, Y') }}</p>
                                        <p class="mb-1"><i class="fa fa-clock text-secondary"></i> {{ $contact->created_at->format('H:i A') }}</p>
                                        <span class="badge badge-{{ $contact->status === 'unread' ? 'warning' : ($contact->status === 'read' ? 'info' : 'success') }}">
                                            {{ ucfirst($contact->status) }}
                                        </span>
                                    </div>
                                </div>
                            </div>

                            @if($contact->subject)
                                <div class="message-subject" style="margin-bottom: 20px;">
                                    <h6><i class="fa fa-tag text-primary"></i> Subject:</h6>
                                    <p class="lead">{{ $contact->subject }}</p>
                                </div>
                            @endif

                            <div class="message-body">
                                <h6><i class="fa fa-comment text-primary"></i> Message:</h6>
                                <div style="background: #f8f9fa; padding: 20px; border-radius: 10px; border-left: 4px solid #007bff;">
                                    <p style="white-space: pre-wrap; margin: 0; line-height: 1.6;">{{ $contact->message }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="block" style="border-radius: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.1);">
                        <div class="title">
                            <strong>Quick Actions</strong>
                        </div>
                        
                        <div class="action-buttons">
                            <form action="{{ route('admin.contacts.updateStatus', $contact->id) }}" method="POST" class="mb-3">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="status" value="read">
                                <button type="submit" class="btn btn-info btn-block" style="border-radius: 10px; padding: 12px;">
                                    <i class="fa fa-check-circle"></i> Mark as Read
                                </button>
                            </form>

                            <form action="{{ route('admin.contacts.updateStatus', $contact->id) }}" method="POST" class="mb-3">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="status" value="replied">
                                <button type="submit" class="btn btn-success btn-block" style="border-radius: 10px; padding: 12px;">
                                    <i class="fa fa-reply"></i> Mark as Replied
                                </button>
                            </form>

                            <a href="mailto:{{ $contact->email }}?subject=Re: {{ $contact->subject ?: 'Your Message' }}" 
                               class="btn btn-primary btn-block mb-3" style="border-radius: 10px; padding: 12px;">
                                <i class="fa fa-envelope"></i> Reply via Email
                            </a>

                            <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-block" 
                                        style="border-radius: 10px; padding: 12px;"
                                        onclick="return confirm('Are you sure you want to delete this message?')">
                                    <i class="fa fa-trash"></i> Delete Message
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="block" style="border-radius: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.1); margin-top: 20px;">
                        <div class="title">
                            <strong>Message Info</strong>
                        </div>
                        
                        <div class="info-list">
                            <div class="info-item" style="padding: 10px 0; border-bottom: 1px solid #eee;">
                                <strong>Message ID:</strong> #{{ $contact->id }}
                            </div>
                            <div class="info-item" style="padding: 10px 0; border-bottom: 1px solid #eee;">
                                <strong>Status:</strong> 
                                <span class="badge badge-{{ $contact->status === 'unread' ? 'warning' : ($contact->status === 'read' ? 'info' : 'success') }}">
                                    {{ ucfirst($contact->status) }}
                                </span>
                            </div>
                            <div class="info-item" style="padding: 10px 0; border-bottom: 1px solid #eee;">
                                <strong>Received:</strong> {{ $contact->created_at->diffForHumans() }}
                            </div>
                            @if($contact->updated_at != $contact->created_at)
                                <div class="info-item" style="padding: 10px 0;">
                                    <strong>Last Updated:</strong> {{ $contact->updated_at->diffForHumans() }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
    .message-content {
        padding: 20px;
    }
    
    .action-buttons .btn {
        transition: all 0.3s ease;
    }
    
    .action-buttons .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }
    
    .info-list .info-item:last-child {
        border-bottom: none;
    }
    
    .message-body p {
        font-size: 16px;
        line-height: 1.8;
    }
</style>
@endsection 
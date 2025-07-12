@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Kotak Pesan</h4>
                    <a href="{{ route('messages.create') }}" class="btn btn-primary">Buat Pesan Baru</a>
                </div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    @if($messages->count() > 0)
                        @foreach($messages as $message)
                            <div class="card mb-3 {{ $message->is_read ? '' : 'border-primary' }}">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="card-title">
                                            {{ $message->subject }}
                                            @if(!$message->is_read)
                                                <span class="badge bg-primary">Baru</span>
                                            @endif
                                        </h6>
                                        <small class="text-muted">{{ $message->created_at->format('d/m/Y H:i') }}</small>
                                    </div>
                                    <p class="card-text">
                                        <strong>Dari:</strong> {{ $message->sender->name }}<br>
                                        {{ Str::limit($message->body, 100) }}
                                    </p>
                                    <div class="d-flex justify-content-end">
                                        <a href="{{ route('messages.show', $message) }}" class="btn btn-sm btn-outline-primary me-2">Baca</a>
                                        <form action="{{ route('messages.destroy', $message->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus pesan ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        {{ $messages->links() }}
                    @else
                        <p class="text-center">Belum ada pesan.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

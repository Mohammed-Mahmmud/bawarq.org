@extends('dashboard.layouts.master')
@section('title', 'emails')
@section('emails-active', 'active')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-3">
            <h4 class="fw-bold py-3 mb-4 d-inline">Emails</h4>
            <button type="button" class="btn btn-sm btn-primary mx-3" data-bs-toggle="modal"
                data-bs-target="#createModalToggle">
                Add New
            </button>
            @livewire('dashboard.pages.emails.create')
        </div>
        <!-- Contextual Classes -->
        @livewire('dashboard.pages.emails.view')
        @livewire('dashboard.pages.emails.update')
        @livewire('dashboard.pages.emails.delete')
        <!--/ Contextual Classes -->
    </div>
@endsection

@extends('layouts.app')

@section('title', 'CODER - E-Learning')

@section('content')
  <section>
    <div class="breadcrumb d-flex justify-content-between align-items-center text-white">
      <h1>E-Learning</h1>
    </div>
  </section>

  <div class="row">
    <div class="col-md-4">
      <a href="/admin/e-learning/module/division-1" class="text-decoration-none">
        <div class="text-white p-4 text-center"
          style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px);">
          <div class="text-white">
            <iconify-icon icon="mdi:book-open-page-variant-outline" width="150px"></iconify-icon>
            <h2>Module</h2>
            <p class="fw-light">Membuat dan membagikan modul pembelajaran</p>
          </div>
        </div>
      </a>
    </div>

    <div class="col-md-4">
      <a href="{{ route('admin.elearning.task') }}" class="text-decoration-none">
        <div class="text-white p-4 text-center"
          style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px);">
          <div class="text-white">
            <iconify-icon icon="jam:task-list" width="150px"></iconify-icon>
            <h2>Task</h2>
            <p class="fw-light">Membuat tempat untuk pengumpulan tugas</p>
          </div>
        </div>
      </a>
    </div>

    <div class="col-md-4">
      <a href="" class="text-decoration-none">
        <div class="text-white p-4 text-center"
          style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px);">
          <div class="text-white">
            <iconify-icon icon="fluent:meet-now-24-regular" width="150px"></iconify-icon>
            <h2>Meeting</h2>
            <p class="fw-light">Membuat dan membagikan link jadwal pertemuan</p>
          </div>
        </div>
      </a>
    </div>
  </div>
@endsection
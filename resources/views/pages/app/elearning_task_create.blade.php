@extends('layouts.app')

@section('title', 'CODER - E-Learning Create Task')

@section('content')
  <section>
    <div class="breadcrumb d-flex justify-content-between align-items-center text-white">
      <h1>E-Learning</h1>
    </div>
  </section>
  @error('file')
    <div class="bg-warning">
      {{ $message }}
    </div>
  @enderror
  <div class="row">
    <div class="col-md-8">
      <div class="text-white p-4"
        style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px);">
        <header class="text-left mb-4">
          <h5>Create Task</h5>
        </header>
        <form action="{{ route('admin.elearning.task.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="input-group-custom mb-3">
            <input type="text" name="task_name" class="form-control text-white fw-light"
              style="height: 50px; background: rgba(255, 255, 255, 0.02);  border-radius: 10px; border: none; border-bottom: 2px solid white;
                backdrop-filter: blur(5px);"
              placeholder="Nama tugas">
            @error('task_name')
              <small class="fw-light">{{ $message }}</small>
            @enderror
          </div>
          <div class="input-group-custom mb-3">
            <textarea name="description" id="description" cols="30" rows="10" class="form-control text-white fw-light"
              style="background: rgba(255, 255, 255, 0.02);  border-radius: 10px; border: none; border-bottom: 2px solid white;
            backdrop-filter: blur(5px);"
              placeholder="Deskripsi tugas"></textarea>
            @error('description')
              <small class="fw-light">{{ $message }}</small>
            @enderror

          </div>
          <div class="input-group-custom mb-3">
            <input type="file" name="file" class="form-control text-white fw-light"
              style="height: 50px; line-height: 50px; background: rgba(255, 255, 255, 0.02);  border-radius: 10px; border: none; border-bottom: 2px solid white;
                backdrop-filter: blur(5px);"
              placeholder="File">
          </div>
          <div class="input-group-custom mb-3">
            <select class="form-select text-white fw-light"
              style="height: 50px; background: rgba(255, 255, 255, 0.02);  border-radius: 10px; border: none; border-bottom: 2px solid white;
                  backdrop-filter: blur(5px);"
              name="division_id" id="division">
              <option selected disabled class="text-black">Pilih Divisi</option>
              @foreach ($data_division as $division)
                <option value="{{ $division->id }}" class="text-black">{{ $division->name }}</option>
              @endforeach
            </select>
            @error('division_id')
              <small class="fw-light">{{ $message }}</small>
            @enderror
          </div>
          <div class="input-group-custom mb-3">
            <input type="datetime-local" name="deadline" class="form-control text-white fw-light"
              style="height: 50px; background: rgba(255, 255, 255, 0.02);  border-radius: 10px; border: none; border-bottom: 2px solid white;
                backdrop-filter: blur(5px);"
              placeholder="Deadline">
            @error('deadline')
              <small class="fw-light">{{ $message }}</small>
            @enderror
          </div>
          <div class="input-group-custom">
            <button type="submit" class="text-white px-5 py-2"
              style="background: rgba(255, 255, 255, 0.02);  border-radius: 10px; border: none;
            backdrop-filter: blur(5px);">Submit</button>
          </div>
        </form>
      </div>
    </div>

    <div class="col-md-4">
      <div class="text-white p-4"
        style="background: rgba(255, 255, 255, 0.13); border-radius: 20px; backdrop-filter: blur(5px);">
        <header class="text-left">
          <h5>Logo Type</h5>
        </header>
        <div class="text-center my-5">
          <iconify-icon icon="" width="200px" class="icon-type"></iconify-icon>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js-libraries')
  <script>
    $('.custom-select').on('change', function() {
      console.log($(this).val());
      if ($(this).val() == 'vscode-icons:file-type-word' || $(this).val() == 'vscode-icons:file-type-excel' || $(this)
        .val() == 'vscode-icons:file-type-powerpoint' || $(this)
        .val() == 'fxemoji:notepad' || $(this).val() == 'vscode-icons:file-type-pdf2') {
        $('.link_file').attr('hidden', false);
        $('.link').attr('hidden', true);
      } else {
        $('.link_file').attr('hidden', true);
        $('.link').attr('hidden', false);
      }

      if ($(this).val() == 'mdi:github') {
        $('.icon-type').attr('icon', 'mdi:github');
      }
      if ($(this).val() == 'vscode-icons:file-type-word') {
        $('.icon-type').attr('icon', 'vscode-icons:file-type-word');
      }
      if ($(this).val() == 'vscode-icons:file-type-powerpoint') {
        $('.icon-type').attr('icon', 'vscode-icons:file-type-powerpoint');
      }
      if ($(this).val() == 'vscode-icons:file-type-excel') {
        $('.icon-type').attr('icon', 'vscode-icons:file-type-excel');
      }
      if ($(this).val() == 'logos:blogger') {
        $('.icon-type').attr('icon', 'logos:blogger');
      }
      if ($(this).val() == 'fxemoji:notepad') {
        $('.icon-type').attr('icon', 'fxemoji:notepad');
      }
      if ($(this).val() == 'vscode-icons:file-type-pdf2') {
        $('.icon-type').attr('icon', 'vscode-icons:file-type-pdf2');
      }
    })
  </script>
@endpush
@extends('admin.main')

@section('content')
    
@endsection
<div class="pagetitle">
    <h1>Student</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Pages</li>
        <li class="breadcrumb-item active">Blank</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>Nomor</th>
                        <th>Nama</th>
                        <th>Nim</th>
                        <th>Major</th>
                        <th>class</th>
                        <th>action</th>
                    </tr>

                    @foreach ($students as $student)

                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->nim }}</td>
                        <td>{{ $student->major }}</td>
                        <td>{{ $student->class }}</td>
                        <td>
                            <a href="class"></a>
                            <a href="class"></a>
                        </td>

                    </tr>
                        
                    @endforeach
                </table>
            </div>
        </div>

    </div>
  </section>

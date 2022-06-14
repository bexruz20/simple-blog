@extends('admin.layouts.app')
@section('content')
    <h1 class="text-center p-3">Tashkilot haqida ma'lumot</h1>
  <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="mb-3">
                <a href="{{ route('users.index') }}"
                    class="btn btn-outline-success"><i class="bi bi-back"></i> back</a>
            </div>
          <table class="table table-bordered">
                <tr>
                    <td>User F.I.O</td>
                    <td> {{ $user->fio }}</td>
                </tr>
                <tr>
                    <td>User Login</td>
                    <td>{{ $user->login }}</td>
                </tr>
                <tr>
                    <td>User Password</td>
                    <td>{{ $user->password }}</td>
                </tr>
                <tr>
                    <td>Qo'shilgan vaqt</td>
                    <td>{{ $user->created_at }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection

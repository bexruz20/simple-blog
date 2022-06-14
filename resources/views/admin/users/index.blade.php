@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">bu tashkilotlar ro'yxati</h2>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="{{ route('users.create') }}"><button class="btn btn-success " type="button">Tashkilot
                            qo'shish</button></a>
                </div>

                <br>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>U/R</th>
                        <th> F.I.O</th>
                        <th>REmember_token </th>
                        <th>Created Time </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)

                        <tr>
                            <td>{{ ($users->currentpage() - 1) * $users->perpage() + ($loop->index + 1) }}</td>
                            <td class="text-cent">
                                {{ $user->fio }}
                            </td>
                            <td class="text-cent"> {{ $user->remember_token }}</td>
                            <td class="text-cent"> {{ $user->created_at }}</td>
                            <td style="width: 180px;">
                                <a href="{{ route('users.show', ['user' => $user->id]) }}"
                                   class="btn btn-outline-success"><i class="bi bi-calendar2"></i></a> |
                                <a href="{{ route('users.edit', ['user' => $user->id]) }}"
                                   class="btn btn-outline-info"><i class="bi bi-pencil-square"></i></a> |
                                <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST" style="float:right">
                                    @csrf
                                    @method('DELETE') <button type="submit" class="btn btn-outline-danger"
                                                              onclick="return confirm('do you want delete this record')"><i
                                            class="bi bi-trash-fill"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                {{ $users->links() }}
                @endsection

            </div>
        </div>
    </div>

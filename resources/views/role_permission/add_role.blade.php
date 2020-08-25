@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <h3>Các chức vụ đã thêm: </h3>
            <table class="table tab-content">
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Chức Vụ</th>
                    <th scope="col">Miêu Tả</th>
                </tr>
                {{ !($i = 1) }}
                @foreach ($role as $item)
                    <tr>
                        <th scope="row">{{ $i++ }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                    </tr>

                @endforeach
            </table>
        </div>
        {{ $role->links() }}
    </div>
    <div class="row">
        <div class="col-12">
            <form action="{{ route('xu_li') }}" method="post" class="mx-auto">
                @csrf
                <div class="form-group row col-5 float-left">
                    <label for="example-url-input" class="col-sm-3 col-form-label">Tên Chức Vụ</label>
                    <div class="col-sm-8">
                        <input class="form-control form-check-input" type="text" name="role">
                    </div>
                </div>
                <div class="form-group row col-5 float-left">
                    <label for="example-url-input" class="col-sm-3 col-form-label">Miêu Tả</label>
                    <div class="col-sm-8">
                        <input class="form-control form-check-input" type="text" name="description">
                    </div>
                </div>
                <div class="form-group row col-2 float-left">
                    <div class="mx-auto">
                        <div class="col-sm-8">
                            <button type="submit" class="btn btn-primary">Thêm</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="details-heading">
                <p><b>HƯỚNG DẪN</b></p>
                <p>1. Tên chức vụ nên nhập bằng tiếng anh, hoặc tiếng việt không dấu. <i>Ví dụ: <b>ministry, giao vu,</b>...</i></p>
                <p>2. Tên miêu tả dùng miêu tả cho tên chức vụ. <i>Ví dụ: <b>ministry - Giáo Vụ</b></i></p>
            </div>
        </div>
    </div>
@endsection

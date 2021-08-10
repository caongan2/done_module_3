<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="">Navbar</a><button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('list')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('create')}}">Thêm mới</a>
                </li>
            </ul>
            <form method="get" action="{{route('search')}}" class="d-flex">
                @csrf
                <input class="form-control me-2" type="search" name="name" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
<div class="card card-success">
    <div class="card-header">
        <h3 class="card-title">New Member</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="inputName">Tên đại lí</label>
                <input type="text" value="{{old('name')}}" name="name" id="inputName"
                       class="@error('name')is-invalid @enderror form-control">
                @error('name')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="inputClientCompany">Email</label>
                <input type="text" value="{{old('email')}}" id="inputClientCompany" name="email"
                       class="@error('email')is-invalid @enderror form-control">
                @error('email')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="inputDescription">Số điẹn thoại</label>
                <input type="number" value="{{old('phone')}}" name="phone" id="inputDescription"
                       class="@error('phone')is-invalid @enderror form-control">
                @error('phone')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="inputDescription">Địa chỉ</label>
                <div class="input-group mb-3">
                    <input type="text" value="{{old('address')}}" id="inputClientCompany" name="address"
                           class="@error('address')is-invalid @enderror form-control">
                </div>
                @error('address')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="inputDescription">Quản lí</label>
                <input type="text" value="{{old('address')}}" name="manager" id="inputDescription"
                       class="@error('manager')is-invalid @enderror form-control">
                @error('manager')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10 ">
                    <select name="status" id="">
                            <option value="Hoạt động">Hoạt động</option>
                            <option value="Ngừng hoạt động">Ngừng hoạt động</option>
                    </select>

                </div>
            </div>
            <button type="submit" class="btn btn-success">Accept</button>
            <a href="{{route('list')}}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
    <!-- /.card-body -->
</div>
<!-- /.card -->
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>

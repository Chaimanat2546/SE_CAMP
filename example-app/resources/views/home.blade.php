@extends('layouts.default')

@section('title', 'Homepage')

@section('content')
    {{-- <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>

                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the
                            card's
                            content.
                        </p>

                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>

                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>

                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the
                            card's
                            content.
                        </p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div><!-- /.card -->
            </div>
            <!-- /.col-md-6 -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="m-0">Featured</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">Special title treatment</h6>

                        <p class="card-text">With supporting text below as a natural lead-in to additional
                            content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>

                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h5 class="m-0">Featured</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">Special title treatment</h6>

                        <p class="card-text">With supporting text below as a natural lead-in to additional
                            content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div> --}}

    <style>
        div {
            padding-left: 8px;
            padding-right: 8px;
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 1600px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="date"],
        input[type="file"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 4px;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
    </head>

    <body>
        <div class="div">
            <form id="myForm">
                <div class="form-group">
                    <label for="name">ชื่อ</label>
                    <input type="text">
                </div>
                <div class="form-group">
                    <label for="sirname">สกุล</label>
                    <input type="text">
                </div>
                <div class="form-group">
                    <label for="birthday">วัน/เดือน/ปีเกิด</label>
                    <input type="datetime-local">
                </div>
                <div class="form-group">
                    <label for="age">อายุ</label>
                    <input type="number">
                </div>
                <div class="form-group">
                    <label for="gender">เพศ</label>
                    <select>
                        <option selected>ชาย</option>
                        <option selected>หญิง</option>
                        <option selected>ไม่ระบุ</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="photo">รูป</label>
                    <input type="file">
                </div>
                <div class="form-group">
                    <label for="address">ที่อยู่</label>
                    <textarea cols="30" rows="6"></textarea>
                </div>
                <div class="form-group">
                    <label for="colors">สีที่ชอบ</label>
                    <select>
                        <option selected>เหลือง</option>
                        <option selected>เขียว</option>
                        <option selected>แสด</option>
                        <option selected>ส้ม</option>
                        <option selected>แดง</option>
                        <option selected>ม่วง</option>
                        <option selected>น้ำเงิน</option>
                        <option selected>ดำ</option>
                        <option selected>ขาว</option>
                        <option selected>-</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="songs">แนวเพลงที่ชอบ</label>
                    <textarea cols="30" rows="6"></textarea>
                    <input id="radio_a" type="radio" name="same_radio">
                    <label for="radio_a">ลูกทุ่ง</label>
                    <input id="radio_b" type="radio" name="same_radio">
                    <label for="radio_b">เพื่อชีวิต</label>
                    <input id="radio_c" type="radio" name="same_radio">
                    <label for="radio_c">อื่นๆ</label>
                </div>
                <div>
                    <input type="checkbox" name="my_checkbox"> <label>ยินยอมให้เก็บข้อมูล</label>
                </div>

                <div class="form-group">
                    <button type="submit">submit</button>
                </div>
                <div class="form-group">
                    <button type="reset">reset</button>
                </div>
            </form>
        </div>

    </body>

    </html>
@endsection

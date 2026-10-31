<div class="row">
    <div class="col-sm-12">
        <form action="{{ route('Units.update', ['id' => $data->id]) }}" method="POST">
            @csrf
            <div class="form-group">
                <h6 class="text-right">اسم الوحدة</h6>
                <input type="text" class="form-control form-control-sm" value="{{ $data->unit_name }}" name="unit_name"
                    id="unit_name" placeholder=" اكتب اسم الوحده الجديد">
            </div>
            <input type="submit" value="إضافه البيانات" style="float: right;line-height:18px;font-weight:600"
                class=" btn btn-primary">
    </div>
</div>

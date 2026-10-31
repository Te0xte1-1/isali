<div class="row">
    <div class="col-sm-12">
        <form action="{{ route('Service.update', ['id' => $data->id]) }}" method="POST">
            @csrf
            <div class="form-group">
                <h6 class="text-right">اسم الخدمة</h6>
                <input type="text" class="form-control form-control-sm" value="{{ $data->service_name }}" name="service_name"
                    id="service_name" placeholder=" اكتب اسم الخدمة الجديد">
            </div>
            <div class="form-group">
                <h6 class="text-right">سعر الخدمة</h6>
                <input type="text" class="form-control form-control-sm" value="{{ $data->service_price }}" name="service_price"
                    id="service_price" placeholder=" اكتب سعر الخدمة الجديد">
            </div>
            <input type="submit" value="إضافه البيانات" style="float: right;line-height:18px;font-weight:600"
                class=" btn btn-primary">
    </div>
</div>

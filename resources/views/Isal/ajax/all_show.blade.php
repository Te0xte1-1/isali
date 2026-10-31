    {{-- show isal or fatorah --}}
    <div class="row">
        <div class="col-sm-12">
            <div class="text-center ">
                <form action="{{ route('Print_show_isall_all') }}" method="post">
                    @csrf
                    <input type="hidden" name="serial" value="{{ $isal->id }}" id="serial">
                    <input type="submit" class="form-control form-control-sm btn btn-success btn-sm"
                        value="طبـــــــــــاعــــــــه" style="margin: 8px 0 ">
                </form>

            </div>
            <div class="card" style="background-color: #e0e8f6">
                <div class="card-body">
                    <h6 class="text-center">جمهورية السودان</h6>
                    <h6 class="text-center">وزارة المالية والتخطيط الإقتصادي</h6>
                    <h6 class="text-center" id="isal_tit1">ولاية الخرطوم</h6>
                    </h6>
                    <h6 class="text-right" id="isal_tit">الموقع العمارات - محلية الخرطوم - ولاية الخرطوم</h6>
                    <div class="row">
                        <div class="col-sm-4">
                            <h6 class="text-right" id="isal_tit">وصل من : محمد يوسف </h6>
                        </div>

                        <div class="col-sm-4">
                            <h6 class="text-right" id="isal_tit">وصل من : محمد يوسف </h6>
                        </div>
                    </div>
                    <table id="dataTable"class="table ">
                        <tr>
                            <th colspan="2">البيـــــــــــــــــان</th>
                            <th width="20%">جنية سوداني</th>
                            <th width="20%">قرش</th>
                        </tr>

                        @foreach ($isal_detailse as $item)
                            <tr>

                                <td colspan="2"><input type="text" class="form-control form-control-sm"
                                        value="{{ $item->service_name }}" disabled name="" id=""
                                        style="text-align: center;font-weight: 700;"></td>

                                <td><input type="text" class="form-control form-control-sm"
                                        value="{{ $item->service_price }}" disabled name="" id=""
                                        style="text-align: center;font-weight: 700;"></td>
                                <td><input type="number" class="form-control form-control-sm" value="0" disabled
                                        name="" id="" style="text-align: center;"></td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="2">
                                <label> <strong>إجمالي المبلغ</strong></h6>
                            </td>
                            <td colspan="2"><input type="number" value="{{ $isal->isal_total }}" disabled
                                    class="form-control form-control-sm" name="" id=""
                                    style="text-align: center;font-weight:bold;font-size:18px;"></td>
                        </tr>
                    </table>
                    <h6 class="text-right">تعليق على الإيصال : <small>{{ $isal->isal_note_comment }}</small></h6>

            
                </div>


            </div>
        </div>
    </div>
    {{-- End show isal or fatorah --}}

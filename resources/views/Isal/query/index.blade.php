
<tr>
    <td> <input type="checkbox" data-id="{{ $isal->id }}" name="" id=""></td>
    <td>{{ $isal->isal_serial }}</td>
    <td>{{ $isal->isal_total }}</td>
    <td>{{ $isal->isal_customer_name }}</td>
    <td>{{ $isal->isal_note_comment }}</td>
    <td>{{ $isal->isal_status }}</td>
    <td>
        <a href="#" class="btn btn-primary btn-sm" data-id="{{$isal->id}}" id="show_query_detailse"><i
                class="fa fa-tv"></i></a>
        <a href="#" class="btn btn-secondary btn-sm"><i class="fa fa-print"></i></a>
    </td>
<tr>
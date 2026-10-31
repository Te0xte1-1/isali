<form action="{{ route('Isal.Ajax.Cancel_Isal.Store') }}" method="post">
    @csrf

    <textarea name="reson_for_cancel" id="reson_for_cancel" cols="62" rows="3"></textarea>
    @error('reson_for_cancel')
        <small class="form-text text-danger">{{ $message }}</small>
    @enderror
    <input type="hidden" name="serial" id="serial" value="{{ $isal_id }}">
    </div>
    <div class="modal-footer" style="padding: 0">
        <input type="submit" class="form-control form-control-sm btn btn-success btn-sm"value="تأكيد الإلغاء للإيصال ">
    </div>
</form>

<form action="javascript:;" method="post" id="form_ajax">
    {{ csrf_field() }}
    <input type="hidden" name="data[parentid]" value="{{ $pid }}">
    <table class="table table-striped">
        <tr>
            <td class="td_left">分类名称：</td>
            <td>
                <input type="text" name="data[name]" class="form-control input-sm" value="{{ old('data.name') }}">
                <p class="input-info"><span class="color_red">*</span>最多100字符</p>
            </td>
        </tr>

        <tr>
            <td class="td_left">手机版名称：</td>
            <td>
                <input type="text" name="data[mobile_name]" class="form-control input-sm" value="{{ old('data.mobile_name') }}">
                <p class="input-info"><span class="color_red">*</span>手机版显示，最多100字符</p>
            </td>
        </tr>

        <tr>
            <td class="td_left">排序：</td>
            <td>
                <input type="text" name="data[sort]" value="{{ old('data.sort',0) }}" class="form-control input-xs">
                <p class="input-info"><span class="color_red">*</span>数字越大越靠前</p>
            </td>
        </tr>

        <tr>
            <td class="td_left">是否显示：</td>
            <td>
                <label class="radio-inline"><input type="radio" name="data[is_show]" checked="checked" class="input-radio" value="1">
                    是</label>
                <label class="radio-inline"><input type="radio" name="data[is_show]" class="input-radio" value="0">否</label>
            </td>
        </tr>
    </table>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <div onclick='ajax_submit_form("form_ajax","{{ url('/console/shopcate/add') }}")' name="dosubmit" class="btn btn-info">提交</div>
    </div>
</form>
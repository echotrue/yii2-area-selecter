/**
 * Created by axlrose on 2016/12/20.
 */
$(document).ready(function () {
    var url = $('#url').val();
    $.ajax({
        type: "POST",
        url: url,
        data: {aid: 0},
        dataType: "json",
        success: function (data) {
            $('#province').empty().append(getDom(data.data)).show();
        }
    });
    $('#province').on('change', function () {
        var aid = $("#province").val();
        if (aid == 0) {
            $('#city').empty().hide();
            $('#regional').empty().hide();
            return false;
        }
        $.ajax({
            type: "POST",
            url: url,
            data: {aid: aid},
            dataType: "json",
            success: function (data) {
                $('#regional').empty();
                $('#city').empty().append(getDom(data.data)).show();
            }
        });
    });


    $('#city').on('change', function () {
        var aid = $("#city").val();
        if (aid == 0) {
            $('#regional').empty().hide();
            return false;
        }
        $.ajax({
            type: "POST",
            url: url,
            data: {aid: aid},
            dataType: "json",
            success: function (data) {
                $('#regional').empty().append(getDom(data.data)).show();
            }
        });
    });

    $('#regional').on('change', function () {

    });

    getDom = function (datas) {
        var html = '<option value="0">请选择</option>';
        $.each(datas, function (i, item) {
            html += '<option value="' + item['area_id'] + '">' + item['area_name'] + '</option>';
        });
        return html;
    };
});
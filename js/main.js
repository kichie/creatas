// jQuery
$(function () {
    $('.p-ice_wrap_table_sp_ul_tab').on('click', function () {
        let index = $('.p-ice_wrap_table_sp_ul_tab').index(this);
        
        $('.p-ice_wrap_table_sp_ul').removeClass('is-tab-red is-tab-blue is-tab-green');
        switch (index) {
            case 0:
                $('.p-ice_wrap_table_sp_ul').addClass('is-tab-red');
                break;
            case 1:
                $('.p-ice_wrap_table_sp_ul').addClass('is-tab-blue');
                break;
            case 2:
                $('.p-ice_wrap_table_sp_ul').addClass('is-tab-green');
                break;
            default:
                $('.p-ice_wrap_table_sp_ul').addClass('is-tab-red');
                break;
        }

        $('.p-ice_wrap_table_sp_ul_tab').removeClass('is-tab-active');
        $(this).addClass('is-tab-active');

        $('.p-ice_wrap_table_sp_wrap_wrap').removeClass('is-contents-active');
        $('.p-ice_wrap_table_sp_wrap_wrap').eq(index).addClass('is-contents-active');
    });
});

jQuery(document).ready(function($) {
    $('.v-check-actions').on('click', '.button', function(event) {
        event.preventDefault();
        var isCheckAll = false;

        if ($(this).is('#checkAllPlugins')) {
            isCheckAll = true;
        }

        $('.v-plugins-list input[type="checkbox"]').prop('checked', isCheckAll);
    });

});

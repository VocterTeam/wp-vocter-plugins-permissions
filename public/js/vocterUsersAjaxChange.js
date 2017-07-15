jQuery(document).ready(function($) {
    $('#userlist').on('change', function(event) {

    	var vocterPluginsForm = $(this).parents('form');

        $('#vocterHidePluginsSubmit').prop('disabled', false);

        var selectedOptionHiddenPlugins = $(this).find('option:selected').data('hidden-plugins');
        var selectedPluginsArr = JSON.parse(JSON.stringify(selectedOptionHiddenPlugins));

        var data = {
            action: 'vocter_userlist_action',
            userId: $(this).val()
        };

        $.ajax({
            url: ajaxurl,
            type: 'POST',
            data: data,
            beforeSend: function() {
                vocterPluginsForm.addClass('loading');
            },
            success: function(data) {
                if (data) {
                	vocterPluginsForm.removeClass('loading');
                    $('.v-plugins').html(data);

                    // selectedOptionHiddenPlugins
                    if (selectedOptionHiddenPlugins) {
                        selectedPluginsArr.forEach(function(element, index) {
                            $('.v-plugins-list input[type="checkbox"]').each(function(index, el) {
                                if ($(el).val() === element) {
                                    $(el).prop('checked', true);
                                }
                            });
                        });
                    }
                    // END:selectedOptionHiddenPlugins
                }
            }
        });
    });
});

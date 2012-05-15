/**
 * @author GeekTantra
 * @date 20 September 2009
 */
(function(xoops_smallworld){
    var ValidationErrors = new Array();
    xoops_smallworld.fn.validate = function(options){
        options = xoops_smallworld.extend({
            expression: "return true;",
            message: "",
            error_class: "ValidationErrors",
            error_field_class: "ErrorField",
            live: true
        }, options);
        var SelfID = xoops_smallworld(this).attr("id");
        var unix_time = new Date();
        unix_time = parseInt(unix_time.getTime() / 1000);
        if (!xoops_smallworld(this).parents('form:first').attr("id")) {
            xoops_smallworld(this).parents('form:first').attr("id", "Form_" + unix_time);
        }
        var FormID = xoops_smallworld(this).parents('form:first').attr("id");
        if (!((typeof(ValidationErrors[FormID]) == 'object') && (ValidationErrors[FormID] instanceof Array))) {
            ValidationErrors[FormID] = new Array();
        }
        if (options['live']) {
            if (xoops_smallworld(this).find('input').length > 0) {
                xoops_smallworld(this).find('input').bind('blur', function(){
                    if (validate_field("#" + SelfID, options)) {
                        if (options.callback_success) 
                            options.callback_success(this);
                    }
                    else {
                        if (options.callback_failure) 
                            options.callback_failure(this);
                    }
                });
                xoops_smallworld(this).find('input').bind('focus keypress click', function(){
                    xoops_smallworld("#" + SelfID).next('.' + options['error_class']).remove();
                    xoops_smallworld("#" + SelfID).removeClass(options['error_field_class']);
                });
            }
            else {
                xoops_smallworld(this).bind('blur', function(){
                    validate_field(this);
                });
                xoops_smallworld(this).bind('focus keypress', function(){
                    xoops_smallworld(this).next('.' + options['error_class']).fadeOut("fast", function(){
                        xoops_smallworld(this).remove();
                    });
                    xoops_smallworld(this).removeClass(options['error_field_class']);
                });
            }
        }
        xoops_smallworld(this).parents("form").submit(function(){
            if (validate_field('#' + SelfID)) 
                return true;
            else 
                return false;
        });
        function validate_field(id){
            var self = xoops_smallworld(id).attr("id");
            var expression = 'function Validate(){' + options['expression'].replace(/VAL/g, 'xoops_smallworld(\'#' + self + '\').val()') + '} Validate()';
            var validation_state = eval(expression);
            if (!validation_state) {
                if (xoops_smallworld(id).next('.' + options['error_class']).length == 0) {
                    xoops_smallworld(id).after('<span class="' + options['error_class'] + '">' + options['message'] + '</span>');
                    xoops_smallworld(id).addClass(options['error_field_class']);
					// Culex hack to remove next buttons on invalid info
					xoops_smallworld('.smallworld_profileform-buttons').hide();
					xoops_smallworld('.button-next').hide();
                }
                if (ValidationErrors[FormID].join("|").search(id) == -1) 
                    ValidationErrors[FormID].push(id);
                return false;
            }
            else {
                for (var i = 0; i < ValidationErrors[FormID].length; i++) {
                    if (ValidationErrors[FormID][i] == id) 
                        ValidationErrors[FormID].splice(i, 1);
                }
				// Culex hack to remove next button on error
				if ( xoops_smallworld('span.ValidationErrors').is(":visible") != true) {
				 xoops_smallworld('.smallworld_profileform-buttons').show();
				 xoops_smallworld('.button-next').show();
                return true;
				} else {};
            }
            return false;
        }
    };
    xoops_smallworld.fn.validated = function(callback){
        xoops_smallworld(this).each(function(){
            if (this.tagName == "FORM") {
                xoops_smallworld(this).submit(function(){
                    if (ValidationErrors[xoops_smallworld(this).attr("id")].length == 0) 
                        callback();
					return false;
                });
            }
        });
    };
})(xoops_smallworld);

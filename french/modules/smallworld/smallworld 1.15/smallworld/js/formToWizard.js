/* Created by jankoatwarpspeed.com */

(function(xoops_smallworld) {
    xoops_smallworld.fn.formToWizard = function(options) {
        options = xoops_smallworld.extend({  
            submitButton: "" 
        }, options); 
        
        var element = this;

        var steps = xoops_smallworld(element).find("fieldset");
        var count = steps.size();
        var submmitButtonName = "#" + options.submitButton;
        xoops_smallworld(submmitButtonName).hide();

        // 2
        xoops_smallworld(element).before("<ul id='steps'></ul>");

        steps.each(function(i) {
            xoops_smallworld(this).wrap("<div id='step" + i + "'></div>");
            xoops_smallworld(this).append("<p id='step" + i + "commands'></p>");

            // 2
            var name = xoops_smallworld(this).find("legend").html();
            xoops_smallworld("#steps").append("<li id='stepDesc" + i + "'>Step " + (i + 1) + "<span>" + name + "</span></li>");

            if (i == 0) {
                createNextButton(i);
                selectStep(i);
            }
            else if (i == count - 1) {
                xoops_smallworld("#step" + i).hide();
                createPrevButton(i);
            }
            else {
                xoops_smallworld("#step" + i).hide();
                createPrevButton(i);
                createNextButton(i);
            }
        });

        function createPrevButton(i) {
            var stepName = "step" + i;
            xoops_smallworld("#" + stepName + "commands").append("<a href='#' id='" + stepName + "Prev' class='prev'> < Back</a>");

            xoops_smallworld("#" + stepName + "Prev").bind("click", function(e) {
                xoops_smallworld("#" + stepName).hide();
                xoops_smallworld("#step" + (i - 1)).show();
                xoops_smallworld(submmitButtonName).hide();
                selectStep(i - 1);
            });
        }

		function createNextButton(i) {
			var stepName = "step" + i;
			xoops_smallworld("#" + stepName + "commands").append("<a href='#' id='" + stepName + "Next' class='next'>Next</a>");

			xoops_smallworld("#" + stepName + "Next").bind("click", function(e) {

				if (options.validationEnabled) {
					var stepIsValid = true;
					xoops_smallworld("#"+stepName+" :input").each(function(index) {
						checkMe = element.validate().element(xoops_smallworld(this));
						//stepIsValid = !element.validate().element(xoops_smallworld(this)) && stepIsValid;
						stepIsValid = checkMe && stepIsValid;
					});
					alert("stepIsValid === "+stepIsValid);
					if (!stepIsValid) {
						return false;
					};
				}; 

				xoops_smallworld("#" + stepName).hide();
				xoops_smallworld("#step" + (i + 1)).show();
				if (i + 2 == count)
					xoops_smallworld(submmitButtonName).show();
				selectStep(i + 1,'next');
			});
		}


        function selectStep(i) {
            xoops_smallworld("#steps li").removeClass("current");
            xoops_smallworld("#stepDesc" + i).addClass("current");
        }

    }
})(jQuery); 
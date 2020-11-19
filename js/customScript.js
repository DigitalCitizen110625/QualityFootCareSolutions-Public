$(document).ready(function()
{ 

    //Display the remaining chars counter below the form inputs
    let inputFields = document.querySelectorAll("small[data-maxChars]").forEach(function(el) {
        
        //Where "el" is the currently selected <small> element
        el.innerText = 'Chars Remaining: ' + el.getAttribute("data-maxChars");
    });


    //DESCRIPTION   : Smoothly scrolls the window back to the top of the website
    $("#gotoTopButton").click(function() 
    {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

    //DESCRIPTION   : When an <a> element is clicked, auto scroll the view port to its location
    $("nav").find("a").click(function(navElement) 
    {
        navElement.preventDefault();
        var selectedSection = $(this).attr("href");
        $("html, body").animate(
        {
            scrollTop: $(selectedSection).offset().top
        });
    });    


    //DESCRIPTION   : Adds or removes a css class if the input fields have a value
    $('.contact-input').each(function()
    {
        $(this).on('blur', function()
        {
            if($(this).val().trim() != "")
            {
                $(this).addClass('has-val');
            }
            else
            {
                $(this).removeClass('has-val');
            }
        })    
    })


    //DESCRIPTION   : Activates the validation styles on the input fields, if their contents were invalid
    $('.validate-input .contact-input').each(function()
    {
        $(this).on('blur', function()
        {
            if(validate(this) == false)
            {
                showValidate(this);
            }
            else
            {
                $(this).parent().addClass('true-validate');
            }
        })    
    })


    //All input elements (with the matching css classes) in the form
    var input = $('.validate-input .contact-input');


    /*
    *   DESCRIPTION : Validates the forms contents on submission
    *   PARAMETERS  : NA
    *   RETURNS     : bool : true if all checks passed, false otherwise
    */
    $('.validate-form').on('submit',function()
    {
        var check = true;

        for(var i=0; i<input.length; i++)
        {
            if(validate(input[i]) == false)
            {
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });


    /*
    *   DESCRIPTION : Hides the validation styles when an input element has focus
    *   PARAMETERS  : NA
    *   RETURNS     : NA
    */
    $('.validate-form .contact-input').each(function()
    {
        $(this).focus(function()
        {
           hideValidate(this);
           $(this).parent().removeClass('true-validate');
        });
    });


    /*
    *   DESCRIPTION : Checks that the value of the <input> element is not empty, and matches the specified email regex pattern
    *   PARAMETERS  : input : Target <input> element
    *   RETURNS     : bool : false if the input string doesnt match the pattern, or its empty
    */
    function validate (input)
    {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') 
        {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null)
            {
                return false;
            }
        }
        else 
        {
            if($(input).val().trim() == '')
            {
                return false;
            }
        }
    }


    /*
    *   DESCRIPTION : Apply the alert-validate css class to an element
    *   PARAMETERS  : input : Target <input> element
    *   RETURNS     : NA
    */
    function showValidate(input) 
    {
        var thisAlert = $(input).parent();
        $(thisAlert).addClass('alert-validate');
    }


    /*
    *   DESCRIPTION : Removes the alert-validate css class from an element
    *   PARAMETERS  : input : Target <input> element
    *   RETURNS     : NA
    */
    function hideValidate(input) 
    {
        var thisAlert = $(input).parent();
        $(thisAlert).removeClass('alert-validate');
    }



    //On a key down event, update the correspinding char counter for the selected element
    //ORDER OF DOM ELEMENTS MATTER
    $( ".contact-input" ).keydown(function()
    {
        //Get the currently selected <input> element
        let inputElem = $(this);

        //Get the nect element of type <small> (this will hold the max chars data attribute, and display the current chars count)
        let charCounterElem = $(this).parent().next("small")

        updateRemainingChars(inputElem, charCounterElem);
    });


    //On a key up event, update the correspinding char counter for the selected element
    //ORDER OF DOM ELEMENTS MATTER
    $( ".contact-input" ).keyup(function()
    {
        //Get the currently selected <input> element
        let inputElem = $(this);


        //Get the nect element of type <small> (this will hold the max chars data attribute, and display the current chars count)
        let charCounterElem = $(this).parent().next("small")
        updateRemainingChars(inputElem, charCounterElem);
    });


    /*
    * 	DESCRIPTION	: Calculates the remaining chars for the target elements, and updates the display
    *	PARAMETERS	: input : JQuery object representing the input/textarea which triggered this function
    *                 charCounterElement : JQuery object representing the corresponding max char display element
    *	RETURNS		: NA
    */
    function updateRemainingChars(input, charCounterElement)
    {
        let maxChars = charCounterElement.attr("data-maxChars");
        let remainingChars =  parseInt(maxChars) - parseInt(input.val().length);
        if(remainingChars <= 0)
        {
            charCounterElement.text('Chars Remaining: 0')
            charCounterElement.addClass('red-text');
        }
        else
        {
            charCounterElement.text('Chars Remaining: ' + remainingChars);
            charCounterElement.removeClass('red-text');
        }
    }
})
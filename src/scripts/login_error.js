/**
 * author: TeamDash
 * description: Handle the empty inputs. 
 * date: 14/11/20
 * */

// Handle the click on login when one of the input has an empty value.
document.addEventListener('invalid', (function() {
    return function(e) {
        e.preventDefault();
        let inputs = document.querySelectorAll('.input');
        let parent;
        let icon;

        for (let i = 0; i < inputs.length; ++i) {
            parent = getParent(inputs[i]);
            icon = getIcon(parent);

            if (inputs[i].value == "") { 
                error(parent, icon);
                break;
            } else {
                no_error(parent, icon);
            }
        } 
    };
})(), true);

/**
 * Add the class error for the input line and icon of an invalid input.
 * @param: parent | input-section first or second
 * @param: icon
 **/
function error(parent, icon) {
    parent.classList.add('error');
    icon.classList.add('error');
}

/**
 * Remove the class 'error' for the input line and icon of a valid input.
 * @param: parent | input-section first or second
 * @param: icon
 **/
function no_error(parent, icon) {
    parent.classList.remove('error');
    icon.classList.remove('error');
}

/**
 * Get the parent of the invalid input.
 * @param element | invalid input
 * @return parent
 **/
function getParent(element) {
    return element.parentNode.parentNode;
}

/**
 * Get the icon of the invalid input.
 * @param parent | parent of the invalid input
 * @return icon
 * */
function getIcon(parent) {
    return parent.childNodes[1].childNodes[1];
}

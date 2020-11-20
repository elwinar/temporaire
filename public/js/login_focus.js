/**
 * author: TeamDash
 * description: Handle the focus of an input.
 * date: 14/11/20
 **/

/**
 * Add the class 'focus' to the input-section who has the focus.
 **/
function focus() {
    getParent(this).classList.add('focus');
}

/**
 * Remove the class 'focus' to the input-section who hasn't the focus.
 * If it has a value it will not take it off.
 **/
function blur() {   
    if(this.value == "")
        getParent(this).classList.remove('focus');
}       

/**
 * Get the parent of the input who has the focus
 **/
function getParent(element) {
    return element.parentNode.parentNode;
}


const inputs = document.querySelectorAll('.input');
inputs.forEach(input => {
    input.addEventListener('focus', focus);
    input.addEventListener('blur', blur);
});

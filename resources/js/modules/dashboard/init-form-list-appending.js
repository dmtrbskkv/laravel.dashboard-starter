const buttonAddClass = 'form-list-appending__button-add'
const buttonRemoveClass = 'form-list-appending__button-remove'
const rootClass = 'form-list-appending'
const wrapperClass = 'form-list-appending__wrapper'

export function initFormListAppending() {
    document.querySelectorAll('.' + rootClass).forEach((formNodeBox) => {
        formNodeBox.querySelector('.' + buttonAddClass).addEventListener('click', addHandler)

        formNodeBox.querySelectorAll('.' + buttonRemoveClass).forEach((removeButtonNode) => {
            removeButtonNode.addEventListener('click', removeHandler)
        })
    })
}

function addHandler(event) {
    const targetNode = event.target
    const parentNode = targetNode.parentNode

    if (!targetNode) {
        return true
    }

    const clonedNode = parentNode.querySelector('.' + wrapperClass).cloneNode(true)
    clonedNode.value = "";
    clonedNode.querySelector('.' + buttonRemoveClass).addEventListener('click', removeHandler)

    const button = parentNode.querySelector('.' + buttonAddClass)
    parentNode.insertBefore(clonedNode, button)
}

function removeHandler(event) {
    const targetNode = event.target
    const wrapperNode = targetNode.closest('.' + wrapperClass)
    const rootNode = targetNode.closest('.' + rootClass)

    const wrapperNodes = rootNode.querySelectorAll('.' + wrapperClass)
    if (wrapperNodes.length === 1) {
        return true
    }

    wrapperNode.remove()
}
